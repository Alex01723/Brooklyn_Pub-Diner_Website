<?php include ("header.php")?>
	
<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
		<div class="crumbs">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="menu.php">Menu</a></li>
			</ul>
		</div>
		<div id="main-content">

			<div class="wrap-content">


			<div class="w3-row w3-border">

				<div class="w3-third w3-container w3-red" >
					<div style="text-align: center;color: white"><h3>Formule du midi</h3>
						Bla Blah Bla<br>
						Bla Blah Bla<br>
						Bla Blah Bla<br>
						Bla Blah Bla<br></div>
				</div>
				<div class="w3-twothird w3-container "  >
					<?php
					for ($i = 1; $i <= 10; $i++) {
						echo('<div class="post">
								<a href="#"><img src="images/15.jpg"/></a>
								<div class="wrapper">
								  <h5><a href="#">Lorem ipsum dolor</a></h5>
								  <span>$25 - $26</span>
								</div>
							</div>');
					}

					?>
				</div>

				</div>
			</div>

<!--				<div class="row">
					<div class="col-1-3">
						<div class="wrap-col">
							<h3>Pasta Plates</h3>
							<div class="post">
								<a href="#"><img src="images/15.jpg"/></a>
								<div class="wrapper">
								  <h5><a href="#">Lorem ipsum dolor</a></h5>
								  <span>$25 - $26</span>
								</div>
							</div>
							<div class="post">
								<a href="#"><img src="images/10.jpg"/></a>
								<div class="wrapper">
								  <h5><a href="#">Lorem ipsum dolor</a></h5>
								   <span>$25 - $26</span>
								</div>
							</div>
							<div class="post">
								<a href="#"><img src="images/9.jpg"/></a>
								<div class="wrapper">
								  <h5><a href="#">Lorem ipsum dolor</a></h5>
								  <span>$25 - $26</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-1-3">
						<div class="wrap-col">
							<h3>Starters</h3>
							<div class="post">
								<a href="#"><img src="images/14.jpg"/></a>
								<div class="wrapper">
								  <h5><a href="#">Lorem ipsum dolor</a></h5>
								   <span>$25 - $26</span>
								</div>
							</div>
							<div class="post">
								<a href="#"><img src="images/8.jpg"/></a>
								<div class="wrapper">
								  <h5><a href="#">Lorem ipsum dolor</a></h5>
								  <span>$25 - $26</span>
								</div>
							</div>
							<div class="post">
								<a href="#"><img src="images/7.jpg"/></a>
								<div class="wrapper">
								  <h5><a href="#">Lorem ipsum dolor</a></h5>
								  <span>$25 - $26</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-1-3">
						<div class="wrap-col">
							<h3>Salads</h3>
							<div class="post">
								<a href="#"><img src="images/13.jpg"/></a>
								<div class="wrapper">
								  <h5><a href="#">Lorem ipsum dolor</a></h5>
								  <span>$25 - $26</span>
								</div>
							</div>
							<div class="post">
								<a href="#"><img src="images/4.jpg"/></a>
								<div class="wrapper">
								  <h5><a href="#">Lorem ipsum dolor</a></h5>
								  <span>$25 - $26</span>
								</div>
							</div>
							<div class="post">
								<a href="#"><img src="images/5.jpg"/></a>
								<div class="wrapper">
								  <h5><a href="#">Lorem ipsum dolor</a></h5>
								  <span>$25 - $26</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-1-3">
						<div class="wrap-col">
							<h3>Chef's Specials</h3>
							<div class="post">
								<a href="#"><img src="images/15.jpg"/></a>
								<div class="wrapper">
								  <h5><a href="#">Lorem ipsum dolor</a></h5>
								   <span>$25 - $26</span>
								</div>
							</div>
							<div class="post">
								<a href="#"><img src="images/10.jpg"/></a>
								<div class="wrapper">
								  <h5><a href="#">Lorem ipsum dolor</a></h5>
								  <span>$25 - $26</span>
								</div>
							</div>
							<div class="post">
								<a href="#"><img src="images/9.jpg"/></a>
								<div class="wrapper">
								  <h5><a href="#">Lorem ipsum dolor</a></h5>
								   <span>$25 - $26</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-1-3">
						<div class="wrap-col">
							<h3>Fast Food</h3>
							<div class="post">
								<a href="#"><img src="images/14.jpg"/></a>
								<div class="wrapper">
								  <h5><a href="#">Lorem ipsum dolor</a></h5>
								  <span>$25 - $26</span>
								</div>
							</div>
							<div class="post">
								<a href="#"><img src="images/8.jpg"/></a>
								<div class="wrapper">
								  <h5><a href="#">Lorem ipsum dolor</a></h5>
								   <span>$25 - $26</span>
								</div>
							</div>
							<div class="post">
								<a href="#"><img src="images/7.jpg"/></a>
								<div class="wrapper">
								  <h5><a href="#">Lorem ipsum dolor</a></h5>
								   <span>$25 - $26</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-1-3">
						<div class="wrap-col">
							<h3>Seafood Specials</h3>
							<div class="post">
								<a href="#"><img src="images/13.jpg"/></a>
								<div class="wrapper">
								  <h5><a href="#">Lorem ipsum dolor</a></h5>
								   <span>$25 - $26</span>
								</div>
							</div>
							<div class="post">
								<a href="#"><img src="images/4.jpg"/></a>
								<div class="wrapper">
								  <h5><a href="#">Lorem ipsum dolor</a></h5>
								   <span>$25 - $26</span>
								</div>
							</div>
							<div class="post">
								<a href="#"><img src="images/5.jpg"/></a>
								<div class="wrapper">
								  <h5><a href="#">Lorem ipsum dolor</a></h5>
								   <span>$25 - $26</span>
								</div>
							</div>
						</div>
					</div>
				</div>-->

		</div> 
	</div>
</section>

<?php include ("footer.php")?>


	<!-- js -->
	<script src="js/classie.js"></script>
	<script src="js/demo.js"></script>
	
</div>
</body></html>