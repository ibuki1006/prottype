<div class="social-box">
  <div class="container">
   	<div class="row">
       <?php for($i = 0; $i < 8; $i++):?>
			    <div class="col-lg-4 col-xs-12 text-center" onclick="location.href='index.php?page=detail&ticketNo=<?php echo $i; ?>'">
  		       <div class="box">
               <i class="fas fa-bus fa-5x busicon"></i>
  						<div class="box-title">
  							<h3>夜行バス</h3>
  						</div>
  						<div class="box-text">
  							<span>夜行バスです</span>
  						</div>
  						<div class="box-btn">
  				    <!-- <a href="index.php?page=detail">詳細</a> -->
  						</div>
					 </div>
          </div>
        <?php endfor?>
    </div>
  </div>
</div>
