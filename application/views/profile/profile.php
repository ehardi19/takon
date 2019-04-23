    <!-- PROFILE SECTION -->
    <form id="profile">
    <!-- Header Profile -->
    <div class="row">
      <div class="col-sm-2">
      <img class="profile_photo_img" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="Profile" height="200" width="200">
      </div>
      <div class="col-sm-6">
        <h2><?php echo $_SESSION['user']['full_name'];?></h2>
        <a href="#" id="icon_profile1" style="color:grey; display:inline-block; margin-right:40px; text-decoration:none;"><img src="https://opramini.weebly.com/uploads/9/5/0/3/95037204/hand-graving-smartphone-silhouette-image.png" alt="Icon" style="width:15px; margin-right:5px; margin-bottom:3px;"><?php echo $_SESSION['user']['phone'];?></a>
        <a href="#" id="icon_profile2" style="color:grey; display:inline-block; margin-right:40px; text-decoration:none;"><img src="https://image.flaticon.com/icons/png/512/97/97962.png" alt="Icon" style="width:20px; margin-right:5px; margin-bottom:3px;"><p style="display:inline-block;"><?php echo $_SESSION['user']['email'];?></p></a>        
      </div>
    </div>
     
    <div class="row">
      <div class="col-sm-8">
        <hr>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-2" style="display:inline-block;">
        <p>Lini Masa</p>
      </div>
      <div class="col" style="display:inline-block;">
        <p style="display:inline-block; margin-right:400px;">Pertanyaan </p>
      </div>
    </div>
    <div class="row" style="margin-top:-20px;">
      <div class="col-sm-2" style="display:inline-block;">
        <hr>
      </div>
      <div class="col-sm-6" style="display:inline-block;">
        <hr>
      </div>
    </div>

    <!-- Load the user's question-->
    <?php foreach($user_question as $uq) {
      if ($uq->user_id == $_SESSION['user']['user_id']) {
    ?>
    <div class="row">
      <div class="col-sm-2">
      </div>
      <div class="col">
        <div class="comentnan" style="">
          <div class="row">
            <div class="col-sm-6">
              <h6><?php echo $uq->question;?></h6>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-2">
              <img class="profile_photo_img" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="Profile" height="30" width="30">
            </div>
            <div class="col">
              <small class="form-text text-muted"><a href="#" style="color:grey; margin-left:-100px;"><?php echo $uq->full_name;?></a></small>
              <small class="form-text text-muted"><a href="#" style="color:grey; margin-left:-100px;">Ditambahkan <?php echo date("d M Y", strtotime($uq->timestamp));?></a></small>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <hr>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php } }?>


    </form>
    <!-- END OF PROFILE SECTION -->

  </body>
</html>
