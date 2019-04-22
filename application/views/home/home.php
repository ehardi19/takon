<!-- style="border-bottom: 1px solid #b92b27; color:#b92b27;" -->
    <!-- CONTENT -->
    <div id="main">
      <div class="container" style="border-radius:2px; margin-top:30px;">
        <div class="row" style="margin-left:0px;">
          <div class="col-sm-1">
            <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="Profile" height="30" width="30" style="border-radius:50%; margin-top:10px;">
          </div>
          <div class="col" style=" margin-top:10px;">
            <small class="form-text text-muted"><a href="<?php echo site_url('profile');?>" style="color:grey;"><?php echo $_SESSION['user']['full_name'];?></a></small>
          </div>
        </div>

        <div class="row" style="margin-top:3px; margin-left:15px;">
          <a href="" style="color:grey; font-size:20px; margin-bottom:10px;" data-toggle="modal" data-target="#pertanyaan">Apa Pertanyaan Anda?</a>
        </div>

        <div class="row">
          <div class="col"><hr></div>
        </div>

        <form action="<?php echo site_url('home/createQuestion');?>" method="POST">
          <div class="row">
            <div class="col">
              <input type='hidden' name='user_id' value=<?php echo $_SESSION['user']['user_id'];?> required>
              <input id="navs11" class="form-control" type="text" name="question" placeholder="Awali pertanyaan Anda dengan &quot;Apa&quot;, &quot;Bagaimana&quot;, &quot;Mengapa&quot;, dll." style="border:none; width: 100%;" required>
            </div>
          </div>

          <div class="row">
            <div class="col"><hr></div>
          </div>

          <div class="row">
            <div class="col">
              <button type="submit" class="btn btn-primary" name="button" style="margin-left:420px; margin-bottom:10px;">Tambah Pertanyaan</button>
            </div>
          </div>
        </form>

        </div>
      </div>

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
        <?php foreach($_SESSION['answer'] as $answer) {
          if ($answer['question_id'] == $question->question_id) {
        ?>
        <div class='row' style='margin-left:0px; margin-bottom:10px'>
          <div class='col-sm-1'>
            <img src='https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png' alt=Profile' height='30' width='30' style='border-radius:50%; margin-top:10px;'>
          </div>
          <div class='col' style=' margin-top:4px;'>
            <small class='form-text text-muted'><?php echo $answer['full_name'];?></a></small>
            <small class='form-text text-muted'>Dijawab <?php echo $answer['timestamp'];?></a></small>
          </div>
        </div>
        <div class='row' style='margin-left:0px; margin-bottom:10px'>
          <div class='col'><?php echo $answer['answer'];?></div>
        </div>
        <?php }?>
        <?php }?>
        <!-- END OF ANSWER PART -->
      </div>
    </form>
    <?php }?>

    <!-- END OF QUESTION SECTION -->

  </body>
</html>
