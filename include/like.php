<?php
  $t_ticketSelect = "select * from t_ticket where f_ticketNo = any (select f_ticketNo from t_like where f_userNo = {$userNo})";
  $t_ticketSelectResult = mysqli_query($db_link, $t_ticketSelect);

  $likeNum = mysqli_num_rows($t_ticketSelectResult);

  if($likeNum != 0) {

    $tickets = []; // チケットクラスのインスタンスを格納する配列

    while($ticketInfo = mysqli_fetch_array($t_ticketSelectResult)){
      $tickets[] = new Ticket($ticketInfo);
    }
   ?>

    <div class="like-wrap">
      <div class="container">
        <div class="like-item">
          <?php foreach($tickets as $ticket): ?>
          <div class="content">
            <div class="img-product">
                <i class="fas fa-bus fa-4x busicon"></i>
            </div>
            <div class="name-product">
                <?php echo $ticket->getName(); ?>
            </div>
            <div class="date"><?php echo "{$ticket->getStartTime()}発 ~ {$ticket->getEndTime()}着"; ?></div>
            <div class="total">
                <?php echo "¥" . number_format($ticket->getPrice()); ?>
            </div>
            <div class="cart-in">
              <a href="#" class="cart-in-button">予約する</a>
            </div>
            <div class="like-out">
              <a href="#" class="like-button">お気に入りから削除</a>
            </div>
          </div>
        <?php endforeach; ?>
        </div>
      </div>
    </div>

<?php
}else {
  echo "<h3 class='none'>現在お気に入りに登録されているバスはありません。</h3>";
}
?>
