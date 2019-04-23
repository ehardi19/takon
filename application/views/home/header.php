<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="https://qsf.c7.quoracdn.net/-3-images.favicon.ico-26-ae77b637b1e7ed2c.ico">
    <title>Beranda - Quora</title>
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
      #profile-icon {
        background-image : url(https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png);
        background-size: 30px 30px;
        height: 30px; 
        width: 30px;
        border-radius:50%;
      }
      #dr:hover{
        background-color: #c9ddff;
      }
      .profile_photo_img{
        height: 30px; 
        width: 30px;
        border-radius:50%;
      }
      #navs11:hover{
        border-color: none;
        background-color: none;
    }
    </style>

  </head>
  <body>

  <!-- NAVBAR -->
  <nav id="navs" class="navbar navbar-expand-sm navbar-light" style="padding: .1rem 1rem; border-bottom:1px solid #cccccc;">
      <div class="header_logo u-flex-none" style="margin-right:20px;">
        <a class="navbar-brand" href="<?php echo site_url('home');?>">
          <img src="https://2xawx0gmudy471po527lbxcd-wpengine.netdna-ssl.com/wp-content/uploads/2017/06/quora-604x400.png" alt="logo" style="width:70px; height=70px;">
        </a>
      </div>

      <ul id="list" class="navbar-nav">
        <li id="wan" class="nav-item" style="margin-right:20px;">
          <a id="beranda" href="<?php echo site_url('home');?>" class="nav-link"><img src="https://upload.wikimedia.org/wikipedia/commons/2/2d/Apple_News_iOS_Icon.png" alt="" width="25px;"> Beranda</a>
        </li>
        <li id="cu" class="nav-item" style="margin-right:20px;">
          <a href="<?php echo site_url('answer');?>" class="nav-link"><img src="https://images.vexels.com/media/users/3/140954/isolated/preview/92c8d4fffeec447a9106b65f8bbf0226-pen-paper-round-icon-by-vexels.png" alt="" width="30px;"> Jawab</a>
        </li>
      </ul>

      <form class="form-inline" action="<?php echo site_url('search'); ?>" method="POST" style="margin-right:20px;">
        <input class="form-control mr-sm-2" name="keyword" type="text" placeholder="Cari Quora" style="padding:1px; width:355px;">
        <button class="btn btn-success" type="submit" style="padding:5px; background-color:white; border:none;"><img src="https://images.vexels.com/media/users/3/132068/isolated/preview/f9bb81e576c1a361c61a8c08945b2c48-search-icon-by-vexels.png" alt="" width="25px;"> </button>
      </form>

      <form class="form-inline" style="margin-right:15px;">
        <div class="dropdown">
          <button id="profile-icon" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="justify-content:center;">
          </button>
          <div class="dropdown-menu" style="margin-top:17px;">
            <a id="dr" class="dropdown-item" href="<?php echo site_url('profile');?>" style="color:#2673ef; font-size:14px;">Profil</a>
            <a id="dr" class="dropdown-item" href="<?php echo site_url('settings');?>" style="color:#2673ef; font-size:14px;">Setelan</a>
            <h5 class="dropdown-header"> <hr> </h5>
            <small class="form-text text-muted"><a href="<?php echo site_url('about');?>" style="color:grey; margin-left:25px;">Tentang Kami</a></small>
            <small class="form-text text-muted"><a href="<?php echo site_url('login/signout');?>" style="color:grey; margin-left:25px;">Keluar</a></small>
          </div>
        </div>
      </div>
      </form>
    </nav>
    <!--END OF NAVBAR-->
