    <!-- SETTINGS SECTION -->
      <div class="row" style="margin-left:350px; margin-top:40px;">
        <div class="col-sm-8"><strong>Setelan Akun</strong></div>
      </div>

      <div class="row" style="margin-left:350px">
        <div class="col-sm-6"> <hr> </div>
      </div>

      <div class="row" style="margin-left:350px">
        <div class="col-sm-2">Surel Utama</div>
        <div class="col-sm-4"><?php echo $_SESSION['user']['email'];?></div>
      </div>
      <div class="row"  style="margin-left:350px">
        <div class="col-sm-4" style="margin-left:217px">
          <div class ="row">
          <form action=settings/editEmail method="POST">
              <input type='hidden' name='user_id' value=<?php echo $_SESSION['user']['user_id'];?> required>
              <input id="emailNew" class="form-control" type="email" name="email" value="" placeholder="name@example.com" width="10px" required>
              <input  id="btnNew" class="btn btn-primary" type="submit" name="editemail" value="Ubah Surel" width="5px;">
          </form>
          </div>
        </div>
      </div>

      <div class="row" style="margin-left:350px">
        <div class="col-sm-6"> <hr> </div>
      </div>

      <div class="row" style="margin-left:350px">
        <div class="col-sm-2">Nomor Telepon</div>
        <div class="col-sm-2"><?php echo $_SESSION['user']['phone'];?></div>
      </div>

      <div class="row" style="margin-left:350px">
      <div class="col-sm-4" style="margin-left:217px">
          <div class ="row">
          <form action=settings/editPhone method="POST">
              <input type='hidden' name='user_id' value=<?php echo $_SESSION['user']['user_id'];?> required>
              <input id="emailNew" class="form-control" type="tel" name="phone" value="" placeholder="08xxxxxxxxxx" width="10px" required>
              <input  id="btnNew" class="btn btn-primary" type="submit" name="editphone" value="Ubah Nomor Telepon" width="5px;">
          </form>
          </div>
        </div>
      </div>

      <div class="row" style="margin-left:350px">
        <div class="col-sm-6"> <hr> </div>
      </div>

      <div class="row" style="margin-left:350px">
        <div class="col-sm-2">Sandi</div>
        <div class="col-sm-4">
          <form action=settings/editPassword method="POST">
            <input type='hidden' name='user_id' value=<?php echo $_SESSION['user']['user_id'];?> required>
            <input id="emailNew" class="form-control" type="password" name="password" value="" placeholder="Sandi" required>
            <input  id="btnNew" class="btn btn-primary" type="submit" name="editpassword" value="Ubah Sandi" width="5px;">
          </div>
          </div>
        </div>
      </div>

      <div class="row" style="margin-left:350px">
        <div class="col-sm-6"> <hr> </div>
      </div>

      <div class="row" style="margin-left:350px">
        <div class="col-sm-2">Keluar</div>
        <div class="col-sm-4"><a href="<?php echo site_url('login');?>">Keluar dari semua peramban lain</a></div>
      </div>
    </form>
    <!-- END OF SETTINGS SECTION -->

  </body>
</html>
