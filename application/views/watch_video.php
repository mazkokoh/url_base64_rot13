         <?php 
              
                    $data=$video->row();
                    $judul=$data->judul;
                    $id=$data->id;
                    $file=$data->file;
                    $episode=$data->episode;
                  ?>
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
    .vid {
    position: relative;
    padding-bottom: 56.25%;
    padding-top: 30px; height: 0; overflow: hidden;
    }
 
    .vid iframe,
    .vid object,
    .vid embed {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 60%;
    }
          .video-list-thumbs{}
      .video-list-thumbs > li{
          margin-bottom:12px;
      }
      .video-list-thumbs > li:last-child{}
      .video-list-thumbs > li > a{
        display:block;
        position:relative;
        background-color: #111;
        color: #fff;
        padding: 8px;
        border-radius:3px
        Stransition:all 500ms ease-in-out;
        Sborder-radius:4px
      }
      .video-list-thumbs > li > a:hover{
        box-shadow:0 2px 5px rgba(0,0,0,.3);
        text-decoration:none
      }
      .video-list-thumbs h2{
        bottom: 0;
        font-size: 14px;
        height: 33px;
        margin: 8px 0 0;
      }
      .video-list-thumbs .glyphicon-play-circle{
          font-size: 60px;
          opacity: 0.6;
          position: absolute;
          right: 39%;
          top: 31%;
          text-shadow: 0 1px 3px rgba(0,0,0,.5);
          transition:all 500ms ease-in-out;
      }
      .video-list-thumbs > li > a:hover .glyphicon-play-circle{
        color:#fff;
        opacity:1;
        text-shadow:0 1px 3px rgba(0,0,0,.8);
      }
      .video-list-thumbs .duration{
        background-color: rgba(0, 0, 0, 0.4);
        border-radius: 2px;
        color: #fff;
        font-size: 11px;
        font-weight: bold;
        left: 12px;
        line-height: 13px;
        padding: 2px 3px 1px;
        position: absolute;
        top: 12px;
        transition:all 500ms ease;
      }
      .video-list-thumbs > li > a:hover .duration{
        background-color:#000;
      }
      @media (min-width:320px) and (max-width: 480px) { 
        .video-list-thumbs .glyphicon-play-circle{
          font-size: 35px;
          right: 36%;
          top: 27%;
        }
        .video-list-thumbs h2{
          bottom: 0;
          font-size: 12px;
          height: 22px;
          margin: 8px 0 0;
        }
      }
  </style>
</head>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

  <?php $this->load->view('header') ?>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <?php 
    if ($type=='encrypted') {
      # code...
      $page='daftar_video_enc';
    } else {
      $page='daftar_video_dec';

    }
    $this->load->view('sidebar',array('page' => $page )); ?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Video
        <small>Watch</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">List Video</a></li>
        <li class="active">encrypted</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
          <!-- /.box -->
          <div class="box box-danger box-solid col-lg-8 ">
            <div class="box-header">
              <h3 class="box-title"><?php echo $judul; ?> <?php if ($episode==0||$episode=="-") {
                //nothing happen
              }
              else {
                      echo "- Episode ".$episode;
                    } ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="vid col-md-8">
                <iframe width="560" height="315" src="<?php echo base_url();?>assets/video/<?php echo $file; ?>" allowfullscreen="allowfullscreen"></iframe>
            </div>
            <div class="col-md-4">
            <ul class="list-unstyled video-list-thumbs row bg-red">
              <li class="col-md-12">
              <br>             
                    <b>Other Video</b>
              </li>
                <?php 
                  if ($video->num_rows()==0) {
                    # code...
                    echo 'video kosong';
                  } else {
                    foreach ($list_vd->result() as $list_v ) {
                      if ($id==$list_v->id) {
                        # skipp
                      } else {
                    if ($type=='encrypted') {
                      # code...
                      $id_video=str_rot13(base64_encode($list_v->id)).'&type=encrypted';
                    } else {
                      $id_video=$list_v->id.'&type=plain';
                    }
                    
                ?>
                <li class="col-md-12">             
                  <a href="<?php echo site_url(); ?>video/watch?v=<?php echo $id_video; ?>" title="OP">
                    <img src="<?php echo base_url();?>assets/video/thumbs/<?php echo $list_v->cover; ?>" alt="OP" class="" height="90px" />
                    <h2><?php echo $list_v->judul; ?> <?php if ($list_v->episode==0||$list_v->episode=="-"){
                      //nothing happen
                    }else  {
                      echo "- Episode ".$list_v->episode;
                    } ?></h2>
                    <span class="glyphicon glyphicon-play-circle"></span>
                    <span class="duration"><?php echo $list_v->durasi; ?></span>
                  </a>
                </li>
                <br>
              <?php }}}?>
              </ul>
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
