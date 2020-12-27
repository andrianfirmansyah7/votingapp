<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pemilu KM 2021 - Menuju SI4305 yang Berdikari</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>

	<!-- STYLES -->

	<style {csp-style-nonce}>
		* {
			transition: background-color 300ms ease, color 300ms ease;
		}
		*:focus {
			background-color: rgba(221, 72, 20, .2);
			outline: none;
		}
		html, body {
			color: rgba(33, 37, 41, 1);
			font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
			font-size: 16px;
			margin: 0;
			padding: 0;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
			text-rendering: optimizeLegibility;
		}
		header {
			background-color: rgba(247, 248, 249, 1);
			padding: .4rem 0 0;
		}
		.menu {
			padding: .4rem 2rem;
		}
		header ul {
			border-bottom: 1px solid rgba(242, 242, 242, 1);
			list-style-type: none;
			margin: 0;
			overflow: hidden;
			padding: 0;
			text-align: right;
		}
		header li {
			display: inline-block;
		}
		header li a {
			border-radius: 5px;
			color: rgba(0, 0, 0, .5);
			display: block;
			height: 44px;
			text-decoration: none;
		}
		header li.menu-item a {
			border-radius: 5px;
			margin: 5px 0;
			height: 38px;
			line-height: 36px;
			padding: .4rem .65rem;
			text-align: center;
		}
		header li.menu-item a:hover,
		header li.menu-item a:focus {
			background-color: white;
			color: blue;
		}
		header .logo {
			float: left;
			height: 44px;
			padding: .4rem .5rem;
		}
		header .menu-toggle {
			display: none;
			float: right;
			font-size: 2rem;
			font-weight: bold;
		}
		header .menu-toggle button {
			background-color: blue;
			border: none;
			border-radius: 3px;
			color: rgba(255, 255, 255, 1);
			cursor: pointer;
			font: inherit;
			font-size: 1.3rem;
			height: 36px;
			padding: 0;
			margin: 11px 0;
			overflow: visible;
			width: 40px;
		}
		header .menu-toggle button:hover,
		header .menu-toggle button:focus {
			background-color: blue;
			color: rgba(255, 255, 255, .8);
		}
		header .heroe {
			margin: 0 auto;
			max-width: 1100px;
			padding: 1rem 1.75rem 1.75rem 1.75rem;
		}
		header .heroe h1 {
			font-size: 2.5rem;
			font-weight: 500;
		}
		header .heroe h2 {
			font-size: 1.5rem;
			font-weight: 300;
		}
		section {
			margin: 0 auto;
			max-width: 1100px;
			padding: 2.5rem 1.75rem 3.5rem 1.75rem;
		}
		section h1 {
			margin-bottom: 2.5rem;
		}
		section h2 {
			font-size: 120%;
			line-height: 2.5rem;
			padding-top: 1.5rem;
		}
		section pre {
			background-color: rgba(247, 248, 249, 1);
			border: 1px solid rgba(242, 242, 242, 1);
			display: block;
			font-size: .9rem;
			margin: 2rem 0;
			padding: 1rem 1.5rem;
			white-space: pre-wrap;
			word-break: break-all;
		}
		section code {
			display: block;
		}
		section a {
			color: rgba(221, 72, 20, 1);
		}
		section svg {
			margin-bottom: -5px;
			margin-right: 5px;
			width: 25px;
		}
		.further {
			background-color: rgba(247, 248, 249, 1);
			border-bottom: 1px solid rgba(242, 242, 242, 1);
			border-top: 1px solid rgba(242, 242, 242, 1);
		}
		.further h2:first-of-type {
			padding-top: 0;
		}
		footer {
			background-color: rgba(221, 72, 20, .8);
			text-align: center;
		}
		footer .environment {
			color: rgba(255, 255, 255, 1);
			padding: 2rem 1.75rem;
		}
		footer .copyrights {
			background-color: rgba(62, 62, 62, 1);
			color: rgba(200, 200, 200, 1);
			padding: .25rem 1.75rem;
		}
		@media (max-width: 559px) {
			header ul {
				padding: 0;
			}
			header .menu-toggle {
				padding: 0 1rem;
			}
			header .menu-item {
				background-color: blue;
				border-top: 1px solid rgba(242, 242, 242, 1);
				margin: 0 15px;
				width: calc(100% - 30px);
			}
			header .menu-toggle {
				display: block;
			}
			header .hidden {
				display: none;
			}
			header li.menu-item a {
				background-color: blue;
			}
			header li.menu-item a:hover,
			header li.menu-item a:focus {
				background-color: blue;
				color: rgba(255, 255, 255, .8);
			}
		}
	</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<!-- HEADER: MENU + HEROE SECTION -->
