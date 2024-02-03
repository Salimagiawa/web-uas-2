<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>website sekolah SMK N.1 TELUKDALAM</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<style>
		.heading{
			text-align: center;
			top margin: 25px;
		}
		.heading h1{
			font-size: 50px;
			color:rgb(18, 18, 18);
			margin-bottom: 10px;
		}
		.heading{
			font-size: 20px;
			color: rgb(10, 11, 11);
			margin-bottom: 50px;
		}
        .about{
        	display: flex;
        	align-items: center;
        	width: 85%;
        	margin: auto;
        }
        .about img{
        	flex: 0 50%;
        	max-width: 50%;
        	height: auto;
        }
        .content{
        	padding: 35px;
        }
        .content h2{
        	color: #b2babb;
        	font-size: 24px
        	margin:15px 0px;
        }
        .content p{
        	color: #b2babb;
        	font-size: 18px;
        	line-height: 1,5;
        	margin: 15px 0px;
        }
</style>
</head>
<body>
		<nav class="navbar navbar-inverse"> <!-- navbar start -->
		<div class="container">
			<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="	#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle Nav</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">SMK NEGERI 1 TELUKDALAM</a>
			</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="siswa.php">Data Siswa</a></li>
						<li><a href="pendaftaran.php">Pendaftaran</a></li>
						<li><a href="ulasan.php">Ulasan</a></li>
						<li><a href="kontak.php">Kontak</a></li>
						<li><a href="login.php">Login</a></li>
						
					</ul>
					<form class="navbar-form navbar-right">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="isikan keyword">
					</div>
						<button type="submit" class="btn btn-default">Cari</button>
					</form>
				</div>
		</div>
	</nav>	<!-- navbar end -->
s