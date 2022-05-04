

@if(!$formations->isEmpty())
      <div class="col-lg-12 col-12 layout-spacing" style="margin-top: 30px;">
                        <div id="card_9" class="col-lg-12 col-md-12 col-sm-12 col-xl-12 layout-spacing d-flex flex-wrap">                                                       
                                  
                                  @foreach($formations as $formation)
                                        <div class="card component-card_9 col-lg-4 col-md-4 col-sm-6  pt-3">
                                 
                                            <img src="{{ $formation->lien }}" class="card-img-top" alt="widget-card-2">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $formation->libelle }}</h5>
                                                <p class="card-text">{{ $formation->description }}</p>

                                                <div class="meta-info">

                                                    <div class="meta-action d-flex justify-content-around">
                                                        <div class="meta-likes">
                                                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg> <span id={{$formation->id  }}>
                                                              {{ getModule($formation->id)->count() }}
                                                              
                                                            </span> modules
                                                        </div>

                                                        <div class="meta-view">
                                                            
                                                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>{{ $formation->date }} 
                                                        </div>
                                                    </div>
                                           

                                                </div>


                                                <div class="text-center mt-2">
                                                  <a class="btn btn-primary mr-4 addCmdClt" title="COVID" id="{{ $formation->id }}" href="#" >CONSULTER {{--                         <a class="btn btn-primary mr-4 addCmdClt" title="COVID" id="{{ $formation->id }}" href="{{ $formation->lien }}" download="{{ $formation->libelle }}">                           
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg> --}}
                                                  </a>
                                                </div>

                                            </div>
                                        </div>

                                  @endforeach
                              
                          
                        </div>

      </div>
@else
<div class="container alert alert-warning h3 text-center"> Aucunes formation</div>
@endif

    <script src="assetAdmin/assets/js/libs/jquery-3.1.1.min.js"></script>


              <script type="text/javascript">
                $('.addCmdClt').click(function()
                  {
                    var id_form = $(this).attr('id');
                    var loader = $('#loader').html();
                    loader+= loader;
                    var input = '#mytoken input[name=_token]';
                    var token = $(input).attr('value');
                    $("#conteneur").html(loader);
                    $("#conteneur").load('/modulForm',{id:id_form,_token:token});
                                    // Swal.fire({
                                    //       title: 'Félicitation',
                                    //       text: "MAAT ACADEMY vous souhaite une bonne formation.",
                                    //       confirmButtonColor: '#3085d6',
                                    //       confirmButtonText: 'Retour'
                                    //     });
                    })
                        
              </script>