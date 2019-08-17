<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><{ SKRIPSI }></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> -->
  <style type="text/css">
@import url('https://fonts.googleapis.com/css?family=Baloo+Chettan&display=swap');
    .margin{
      margin-top: 2px;
      margin-right: 2px;
      margin-bottom: 2px;
      margin-left: 2px;
      width: 300px;
      font-weight: bold;
      background: #242323;
      color: white;
      border-radius: 100px;
    }
/*    .margin:hover{
      background: green;
      
      background: linear-gradient( red 90%,white);
      color: white;
    }*/

    .border{
      /*border: 2px solid red;*/
    }
    .body {
      background: url('<?php echo base_url()."assets/img/bg-landscape.jpg"; ?>');
      background-repeat: no-repeat;
      background-size: cover;
    }
    .transp{
      background-color:rgba(255,183,197,0.4);
      border-radius: 30px;
     }
     #header{
      text-align: center;
      margin-top: 9%;
     }
     .baloo{
      font-family: 'Baloo Chettan', cursive;
      color:white;
      text-shadow: 0px 0px 10px rgba(20,20,20);
     }
      @media screen and (max-width:480px) {
            .transp {border-radius: 0px;}
            .body{
             background: url('<?php echo base_url()."assets/img/bg-potrait.jpg";?>');
             background-repeat: no-repeat;
             background-size: cover;
            }
      }

  </style>
</head>
<body class="body">
<div class="wrapper" >
          <div class="transp col-md-8 col-md-offset-2" id="header">            
            <h1 class=" baloo">IMPLEMENTASI ENKRIPSI URL PADA WEBSITE MENGGUNAKAN METODE ROTATION 13 DAN BASE64</h1>
            <h3 class="text-center baloo">Menu:</h3>
            
              <div class="row border">
                <div class="col-md-4 col-md-offset-4">
                  <a href="<?php echo base_url();?>url_profile/encrypted/" class="btn btn-md bg-blue  margin">URL Profile Dengan Enkripsi</a>
                  <a href="<?php echo base_url();?>url_video/video/encrypted/" class="btn btn-md bg-red  margin">URL Video Dengan Enkripsi</a>
                  <a href="<?php echo base_url();?>url_download/file?type=chiper" class="btn btn-md bg-yellow  margin">URL Download Dengan Enkripsi</a>
                  <a href="<?php echo base_url();?>url_website/list/" class="btn btn-md bg-purple  margin">URL Website lain Dengan Enkripsi</a>
                </div>
              </div>
            <br>
            <div class="col-md-6 col-md-offset-3 ">
                <p class="baloo ">IMPLEMENTASI ENKRIPSI URL PADA WEBSITE MENGGUNAKAN METODE ROTATION 13 DAN BASE64</p>
                <p class="baloo "> Oleh : Marro Kokoh Aji Prasetyo.</p>
                <br>
            </div>
          </div>
</div>

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
</body>
</html>
