<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="https://qsf.c7.quoracdn.net/-3-images.favicon.ico-26-ae77b637b1e7ed2c.ico">
    <title>Tulis Jawaban - Quora</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style>
      body{
        background-color:#f4f4f4;
      }
      #navs{
        justify-content:center;
        background-color:white;
      }
      nav #list #wan:hover{
        background-color:#f7f7f7;
      }
      nav #list #cu:hover{
        background-color:#f7f7f7;
      }
      nav #list #crih:hover{
        background-color:#f7f7f7;
      }
      .container{
        background-color: white;
        width: 40%;
        border: 1px solid #cccccc;
        padding:4px;
      }
      #dot {
      height: 30px;
      width: 30px;
      background-color: #bbb;
      border-radius: 50%;
      border: none;
      display: inline-block;
      text-align:center;
      background-color:#620a82;
      color:white;
      font-size: 19px;
    }
    #dr:hover{
      background-color: #c9ddff;
    }
    .profile_photo_img{
      border-radius:50%;
    }

    </style>

  </head>
  <body>

    <nav id="navs" class="navbar navbar-expand-sm navbar-light" style="padding: .1rem 1rem; border-bottom:1px solid #cccccc;">
      <div class="header_logo u-flex-none" style="margin-right:20px;">
        <a class="navbar-brand" href="<?php echo site_url('home');?>">
          <img src="https://2xawx0gmudy471po527lbxcd-wpengine.netdna-ssl.com/wp-content/uploads/2017/06/quora-604x400.png" alt="logo" style="width:70px; height=70px;">
        </a>
      </div>

      <ul id="list" class="navbar-nav">
        <li id="wan" class="nav-item" style="margin-right:20px;">
          <a id="beranda" href="<?php echo site_url('home');?>" class="nav-link">Beranda</a>
        </li>
        <li id="cu" class="nav-item" style="margin-right:20px;">
          <a href="<?php echo site_url('home');?>" class="nav-link" style="border-bottom: 1px solid #b92b27; color:#b92b27;">Jawab</a>
        </li>
      </ul>

      <form class="form-inline" action="<?php echo site_url('search'); ?>" style="margin-right:20px;">
        <input class="form-control mr-sm-2" type="text" placeholder=" Cari Quora" style="padding:1px; width:355px;">
        <!--<button class="btn btn-success" type="submit">Search</button>-->
      </form>

      <form class="form-inline" style="margin-right:15px;">
        <div class="dropdown">
          <button id="dot" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="font-size:7px; justify-content:center;">
            S
          </button>
          <div class="dropdown-menu" style="margin-top:17px;">
            <a id="dr" class="dropdown-item" href="<?php echo site_url('profile');?>" style="color:#2673ef; font-size:14px;">Profil</a>
            <a id="dr" class="dropdown-item" href="<?php echo site_url('settings');?>" style="color:#2673ef; font-size:14px;">Setelan</a>
            <h5 class="dropdown-header"> <hr> </h5>
            <small class="form-text text-muted"><a href="<?php echo site_url('about');?>" style="color:grey; margin-left:25px;">Tentang Kami</a></small>
            <small class="form-text text-muted"><a href="<?php echo site_url('login');?>" style="color:grey; margin-left:25px;">Keluar</a></small>
          </div>
        </div>
      </form>

      <form class="form-inline">
        <input class="btn btn-danger" type="button" name="" value="Tambah Pertanyaan" data-toggle="modal" data-target="#navTmbh" style="padding:3px; background-color:#b92b27; border: 1px solid #b92b27;">

        <!-- The Modal -->
       <div class="modal fade" id="navTmbh">
         <div class="modal-dialog">
           <div class="modal-content">

             <!-- Modal body -->
             <div class="modal-body">
                <div class="row">
                  <div class="col-sm-2">
                    <img class="profile_photo_img" src="https://qph.fs.quoracdn.net/main-thumb-760271012-200-ypqyshmmmvregybgycawmthfrkfomytl.jpeg" alt="Son Of Zeuz" height="30" width="30">
                  </div>
                  <div class="col-sm-2">
                    <small class="form-text text-muted"><a href="#" style="color:grey; margin-left:-25px; ">Nama User</a></small>
                  </div>
                </div>

                <div class="row" style="margin-top:20px;">
                  <div class="col">
                    <input id="navs11" class="form-control" type="text" name="" placeholder="Awali pertanyaan Anda dengan &quot;Apa&quot;, &quot;Bagaimana&quot;, &quot;Mengapa&quot;, dll." style="border:none;  width: 100%;">
                  </div>
                </div>
             </div>

             <!-- Modal footer -->
             <div class="modal-footer">
               <small class="form-text text-muted"><a href="#" style="color:grey;"  data-dismiss="modal">Batal</a></small>
               <button type="submit" class="btn btn-primary">Tambah Pertanyaan</button>
             </div>

           </div>
         </div>
       </div>
      </form>
    </nav>
    <!--BATAS NAVBAR-->
    <form class="">
      <div class="container" style="margin-top:30px;">
        <h5 style="margin-left:10px;">Pertanyaan Untuk Anda</h5>
        <div class="row">
          <div class="col">
            <hr>
            <small class="form-text text-muted" style="color:grey; margin-left:10px;">Pertanyaan ditambahkan</small>
            <a href="#" style="color:black; margin-left:10px; font-size:20px;">Pertanyaan User</a>
            <small class="form-text text-muted"><a href="#" style="color:grey; margin-left:10px;" data-toggle="collapse" data-target="#demo">Jawab</a></small>
          </div>
        </div>
        <div id="demo" class="collapse" style="margin-left:10px;">
          <label for="comment">Comment:</label>
          <textarea class="form-control" rows="5" id="comment"></textarea>
          <button type="submit" class="btn btn-primary" name="button" style="margin-top:5px;">Selesai</button>
        </div>
      </div>

    </form>

</body>
