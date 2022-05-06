<div class="container alert alert-primary h3 text-center"> Ajout formation</div>
<div class="col-lg-12 col-12 layout-spacing" style="margin-top: 30px;">
		<form class="needs-validation" enctype="multipart/form-data"  action="saveForm" method="POST">
			@csrf
		    <div class="form-row">
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
		         
		    </div>
 
 
                           					<div class="d-flex justify-content-around col-12"> 
                                              <button class="btn btn-primary mr-4 " id="sendForm" type="submit" >Envoyer
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                                              </button>
                                            </div>  
		</form>
	{{-- </div> --}}
</div>


<script type="text/javascript">
    
var firstUpload = new FileUploadWithPreview('myFirstImage')
</script>







