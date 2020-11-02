<?php
  $t_ticketSelect = "select * from t_ticket";
  $t_ticketSelectResult = mysqli_query($db_link, $t_ticketSelect);

  $tickets = []; // チケットクラスのインスタンスを格納する配列

  while($ticketInfo = mysqli_fetch_array($t_ticketSelectResult)){
    $tickets[] = new Ticket($ticketInfo);
  }
?>

<div class="social-box">
  <div class="container">
   	<div class="row">
       <?php foreach($tickets as $ticket): ?>
			    <div class="col-lg-4 col-xs-12 text-center" onclick="location.href='index.php?page=detail&ticketNo=<?php echo $ticket->getNo(); ?>'">
  		       <div class="box">
               <i class="fas fa-bus fa-5x busicon time<?php echo $ticket->getDayOrNight(); ?>"></i>
  						<div class="box-title">
  							<h3><?php echo $ticket->getName(); ?></h3>
  						</div>
  						<div class="box-text">
  							<span><?php echo "{$ticket->getStartPoint()}&nbsp;➡&nbsp;{$ticket->getEndPoint()}"; ?></span>
  						</div>
  						<div class="box-btn">
  				    <span><?php echo "{$ticket->getStartTime()}発&nbsp;〜&nbsp;{$ticket->getEndTime()}着"; ?></span>
  						</div>
					 </div>
          </div>
        <?php endforeach; ?>
    </div>
  </div>
</div>
