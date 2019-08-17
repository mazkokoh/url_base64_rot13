    <section class="sidebar">
      <!-- Sidebar user panel -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu</li>
        <li class="<?php if($page=='home'){ echo 'active';} ?>" >
          <a href="<?php echo base_url(); ?>">
            <i class="fa fa-home"></i>
            <span>Home</span>
            </span>
          </a>
        </li>
        <li class="<?php if($page=='daftar_siswa_enc'||$page=='daftar_siswa_dec'||$page=='input_mahasiswa'){ echo 'active';} ?> treeview" >
          <a href="#">
            <i class="fa fa-user-secret"></i>
            <span>Enkripsi Profile</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if($page=='daftar_siswa_enc'){ echo 'active';} ?>"><a href="<?php echo base_url().'url_profile/encrypted/'; ?>"><i class="fa fa-lock"></i> Terenkripsi</a></li>
            <li class="<?php if($page=='daftar_siswa_dec'){ echo 'active';} ?>"><a href="<?php echo base_url().'url_profile/unencrypted/'; ?>"><i class="fa fa-unlock"></i> Tidak Terenkripsi</a></li>
            <li class="<?php if($page=='input_mahasiswa'){ echo 'active';} ?>"><a href="<?php echo base_url().'url_profile/input_data_mahasiswa/'; ?>"><i class="fa fa-pencil"></i> Input Data</a></li>
          </ul>
        </li>
        <li class="<?php if($page=='daftar_video_enc'||$page=='daftar_video_dec'||$page=='upload_video'){ echo 'active';} ?> treeview" >
          <a href="#">
            <i class="fa fa-youtube-play"></i>
            <span>Enkripsi Alamat Video</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if($page=='daftar_video_enc'){ echo 'active';} ?>"><a href="<?php echo base_url().'url_video/video/encrypted'; ?>"><i class="fa fa-lock"></i>Terenkripsi</a></li>
            <li class="<?php if($page=='daftar_video_dec'){ echo 'active';} ?>"><a href="<?php echo base_url().'url_video/video/unencrypted'; ?>"><i class="fa fa-unlock"></i>
            Tidak Terenkripsi</a></li>
            <li class="<?php if($page=='upload_video'){ echo 'active';} ?>"><a href="<?php echo base_url().'url_video/input_video/'; ?>"><i class="fa fa-pencil"></i> Input Data</a></li>
          </ul>
        </li>        
        <li class="<?php if($page=='plain_file'||$page=='chiper_file'||$page=='upload_file'){ echo 'active';} ?> treeview" >
          <a href="#">
            <i class="fa fa-download"></i>
            <span>Enkripsi Downloaded</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if($page=='chiper_file'){ echo 'active';} ?>"><a href="<?php echo base_url().'url_download/file?type=chiper'; ?>"><i class="fa fa-lock"></i>Terenkripsi</a></li>
            <li class="<?php if($page=='plain_file'){ echo 'active';} ?>"><a href="<?php echo base_url().'url_download/file?type=plain'; ?>"><i class="fa fa-unlock"></i>
            Tidak Terenkripsi</a></li>
            <li class="<?php if($page=='upload_file'){ echo 'active';} ?>"><a href="<?php echo base_url().'url_download/file?type=upload'; ?>"><i class="fa fa-pencil"></i>
            Upload File</a></li>
          </ul>
        </li>

        <li class="<?php if($page=='website'||$page=='input_site'||$page=='static_web'){ echo 'active';} ?> treeview" >
          <a href="#">
            <i class="fa fa-globe"></i>
            <span>Enkripsi Site</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if($page=='website'){ echo 'active';} ?>"><a href="<?php echo base_url().'url_website/list/'; ?>"><i class="fa fa-globe"></i>List Site</a></li>
            <li class="<?php if($page=='input_site'){ echo 'active';} ?>"><a href="<?php echo base_url().'url_website/input/'; ?>"><i class="fa fa-pencil"></i>
            Input Site</a></li>
            <li class="<?php if($page=='static_web'){ echo 'active';} ?>"><a href="<?php echo base_url().'website/open/'; ?>"><i class="fa fa-coffee"></i>
            Manual Input</a></li>
          </ul>
        </li>        
        <li class="<?php if($page=='enkrip_text'||$page=='dekrip_text'){ echo 'active';} ?> treeview" >
          <a href="#">
            <i class="fa fa-globe"></i>
            <span>Manual Link</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if($page=='enkrip_text'){ echo 'active';} ?>"><a href="<?php echo base_url().'manual/enkrip_text/'; ?>"><i class="fa fa-file-code-o"></i>Enkripsi</a></li>
            <li class="<?php if($page=='dekrip_text'){ echo 'active';} ?>"><a href="<?php echo base_url().'manual/dekrip_text/'; ?>"><i class="fa fa-file-word-o"></i>Deskripsi</a></li>
          </ul>
        </li>
      </ul>
    </section>