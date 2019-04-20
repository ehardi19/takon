    <!-- SETTINGS SECTION -->
    <form class="set">
      <div class="row" style="margin-left:115px; margin-top:40px;">
        <div class="col-sm-8">Setelan Akun</div>
      </div>

      <div class="row">
        <div class="col-sm-6"> <hr> </div>
      </div>

      <div class="row">
        <div class="col-sm-2">Surel Utama</div>
        <div class="col-sm-4"><?php echo $_SESSION['user']['email'];?></div>
      </div>
      <div class="row">
        <div class="col-sm-4" style="margin-left:217px">
          <a href="#" data-toggle="collapse" data-target="#demo">Tambah Alamat Surel Lain</a>
        </div>
      </div>

      <!-- Collapse  -->
      <div class="row">
        <div class="col-sm-4" style="margin-left:217px">
          <div id="demo" class="collapse">
            <form action="<?php echo site_url('settings/edit');?>" method="POST">
              <input id="emailNew" class="form-control" type="email" name="email" value="" placeholder="name@example.com" width="10px">
              <input  id="btnNew" class="btn btn-primary" type="submit" name="submit" value="Tambah Surel" width="5px;">
            </form>
            </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-6"> <hr> </div>
      </div>

      <div class="row">
        <div class="col-sm-2">Nomor Telepon</div>
        <div class="col-sm-4"><?php echo $_SESSION['user']['phone'];?></div>
      </div>

      <div class="row">
        <div class="col-sm-4" style="margin-left:217px"><a href="#"  data-toggle="modal" data-target="#modals2">Tambahkan Nomor Telepon</a></div>
      </div>

      <!-- Phone Modal -->
      <div class="modal fade" id="modals2">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h5>Tambah Ponsel</h5>
            </div>

            <!-- Modal Body -->
            <form action="<?php echo site_url('settings/edit');?>" method="POST">
            <div class="modal-body">
              <small class="form-text">Telepon</small>
              <input  class="form-control" type="text" name="tlp" value="">
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">
              <a href="#" data-dismiss="modal" style="color:grey">Batal</a>
              <button type="button" class="btn btn-primary" data-dismiss="modal">Selesai</button>
            </div>
            </form>
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

      <!-- Password Modal  -->
      <div class="modal fade" id="myModal">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5>Masukkan Sandi</h5>
          </div>

          <!-- Modal Body -->
          <form action="<?php echo site_url('settings/edit');?>" method="POST">
          <div class="modal-body">
            <input class="form-control" type="password" name="password" value="" placeholder="Sandi">
          </div>

          <!-- Modal Footer -->
          <div class="modal-footer">
            <a href="#" data-dismiss="modal" style="color:grey">Batal</a>
            <button type="button" class="btn btn-primary" data-dismiss="modal">Selesai</button>
          </div>
          </form>

        </div>
      </div>
  </div>

      <div class="row">
        <div class="col-sm-6"> <hr> </div>
      </div>

      <div class="row">
        <div class="col-sm-2">Keluar</div>
        <div class="col-sm-4"><a href="<?php echo site_url('login');?>">Keluar dari semua peramban lain</a></div>
      </div>
    </form>
    <!-- END OF SETTINGS SECTION -->

  </body>
</html>
