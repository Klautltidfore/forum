<?php
ob_start();


function template_main()
{
	global $context
	

?>

<?php ?>

<script src="https://kit.fontawesome.com/fa400b581b.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="karakter/karakterbagla/animate.css">
	<link rel="stylesheet" type="text/css" href="karakter/karakterbagla/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="karakter/karakterbagla/index.css">
	<link rel="stylesheet" type="text/css" href="karakter/karakterbagla/all.css">
	<link rel="stylesheet" type="text/css" href="karakter/karakterbagla/alert.css">
	<link rel="stylesheet" type="text/css" href="karakter/karakterbagla/css(1)">
	
	<link rel="icon" href="https://www.rina-roleplay.com/forum/Themes/rinatheme/images/favicon.png" type="image/x-icon">
	<link rel="shortcut icon" href="https://www.rina-roleplay.com/forum/Themes/rinatheme/images/favicon.png" type="image/x-icon">
	
	<link rel="stylesheet" type="text/css" href="karakter/karakterbagla/webkit.css">
	<script src="karakter/karakterbagla/osd.js.indir"></script><script src="karakter/karakterbagla/f(6).txt"></script><script src="karakter/karakterbagla/f(7).txt" id="google_shimpl"></script><script async="" src="karakter/karakterbagla/analytics.js.indir"></script><script data-ad-client="ca-pub-8279012001768989" async="" src="karakter/karakterbagla/f(8).txt" data-checked-head="true"></script>
	<script type="text/javascript" src="karakter/karakterbagla/jquery.js.indir"></script>
	<script type="text/javascript" src="karakter/karakterbagla/jquery_ui_custom.js.indir"></script>
	<script type="text/javascript" src="karakter/karakterbagla/jquery.inputlimiter.min.js.indir"></script>
	<script type="text/javascript" src="karakter/karakterbagla/jquery.autosize.js.indir"></script>
	<script type="text/javascript" src="karakter/karakterbagla/jquery.validate.js.indir"></script>
	<script type="text/javascript" src="karakter/karakterbagla/jquery.collapsible.min.js.indir"></script>
	<script type="text/javascript" src="karakter/karakterbagla/jquery.jgrowl.min.js.indir"></script>
	<script type="text/javascript" src="karakter/karakterbagla/bootstrap.js.indir"></script>
	<script type="text/javascript" src="karakter/karakterbagla/leaves.min.js.indir"></script>
	<script type="text/javascript" src="karakter/karakterbagla/rotate3Di.min.js.indir"></script>
<script src="karakter/karakterbagla/jquery-3.0.0.min.js.indir"></script>

<style>
	.white-box {
		width: 600px;
		height: auto;
		border-radius: 5px;
		background-color: #fff;
		margin:0 auto;
		padding: 15px;
	}
	
	hr {
		margin-bottom: 6px;
		margin-top: 6px;
		background-color: #0000000d;
	}
	
	.login-header {
		font-size: 18px;
		font-weight: bold;
	}
</style>
	<script type="text/javascript" src="karakter/karakterbagla/custom.js.indir"></script>
	<script type="text/javascript" src="karakter/karakterbagla/alert.js.indir"></script>

	<script type="text/javascript" src="karakter/karakterbagla/script.js.indir"></script>
	<script type="text/javascript" src="karakter/karakterbagla/theme.js.indir"></script>

	
	<meta name="description" content="Giriş Yap">
	<meta name="keywords" content="sa-mp,san,andreas,multi,player,samp,grand,theft,auto,mta,san,andreas,roleplay,rina,r,i,n,a,sa-mp roleplay">
	<meta property="og:image" content="https://www.rina-roleplay.com/forum/icons/og.png">
	<title>Karakter Bağla</title>
	<script type="text/javascript" src="karakter/karakterbagla/ncode_imageresizer.js.indir"></script>

	<script type="text/javascript" src="karakter/karakterbagla/ncode_imageresizer.js.indir"></script>
	<link rel="stylesheet" type="text/css" href="karakter/karakterbagla/BBCode-YouTube2.css">
	<link rel="stylesheet" type="text/css" href="karakter/karakterbagla/BBCode-Vimeo.css">
<link rel="preload" href="karakter/karakterbagla/f(9).txt" as="script"><script type="text/javascript" src="karakter/karakterbagla/f(9).txt"></script><link rel="preload" href="karakter/karakterbagla/f(10).txt" as="script"><script type="text/javascript" src="karakter/karakterbagla/f(10).txt"></script></head>
		
	
	<div class="main_body">
		<div class="wrapper">
				<div id="main_content">
	﻿

<form action="" method="POST">
<div class="row">
	<div class="col-md-12 col-xs-12">
		<div class="white-box">
			
			<span class="login-header"><i class="fa fa-lock"></i> <?php echo $context['user']['karakter_durum']; ?></span>
			<hr>
			  <div id="sonuc"></div>
			  
			  <div class="form-group">
				<label for="karakterad">Karakter Adı</label>
				<input type="text" class="form-control" name="karakterad" placeholder="Ad_Soyad">
			  </div>
			  
			  <div class="form-group">
				<label for="sifre">Şifre</label>
				<input type="password" class="form-control" name="sifre" placeholder="***">
				<small class="form-text text-muted">Şifrenizi asla kimseyle paylaşmayınız</small>
			  </div>
			  
			  <div class="form-group">
				<button style="width:100%;" class="btn btn-success">Karakterimi Bağla</button>
			  </div>
			</div>
	</div>
</div>
</form>
			</div>
		</div>
	</div>

<?php
/* Yukarıya koyduğumuz kodların içinde tek tırnak işareti ( ' ) varsa, önlerine mutlaka ters bölü ( \ ) koyuyoruz.
Yoksa PHP hatası alıyoruz - Template Parse Error. */
}
ob_end_flush();
?>