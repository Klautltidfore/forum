<title> Genesis Roleplay - Panel </title>
<?php
function g($pars)
{
	return strip_tags(trim(addslashes($_GET[$pars])));
}
function go($par, $time = 0){
	if($time == 0){
		header("Location: {$par}");
	}else {
		header("Refresh: {$time}; url={$par}");
	}
}

function template_main()
{
	global $context, $settings, $options, $scripturl, $txt, $modSettings;
?>	
<?php if($context['user']['is_logged']){ ?>
	<div id="bilgilendirme">Kullanıcı Paneli</div>
<div class="menu">
	<ul>
		<li><a href="index.php?action=panel">Hesap Bilgisi</a></li>
		<li><a href="index.php?action=panel;u=basvuru">Karakter Başvurusu</a></li>
		<li><a href="index.php?action=panel;u=sifre-degistir">Şifre Değiştir</a></li>
		<li><a href="index.php?action=panel;u=siparislerim">Siparişlerim</a></li>
		 
	</ul>
</div>
<?php

    $do = g('u');
    if (file_exists("inc/{$do}.php")){
       include("inc/{$do}.php");
    }else {
       include("inc/anasayfa.php");
    }
?>
<?php }else {
	go("index.php?action=login");
} ?>
<?php } ?>