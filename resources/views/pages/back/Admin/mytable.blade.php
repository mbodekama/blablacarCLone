                        @if(!$allTp->isEmpty())
                        <div class=" col-12 alert alert-primary text-center">
                          <h3>LISTE DES TP SOUMIS </h3>
                        </div>

                        <div class="layout-px-spacing">

                            <div class="row layout-top-spacing">
                                
                                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                    <div class="widget-content widget-content-area br-6">
                                        <div class="table-responsive mb-4 mt-4">
                                            <table id="default-ordering" class="table table-hover" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>N°</th>
                                                        <th>Nom Etudiant</th>
                                                        <th>TP</th>
                                                        <th>Date</th>
                                                        <th class="text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($allTp as $tp)
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ getUser($tp->user_id)->name}}</td>
                                                        <td>
                                                            {{ getTpInfo($tp->tp_id)->libelle_tp }}
                                                        </td>
                                                        <td>{{ $tp->date_depot }}</td>
                                                        <td class="text-center">
                                                            @php
                                                               $tab=explode('.', $tp->lien_tp);
                                                               $extension = $tab[1];
                                                               $item =getUser($tp->user_id)->name.'_'.getTpInfo($tp->tp_id)->libelle_tp;
                                                               $mot =array(" ", "'", "-",".");
                                                               $nom = str_replace($mot,'_',$item);
                                                               $title =strtolower($nom.'.'.$extension); 
                                                            @endphp
                                                            <a class="btn btn-primary" id="{{ $tp->id }}" href="{{ $tp->lien_tp }}" download="{{ $title }}">Télécharger 
                                                            </a>
                                                            @if($tp->signale == 0)
                                                                <button class="btn btn-info mb-2 mr-2 rounded-circle notifyMe"
                                                                name="{{ getUser($tp->user_id)->name }}"
                                                                mail ="{{ getUser($tp->user_id)->email }}">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                                                                </button>
                                                            @endif
                                                          <button class="btn btn-danger mb-2 mr-2 sendObsv" data-toggle="modal" data-target="#standardModal"
                                                          name="{{ getUser($tp->user_id)->name }}"
                                                            userId ="{{ $tp->user_id }}">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                                
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

            <script> 
                $(function()
                {

                    //Au click sur notifier un utilisateur

                        $('.notifyMe').click(function() {
                           
                           var userMail = $(this).attr('mail');
                           ajaxSendNotif(userMail);
                        });

                    //Au clic sur Message
                        $('.sendObsv').click(function() { 
                        //Recup id User et affcte to input hiden dans le modal 
                           var userId = $(this).attr('userId');
                           $('#userObsId').val(userId);

                        //Recup userName et affcte to input modal titre 
                           var name = $(this).attr('name');
                           $('#userObsName').text(name);

                           var textObsv = $('#observation').html("Veuillez saisir l'appréciation que vous faite de l'exercice rendu par l'apprenant. Attention ce texte  sera soumis à l'apprenant par email !!! <br><span class='text-danger'> Max : 10 lignes Min : 01 ligne </span>");
                        });

                    //AU Clic de validObsv
                        $('#validObsv').click(function() {  
                            var userObsId = $('#userObsId').val();
                           var textObsv = $('#observation').text();
                           ajaxSendObsv(userObsId,textObsv);
                        });
                    //Ajax envoie de notification  
                        function ajaxSendNotif(userMail)
                        {

                            $.ajax({
                                url:'sendNotif',
                                method:'GET',
                                data:{userMail:userMail},
                                dataType:'json',
                                success:function(data,mytext){
                                    Snackbar.show({
                                        text: 'Accusé de réception envoyé' ,
                                        actionTextColor: '#fff',
                                        backgroundColor: '#3bc305'
                                        });
                                            
                                },
                                error:function(){

                                Swal.fire('Impossible ,Probleme de connexion');
                                }
                            });
                            }

                    //Ajax envoie de observation  
                        function ajaxSendObsv(userId,textObsv)
                        {
                            $.ajax({
                                url:'sendObserv',
                                method:'GET',
                                data:{userId:userId,textObsv:textObsv},
                                dataType:'text',
                                success:function(data){
                                    Snackbar.show({
                                        text: 'Observation soumis avec succès ' ,
                                        actionTextColor: '#fff',
                                        backgroundColor: '#3bc305'
                                        });
                                            
                                },
                                error:function(){

                                Swal.fire('Impossible ,Probleme de connexion');
                                }
                            });
                            }


                    $('#default-ordering').DataTable( {
                                "oLanguage": {
                                    "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                                    "sInfo": "Showing page _PAGE_ of _PAGES_",
                                    "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                                    "sSearchPlaceholder": "Search...",
                                   "sLengthMenu": "Results :  _MENU_",
                                },
                                "order": [[ 3, "desc" ]],
                                "stripeClasses": [],
                                "lengthMenu": [7, 10, 20, 50],
                                "pageLength": 7,
                                drawCallback: function () { $('.dataTables_paginate > .pagination').addClass(' pagination-style-13 pagination-bordered mb-5'); }
                            } );
                } );
            </script>
                        @else
                         <div class=" col-12 alert alert-primary text-center">
                          <h3>AUCUN TP SOUMIS POUR L'INSTANT </h3>
                        </div>
                        @endif




                                    <!-- Modal -->
                                    <div class="modal fade modal-notification" id="standardModal" tabindex="-1" role="dialog" aria-labelledby="standardModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document" id="standardModalLabel">
                                        <div class="modal-content">
                                          <div class="modal-body text-center">
                                              <div class="icon-content">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                                              </div>
                                              <div class="modal-text" >
                                                    <h5>OBSERVATION POUR 
                                                    <span id="userObsName" ></span>
                                                    <input type="hidden" id="userObsId">
                                                    </h5>
                                                    <p contenteditable="" id="observation">
                                                      Veuillez saisir l'appréciation que vous faite de l'exercice rendu par l'apprenant. <br><span class="text-danger"> Max : 10 lignes Min : 01 ligne </span>
                                                    </p>
                                              </div>
                                           </div>
                                          <div class="modal-footer justify-content-between">
                                            <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Annuler</button>
                                            <button type="button" class="btn btn-primary" id="validObsv">Envoyer</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>