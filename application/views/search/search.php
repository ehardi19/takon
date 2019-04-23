    <!-- SEARCH SECTION -->
    <form class="Search">
      <div class="row">
        <div class="col">
          <p style="color:grey; margin-left:328px; margin-top:40px;">Hasil untuk <?php echo $_SESSION['keyword'];?><span style="color:black"><b><?php echo $this->keyword;?></b></span></p>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-6" style="margin-left:328px;">
          <hr>
        </div>
      </div>

      <?php foreach ($result as $result) {
        ?>
      <div class="Object">
        <div class="row">
          <div class="col-sm-6" style="margin-left:328px;">
            <a href="#"><?php echo $result['question'];?></a>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6" style="margin-left:328px;">
            <hr>
          </div>
        </div>
      </div>
      <?php }?>
    </form>
    <!-- END OF SEARCH SECTION -->
    
  </body>
</html>
