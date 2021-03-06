<!-- jQuery 2.1.3 -->
<script src="{{ asset('theme/plugins/jQuery/jQuery-2.1.3.min.js') }}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset('theme/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- DATA TABES SCRIPT -->
<script src="{{ asset('theme/plugins/datatables/jquery.dataTables.js') }}" type="text/javascript"></script>
<script src="{{ asset('theme/plugins/datatables/dataTables.bootstrap.js') }}" type="text/javascript"></script>
<!-- SlimScroll -->
<script src="{{ asset('theme/plugins/slimScroll/jquery.slimScroll.min.js') }}" type="text/javascript"></script>
<!-- FastClick -->
<script src='{{ asset('theme/plugins/fastclick/fastclick.min.js') }}'></script>
<!-- AdminLTE App -->
<script src="{{ asset('theme/dist/js/app.min.js') }}" type="text/javascript"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('theme/dist/js/demo.js" type="text/javascript') }}"></script>
<!-- page script -->
<script type="text/javascript">
    $(function () {
        $("#table").dataTable();
        $('#example2').dataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": false,
            "bSort": true,
            "bInfo": true,
            "bAutoWidth": false
        });
    });
</script>