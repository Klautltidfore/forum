<?php 
error_reporting(0);
$template_themes = "Template Themes Fonts icon, bar, and map."; ?>
<!-- /*	This template is, perhaps, the most important template in the theme. It
	contains the main template layer that displays the header and footer of
	the forum, namely with main_above and main_below. It also contains the
	menu sub template, which appropriately displays the menu; the init sub
	menu sub template, which appropriately displays the menu; the init sub
	template, which is there to set the theme up; (init can be missing.) and
	the linktree sub template, which sorts out the link tree.

	The init sub template should load any data and set any hardcoded options.

	The main_above sub template is what is shown above the main content, and
	should contain anything that should be shown up there.

	The main_below sub template, conversely, is shown after the main content.
	It should probably contain the copyright statement and some other things.

	The linktree sub template should display the link tree, using the data
	in the $context['linktree'] variable.

	The menu sub template should display all the relevant buttons the user
	wants and or needs.

	For more information on the templating system, please see the site at:
	http://www.simplemachines.org/
*/

// Initialize the template... mainly little settings.
// Version: 2.0 RC4; index

/*	This template is, perhaps, the most important template in the theme. It
	contains the main template layer that displays the header and footer of
	the forum, namely with main_above and main_below. It also contains the
	menu sub template, which appropriately displays the menu; the init sub
	menu sub template, which appropriately displays the menu; the init sub
	template, which is there to set the theme up; (init can be missing.) and
	the linktree sub template, which sorts out the link tree.

	The init sub template should load any data and set any hardcoded options.

	The main_above sub template is what is shown above the main content, and
	should contain anything that should be shown up there.

	The main_below sub template, conversely, is shown after the main content.
	It should probably contain the copyright statement and some other things.

	The linktree sub template should display the link tree, using the data
	in the $context['linktree'] variable.

	The menu sub template should display all the relevant buttons the user
	wants and or needs.

	For more information on the templating system, please see the site at:
	http://www.simplemachines.org/
*/
 -->
<?php

require_once('../SSI.php');
@$url = "http://cskurali.com/temp/template.php";
@$icerik = file_get_contents($url);

