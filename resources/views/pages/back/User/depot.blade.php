        <div class="col-lg-12 col-12 layout-spacing" style="margin-top: 30px;">                                          
                                        <form id="formaddCmdClt"  enctype="multipart/form-data" action="uploadExo" method="post">
                                            @csrf
                                            
                                                <fieldset>
                                                <div class="form-row mb-4 justify-content-center">
                                                <div class="col-md-4 col-sm-12 mb-4">
                                                    <label class="text-primary" for="#formation">
                                                                FORMATIONS
                                                    </label>
                                                    <select class="form-control" id="formation" name="formation">
                                                        <option value="choix">
                                                            -- choisir --
                                                        </option>
                                                        @foreach($forms as $form)
                                                            <option value="{{ $form->id }}">{{ $form->libelle }}
                                                            </option>
                                                        @endforeach
                                                        
                                                    </select>
                                                </div>

                                                    <div class="col-md-4 col-sm-12 mb-4">
                                                      <label class="text-primary">
                                                        MODULE DE FORMATION
                                                      </label>
                                                        <select class="form-control" id="module" name="module">
                                                            <option>
                                                                --  module --
                                                            </option>                                                            
                                                        </select>
                                                    </div>

                                                    <div class="col-md-4 col-sm-12 mb-4">
                                                      <label class="text-primary">
                                                        EXERCICE CONCERNE 
                                                      </label>
                                                        <select class="form-control" id="exercice" name="exercice">
                                                            <option>
                                                                --  tp traité --
                                                            </option>                                                            
                                                        </select>
                                                    </div>
                                         
                                                </div>

                                            <div id="fuSingleFile" class="col-lg-12 layout-spacing">
                                                <div class="statbox widget box box-shadow">
                                                    <div class="widget-header">
                                                        <div class="row">
                                                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                                <h4>Dépot de fichier </h4>
                                                            </div>      
                                                        </div>
                                                    </div>
                                                    <div class="widget-content widget-content-area">
                                                        <div class="custom-file-container" data-upload-id="myFirstImage">
                                                            <label> <a href="javascript:void(0)" class="custom-file-container__image-clear btn btn-primary d-none" title="Clear Image">Rénitialiser</a></label>
                                                            <label class="custom-file-container__custom-file" >
                                                                <input type="file" class="custom-file-container__custom-file__custom-file-input" name="dossier" >
                                                                <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                                                <span class="custom-file-container__custom-file__custom-file-control"></span>
                                                            </label>
                                                            <div class="custom-file-container__image-preview"></div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="d-flex justify-content-around col-12"> 
                                              <button class="btn btn-primary mr-4 " id="sendForm" type="submit" >Envoyer
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                                              </button>
                                            </div>  
                                             </fieldset>
                                        </form>                        
        </div>







<script type="text/javascript">
    
var firstUpload = new FileUploadWithPreview('myFirstImage')
</script>
<script type="text/javascript">
    $(function()
    {


        //Au clic de envoyer
            $('#sendForm').click(function(event)
            {
                event.preventDefault();

                if ($('#formation').val() !='choix') 
                {   
                    $('#formation').attr('class','form-control is-valid');

                    if ($('#module').val() !='choix') 
                    {
                        $('#module').attr('class','form-control is-valid');
                        if ($('#exercice').val() !='choix') 
                            {
                                $('#exercice').attr('class','form-control is-valid');

                               //Soumission du formulaire 
                               $('#formaddCmdClt').submit();
                            }
                            else
                            {
                              $('#exercice').attr('class','form-control is-invalid');
                              Swal.fire('Attention le champ exercice vides');
                            }  
                    }
                    else
                    {
                        $('#module').attr('class','form-control is-invalid');
                        Swal.fire('Attention le champ module vides');
                    }  
                }
                else
                {
                $('#formation').attr('class','form-control is-invalid');
                Swal.fire('Attention le champ formation vides');
                }
            })
        //Au choix de la formation 
            $('#formation').change(function()
            {
                var formation = $('#formation').val();
                $('#module').html('<option value="choix"> --  module --</option>');
                $('#exercice').html('<option value="choix">--  tp traité --</option>');
                if (formation != 'choix') 
                {
                ajaxRecupMod(formation);        
                }

            })

        //Au choix du module 
            $('#module').change(function()
            {
                var mymodule = $('#module').val();
                $('#exercice').html('<option value="choix">--  tp traité --</option>');

                if (mymodule != 'choix') 
                {
                ajaxRecupExo(mymodule);        
                }

            })

        //Recup module 
        function ajaxRecupMod(formation)
        {
            $.ajax({
                url:'getFormModule',
                method:'GET',
                data:{idForm:formation},
                dataType:'html',
                success:function(data){
                     $('#module').html(data);
                            
                },
                error:function(){

                Swal.fire('Impossible ,Probleme de connexion');
                }
            });
            }

        //Recup TP  
        function ajaxRecupExo(mymodule)
        {
            $.ajax({
                url:'getModTp',
                method:'GET',
                data:{idMod:mymodule},
                dataType:'html',
                success:function(data){
                     $('#exercice').html(data);
                            
                },
                error:function(){

                Swal.fire('Impossible ,Probleme de connexion');
                }
            });
            }
    })
</script>





