<?php include("header.php")?>
<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">

			<div style="padding: 20px 0 20px 30px;">
				<div class="crumbs w3-hide-small">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="events.php">Events</a></li>
				</ul>
			</div></div>

		<div id="main-content" class="col">
			<div class="wrap-content">



<?php foreach ($DB->query("SELECT * FROM events")->fetchAll() as $event){
	$dateFormat = 'l j F Y - H\:i';
	$button =null;
	//Date formatée
	$formatedDate=date($dateFormat,$event["date"]);

	if($event["date"]==null){
		$date="";
	}elseif($event["date"]<time()){
		$date="Planned on ".$formatedDate;
	}else{
		//L'événement est fini et il y avait une date
		$date="Was planned on ".$formatedDate;
	}
	if($event["inGallery"]==1 && $event["date"]<time()) {
		$button = "<a class=\"button button02\" style='float: right;' href='eventGallery.php?event=${event['name']}'>Photos</a> ";
	}else $button=null;
	echo <<<EOT
<article>

					<div class="art-header " >
						<a href="#"><h3>${event["name"]} </h3></a>
						<div class="info"> $date </div>
					</div>
					<div class="w3-row">
					<div class="w3-container w3-col l3 m10 w3-center ">
						<p><img src="${event["photo"]}" style="width:100%" /></p>
					</div>
					<div class="w3-container  w3-col l9 " style="text-align:justify;" >${event["description"]} $button</div>


				</div>

				</article>

EOT;

}?>




			</div>
		</div>

	</div>
</section>

<?php include("footer.php") ?>

	<!-- js -->
	<script src="js/classie.js"></script>
	<script src="js/demo.js"></script>
	
</div>
</body></html>