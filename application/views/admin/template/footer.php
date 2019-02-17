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
<script src="<?=base_url("assets/admin/js/jquery-3.1.1.min.js")?>"></script>
<script src="<?=base_url("assets/admin/js/popper.min.js")?>"></script>
<script src="<?=base_url("assets/admin/js/bootstrap.min.js")?>"></script>
<script src="<?=base_url("assets/admin/js/plugins/metisMenu/jquery.metisMenu.js")?>"></script>
<script src="<?=base_url("assets/admin/js/plugins/slimscroll/jquery.slimscroll.min.js")?>"></script>
<script src="<?=base_url("assets/admin/js/plugins/dataTables/datatables.min.js")?>"></script>
<script src="<?=base_url("assets/admin/js/plugins/dataTables/dataTables.bootstrap4.min.js")?>"></script>

<!-- Custom and plugin javascript -->
<script src="<?=base_url("assets/admin/js/inspinia.js")?>"></script>
<script src="<?=base_url("assets/admin/js/plugins/pace/pace.min.js")?>"></script>

<!-- Custom and plugin javascript -->
<script src="<?=base_url("assets/admin/js/inspinia.js")?>"></script>
    <script src="<?=base_url("assets/admin/js/plugins/pace/pace.min.js")?>"></script>

    <!-- iCheck -->
    <script src="<?=base_url("assets/admin/js/plugins/iCheck/icheck.min.js")?>"></script>

    <!-- SUMMERNOTE -->
    <script src="<?=base_url("assets/admin/js/plugins/summernote/summernote-bs4.js")?>"></script>

     <!-- Jasny -->
     <script src="<?=base_url("assets/admin/js/plugins/jasny/jasny-bootstrap.min.js")?>"></script>

<!-- DROPZONE -->
<script src="<?=base_url("assets/admin/js/plugins/dropzone/dropzone.js")?>"></script>

<!-- CodeMirror -->
<script src="<?=base_url("assets/admin/js/plugins/codemirror/codemirror.js")?>"></script>
<script src="<?=base_url("assets/admin/js/plugins/codemirror/mode/xml/xml.js")?>"></script>


<!-- Page-Level Scripts -->
<script>
        Dropzone.options.dropzoneForm = {
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 2, // MB
            dictDefaultMessage: "<strong>Drop files here or click to upload. </strong>"
        };
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

            $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
            });

            $('.summernote').summernote({height:300});

            var editor_one = CodeMirror.fromTextArea(document.getElementById("code1"), {
                lineNumbers: true,
                matchBrackets: true
            });

            var editor_two = CodeMirror.fromTextArea(document.getElementById("code2"), {
                lineNumbers: true,
                matchBrackets: true
            });

            var editor_two = CodeMirror.fromTextArea(document.getElementById("code3"), {
                lineNumbers: true,
                matchBrackets: true
            });

            var editor_two = CodeMirror.fromTextArea(document.getElementById("code4"), {
                lineNumbers: true,
                matchBrackets: true
            });


            $('.custom-file-input').on('change', function() {
                let fileName = $(this).val().split('\\').pop();
                $(this).next('.custom-file-label').addClass("selected").html(fileName);
            });

        });
    </script>  

</body>

</html>
