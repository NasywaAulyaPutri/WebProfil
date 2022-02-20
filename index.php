<!DOCTYPE html>
<html>
	<head>
		<title>Profil Diri</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="content">
			<header>
				<h1 class="judul">Profil Diri</h1>
				<h3 class="deskripsi">Project Personal Web Dinamais</h3>
			</header>
			<div class="menu">
				<ul>
					<li><a href="index.php?page=Profildiri">Profil</a></li>
					<li><a href="index.php?page=Tentang">Tentang</a></li>
					<li><a href="index.php?page=Kontak">Kontak</a></li>
				</ul>
			</div>
			<div class="badan">
			<?php 
			if(isset($_GET['page'])){
				$page = $_GET['page'];
		
				switch ($page) {
					case 'Profildiri':
						include "Halaman/Profildiri.php";
						break;
					case 'Tentang':
						include "Halaman/Tentang.php";
						break;
					case 'Kontak':
						include "Halaman/Kontak.php";
						break;	
                    default:
						echo "<center><h3>Nasywa Aulya Putri</h3></center>";
						break;	
				}
			}else{
				include "Halaman/Profildiri.php";
			}
            
			?>
			</div>
		</div>
	</body>
</html>