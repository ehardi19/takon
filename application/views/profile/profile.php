    <!-- PROFILE SECTION -->
    <form class="row" style="margin-left:200px;>
      <div class="row">
        <div class="col-sm-3">
          <!--di ganti jadi foto user-->
          <img class="profile_photo_img" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="P" height="200" width="200">
        </div>
        <div class="col-sm-6">
            <h1><?php echo $_SESSION['user']['full_name'];?></h1>
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
    <!-- END OF PROFILE SECTION -->

  </body>
</html>
