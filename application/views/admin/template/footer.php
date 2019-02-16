<div class="footer">
            <div class="pull-right">
                <strong></strong>
            </div>
            <div>
                <strong>Copyright</strong> Lembaga Penelitian dan Pengembangan Universitas Sriwijaya &copy; 2019
            </div>
        </div>

    </div>
</div>
<!-- Mainly scripts -->
<script src=<?=base_url("assets/admin/js/jquery-3.1.1.min.js")?>></script>
<script src=<?=base_url("assets/admin/js/popper.min.js")?>></script>
<script src=<?=base_url("assets/admin/js/bootstrap.min.js")?>></script>
<script src=<?=base_url("assets/admin/js/plugins/metisMenu/jquery.metisMenu.js")?>></script>
<script src=<?=base_url("assets/admin/js/plugins/slimscroll/jquery.slimscroll.min.js")?>></script>
<script src=<?=base_url("assets/admin/js/plugins/dataTables/datatables.min.js")?>></script>
<script src=<?=base_url("assets/admin/js/plugins/dataTables/dataTables.bootstrap4.min.js")?>></script>

<!-- Custom and plugin javascript -->
<script src=<?=base_url("assets/admin/js/inspinia.js")?>></script>
<script src=<?=base_url("assets/admin/js/plugins/pace/pace.min.js")?>></script>


<!-- Page-Level Scripts -->
<script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

        });

    </script>  

</body>

</html>