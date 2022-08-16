<title> Genesis Roleplay - Market </title>
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
	 <div id="bilgilendirme">Market</div>  
<div class="menu">
	<ul>
		<li><a href="index.php?action=market">Ürünler</a></li>
		<li><a href="index.php?action=market;u=hesap-no">Hesap Numaraları</a></li>
		<li><a href="index.php?action=market;u=odeme">Ödeme Bildirimi</a></li>
		<li><a href="index.php?action=panel;u=siparislerim">Siparişlerim</a></li>
		 
	</ul>
</div>

<?php

    $do = g('u');
    if (file_exists("market/{$do}.php")){
       include("market/{$do}.php");
    }else {
       include("market/anasayfa.php");
    }
?>

<?php }else {
	go("index.php?action=login");
} ?>
<?php } ?>