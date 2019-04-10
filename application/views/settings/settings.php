<!DOCTYPE html>
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
      #dot{
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
    #btnNew{
      color:white;
      padding: 3px;
      font-size: 10px;
    }
    #emailNew{
      width: 200px;
      padding: 0px;
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
        <div class="col-sm-4" style="margin-left:217px">
          <a href="#" data-toggle="collapse" data-target="#demo">Tambah Alamat Surel Lain</a>
        </div>
      </div>
      <!-- collapse  -->
      <div class="row">
        <div class="col-sm-4" style="margin-left:217px">
          <div id="demo" class="collapse">
            <input id="emailNew" class="form-control" type="email" name="name" value="" placeholder="name@example.com" width="10px">
            <input  id="btnNew" class="btn btn-primary" type="submit" name="submit" value="Tambah Surel" width="5px;">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-6"> <hr> </div>
      </div>

      <div class="row">
        <div class="col-sm-2">Nomor Telepon</div>
        <div class="col-sm-4">Example</div>
      </div>


      <div class="row">
        <div class="col-sm-4" style="margin-left:217px"><a href="#"  data-toggle="modal" data-target="#modals2">Tambahkan Nomor Telepon</a></div>
      </div>
      <div class="modal fade" id="modals2">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <!-- Modal header -->
            <div class="modal-header">
              <h5>Tambah Ponsel</h5>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <small class="form-text">Telepon</small>
              <input  class="form-control" type="text" name="tlp" value="">
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <a href="#" data-dismiss="modal" style="color:grey">Batal</a>
              <button type="button" class="btn btn-primary" data-dismiss="modal">Selesai</button>
            </div>
        </div>
      </div>
    </div>

      <div class="row">
        <div class="col-sm-6"> <hr> </div>
      </div>

      <div class="row">
        <div class="col-sm-2">Sandi</div>
        <div class="col-sm-4"><a href="#" data-toggle="modal" data-target="#myModal">Ubah Sandi</a></div>
      </div>

      <!-- myModal  -->
      <div class="modal fade" id="myModal">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5>Masukkan Sandi</h5>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <input  class="form-control" type="password" name="pass" value="" placeholder="Sandi">
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <a href="#" data-dismiss="modal" style="color:grey">Batal</a>
            <button type="button" class="btn btn-primary" data-dismiss="modal">Selesai</button>
          </div>

        </div>
      </div>
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
