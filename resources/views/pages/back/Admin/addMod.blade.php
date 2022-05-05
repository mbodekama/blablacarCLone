<div class="card component-card_3">
    <div class="card-body">

<div class="container alert alert-primary h3 text-center"> Ajout Module a une formation</div>
<div class="col-lg-12 col-12 layout-spacing" style="margin-top: 30px;">

		<form class="needs-validation"   id="addModFOrm" action="saveForm" method="POST">
			@csrf
		    <div class="form-row">
		        <div class="col-md-4 mb-4">
		            <label for="validationCustom01">LIste de formation</label>

					<select class="form-control  basic" name="formations_id">
						@foreach($formations as $formation)
					    	<option value="{{ $formation->id }}">{{ $formation->libelle }}</option>
					    @endforeach
					</select>
		        </div>
		        <div class="col-md-4 mb-4">
		            <label for="validationCustom01">Libelle</label>
		            <input type="text" class="form-control" id="libelle_module" placeholder="libelle_module" value="" required name="libelle_module">
		            <div class="valid-feedback">
		                Good
		            </div>
		        </div>

		        <div class="col-md-3 mb-4">
		            <label for="validationCustom01">Date</label>
		            <input type="date" class="form-control" id="date" placeholder="date" value="" required name="date">
		            <div class="valid-feedback">
		                Good
		            </div>
		        </div>
		        <div class="col-md-1 mb-4">
		            <label for="validationCustom01">Status</label>
		            <input type="number" max="1" min="0" class="form-control" id="status" placeholder="1" value="1" required name="status">
		            <div class="valid-feedback">
		                Good
		            </div>
		        </div>

		         
		    </div>
 
 
                           					<div class="d-flex justify-content-around col-12"> 
                                              <button class="btn btn-primary mr-4 " id="sendForm" type="button" >Envoyer
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                                              </button>
                                            </div>  
		</form>
	{{-- </div> --}}
</div>     
    </div>
 </div>



<div class="card component-card_3">
    <div class="card-body">

<div class="container alert alert-primary h3 text-center"> Ajout Ressources aux modules </div>
<div class="col-lg-12 col-12 layout-spacing" style="margin-top: 30px;">
		<form class="needs-validation" enctype="multipart/form-data"  action="saveRessource" method="POST">
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
		            <label for="validationCustom01">Libelle</label>
		            <input type="text" class="form-control" id="libelle" placeholder="libelle" value="" required name="libelle">
		            <div class="valid-feedback">
		                Good
		            </div>
		        </div>
		        <div class="col-md-4 mb-4">
		            <label for="validationCustom01">description</label>
		            <input type="text" class="form-control" id="description" placeholder="description" value="" required name="description">
		            <div class="valid-feedback">
		                Good
		            </div>
		        </div>
		        <div class="col-md-4 mb-4">
		            <label for="validationCustom01">lien</label>
		            <input type="text" class="form-control" id="lien" placeholder="lien" value="" required name="lien">
		            <div class="valid-feedback">
		                Good
		            </div>
		        </div>
		        <div class="col-md-4 mb-4">
		            <label for="validationCustom01">Date</label>
		            <input type="date" class="form-control" id="date" placeholder="date" value="" required name="date">
		            <div class="valid-feedback">
		                Good
		            </div>
		        </div>
                                            <div id="fuSingleFile" class="col-lg-12 layout-spacing">
                                                <div class="statbox widget box box-shadow">
                                                    <div class="widget-header">
                                                        <div class="row">
                                                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                                <h4>Image </h4>
                                                            </div>      
                                                        </div>
                                                    </div>
                                                    <div class="widget-content widget-content-area">
                                                        <div class="custom-file-container" data-upload-id="myFirstImage">
                                                            <label> <a href="javascript:void(0)" class="custom-file-container__image-clear btn btn-primary d-none" title="Clear Image">Rénitialiser</a></label>
                                                            <label class="custom-file-container__custom-file" >
                                                                <input type="file" class="custom-file-container__custom-file__custom-file-input" name="image_illustration" >
                                                                <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                                                <span class="custom-file-container__custom-file__custom-file-control"></span>
                                                            </label>
                                                            <div class="custom-file-container__image-preview"></div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
		         
		    </div>
 
 
                           					<div class="d-flex justify-content-around col-12"> 
                                              <button class="btn btn-primary mr-4 " id="" type="submit" >Envoyer
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                                              </button>
                                            </div>  
		</form>
	{{-- </div> --}}
</div>

    </div>
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
                let form  = $('#addModFOrm');
                ajaxSendMod(form);  
            })
  

        //Recup module 
        function ajaxSendMod(form)
        {
            $.ajax({
                url:'saveMod',
                method:'POST',
                data:form.serialize(),
                dataType:'html',
                success:function(data){
                    
                         Swal.fire('success');   
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