<header>

	<div class="menu">
		<ul>
			<li class="logo"><a href="<?php echo base_url(); ?>"><img height="35" src="/logo.jpg"> SI-43-05 Telkom University</a>
			</li>
			<li class="menu-toggle">
				<button onclick="toggleMenu();">&#9776;</button>
			</li>
			<li class="menu-item hidden"><a href="<?php echo base_url();?>/Awal/visimisi">Visi-Misi Calon</a>
			</li>
			<li class="menu-item hidden"><a href="<?php echo base_url();?>/Awal/pemilihtetap">Daftar Pemilih Tetap</a></li>
			<li class="menu-item hidden"><a href="<?php echo base_url();?>/Awal/rekapitulasi">Hasil Rekapitulasi Suara</a></li>
			<li class="menu-item hidden"><a href="<?php echo base_url();?>/Awal/login">Login</a>
			</li>
		</ul>
	</div>

</header>

<section>
	<h1 style="font-size: 30px"><center>Surat Suara</center></h1>
	<?php
	foreach ($biodata as $bd) {
		$a = $bd->nama_mahasiswa;
		$b = $bd->nim;
	}
	?>
	<div class="container">
    <div class="row" style="margin-bottom: 30px;">
   	<table border="1px" style="width:1100px">
   	<tr>	
   	<?php foreach($calon as $row):?>
    	<td colspan="2"><center><h3><?= $row->nomor_urut ?></h3></center></td>
    <?php endforeach;?>	
    	</tr>
    	<tr>
   	<?php foreach($calon as $row):?>
    		<td style="padding-left: 10px;padding-right: 10px"><img src="/foto/<?= $row->foto_calon_km;?>" style="width: 150px;height: 200px;margin-top: 20px;"></td>
    		<td style="padding-left: 10px;padding-right: 10px">
    		<img src="/foto/<?= $row->foto_calon_wakil;?>" style="width: 150px;height: 200px;margin-top: 20px;"></td>
    <?php endforeach;?>	
    	</tr>	
    <tr>
    	<?php foreach($calon as $row):?>
    		<td><center><p style="font-size: 17px"><b>Calon KM</b></p>
    			<p style="font-size: 13px"><?= $row->nama_calon_km?></p></center>
    		</td>	
    		<td><center><p style="font-size: 17px"><b>Calon Wakil KM</b></p>
    			<p style="font-size: 13px"><?= $row->nama_calon_wakil?></p></center>
    		</td>
    	<?php endforeach;?>
    </tr>	
    <tr>
    	<?php foreach($calon as $row):?>
    	<td colspan="2"><center><h3>
    		<form method="POST" action="<?php echo base_url()?>/awal/pemilihan">
    			<input type="hidden" name="nim" value="<?php echo $b?>">
    			<input type="hidden" name="pilihan" value="<?php echo $row->nomor_urut?>">
    			<input type="submit" value="Pilih" class="btn btn-primary">	
    		</form>
    	</center></td>
    	<?php endforeach;?>	
    </tr>
</table>
    </div>
    </div>
    </div>

    	

   </div>
</section>

<footer>
	<div class="copyrights">

		<p>&copy; <?= date('Y') ?> Andrian Firmansyah. Powered by Codeigniter 4.0</p>

	</div>

</footer>

<!-- SCRIPTS -->

<script>
	function toggleMenu() {
		var menuItems = document.getElementsByClassName('menu-item');
		for (var i = 0; i < menuItems.length; i++) {
			var menuItem = menuItems[i];
			menuItem.classList.toggle("hidden");
		}
	}
</script>

<!-- -->

</body>
</html>

