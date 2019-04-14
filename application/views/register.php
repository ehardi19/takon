<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="https://qsf.c7.quoracdn.net/-3-images.favicon.ico-26-ae77b637b1e7ed2c.ico">
    <title>Quora - Tempat berbagi pengetahuan dan memahami dunia lebih baik</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style>
    table{
      margin:auto;
      margin-top: 130px;
      border: 3px solid white;
      background-color: white;
      border-radius: 2px;
    }
    body{
      background: url(https://cdn-images-1.medium.com/max/2000/1*s987K8-L-mlk0RsEMyVKJw.jpeg);
    }
    pre{
      float: left;
    }
    pre #gog{
      text-align: center;
      margin-bottom: -25px;
      background-color:#f24718;
      border: none;
    }
    pre #gog:hover{
      background-color:#ff754f;
    }
    pre #fb:hover{
      background-color:#89a0dd;
    }
    pre #fb{
      text-align: center;
      background-color:#296ce8;
      border: none;
    }
    #daft label{
      margin-left: 50px;
    }
    #daft input{
      margin-left: 50px;
    }
    #font{
      color:grey;
    }
    #btn{
      float: right;
      background-color:#3e78ad;
      padding: 3px;
    }
    #header{
        margin-bottom: 45px;
    }
    #img{
      margin:auto;
      display: inline;
    }
    #ngaco{
      display: flex;
    }
    #surel {
      background-color:#c9c9c9;
    }
    #sandi{
      background-color:#c9c9c9;
    }


    </style>
  </head>
  <body>
    <div class="container" style="margin-bottom:100px;">
      <table>
        <tr>
          <th colspan="2" style="text-align:center;"><img id="img" src="https://2xawx0gmudy471po527lbxcd-wpengine.netdna-ssl.com/wp-content/uploads/2017/06/quora-604x400.png" width="30%" height="30%"></th>
        </tr>
        <tr>
          <th colspan="2"><h4 id="header" style="font-size:19px; text-align:center; color:grey;">Tempat berbagi pengetahuan dan memahami dunia lebih baik</h4></th>
        </tr>
        <tr>
          <!--Register Form-->
          <td id="draft">
          <form action="" method="POST">
            <div class="form-group row">
              <div class="col-xs-2">
                <label>Nama</label>
                <input class="form-control form-control-sm" type="text" name="Nama" value="">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-xs-2">
                <label>Telepon(Opsional)</label>
                <input class="form-control form-control-sm" type="text" name="Telepon" value="">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-xs-2">
                <label>Surel</label>
                <input class="form-control form-control-sm" type="text" name="Surel" value="">
              </div>
            </div><div class="form-group row">
              <div class="col-xs-2">
                <label>Sandi</label>
                <input class="form-control form-control-sm" type="password" name="Sandi" value="">
                <small class="form-text text-muted" style="color:#000000; margin-left:50px;" >Dengan mengklik "Daftar", Anda </small>
                <small class="form-text text-muted" style="color:#000000; margin-left:50px;" >menunjukkan bahwa Anda setuju </small>
                <small class="form-text text-muted"> <a href="<?php echo site_url('login');?>" style="margin-left:50px">Batal</a></small>
                <input class="btn btn-primary" type="submit" name="" value="Daftar" style="float:right; margin-bottom:20px; background-color:#3e78ad; padding: 3px;">
              </div>
            </div>
          </form>
          </td>
          <!--Login Form -->
          <td>
             <form action="<?php echo site_url('login/signin');?>" method="POST" id="form" style="margin-right:40px; height:100px;">
              <div class="form-group row">
                <div class="col-xs-2">
                  <small class="form-text text-muted" style="color:#000000;"><b>Masuk</b></small>
                  <input id="surel" class="form-control" type="email" name="email" value="" placeholder="Surel">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-xs-2">
                  <input id="sandi" class="form-control" type="password" name="pass" value="" placeholder="Sandi" >
                  <small class="form-text text-muted"><a href="#" style="color:grey;">Lupa sandi</a>?</small>
                  <input id="btn" class="btn btn-primary" type="submit" name="submit" value="Masuk">
                </div>
              </div>
             </form>
          </td>
        </tr>
        <tr>
          <td colspan="2"  style="text-align:center; font-size:10px">© Quora Inc. 2019</td>
        </tr>
      </table>
    </div>
  </body>
</html>
