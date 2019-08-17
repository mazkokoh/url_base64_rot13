<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Data Siswa</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <style type="text/css">
          
            @media screen and (max-width:480px) {
            .hidden-hp {display:none}
            
            }
            @media screen and (min-width:480px) {
            .show-hp {display:none}
            
            }
        </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php $this->load->view('header') ?>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
    <?php 
        if ($type=='encrypted') {
      $sidebar='daftar_siswa_enc';
    } else {
      $sidebar='daftar_siswa_dec';
    }
    $this->load->view('sidebar',array('page' => $sidebar )); ?>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Mahasiswa
        <small>Data Mahasiswa</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Data Mahasiswa</a></li>
        <li class="active">Encrypted</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
          <div class="box bg-blue-gradient box-solid hidden-hp">
            <div class="box-header">
              <h3 class="box-title">Data Semua Mahasiswa</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered ">
                <thead class="bg-blue-gradient">
                <tr>
                  <th>Nama</th>
                  <th>Jurusan</th>
                  <th>Angkatan</th>
                  <th>Option</th>
                </tr>
                </thead>
                <tbody class="bg-blue">
                  <?php 
                  if ($datamhs->num_rows()==0) {
                    # code...
                    echo '<td  colspan="4" class="text-center">Tidak ada data</td>';
                  } else {
                    foreach ($datamhs->result() as $data ) {
                          $detail=base_url().'mahasiswa/detail?id=';
                          if ($type=='encrypted') {
                           $id_mahasiswa=str_rot13(base64_encode($data->id));
                           $delete=base_url().'mahasiswa/del/enc/';
                           $tipe='&type=TERENKRIPSI';
                          } else {
                           $sidebar='daftar_siswa_dec';
                           $delete=base_url().'mahasiswa/del/dec/';
                           $id_mahasiswa=$data->id;
                           $tipe='&type=TIDAK_TERENKRIPSI';

                          }
                    
                  ?>
                <tr>
                  <td><?php echo $data->nama; ?></td>
                  <td><?php echo $data->jurusan; ?></td>
                  <td><?php echo $data->angkatan; ?></td>
                  <td>
                    <a href="<?php echo $detail.$id_mahasiswa.$tipe; ?>" class="btn bg-green-gradient"><span class="fa fa-ediy"> show detail</span></a>
                    <a href="<?php echo $delete.$id_mahasiswa; ?>" class="btn bg-red-gradient"><span class="fa fa-trash"> Delete </span>  </a> </td>
                </tr>
                <?php }} ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>          
          <div class="box bg-blue-gradient box-solid show-hp">
            <div class="box-header">
              <h3 class="box-title">Warning</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div>
                <img src="<?php echo base_url(); ?>assets/img/landscape.svg" style="height:40%;width: 40%;margin:auto;"> <b>Please Rotate Your Device</b>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php $this->load->view('footer'); ?>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>/assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>/assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>/assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>/assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>/assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>/assets/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
