<!-- style="border-bottom: 1px solid #b92b27; color:#b92b27;" -->
    <!-- CONTENT -->
    <form id="main">
      <div class="container" style="border-radius:2px; margin-top:30px;">
        <div class="row" style="margin-left:0px;">
          <div class="col-sm-1">
            <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="P" height="30" width="30" style="border-radius:50%; margin-top:10px;">
          </div>
          <div class="col" style=" margin-top:10px;">
            <small class="form-text text-muted"><a href="<?php echo site_url('profile');?>" style="color:grey;"><?php echo $_SESSION['user']['full_name'];?></a></small>
          </div>
        </div>

        <div class="row" style="margin-top:3px; margin-left:15px;">
          <a href="" style="color:grey; font-size:20px; margin-bottom:10px;" data-toggle="modal" data-target="#pertanyaan">Apa Pertanyaan Anda?</a>
        </div>
      </div>

      <!-- The Modal -->
      <div class="modal fade" id="pertanyaan">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Body -->
            <form action="<?php echo site_url('home/');?>" method="POST">
            <div class="modal-body">
               <div class="row">
                 <div class="col-sm-2">
                   <img class="profile_photo_img" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="Son Of Zeuz" height="30" width="30">
                 </div>
                 <div class="col-sm-2">
                   <small class="form-text text-muted"><a href="<?php echo site_url('profile');?>" style="color:grey; margin-left:-25px; "><?php echo $_SESSION['user']['full_name'];?></a></small>
                 </div>
               </div>

               <div class="row" style="margin-top:20px;">
                  <div class="col">
                    <input id="navs11" class="form-control" type="text" name="" placeholder="Awali pertanyaan Anda dengan &quot;Apa&quot;, &quot;Bagaimana&quot;, &quot;Mengapa&quot;, dll." style="border:none; width: 100%;">
                  </div>
               </div>
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">
              <small class="form-text text-muted"><a href="" style="color:grey;"  data-dismiss="modal">Batal</a></small>
              <button type="submit" class="btn btn-primary">Tambah Pertanyaan</button>
            </div>
            </form>

          </div>
        </div>
      </div>
    </form>
    <!--END OF NAVBAR -->

    <!-- QUESTION SECTION -->
    <?php foreach($question as $question) {?>
    <form class='post' style='margin-top:10px;'>
      <div class='container' style='border-radius:2px;'>
        <div class='row'>
          <div class='col'>
            <small class='form-text text-muted' style='font-size:13px; margin-left:15px;'>Jawaban</small>
          </div>
        </div>
        <div class='row'>
          <div class='col'>
            <div style='color:black; margin-left:10px; font-size:20px;'><?php echo $question->question;?></div>
          </div>
        </div>
        <div class="row">
          <div class="col"><hr></div>
        </div>
        <!-- ANSWER PART -->
        <div class="row" style="margin-left:0px; margin-bottom:10px">
          <div class="col-sm-1">
            <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="P" height="30" width="30" style="border-radius:50%; margin-top:10px;">
          </div>
          <div class="col" style=" margin-top:4px;">
            <small class="form-text text-muted"><?php echo "user"?></a></small>
            <small class="form-text text-muted"><?php echo "waktu"?></a></small>
          </div>
        </div>
        <div class="row" style="margin-left:0px; margin-bottom:10px">
          <div class="col">Answer</div>
        </div>
        <!-- END OF ANSWER PART -->
      </div>
    </form>
    <?php } ?>

    <!-- END OF QUESTION SECTION -->

  </body>
</html>
