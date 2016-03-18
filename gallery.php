<?php include("header.php");
$eventsDirectory = 'images/events/';?>
<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
		<div style="padding: 20px 0 20px 30px;"> 			<div class="crumbs w3-hide-small">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="gallery.php">Gallery</a></li>
			</ul>
			</div>
		</div>
		<div id="main-content">
			<div class="wrap-content">
				<div class="w3-container w3-red w3-card-8"><p>Main photos</p></div>
				<div class="w3-container" style="position: relative;overflow: hidden; padding: 0px" >
						<a class="w3-btn-floating w3-hover-dark-grey" style="position: absolute;left: 5%;top: 50%;" onclick="plusDivs(-1)">❮</a>
						<a class="w3-btn-floating w3-hover-dark-grey" style="position: absolute;right: 5%;top: 50%;" onclick="plusDivs(1)">❯</a>

							<?php
							foreach (preg_grep('~\.(jpeg|jpg|png)$~', scandir($eventsDirectory)) as $file) {
								$photo = $eventsDirectory . $file;
								preg_match("/(?<=\\*).*?(?=\\.)/",$file, $description);
								echo("
									<div class=\"w3-content w3-center \" style=\"max-width:100%;position:relative;margin: 0;\">
										<div class=\"w3-display-container mySlides\">
											<img src=\"$photo\" style=\"width:100%\">");
											if(!is_null($description[0]))
												echo(" <div class=\"w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black\">
												 $description[0]
											</div>");
											echo("
										</div>
									</div>");
							};?>


						</div>
				<div class="w3-container w3-red w3-card-8"><p>Albums of events</p></div>
				<div class="w3-row w3-center" >
					<?php
					foreach (glob($eventsDirectory."*",GLOB_ONLYDIR) as $dir) { //Pour chaque ss répertoire du dossier $eventDirectory
						$eventName = str_replace("images/events/", '', $dir);
						$dirs[] = $eventName;
						$h = opendir($dir); //Open the current directory
						while (false !== ($entry = readdir($h))) {
							$extensionImages = array("png", "jpg", "gif", "bmp");
							if (in_array(strtolower(pathinfo($entry, PATHINFO_EXTENSION)), $extensionImages)) { //Skips over . and ..
								$firstImage = $dir . "/" . $entry;
								echo("<div class=\"col-1-4\" >
								<div class=\"zoom-container\">
								<a href=\"eventGallery.php?event=$eventName\">
									<span class=\"zoom-caption\">
										<span>$eventName</span>
									</span>
									<img src=\"$firstImage\" />
								</a>
						</div>
					</div>");
								break; //Exit the loop so no more files are read
							}
						}
					}

					?>
				</div>

			</div>
		</div> 
	</div>
</section>

<!--////////////////////////////////////Footer-->
<?php include("footer.php") ?>


	<!-- js -->
	<script src="js/classie.js"></script>
	<script src="js/demo.js"></script>
	<script>
		var slideIndex = 1;
		showDivs(slideIndex);

		function plusDivs(n) {
			showDivs(slideIndex += n);
		}

		function showDivs(n) {
			var i;
			var x = document.getElementsByClassName("mySlides");
			if (n > x.length) {slideIndex = 1}
			if (n < 1) {slideIndex = x.length} ;
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";
			}
			x[slideIndex-1].style.display = "block";
		}


		var slideIndex = 0;
		carousel();

		function carousel() {
			var i;
			var x = document.getElementsByClassName("mySlides");
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";
			}
			slideIndex++;
			if (slideIndex > x.length) {slideIndex = 1}
			x[slideIndex-1].style.display = "block";
			setTimeout(carousel, 2000);
		}
	</script>
</div>
</body></html>