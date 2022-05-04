
<div class="container">
@if(!$modules->isEmpty())

<div>
	<button class="btn btn-danger refresh" id="{{ $formation->id }}">
		Actualiser
	</button>
</div>
<div id="toggleAccordion">
	@foreach($modules as $module)
    <div class="card">
        <div class="card-header" id="headingTwo{{ $module->id }}">
            <section class="mb-0 mt-0">
                <div role="menu" class="@if($loop->first)  @else collapsed @endif" data-toggle="collapse" data-target="#defaultAccordionOne{{ $module->id }}" aria-expanded="@if($loop->first) false @else true @endif" aria-controls="defaultAccordionOne{{ $module->id }}"> 
                  {{ $formation->libelle }}
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                   {{  $module->libelle_module }}
                  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-down"><polyline points="7 13 12 18 17 13"></polyline><polyline points="7 6 12 11 17 6"></polyline></svg></div>
                  
                </div>
            </section>
        </div>

        <div id="defaultAccordionOne{{ $module->id }}" class=" @if($loop->first) collapse show @else collapse @endif" aria-labelledby="headingTwo{{ $module->id }}" data-parent="#toggleAccordion">
            <div class="card-body">
            
              @include('pages/back/User/fileModul')

            </div>
        </div>
    </div>
	@endforeach


</div>
@else
<div class="container alert alert-warning h3 text-center"> Aucun module pour cette formation</div>
@endif

</div>

    <script src="assetAdmin/assets/js/libs/jquery-3.1.1.min.js"></script>


              <script type="text/javascript">
                $('.refresh').click(function()
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