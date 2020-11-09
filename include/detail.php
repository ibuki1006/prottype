<?php
	$ticketNo = $_GET["ticketNo"];
	$t_ticketSelect = "select * from t_ticket where f_ticketNo = {$ticketNo}";
	$t_ticketSelectResult = mysqli_query($db_link, $t_ticketSelect);
	$ticketInfo = mysqli_fetch_array($t_ticketSelectResult);
	$ticket = new Ticket($ticketInfo);

	$t_ticketDetailSelect = "select * from t_ticketDetail where f_ticketNo = {$ticketNo}";
	$t_ticketDetailSelectResult = mysqli_query($db_link, $t_ticketDetailSelect);

	$likeFlg = 0;

	// お気に入りかどうかを判定
	if(fnc_chkData("session", "userNo")){ // ログインしていたら
		$t_likeSelect = "select * from t_like where f_userNo = {$userNo} and f_ticketNo = {$ticketNo}";

		$t_likeSelectResult = mysqli_query($db_link, $t_likeSelect);
		$likeFlg = mysqli_num_rows($t_likeSelectResult);
	}
?>

<div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">

						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><i class="fas fa-bus fa-5x busicon busiconsize"></i></div>
						</div>
					</div>
					<div class="details col-md-6">
						<h3 class="product-title"><?php echo $ticket->getName(); ?></h3>
						<div class="rating">
							<span class="remainSeats">残席：<?php echo $ticket->getRemainSeats(); ?>席</span>
						</div>
						<p class="product-description">
							<?php
								while($ticketDetail = mysqli_fetch_array($t_ticketDetailSelectResult)){
									echo "・{$ticketDetail["f_detail"]}<br>";
								}
							 ?>
						</p>
						<h4 class="price">値段：<span><?php echo "¥".number_format($ticket->getPrice()); ?></span></h4>

						<div class="action">
							<a><button id="reserve" class="add-to-cart btn btn-primary" type="button">予約する</button></a>
							<button class="like btn btn-warning <?php if($likeFlg != 0){ echo "favo"; }?>" id="like" type="button"><span class="fa fa-heart fu"></span></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$("#reserve").on("click", function () {
			<?php if(fnc_chkData("session", "userNo")): ?>
				const url = "index.php?page=reserve";
			<?php else: ?>
				const url = "index.php?page=login";
			<?php endif; ?>

			window.location.href = url;
		});
	</script>
