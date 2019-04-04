<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="https://qsf.c7.quoracdn.net/-3-images.favicon.ico-26-ae77b637b1e7ed2c.ico">
    <title>Setelan Akun - Quora</title>
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
    .set > .row{
      justify-content:center;
    }

    </style>

  </head>
  <body>

    <nav id="navs" class="navbar navbar-expand-sm navbar-light" style="padding: .1rem 1rem; border-bottom:1px solid #cccccc;">
      <div class="header_logo u-flex-none" style="margin-right:20px;">
        <a class="navbar-brand" href="#beranda">
          <img src="https://2xawx0gmudy471po527lbxcd-wpengine.netdna-ssl.com/wp-content/uploads/2017/06/quora-604x400.png" alt="logo" style="width:70px; height=70px;">
        </a>
      </div>

      <ul id="list" class="navbar-nav">
        <li id="wan" class="nav-item" style="margin-right:20px;">
          <a id="beranda" href="#" class="nav-link">Beranda</a>
        </li>
        <li id="cu" class="nav-item" style="margin-right:20px;">
          <a href="#" class="nav-link">Jawab</a>
        </li>
      </ul>

      <form class="form-inline" action="/action_page.php" style="margin-right:20px;">
        <input class="form-control mr-sm-2" type="text" placeholder=" Cari Quora" style="padding:1px; width:355px;">
        <!--<button class="btn btn-success" type="submit">Search</button>-->
      </form>

      <form class="form-inline" style="margin-right:15px;">
        <div class="dropdown">
          <button id="dot" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="font-size:7px; justify-content:center;">
            S
          </button>
          <div class="dropdown-menu" style="margin-top:17px;">
            <a id="dr" class="dropdown-item" href="#" style="color:#2673ef; font-size:14px;">Profil</a>
            <a id="dr" class="dropdown-item" href="#" style="color:#2673ef; font-size:14px;">Setelan</a>
            <h5 class="dropdown-header"> <hr> </h5>
            <small class="form-text text-muted"><a href="#" style="color:grey; margin-left:25px;">Keluar</a></small>
          </div>
        </div>
      </form>

      <form class="form-inline">
        <input class="btn btn-danger" type="button" name="" value="Tambah Pertanyaan" style="padding:3px; background-color:#b92b27; border: 1px solid #b92b27;">
      </form>
    </nav>
    <!--BATAS SETELAH NAVBAR-->
    <form class="set">
      <div class="row" style="margin-left:115px; margin-top:40px;">
        <div class="col-sm-8">Setelan Akun</div>
      </div>

      <div class="row">
        <div class="col-sm-6"> <hr> </div>
      </div>

      <div class="row">
        <div class="col-sm-2">Surel Utama</div>
        <div class="col-sm-4">Example</div>
      </div>
      <div class="row">
        <div class="col-sm-4" style="margin-left:217px"><a href="#">Tambah Alamat Surel Lain</a></div>
      </div>

      <div class="row">
        <div class="col-sm-6"> <hr> </div>
      </div>

      <div class="row">
        <div class="col-sm-2">Nomor Telepon</div>
        <div class="col-sm-4">Example</div>
      </div>
      <div class="row">
        <div class="col-sm-4" style="margin-left:217px"><a href="#">Tambahkan Nomor Telepon</a></div>
      </div>

      <div class="row">
        <div class="col-sm-6"> <hr> </div>
      </div>

      <div class="row">
        <div class="col-sm-2">Sandi</div>
        <div class="col-sm-4"><a href="#">Ubah Sandi</a></div>
      </div>

      <div class="row">
        <div class="col-sm-6"> <hr> </div>
      </div>

      <div class="row">
        <div class="col-sm-2">Keluar</div>
        <div class="col-sm-4">Example</div>
      </div>
      <div class="row">
        <div class="col-sm-4" style="margin-left:217px"><a href="#">Keluar dari semua peramban lain</a></div>
      </div>
    </form>

  </body>
</html>
