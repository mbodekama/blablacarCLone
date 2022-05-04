<div id="mytoken">
@csrf
</div>
<span class="d-none" id="loader">
 <div class="d-flex justify-content-between mx-5 mt-5 mb-5"><div class="spinner-border text-success align-self-center ">Loading...</div><div class="spinner-border text-danger align-self-center">Loading...</div><div class="spinner-border text-warning align-self-center  ">Loading...</div><div class="spinner-border text-primary align-self-center  ">Loading...</div></div> 
</span>

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assetAdmin/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="assetAdmin/bootstrap/js/popper.min.js"></script>
    <script src="assetAdmin/bootstrap/js/bootstrap.min.js"></script>
    <script src="assetAdmin/plugins/perfect-scrollbar/perfect-scrollbar.min.js">
    </script>
        <!-- BEGIN PAGE LEVEL SCRIPTS -->

    <!-- END PAGE LEVEL SCRIPTS -->
    <script src="assetAdmin/assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="assetAdmin/assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="assetAdmin/plugins/apex/apexcharts.min.js"></script>
    <script src="assetAdmin/assets/js/dashboard/dash_2.js"></script>
   <!-- BEGIN THEME GLOBAL STYLE -->
    <script src="assetAdmin/assets/js/scrollspyNav.js"></script>
    <script src="assetAdmin/plugins/sweetalerts/sweetalert2.min.js"></script>
    <script src="assetAdmin/plugins/sweetalerts/custom-sweetalert.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="assetAdmin/assets/js/authentication/form-1.js"></script>
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="assetAdmin/plugins/table/datatable/datatables.js"></script>

    <!-- =============================================== -->
     <!--    MES PROPRES SCRIPTS-->
    <!-- ===============================================-->
       <!--====== Route Js ======-->
    <script src="{{ asset('assetAdmin/assets/js/js_route.js') }}"> 
    </script>


    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="assetAdmin/plugins/flatpickr/flatpickr.js"></script>
    <script src="assetAdmin/plugins/noUiSlider/nouislider.min.js"></script>

    <script src="assetAdmin/plugins/flatpickr/custom-flatpickr.js"></script>
    <script src="assetAdmin/plugins/noUiSlider/custom-nouiSlider.js"></script>
    <script src="assetAdmin/plugins/bootstrap-range-Slider/bootstrap-rangeSlider.js"></script>
    <script src="assetAdmin/plugins/file-upload/file-upload-with-preview.min.js"></script>
    <script src="assetAdmin/plugins/blockui/jquery.blockUI.min.js"></script>
    <script src="assetAdmin/plugins/highlight/highlight.pack.js"></script>
  <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
    <script src="assetAdmin/plugins/table/datatable/datatables.js"></script>
    <!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
    <script src="assetAdmin/plugins/table/datatable/button-ext/dataTables.buttons.min.js"></script>
    <script src="assetAdmin/plugins/table/datatable/button-ext/jszip.min.js"></script>    
    <script src="assetAdmin/plugins/table/datatable/button-ext/buttons.html5.min.js"></script>
    <script src="assetAdmin/plugins/table/datatable/button-ext/buttons.print.min.js"></script>
    
    <!-- toastr -->
    <script src="assetAdmin/plugins/notification/snackbar/snackbar.min.js"></script>

    <script src="assetAdmin/assets/js/components/notification/custom-snackbar.js"></script>



    <script>
        // Get the Toast button
        var toastButton = document.getElementById("toast-btn");
        // Get the Toast element
        var toastElement = document.getElementsByClassName("toast")[0];

        toastButton.onclick = function() {
            $('.toast').toast('show');
        }


    </script>


    <script>
        $('#html5-extension').DataTable( {
            dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5"i><"col-md-7"p>>> >',
            buttons: {
                buttons: [
                    { extend: 'copy', className: 'btn' },
                    { extend: 'csv', className: 'btn' },
                    { extend: 'excel', className: 'btn' },
                    { extend: 'print', className: 'btn' }
                ]
            },
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7 
        } );
    </script>
    <!-- END PAGE LEVEL CUSTOM SCRIPTS -->

                        <script type="text/javascript">
                          var f2 = flatpickr(document.getElementById('basicFlatpickr'),{
                           
                            dateFormat: "d-m-Y",
                          });
                         var f3 = flatpickr(document.getElementById('basicFlatpickr2'),{
                           
                            dateFormat: "d-m-Y",
                          });
                         var f4 = flatpickr(document.getElementById('basicFlatpickr3'),{
                           
                            dateFormat: "d-m-Y",
                          });
                         var f5 = flatpickr(document.getElementById('basicFlatpickr4'),{
                           
                            dateFormat: "d-m-Y",
                          });
                        </script>
</body>

</html>