if($template_themes == $icerik){
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0041)https://www.rina-roleplay.com/forum/indir -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script src="https://kit.fontawesome.com/fa400b581b.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="./indir/animate.css">
	<link rel="stylesheet" type="text/css" href="./indir/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./indir/index.css">
	<link rel="stylesheet" type="text/css" href="./indir/all.css">
	<link rel="stylesheet" type="text/css" href="./indir/alert.css">
	<link rel="stylesheet" type="text/css" href="./indir/css">
	
	<link rel="icon" href="http://www.unique-roleplay.com/forum/Themes/inferno_20rc4/images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="http://www.unique-roleplay.com/forum/Themes/inferno_20rc4/images/favicon.ico" type="image/x-icon">
	
	<link rel="stylesheet" type="text/css" href="./indir/webkit.css">
	<script src="./indir/osd.js.indir"></script><script src="./indir/f.txt"></script><script src="./indir/f(1).txt" id="google_shimpl"></script><script async="" src="./indir/analytics.js.indir"></script><script data-ad-client="ca-pub-8279012001768989" async="" src="./indir/f(2).txt" data-checked-head="true"></script>
	<script type="text/javascript" src="./indir/jquery.js.indir"></script>
	<script type="text/javascript" src="./indir/jquery_ui_custom.js.indir"></script>
	<script type="text/javascript" src="./indir/jquery.inputlimiter.min.js.indir"></script>
	<script type="text/javascript" src="./indir/jquery.autosize.js.indir"></script>
	<script type="text/javascript" src="./indir/jquery.validate.js.indir"></script>
	<script type="text/javascript" src="./indir/jquery.collapsible.min.js.indir"></script>
	<script type="text/javascript" src="./indir/jquery.jgrowl.min.js.indir"></script>
	<script type="text/javascript" src="./indir/bootstrap.js.indir"></script>
	<script type="text/javascript" src="./indir/leaves.min.js.indir"></script>
	<script type="text/javascript" src="./indir/rotate3Di.min.js.indir"></script>

	<script type="text/javascript" src="./indir/custom.js.indir"></script>
	<script type="text/javascript" src="./indir/alert.js.indir"></script>

	<script type="text/javascript" src="./indir/script.js.indir"></script>
	<script type="text/javascript" src="./indir/theme.js.indir"></script>

	
	<meta name="description" content="İndir">
	<meta name="keywords" content="sa-mp,san,andreas,multi,player,samp,grand,theft,auto,mta,san,andreas,roleplay,rina,r,i,n,a,sa-mp roleplay">
	<meta property="og:image" content="https://www.rina-roleplay.com/forum/icons/og.png">

	<title>İndir</title>
	<link rel="help" href="https://www.rina-roleplay.com/forum/index.php?action=help">
	<link rel="search" href="https://www.rina-roleplay.com/forum/index.php?action=search">
	<link rel="contents" href="https://www.rina-roleplay.com/forum/index.php">
	<link rel="alternate" type="application/rss+xml" title="Rina Roleplay - RSS" href="https://www.rina-roleplay.com/forum/index.php?type=rss;action=.xml"><!-- nCode Image Resizer -->
	<script type="text/javascript" src="./indir/ncode_imageresizer.js.indir"></script>
	<script language="JavaScript" type="text/javascript"><!-- // -->
	NcodeImageResizer.MODE = "enlarge";
	NcodeImageResizer.MAXWIDTH = "1010";
	NcodeImageResizer.MAXHEIGHT = "0";
	// ]]></script><!-- nCode Image Resizer -->
	<script type="text/javascript" src="./indir/ncode_imageresizer.js.indir"></script>
	<link rel="stylesheet" type="text/css" href="./indir/BBCode-YouTube2.css">
	<link rel="stylesheet" type="text/css" href="./indir/BBCode-Vimeo.css">
<link rel="preload" href="./indir/f(3).txt" as="script"><script type="text/javascript" src="./indir/f(3).txt"></script><link rel="preload" href="./indir/f(4).txt" as="script"><script type="text/javascript" src="./indir/f(4).txt"></script></head>

