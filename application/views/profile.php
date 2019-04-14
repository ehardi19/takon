<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="https://qsf.c7.quoracdn.net/-3-images.favicon.ico-26-ae77b637b1e7ed2c.ico">
    <title>Nama User - Quora</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style>
      body{
        background-color:white;
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
      .profile_photo_img{
        border-radius:50%;
      }
      #navs{
        margin-bottom:40px;
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
    #profile > .row{
      margin-left:200px;
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
          <a href="<?php echo site_url('answer');?>" class="nav-link">Jawab</a>
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
        <input class="btn btn-danger" type="button" name="" value="Tambah Pertanyaan" style="padding:3px; background-color:#b92b27; border: 1px solid #b92b27;">
      </form>
    </nav>
    <!--BATAS SETELAH NAVBAR-->

    <form id="profile">
      <div class="row">
        <div class="col-sm-3">
          <!--di ganti jadi foto user-->
          <img class="profile_photo_img" src="https://qph.fs.quoracdn.net/main-thumb-760271012-200-ypqyshmmmvregybgycawmthfrkfomytl.jpeg" alt="Son Of Zeuz" height="200" width="200">
        </div>
        <div class="col-sm-6">
            <h1>Nama User</h1>
            <small class="form-text text-muted"><a href="#" style="color:grey;">Add profile credential</a></small>
            <small class="form-text text-muted"><a href="#" style="color:grey;">Write a description about yourself</a></small>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-8">
          <hr>
        </div>
      </div>

      <div class="row" style="margin-top:-10px">
        <div class="col-sm-7">
          <p>Profil</p>
        </div>
        <div class="col-sm-3">
          <p>Terbaru</p>
        </div>
      </div>
      <div class="row" style="margin-top:-25px">
        <div class="col-sm-8">
          <hr>
        </div>
      </div>
    </form>

  </body>
</html>
