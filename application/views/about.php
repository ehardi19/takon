<!DOCTYPE html>
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

    <form style="margin-top:100px; font-family:Arial;">
      <div class="row">
        <div class="col-sm-12">
            <h1 style="text-align:center;">Mengapa Quora Ada</h1>
        </div>

      </div>
      <div class="row">
        <div class="col-sm-12">
          <pre style="text-align:left; margin-left:25%; margin-top:15px; font-family:Arial;">
          <b>  Mengapa Quora Ada</b>

            Misi Quora adalah untuk membagikan dan mengembangkan pengetahuan dunia.
            Sangat banyak pengetahuan yang mungkin akan bernilai bagi banyak orang yang pada
            saat ini hanya tersedia untuk sedikit orang, baik itu karena masih tersimpan dalam
            kepala, ataupun hanya dapat diakses oleh kelompok tertentu saja. Kami ingin
            menghubungkan orang-orang yang memiliki pengetahuan dengan orang-orang yang
            membutuhkannya, mengumpulkan orang-orang yang berbeda pandangan agar mereka
            dapat saling mengerti satu sama lain dengan lebih baik, dan memberdayakan setiap
            orang untuk membagikan pengetahuan mereka demi kepentingan seluruh dunia.

            <b>Berkumpul di Sekeliling Pertanyaan</b>

            Jantung Quora adalah pertanyaan. Pertanyaan <a href="#">yang memengaruhi dunia</a>, pertanyaan
            <a href="#">yang menjelaskan peristiwa dunia terbaru</a> , <a href="#" style="text-decoration: none;">pertanyaan yang memandu keputusan
            hidup yang penting</a>, dan pertanyaan<a href="#" style="text-decoration: none;"> yang memberikan wawasan mengapa orang lain
            berpikir secara berbeda</a>.Quora adalah tempat di mana Anda dapat mengajukan
            pertanyaan yang menjadi perhatian Anda dan mendapatkan jawaban yang luar biasa.

            Quora hanya punya satu versi dari setiap pertanyaan. Tidak ada versi sayap kiri,
            versi sayap kanan, versi barat, dan versi timur. Quora mengumpulkan orang-orang
            dari berbagai belahan dunia berbeda untuk menjawab pertanyaan yang sama, di tempat
            yang sama, dan untuk saling belajar satu sama lain. Kami ingin Quora menjadi
            tempat untuk menyuarakan opini Anda karena Quora adalah tempat di mana debat
            berlangsung. Kami ingin jawaban Quora menjadi jawaban definitif bagi semua orang
            untuk selamanya.

            <b>Memahami Dunia dan Orang-Orang di Dalamnya</b>

            Quora memiliki konten yang akan membuat Anda merasa senang membaca. Quora
            membantu Anda memahami bagaimana cara dunia bekerja, mengapa orang-orang
            bertindak dengan cara yang mereka lakukan, dan apa yang dapat kita lakukan untuk
            membuat dunia lebih baik. Quora menyediakan lini masa terpersonalisasi dari jawaban
            berwawasan untuk pertanyaan yang tidak Anda sadari seharusnya Anda ajukan.

            Jawaban Quora berasal dari orang-orang yang sangat memahami masalah dan memiliki
            pengetahuan tangan pertama. Quora adalah tempat untuk membaca jawaban <a href="#" style="text-decoration: none;">Barack
            Obama tentang perjanjian Iran</a>,<a href="#"> narapidana tentang kehidupan di penjara</a>,<a href="#" style="text-decoration: none;">ilmuwan
            tentang pemanasan global</a>,<a href="#"> petugas polisi tentang cara mencegah terjadi pencurian</a>,
            dan <a href="#">produser TV tentang bagaimana acara mereka dibuat</a>.Quora adalah tempat untuk
            membaca jawaban dari orang-orang yang memberi inspirasi seperti <a href="#">Gloria Steinem</a>,
            <a href="#">Stephen Fry</a>,<a href="#"> Hillary Clinton</a>,<a href="#">Glenn Beck</a>,<a href="#">Sheryl Sandberg</a>,<a href="#">Vinod Khosla</a>, dan <a href="#" style="text-decoration: none;">Gillian
            Anderson</a> yang secara langsung menjawab pertanyaan-pertanyaan yang paling
            dinantikan oleh orang-orang. Quora adalah tempat di mana Anda dapat membaca
            wawasan penting yang tidak pernah dibagikan di tempat lain mana pun, dari orang
            yang tidak pernah bisa Anda jangkau dengan cara lain apa pun.
          </pre>
        </div>
      </div>

      <div class="row" style=" justify-content:center;">
        <div class="col-sm-6">
          <hr>
        </div>
      </div>
    </form>

  </body>
</html>