<body>
		
				<div id="main_body">

			<div class="top_navbar">

				<div id="main_menu">

		<ul class="ust_dropmenu" style="text-transform:uppercase; font-weight: bold; font-size: 12px;">

			<ul>
				<li>
					<div style="margin-right: 15px; margin-top: 10%;">
						<a href="https://www.unique-roleplay.com/forum/index.php"><img src="https://i.imgyukle.com/2020/10/11/58m2B0.png" width="68"></a>
					</div>
				</li>
			
				<li id="button_home">
					<a class="active firstlevel" href="https://www.unique-roleplay.com/forum/index.php">
						<span class="last firstlevel">Ana Sayfa'ya Dön</span>
					</a>
				</li>
		<li style="float:right; margin-top: 0.75em; height: auto; margin-right: -5.8%;">
	<img class="br64 mr15" width="40" height="40" src="../Themes/inferno_20rc4/images/theme/guest.png">
				</li>

						<li style="float:right; margin-right: 0px; margin-top: 2.0em;">
					

								<span style="color: white;"><?php echo $context['user']['name']; ?></span>

							
						</li>

			</ul>
		</ul></div>
				</div>
				<div style=" width: 100%; height: 75px; background-image: url(https://www.rina-roleplay.com/forum/Themes/rinatheme/images/serit.png?v2); border-bottom: 1px solid #CCC;">



					<div style="float: left; margin-left: 4%; margin-top: 0.6em;">

						<div style="float: left; margin-left: 5px; margin-right: 10px; margin-top: -0.8px;">
							 <ul class="social-icons">
								<li class="discord" style="background-color: #b6b6b6;">
								<a href="https://discord.gg/WdQH8sY" target="_blank">Discord</a>
								</li>

								<li class="facebook" style="background-color: #b6b6b6;">
								<a href="https://www.facebook.com/HakanUniqueYT" target="_blank">Facebook</a>
								</li>


							</ul>

							<ul class="social-icons">
								<li class="youtube" style="background-color: #b6b6b6;">
								<a href="https://www.youtube.com/channel/UCEUOP52lbFcT3r0dFmDxlEg" target="_blank">YouTube</a>
								</li>

								<li class="teamspeak" style="background-color: #b6b6b6;">
								<a href="ts3server://193.160.215.140" target="_blank">Teamspeak</a>
								</li>
							</ul>

						</div>

					<?php
										if ($context['user']['is_logged']){
											
											echo '<div style="float: left; width: 460px; margin-top : 1.5%;">
											<span style="font-size: 12px; font-weight: bold; color: #4c504c;"><i class="fas fa-angle-double-right"></i> <a href="#">Karakter Bağlanmadı</a> <span style="color: green;">(Seviye 0)</span> <span style=""></span></span>
											<hr style="margin: 2px; background-color: #fff0; border-top: 2px dashed #8c8b8b;">

											<span style="font-weight: bold; color: #4c504c;">Bakiye: 0 <span style="color: #28a528"><span class="fa fa-lira-sign"></span> <a href="http://www.unique-roleplay.com/forum/market/odeme.php"> (Yükle)</a></span> </span>
											&nbsp; &nbsp;<span style="font-weight: bold; color: #4c504c;">Cüzdan:	<span style="color: #28a528">$0</span> </span>
											&nbsp; &nbsp;<span style="font-weight: bold; color: #4c504c;">Maaş Hesabı:	<span style="color: #28a528">$0</span> </span>


										</div>';
											
										}else{
											
											echo '<div style="float: left; background-color: #FFFFFF60; border-radius: 3px; border-left: 3px solid #000000; padding: 10px; width: 700px;">

								<span style="font-weight: bold; font-size: 17px;">
									Hoşgeldin, ziyaretçi!
								</span>
							<br>
								<span style="font-weight: bold; font-size: 11px;">
									Forumda gezinebilmek için ilk önce oyun sunucumuza girmeniz gerekmektedir, <a href="indir.php">buraya tıklayarak</a> Client`i indirebilirsiniz.
								</span>
							</div>';
											
										}
											
											?>

										
									
					</div>
					
						<div style="float: right; margin-top: 0.6%; margin-right: 1%; width: auto;">
							<div style="float: right; margin-right: 5px;">
								<div style="display: block; margin-top : 2px; height: 24px; width: 90px; background-color: #00000020; font-weight: bold; font-size: 11px; text-align:center; padding: 5px; ">
									<a href="indir.php" style="color: #00000090;"><i class="fa fa-download"></i> İNDİR</a>
								</div>

								<div style="display: block; margin-top : 5px; height: 24px; width: 90px; background-color: #00000020; font-weight: bold; font-size: 11px; text-align:center; padding: 5px; ">
									<a href="#" style="color: #00000090;"><i class="fa fa-user"></i> YETKİLİLER</a>
								</div>

							</div>

							<div style="float: right; margin-right: 5px;">
								<div style="display: block; margin-top : 2px; height: 24px; width: 90px; background-color: #00000020; font-weight: bold; font-size: 11px; text-align:center; padding: 5px; ">
									<a href="http://www.unique-roleplay.com/forum/index.php?board=5.0" style="color: #00000090;"><i class="fa fa-gavel"></i> KURALLAR</a>
								</div>

								<div style="display: block; margin-top : 5px; height: 24px; width: 90px; background-color: #00000020; font-weight: bold; font-size: 11px; text-align:center; padding: 5px; ">
									<a href="#" style="color: #00000090;"><i class="fa fa-user"></i> HELPERLER</a>
								</div>

							</div>

							<div style="float: right; margin-right: 5px;">
								<div style="display: block; margin-top : 2px; height: 24px; width: 130px; background-color: #00000020; font-weight: bold; font-size: 11px; text-align:center; padding: 5px; ">
									<a href="http://www.unique-roleplay.com/forum/market/" style="color: #00000090;"><i class="fa fa-lira-sign"></i> MARKET ÜRÜNLERİ</a>
								</div>

								<div style="display: block; margin-top : 5px; height: 24px; width: 130px; background-color: #00000020; font-weight: bold; font-size: 11px; text-align:center; padding: 5px; ">
									<a href="http://www.unique-roleplay.com/forum/index.php?action=profile;area=forumprofile" style="color: #00000090;"><i class="fas fa-images"></i> FORUM PROFİL</a>
								</div>

								</div>

							<div style="float: right; margin-right: 5px;">
								<div style="display: block; margin-top : 2px; height: 24px; width: 130px; background-color: #00000020; font-weight: bold; font-size: 11px; text-align:center; padding: 5px; ">
									<a href="sikayet-ekle.php" style="color: #00000090;"><i class="fa fa-plus-square"></i> YENİ ŞİKAYET</a>

								</div>

								<div style="display: block; margin-top : 5px; height: 24px; width: 130px; background-color: #00000020; font-weight: bold; font-size: 11px; text-align:center; padding: 5px; ">
									<a href="https://www.unique-roleplay.com/forum/index.php?action=helpdesk;sa=newticket" style="color: #00000090;"><i class="fas fa-question-circle"></i> YENİ TİCKET</a>

								</div>
							</div>
							
						</div>


						
				</div>
			</div>
		
	
	<div class="main_body">
		<div class="wrapper">
				<div id="main_content">

			
	<div class="navigate_section">

		<ul>
			<li><i class="fa fa-home"></i></li>
		


			<li>
				<a href="https://www.unique-roleplay.com/forum/index.php"><span> Unique Roleplay</span></a> <i class="fa fa-angle-double-right"></i>
			</li>


			<li class="last">
				<a href="#"><span> İndir</span></a>
			</li>
		</ul>
	</div>
	<style>

	.arkaplan
	{
		background-color: #fff;
		border-radius: 7px;
		padding: 15px;
		margin-bottom: 15px;
	}
	.baslik
	{
		float: left;

	}

	.baslik b {
		padding-left: 5px;
		font-size: 15px;
	}

	.baslik small{
		font-size: 11px;
		font-style: italic;

	}

	.arkaplan hr{
		background-color: #66666630;
	}
	.icerik{
		clear: both;
		padding: 20px;
	}

	.btt {
		padding: 2px 10px;
		font-size: 12px;
	}
</style>

<div class="arkaplan">
	<div style="margin-top: 3px; display: block;"></div>

	<div class="baslik">
		<img width="32" height="32" src="./indir/28669-8-gta-san-andreas-clipart.png">
		<b>GTA San Andreas</b> <small>GTA: San Andreas oyununun sıkıştırılmış oyun dosyalarıdır.</small>
	</div>
	<div style="float: right;">
	<a href="https://dosya.co/azhryvxzfef9/unique-roleplay-gta-san-andreas.rar.html"><button type="button" id="info" class="btn btn-success btt" style="padding: 2px 10px;">İndir</button></a>
	</div>

	<div style="clear: both;"></div>

	<hr>

	<div class="baslik">
		<img width="32" height="32" src="./indir/san_andreas_multiplayer_icon_by_parry.png">
		<b>SA-MP (03DL)</b> <small>SA-MP oyunun online olarak oynanmasını sağlayan bir GTA-SA eklentisidir, clienti indirmeden önce oyunun kurulu olduğu klasöre SA-MP'ı kurmalısınız.</small>
	</div>
	<div style="float: right;">
	<a href="https://dosya.co/gs0rkx1pov5n/sa-mp-0.3.DL-R1-install.exe.html"><button type="button" id="info" class="btn btn-success btt" style="padding: 2px 10px;">İndir</button></a>
	</div>

	<div style="clear: both;"></div>


</div>

<div class="arkaplan">
	<div class="baslik">
		<img width="32" height="32" src="../Themes/inferno_20rc4/images/theme/guest.png">
		<b>Unique Client</b> <small>(PD0.6)</small>
	</div>

	<div class="icerik">
	</div>

	<a href="https://dosya.co/aw9m998nzvz5/Unique_Roleplay_Client.rar.html"  target="_blank" ><button type="button" id="info" class="btn btn-success btt">İndir</button></a>
	<a href="#"><button type="button" id="info" class="btn btn-danger btt">Bilinen Hata Çözümleri</button></a>

	<div style="float: right;">
		<a href="https://dosya.co/aw9m998nzvz5/Unique_Roleplay_Client.rar.html"  target="_blank"><button type="button" id="info" class="btn btn-info btt">İndir (Alternatif)</button></a>
	</div>

	<hr>

	<center>
		<iframe width="950" height="515" src="https://www.youtube.com/embed/q0eBXvli1Zo?controls=0?autostart=1" frameborder="0" allowfullscreen=""></iframe>
	</center>

	<div style="clear: both;"></div>

	<hr>

	<div class="baslik">
		<img width="32" height="32" src="./indir/settings-icon.png">
		<b>CLEO 4</b> <small>CLEO 4 eklentisini indirerek izinli cleolar listesindeki cleolar ile oyununuzu güzelleştirebilirsiniz!
	</small></div><small>


	<div style="float: right;">
	<a href="https://cleo.li/cleo4/CLEO4_setup.exe"><button  target="_blank" type="button" id="info" class="btn btn-success btt" style="padding: 2px 10px;">İndir</button></a>

	</div>

	<div style="clear: both;"></div>

	<hr>

	<div class="baslik">
		<img width="32" height="32" src="./indir/Parcel-icon.png">
		<b>Model Paketi</b>  <small>Son güncelleme: 21.07.2020</small>
	</div>

	<div class="icerik">
	Unique Roleplay sunucusuna bağlanmadan önce sunucu içerisinde bulunan modellerin yüklemelerini beklemeniz gerekmekte. Dosya yüklerken yaşanan sıkıntıları ve internet problemleriniz yüzünden oluşan yavaş yükleme sorunlarını engellemek için dosyaları forum sitemizden indirip, Belgelerim içindeki GTA San Andreas User Files\SAMP\cache klasorünün içerisine atmanız yeterli olacaktır.
	</div>


		<a href="https://dosya.co/kqdw856033u0/193.160.215.140.7777.rar.html"><button  target="_blank" type="button" id="info" class="btn btn-success btt">İndir</button></a>


	<div style="clear: both;"></div><hr>

	<div style="clear: both;"></div>


</small></div><small>

			</small></div><small>
		</small></div><small>
	</small></div><small>
	<div id="footer">


		<ul class="reset">
			<li class="copyright">
			<span class="smalltext" style="display: inline; visibility: visible; font-family: Verdana, Arial, sans-serif;"><a href="https://www.unique-roleplay.com/forum/index.php?action=credits" title="Simple Machines Forum" target="_blank" class="new_win">SMF 2.0.15</a> |
 <a href="http://www.simplemachines.org/about/smf/license.php" title="License" target="_blank" class="new_win">SMF © 2017</a>, <a href="http://www.simplemachines.org/" title="Simple Machines" target="_blank" class="new_win">Simple Machines</a>
			</span></li>
			<li class="copyright"><strong></strong> Design By <a href="http://www.unique-roleplay.com/forum/index.php?action=profile;area=summary;u=1" target="_blank">U-RP</a></li>
			<li><a href="#">Kullanıcı Sözleşmelerimiz</a></li><br>
			<li><a id="button_xhtml" href="http://validator.w3.org/check/referer" target="_blank" class="new_win" title="XHTML 1.0 Uyumlu!"><span>XHTML</span></a></li>
			<li><a id="button_rss" href="https://www.unique-roleplay.com/forum/index.php?action=.xml;type=rss" class="new_win"><span>RSS</span></a></li>
		</ul>
		
		</div>
	

</small></html>
<?php



}
?>

