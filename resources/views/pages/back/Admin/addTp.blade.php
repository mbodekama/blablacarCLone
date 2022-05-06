
<div class="card component-card_3">
    <div class="card-body">

<div class="container alert alert-primary h3 text-center"> Ajout de TP pour les apprenant </div>
<div class="col-lg-12 col-12 layout-spacing" style="margin-top: 30px;">
		<form class="needs-validation" id="addTpForm">
			@csrf


		    								<div class="form-row">

                                                <div class="col-md-4 col-sm-12 mb-4">
                                                    <label class="text-primary" for="#formation">
                                                                FORMATIONS
                                                    </label>
                                                    <select class="form-control" id="formation" name="formation">
                                                        <option value="choix">
                                                            -- choisir --
                                                        </option>
                                                        @foreach($formations as $form)
                                                            <option value="{{ $form->id }}">{{ $form->libelle }}
                                                            </option>
                                                        @endforeach
                                                        
                                                    </select>
                                                </div>

                                                    <div class="col-md-4 col-sm-12 mb-4">
                                                      <label class="text-primary">
                                                        MODULE DE FORMATION
                                                      </label>
                                                        <select class="form-control" id="module" name="module_id">
                                                            <option>
                                                                --  module --
                                                            </option>                                                            
                                                        </select>
                                                    </div>

		        <div class="col-md-4 mb-4">
		            <label for="validationCustom01">Titre EXercice</label>
		            <input type="text" class="form-control" id="libelle" placeholder="libelle" value="" required name="libelle_tp">
		            <div class="valid-feedback">
		                Good
		            </div>
		        </div>
		        <div class="col-md-4 mb-4">
		            <label for="validationCustom01">Libelle du TP</label>
		            <input type="text" class="form-control" id="description" placeholder="description" value="" required name="description_tp">
		            <div class="valid-feedback">
		                Good
		            </div>
		        </div>
 
		        <div class="col-md-4 mb-4">
		            <label for="validationCustom01">Date de mise en ligne</label>
		            <input type="date" class="form-control" id=" "  value="{{ date('d/m/Y') }}" required name="date_tp">
		            <div class="valid-feedback">
		                Good
		            </div>
		        </div>
                <div class="col-md-4 mb-4">
                    <label for="validationCustom01">Date de dépôt</label>
                    <input type="date" class="form-control" id=" "  value="{{ date('d/m/Y') }}" required name="date_fin">
                    <div class="valid-feedback">
                        Good
                    </div>
                </div>
                              
		         
		    </div>
 
 
                           					<div class="d-flex justify-content-around col-12"> 
                                              <button class="btn btn-primary mr-4 " id="sendTp" type="button" >Envoyer
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                                              </button>
                                            </div>  
		</form>
</div>

    </div>
 </div>

 
 

<script type="text/javascript">
    $(function()
    {

 
        //Au choix de la formation 
            $('#formation').change(function()
            {
                var formation = $('#formation').val();
                $('#module').html('<option value="choix"> --  module --</option>');
                
                if (formation != 'choix') 
                {
                ajaxRecupMod(formation);        
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

     
    })
</script>


<script type="text/javascript">
    $(function()
    {


        //Au clic de envoyer
            $('#sendTp').click(function(event)
            {
                event.preventDefault();
                let form  = $('#addTpForm');
                ajaxSendMod(form);  
            })
  

        //Recup module 
        function ajaxSendMod(form)
        {
            $.ajax({
                url:'saveTp',
                method:'POST',
                data:form.serialize(),
                dataType:'json',
                success:function(data){
                         Swal.fire('success'); 
                         $("#conteneur").load('/addTp');   
                },
                error:function(){

                Swal.fire('Impossible ,Probleme de connexion');
                }
            });
            }
 
    })
</script>





