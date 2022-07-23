<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> S I P A K </title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{url('public/plugins')}}/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="{{url('public/dist')}}/css/adminlte.min.css">

  <link rel="stylesheet" href="{{url('public')}}/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

  <link rel="stylesheet" href="{{url('public')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{url('public')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{url('public')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <x-template.header />
  <x-template.sidebar :menu="$menu" header="{{ $header }}"/>
  <div class="content-wrapper">
    <div class="content">
      <div class="container-fluid pt-3 col-md-10">
        {{ $slot }}
      </div>
    </div>
  </div>
  <x-template.control-sidebar />
  <x-template.footer />
</div>
<script src="{{url('public/plugins')}}/jquery/jquery.min.js"></script>
<script src="{{url('public/plugins')}}/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{url('public/dist')}}/js/adminlte.min.js"></script>

<script src="{{url('public')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{url('public')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{url('public')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{url('public')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{url('public')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{url('public')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{url('public')}}/plugins/jszip/jszip.min.js"></script>
<script src="{{url('public')}}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{url('public')}}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{url('public')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{url('public')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{url('public')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script src="{{url('public')}}/plugins/sweetalert2/sweetalert2.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
