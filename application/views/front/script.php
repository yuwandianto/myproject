

        <!-- javascript -->
        <script src="<?= base_url('assets/templates/front/');?>js/jquery.min.js"></script>
        <script src="<?= base_url('assets/templates/front/');?>js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url('assets/templates/front/');?>js/jquery.easing.min.js"></script>
        <script src="<?= base_url('assets/templates/front/');?>js/scrollspy.min.js"></script>
        <!-- <script type="text/javascript" src="//cdn.datatables.net/v/bs4/dt-1.10.18/b-1.5.6/b-colvis-1.5.6/b-flash-1.5.6/b-html5-1.5.6/b-print-1.5.6/r-2.2.2/datatables.min.js"></script> -->
        <!-- custom js -->
        <script src="<?= base_url('assets/templates/front/');?>js/custom.js?v=1.1"></script>
        <!-- Start of kip-kuliah Zendesk Widget script -->
        <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=23d014a9-7387-45c1-9931-60202f091520"> </script>
        <!-- End of kip-kuliah Zendesk Widget script -->
        <script>
    $(document).ready(function (){
        $(document).on('click', '#getInformasi', function(e){
            e.preventDefault();
            var url = $(this).data('url');
            $('.informasi-modal').html('');
            $('#modal-loader').show();
            $.ajax({
                url: url,
                type: 'GET',
                dataType: 'html'
            })
            .done(function(data){
                // console.log(data);  
                $('.informasi-modal').html('');
                $('.informasi-modal').html(data);
                // load response 
                $('#modal-loader').hide();
                // hide ajax loader   
                })
            .fail(function(){
                $('#modal-loader').hide();
            });
        });

        var table = $('#table-pt').DataTable({
            "responsive": true,
            "columnDefs": [
                {
                  "searchable": false,
                  "orderable": false,
                  "targets": "nosort"
                },
                {
                  "targets": 3,
                  "className": "text-center pr-1",
                },
                {
                  "targets": 4,
                  "className": "text-center pr-1",
                }
            ],
            "order": [[ 1, 'asc' ]],
            "processing": true,
            "serverSide": true,
            "searchDelay": 1000,
            "ajax":{
                "url": "prodijson",
                "dataType": "json",
                "type": "POST",
                "data":{
                    _token: "KNb1CzFIlANpmID7vQ5bBgu4NaV7Ab8q3mdCyBJg"
                }
            },
            "columns": [
                {
                  "data": "no" },
                {
                  "data": "nama_pt" },
                {
                  "data": "nama_prodi" },
                {
                  "data": "jenjang" },
                {
                  "data": "akreditasi_prodi" },
                {
                  "data": "options" }
            ]
        });

        var debounce = new $.fn.dataTable.Debounce(table);
    });

    $.fn.dataTable.Debounce = function ( table, options ) {
        var tableId = table.settings()[0].sTableId;
        $('.dataTables_filter input[aria-controls="' + tableId + '"]') // select the correct input field
            .unbind() // Unbind previous default bindings
            .bind('input', (delay(function (e) { // Bind our desired behavior
                table.search($(this).val()).draw();
                return;
            }, 1000))); // Set delay in milliseconds
    }
    
    function delay(callback, ms) {
        var timer = 0;
        return function () {
            var context = this, args = arguments;
            clearTimeout(timer);
            timer = setTimeout(function () {
                callback.apply(context, args);
            }, ms || 0);
        };
    }

    function getProfil(prodiId, pt) {
        $.ajax({
            url: "/prodi/" + prodiId + "-" + pt,
            type: "GET",
            dataType: "html",
            success: function (data) {
                $("#tempat-profil").html(data);
                $('html, body').animate({
                    scrollTop: $('#tempat-profil').offset().top 
                }, 1500);
            }
        });
    }
</script>
    </body>
</html>
