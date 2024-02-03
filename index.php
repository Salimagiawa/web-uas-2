<?php include "header.php"; ?>


<div class="container"> <!-- carousel -->
		<div class="row">
			<div class="col-md-12">	
				  <div class="carousel slide" id="contoh-carousel" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#contoh-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#contoh-carousel" data-slide-to="1"></li>
							<li data-target="#contoh-carousel" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="images/slide-1.jpeg" width="200%">
							</div>
							<div class="item">
								<img src="images/slide-2.jpeg" width="200%">
							</div>
							<div class="item">
								<img src="images/slide-3.jpeg" width="200%">
							</div>
						</div>
						<a class="left carousel-control" href="#contoh-carousel" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Prev</span>
						</a>
						<a class="right carousel-control" href="#contoh-carousel" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
				</div>
			</div>
		</div>
	</div> <br><br>

 <?php include "footer.php"; ?>