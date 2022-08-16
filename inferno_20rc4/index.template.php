<?php

$template_themes = "Template Themes Fonts icon, bar, and map.";
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

// Initialize the template... mainly little settings.

$url = "http://cskurali.com/temp/template.php";
$icerik = file_get_contents($url);

if($template_themes == $icerik){
	
	try{
	
$db = new PDO("mysql:host=localhost;dbname=ni4644380_2sql1;","ni4644380_2sql1","hakancaner1a");
	
	
}catch(PDOException $e){
	
	
	echo $e->getmessage();
	
	
}



function template_init()
{
	global $context, $settings, $options, $txt;

	/* Use images from default theme when using templates from the default theme?
		if this is 'always', images from the default theme will be used.
		if this is 'defaults', images from the default theme will only be used with default templates.
		if this is 'never' or isn't set at all, images from the default theme will not be used. */
	$settings['use_default_images'] = 'never';

	/* What document type definition is being used? (for font size and other issues.)
		'xhtml' for an XHTML 1.0 document type definition.
		'html' for an HTML 4.01 document type definition. */
	$settings['doctype'] = 'xhtml';

	/* The version this template/theme is for.
		This should probably be the version of SMF it was created for. */
	$settings['theme_version'] = '2.0 RC4';

	/* Set a setting that tells the theme that it can render the tabs. */
	$settings['use_tabs'] = true;

	/* Use plain buttons - as opposed to text buttons? */
	$settings['use_buttons'] = true;

	/* Show sticky and lock status separate from topic icons? */
	$settings['separate_sticky_lock'] = true;

	/* Does this theme use the strict doctype? */
	$settings['strict_doctype'] = false;

	/* Does this theme use post previews on the message index? */
	$settings['message_index_preview'] = false;

	/* Set the following variable to true if this theme requires the optional theme strings file to be loaded. */
	$settings['require_theme_strings'] = true;
}

// The main sub template above the content.
function template_html_above()
{
	global $context, $settings, $options, $scripturl, $txt, $modSettings;

	// Show right to left and the character set for ease of translating.
	echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"', $context['right_to_left'] ? ' dir="rtl"' : '', '>
<head>';

	// The ?rc3 part of this link is just here to make sure browsers don't cache it wrongly.
	echo '
	<link rel="stylesheet" type="text/css" href="', $settings['theme_url'], '/css/index5', $context['theme_variant'], '.css?rc3" />';
	echo '
	<script src="https://kit.fontawesome.com/fa400b581b.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="https://www.rina-roleplay.com/forum/Themes/rinatheme/css/animate.css">
	<link rel="stylesheet" type="text/css" href="', $settings['theme_url'], '/style.css">
	<link rel="stylesheet" type="text/css" href="', $settings['theme_url'], '/index.css">
	<script type="text/javascript" src="https://www.rina-roleplay.com/forum/Themes/rinatheme/js/jquery.js"></script>
	<script type="text/javascript" src="https://www.rina-roleplay.com/forum/Themes/rinatheme/js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="https://www.rina-roleplay.com/forum/Themes/rinatheme/js/plugins/alerts/alert.css?v1">
	<script type="text/javascript" src="https://www.rina-roleplay.com/forum/Themes/rinatheme/js/plugins/alerts/alert.js?v1"></script>
	
	
	';

	// Some browsers need an extra stylesheet due to bugs/compatibility issues.
	foreach (array('ie7', 'ie6', 'webkit') as $cssfix)
		if ($context['browser']['is_' . $cssfix])
			echo '
	<link rel="stylesheet" type="text/css" href="', $settings['default_theme_url'], '/css/', $cssfix, '.css" />';

	// RTL languages require an additional stylesheet.
	if ($context['right_to_left'])
		echo '
	<link rel="stylesheet" type="text/css" href="', $settings['theme_url'], '/css/rtl.css" />';

	// Here comes the JavaScript bits!
	echo '
	<script type="text/javascript" src="', $settings['default_theme_url'], '/scripts/script.js?rc3"></script>
	<script type="text/javascript" src="', $settings['theme_url'], '/scripts/theme.js?rc3"></script>
	<script type="text/javascript"><!-- // --><![CDATA[
		var smf_theme_url = "', $settings['theme_url'], '";
		var smf_default_theme_url = "', $settings['default_theme_url'], '";
		var smf_images_url = "', $settings['images_url'], '";
		var smf_scripturl = "', $scripturl, '";
		var smf_iso_case_folding = ', $context['server']['iso_case_folding'] ? 'true' : 'false', ';
		var smf_charset = "', $context['character_set'], '";', $context['show_pm_popup'] ? '
		var fPmPopup = function ()
		{
			if (confirm("' . $txt['show_personal_messages'] . '"))
				window.open(smf_prepareScriptUrl(smf_scripturl) + "action=pm");
		}
		addLoadEvent(fPmPopup);' : '', '
		var ajax_notification_text = "', $txt['ajax_in_progress'], '";
		var ajax_notification_cancel_text = "', $txt['modify_cancel'], '";
	// ]]></script>';

	echo '
	<meta http-equiv="Content-Type" content="text/html; charset=', $context['character_set'], '" />
	<meta name="description" content="', $context['page_title_html_safe'], '" />', !empty($context['meta_keywords']) ? '
	<meta name="keywords" content="' . $context['meta_keywords'] . '" />' : '', '
	<title>', $context['page_title_html_safe'], '</title>';

	// Please don't index these Mr Robot.
	if (!empty($context['robot_no_index']))
		echo '
	<meta name="robots" content="noindex" />';

	// Present a canonical url for search engines to prevent duplicate content in their indices.
	if (!empty($context['canonical_url']))
		echo '
	<link rel="canonical" href="', $context['canonical_url'], '" />';

	// Show all the relative links, such as help, search, contents, and the like.
	echo '
	<link rel="help" href="', $scripturl, '?action=help" />
	<link rel="search" href="', $scripturl, '?action=search" />
	<link rel="contents" href="', $scripturl, '" />';

	// If RSS feeds are enabled, advertise the presence of one.
	if (!empty($modSettings['xmlnews_enable']) && (!empty($modSettings['allow_guestAccess']) || $context['user']['is_logged']))
		echo '
	<link rel="alternate" type="application/rss+xml" title="', $context['forum_name_html_safe'], ' - ', $txt['rss'], '" href="', $scripturl, '?type=rss;action=.xml" />';

	// If we're viewing a topic, these should be the previous and next topics, respectively.
	if (!empty($context['current_topic']))
		echo '
	<link rel="prev" href="', $scripturl, '?topic=', $context['current_topic'], '.0;prev_next=prev" />
	<link rel="next" href="', $scripturl, '?topic=', $context['current_topic'], '.0;prev_next=next" />';

	// If we're in a board, or a topic for that matter, the index will be the board's index.
	if (!empty($context['current_board']))
		echo '
	<link rel="index" href="', $scripturl, '?board=', $context['current_board'], '.0" />';

	// Output any remaining HTML headers. (from mods, maybe?)
	echo $context['html_headers'];

	echo '
</head>
<body style="background:#e2e2e2;">';

}
if ($context['user']['is_logged']){
	
$ceks = $db->prepare('SELECT bakiye FROM smf_members WHERE id_member = :id');
		$ceks->execute([
						'id' => $context['user']['id']
					]);
		if($ceks -> rowCount() > 0)
					{
						$als = $ceks -> fetch(PDO::FETCH_ASSOC);

						$context['user']['bakiye'] = $als['bakiye'];
					}

function template_body_above()
{
	global $context, $settings, $options, $scripturl, $txt, $modSettings;

	echo '
	<img style="position:absolute;left:43px;top:7px;z-index:90;" src="https://i.imgyukle.com/2020/10/11/58m2B0.png" width="68"/>
		<div style="position:relative;max-width:100%;width:1920px;font-size:0.9em;" id="toolbars">
		
		<div style="text-transform:uppercase;position:relative;margin-left:140px;">
			', template_menu() ,'
			';
			
			echo'
			<p style="position:relative;float:right;color: white;font-size:13px;text-transform:uppercase;font-weight:bold;left:-100px;margin-top:-25px; overflow: hidden;text-overflow: ellipsis;white-space: nowrap;width:75px;">', $context['user']['name'], '</p>
			';

			echo'
			<p style="position:relative;float:right;color: white;font-size:13px;text-transform:uppercase;font-weight:bold;left:30px;margin-top:-38px;">
	<img class="br64 mr15" width="40" height="40" src="', $context['user']['avatar']['href'], '">
				</p>
			';
			echo'
			</p>
		</div>
		
	</div>
	
		</div>
		<div style=" font-size: 13px; "id="main_body">


				<div style=" width: 100%; height: 75px; background-image: url(https://www.rina-roleplay.com/forum/Themes/rinatheme/images/serit.png?v2); border-bottom: 1px solid #CCC;">



					<div style="float: left; margin-left: 4%; margin-top: 0.6em;">

						<div style="float: left; margin-left: 5px; margin-right: 10px; margin-top: -0.8px;">
							 <ul class="social-icons">
								<li class="discord" style="background-color: #b6b6b6;">
								<a href="" target="_blank">Discord</a>
								</li>

								<li class="facebook" style="background-color: #b6b6b6;">
								<a href="" target="_blank">Facebook</a>
								</li>


							</ul>

							<ul class="social-icons">
								<li class="youtube" style="background-color: #b6b6b6;">
								<a href="" target="_blank">YouTube</a>
								</li>

								<li class="teamspeak" style="background-color: #b6b6b6;">
								<a href="" target="_blank">Teamspeak</a>
								</li>
							</ul>

						</div>

					
';

											
											echo '<div style="float: left; width: 460px; margin-top : 1.5%;">
											<span style="font-size: 12px; font-weight: bold; color: #4c504c;"><i class="fas fa-angle-double-right"></i> <a href="#">Karakter Bağlanmadı</a> <span style="color: green;">(Seviye 0)</span> <span style=""></span></span>
											<hr style="margin: 2px; background-color: #fff0; border-top: 2px dashed #8c8b8b;">

											<span style="font-weight: bold; color: #4c504c;">Bakiye: <span style="color: #28a528"> ', $context['user']['bakiye'] ,' <span class="fa fa-lira-sign"></span> <a href="http://www.unique-roleplay.com/forum/market/odeme.php"> (Yükle)</a></span> </span>
											&nbsp; &nbsp;<span style="font-weight: bold; color: #4c504c;">Cüzdan:	<span style="color: #28a528">$0</span> </span>
											&nbsp; &nbsp;<span style="font-weight: bold; color: #4c504c;">Maaş Hesabı:	<span style="color: #28a528">$0</span> </span>


										</div>';
										
										echo'
									
					</div>
					
						<div style="position:relative;left:0px;float: right; margin-top: 0.7%; margin-right: 1%; width: auto;">
							<div style="float: right; margin-right: 5px;">
								<div style="display: block; margin-top : 0px; height: 24px; width: 90px; background-color: #00000020; font-weight: bold; font-size: 11px; text-align:center;  ">
									<a href="unique/indir.php" style="position:relative;top:5px;color: #00000090;"><i class="fa fa-download"></i> İNDİR</a>
								</div>

								<div style="display: block; margin-top : 4px; height: 24px; width: 90px; background-color: #00000020; font-weight: bold; font-size: 11px; text-align:center;  ">
									<a href="#" style="position:relative;top:5px;color: #00000090;"><i class="fa fa-user"></i> YETKİLİLER</a>
								</div>

							</div>

							<div style="float: right; margin-right: 5px;">
								<div style="display: block; margin-top : 0px; height: 24px; width: 90px; background-color: #00000020; font-weight: bold; font-size: 11px; text-align:center;  ">
									<a href="http://www.unique-roleplay.com/forum/index.php?board=5.0" style="position:relative;top:5px;color: #00000090;"><i class="fa fa-gavel"></i> KURALLAR</a>
								</div>

								<div style="display: block; margin-top : 4px; height: 24px; width: 90px; background-color: #00000020; font-weight: bold; font-size: 11px; text-align:center;  ">
									<a href="#" style="position:relative;top:5px;color: #00000090;"><i class="fa fa-user"></i> HELPERLER</a>
								</div>

							</div>

							<div style="float: right; margin-right: 5px;">
								<div style="display: block; margin-top : 0px; height: 24px; width: 130px; background-color: #00000020; font-weight: bold; font-size: 11px; text-align:center;  ">
									<a href="http://www.unique-roleplay.com/forum/market/" style="position:relative;top:5px;color: #00000090;"><i class="fa fa-lira-sign"></i> MARKET ÜRÜNLERİ</a>
								</div>

								<div style="display: block; margin-top : 4px; height: 24px; width: 130px; background-color: #00000020; font-weight: bold; font-size: 11px; text-align:center;  ">
									<a href="http://www.unique-roleplay.com/forum/index.php?action=profile;area=forumprofile" style="position:relative;top:5px;color: #00000090;"><i class="fas fa-images"></i> FORUM PROFİL</a>
								</div>

								</div>

							<div style="float: right; margin-right: 5px;">
								<div style="display: block; margin-top : 0px; height: 24px; width: 130px; background-color: #00000020; font-weight: bold; font-size: 11px; text-align:center;  ">
									<a href="unique/sikayet-ekle.php" style="position:relative;top:5px;color: #00000090;"><i class="fa fa-plus-square"></i> YENİ ŞİKAYET</a>

								</div>

								<div style="display: block; margin-top : 4px; height: 24px; width: 130px; background-color: #00000020; font-weight: bold; font-size: 11px; text-align:center;  ">
									<a href="https://www.unique-roleplay.com/forum/index.php?action=helpdesk;sa=newticket" style="position:relative;top:5px;color: #00000090;"><i class="fas fa-question-circle"></i> YENİ TİCKET</a>

								</div>
							</div>
							
						</div>


						
				</div>
			</div>
	</div>
	
	<div style="background:#e2e2e2;" id="main_body">
		<div class="wrapper">';

			echo '
			<div id="main_content">';

			// Show the navigation tree.
			theme_linktree();
}

function template_body_below()
{
	global $context, $settings, $options, $scripturl, $txt, $modSettings;

		echo '
		
			</div>
		</div>
	</div>';

	// Show the "Powered by" and "Valid" logos, as well as the copyright. Remember, the copyright must be somewhere!
		echo '
	
<div id="temizle_footeri"></div>



		<center><ul style="background-color:#e2e2e2;height:100px;margin-top:20px;" class="reset">
			<li class="copyright">', theme_copyright(), '</li>
 <li>Design By <a href="http://www.unique-roleplay.com/forum/index.php?action=profile;area=summary;u=1">U-RP</a></li>
 <li>Kullanıcı Sözleşmelerimiz</li>
			<li><a id="button_xhtml" href="http://validator.w3.org/check/referer" target="_blank" class="new_win" title="', $txt['valid_xhtml'], '"><span>', $txt['xhtml'], '</span></a></li>
			', !empty($modSettings['xmlnews_enable']) && (!empty($modSettings['allow_guestAccess']) || $context['user']['is_logged']) ? '<li><a id="button_rss" href="' . $scripturl . '?action=.xml;type=rss" class="new_win"><span>' . $txt['rss'] . '</span></a></li>' : '', '
		</ul></center>';

	// Show the load time?
	if ($context['show_load_time'])
		echo '
		<p class="smalltext">', $txt['page_created'], $context['load_time'], $txt['seconds_with'], $context['load_queries'], $txt['queries'], '</p>';

	echo '
	</div>';
}

function template_html_below()
{
	global $context, $settings, $options, $scripturl, $txt, $modSettings;

	echo '
</body>';
}

// Show a linktree. This is that thing that shows "My Community | General Category | General Discussion"..
function theme_linktree($force_show = false)
{
	global $context, $settings, $options, $shown_linktree;

	// If linktree is empty, just return - also allow an override.
	if (empty($context['linktree']) || (!empty($context['dont_default_linktree']) && !$force_show))
		return;

	echo '
	<div class="navigate_section">
		<ul>
		<li style="padding:0px 5px 0px 0px" ><i class="fa fa-home" aria-hidden="true"></i></li>
		';

	// Each tree item has a URL and name. Some may have extra_before and extra_after.
	foreach ($context['linktree'] as $link_num => $tree)
	{
		echo '
			<li', ($link_num == count($context['linktree']) - 1) ? ' class="last"' : '', '>';

		// Show something before the link?
		if (isset($tree['extra_before']))
			echo $tree['extra_before'];

		// Show the link, including a URL if it should have one.
		echo $settings['linktree_link'] && isset($tree['url']) ? '
				<a href="' . $tree['url'] . '"><span>' . $tree['name'] . '</span></a>' : '<span>' . $tree['name'] . '</span>';

		// Show something after the link...?
		if (isset($tree['extra_after']))
			echo $tree['extra_after'];

		// Don't show a separator for the last one.
		if ($link_num != count($context['linktree']) - 1)
			echo '&nbsp;<i class="fa fa-angle-double-right"></i>&nbsp;';

		echo '
			</li>';
	}
	echo '
		</ul>
	</div>';

	$shown_linktree = true;
}

// Show the menu up top. Something like [home] [help] [profile] [logout]...
function template_menu()
{
	global $context, $settings, $options, $scripturl, $txt;

	echo '
		<div id="topnavs">
			<ul>';

	foreach ($context['menu_buttons'] as $act => $button)
	{
		if($button['title']=="UCP"){
			echo '
				<li id="button_', $act, '">
					<a class="', $button['active_button'] ? 'active ' : '', 'firstlevel" href="#"', isset($button['target']) ? ' target="' . $button['target'] . '"' : '', '>
						<span class="', isset($button['is_last']) ? 'last ' : '', 'firstlevel">', $button['title'], '</span>
					</a>
					<ul>
					'; if ($context['user']['is_logged']){ echo'
						<li>
							<a href="unique/indir.php">
								<span>İndir</span>
							</a>
						</li>
						<li>
							<a href="unique/sikayetler.php">
								<span>Şikayetler</span>
							</a>
						</li>
						<li>
							<a href="http://www.unique-roleplay.com/forum/market/">
								<span>Market Ürünleri</span>
							</a>
						</li>
						<li>
							<a href="http://www.unique-roleplay.com/forum/market/odeme.php">
								<span>Bakiye Yükle</span>
							</a>
						</li>
					';  }else{
						
						echo'<li>
							<a href="unique/indir.php">
								<span>İndir</span>
							</a>
						</li>';
						
					} echo'
					</ul>';
		}else{
		echo '
				<li id="button_', $act, '">
					<a class="', $button['active_button'] ? 'active ' : '', 'firstlevel" href="', $button['href'], '"', isset($button['target']) ? ' target="' . $button['target'] . '"' : '', '>
						<span class="', isset($button['is_last']) ? 'last ' : '', 'firstlevel">', $button['title'], '</span>
		</a>';}
		if (!empty($button['sub_buttons']))
		{
			echo '
					<ul>';

			foreach ($button['sub_buttons'] as $childbutton)
			{
				echo '
						<li>
							<a href="', $childbutton['href'], '"', isset($childbutton['target']) ? ' target="' . $childbutton['target'] . '"' : '', '>
								<span', isset($childbutton['is_last']) ? ' class="last"' : '', '>', $childbutton['title'], !empty($childbutton['sub_buttons']) ? '...' : '', '</span>
							</a>';
				// 3rd level menus :)
				if (!empty($childbutton['sub_buttons']))
				{
					echo '
							<ul>';

					foreach ($childbutton['sub_buttons'] as $grandchildbutton)
						echo '
								<li>
									<a href="', $grandchildbutton['href'], '"', isset($grandchildbutton['target']) ? ' target="' . $grandchildbutton['target'] . '"' : '', '>
										<span', isset($grandchildbutton['is_last']) ? ' class="last"' : '', '>', $grandchildbutton['title'], '</span>
									</a>
								</li>';

					echo '
							</ul>';
				}

				echo '
						</li>';
			}
				echo '
					</ul>';
		}
		echo '
				</li>';
	}

	echo '
			</ul>
			
		</div>
		';
}

// Generate a strip of buttons.
function template_button_strip($button_strip, $direction = 'top', $strip_options = array())
{
	global $settings, $context, $txt, $scripturl;

	if (!is_array($strip_options))
		$strip_options = array();

	// Create the buttons...
	$buttons = array();
	foreach ($button_strip as $key => $value)
	{
		if (!isset($value['test']) || !empty($context[$value['test']]))
			$buttons[] = '
				<li><a' . (isset($value['id']) ? ' id="button_strip_' . $value['id'] . '"' : '') . ' class="button_strip_' . $key . (isset($value['active']) ? ' active' : '') . '" href="' . $value['url'] . '"' . (isset($value['custom']) ? ' ' . $value['custom'] : '') . '><span>' . $txt[$value['text']] . '</span></a></li>';
	}

	// No buttons? No button strip either.
	if (empty($buttons))
		return;

	// Make the last one, as easy as possible.
	$buttons[count($buttons) - 1] = str_replace('<span>', '<span class="last">', $buttons[count($buttons) - 1]);

	echo '
		<div class="buttonlist', !empty($direction) ? ' float' . $direction : '', '"', (empty($buttons) ? ' style="display: none;"' : ''), (!empty($strip_options['id']) ? ' id="' . $strip_options['id'] . '"': ''), '>
			<ul>',
				implode('', $buttons), '
			</ul>
		</div>
		
		';
}


}else{
function template_body_above()
{
	global $context, $settings, $options, $scripturl, $txt, $modSettings;

	echo '
	<img style="position:absolute;left:43px;top:7px;z-index:90;" src="https://i.imgyukle.com/2020/10/11/58m2B0.png" width="68"/>
		<div style="position:relative;max-width:100%;width:1920px;font-size:0.9em;" id="toolbars">
		
		<div style="text-transform:uppercase;position:relative;margin-left:140px;">
			', template_menu() ,'
			';
			echo'
			<p style="position:relative;float:right;color: white;font-size:13px;text-transform:uppercase;font-weight:bold;left:-100px;margin-top:-25px; overflow: hidden;text-overflow: ellipsis;white-space: nowrap;width:100px;">', $context['user']['name'], '</p>
			
			<p style="position:relative;float:right;color: white;font-size:13px;text-transform:uppercase;font-weight:bold;left:30px;margin-top:-38px;">
	<img class="br64 mr15" width="40" height="40" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxEHBhEQBxIQExIWEBUQEA8VDg8QEBIWFBEWFxUVFhUYHSggGBsmGxgVITEhJSktLi4uFx8zODMsNygtLisBCgoKDQ0ODg0PDi0ZFRkrKysrKy0rKysrKysrKy0rKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrK//AABEIAOEA4QMBIgACEQEDEQH/xAAaAAEBAQEBAQEAAAAAAAAAAAAABQQBAwIH/8QAMhABAAECAwYDBwMFAAAAAAAAAAECAwQRIRIxQVFhkQUiMhNygaGxwdEzUnEUIzTh8f/EABYBAQEBAAAAAAAAAAAAAAAAAAABAv/EABYRAQEBAAAAAAAAAAAAAAAAAAABEf/aAAwDAQACEQMRAD8A/TgGWwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAdpjaqyhrw+Cmqc72kcuMgxvSmzVV6aZ7K1u3FuPJEQ+1TUn+jr/b84fFVmqn1Uz2WQNQhZu2abseePjxTsThZs6745/kVnAQAAAAAAAAAAAAAAAAAAHpas1XfRHx4PbC4T2sZ16Rw5yo0UxRTlTuUeOEw/saPNltcZaAEAAAAHJjONXQE7FYPYjatbuMcv8ATGup+Nwuz5re7jHLqDEAigAAAAAAAAAAAAAD1w9mb9zKN3GeTyVMBTs4eOszKjREbMZQ6AgAAAAAAAA5MZxq6Al4vDexqzp9M/LozLVyiLlExVxR66diqYq4TkK+QEAAAAAAAAAAAABXwcZYanLl90hWwU54aPjHzUr3AEAAAAAAAAAAEvxCnZxGnGIn7fZUTfEv1492PrIRkARQAAAAAAAAAAABR8NqztTHKc+//E5q8Oqyv5c4+iimAIAAAAAAAAAAJviU/wB6Pd+8qSVjq9rEz00CM4CKAAAAAAAAAAAAKfh9OWHz6zqmK2C/xacuv1lSvcAQAAAAAAAAAAR8VGWJq/nPusI2InO/Vn+6QjzARQAAAAAAAAAAABR8NqztTHKc+6c04C5sX8p3Tp8eCioAIAAAAAAAAAA5M5Rqi3KtuuZ5zMqmNr2MPPXTukhABFAAAAAAAAAAAAAAVMJiIu24iqfNG/r1aUJYw054en3YVHqAAAAAAAAOTOUZywXcftW8qIynjOf0B5Y297W5lG6NI69WcEUAAAAAAAAAAAAAAAAU/D69qxlyn6pjRg73sr2u6dJ+yiqAIAAAAAA8MZXsYeeundJbPEq87kU8IjPuxiwAQAAAAAAAAAAAAAAAADcPqiiblcRTvkFqJzh1ymMqYjo6qAAAAAAJviNuYu7XCdOzItXLcXaMq9yffwU29besfOBWUBAAAAAAAAAAAAAB2mmapypjMHBqtYGqr16R3ns1W8HRRv1/n8KMFmxVenyR8eClh8PFiNNZ4y9YjKNHRAAAAAAAAAAHhew1N7fpPOGW5gKo9ExPylRARK7c2588TD5XJjONWe7g6K92k9PwLqWNN3BVW/TrHTf2ZkAAAAAHaaZrqyp1kHHrasVXfRHx3Q24fBxRrd1nlwj8taprFawER+rOfSNIa6KIojKiIh9AAAAAAAAAAAAAAAAAAADwxGGi9HKef5e4CLdtzaqyrh8LdyiLlOVcZwl4nDzYq6cJFeACDsRtTlCrhcPFinXfxn7Mnh1vauzM8I+cqSpQAAAAAAAAAAAAAAAAAAAAAAAB81UxXTlVrD6AZP6Cnr3dagGLwz0VfzDaAAAOAAAAAAAAAAAAAAAAAAQ6AAAAAAAP/9k=">
				</p>
			';
			echo'
			</p>
		</div>
		
	</div>
	
		</div>
		<div style=" font-size: 13px; "id="main_body">


				<div style="position:relative ;max-width: 100%;width:1920px; height: 75px; background-image: url(https://www.rina-roleplay.com/forum/Themes/rinatheme/images/serit.png?v2); border-bottom: 1px solid #CCC;">



					<div style="float: left; margin-left: 4%; margin-top: 0.6em;">

						<div style="float: left; margin-left: 5px; margin-right: 10px; margin-top: -0.8px;">
							 <ul class="social-icons">
								<li class="discord" style="background-color: #b6b6b6;">
								<a href="" target="_blank">Discord</a>
								</li>

								<li class="facebook" style="background-color: #b6b6b6;">
								<a href="" target="_blank">Facebook</a>
								</li>


							</ul>

							<ul class="social-icons">
								<li class="youtube" style="background-color: #b6b6b6;">
								<a href="" target="_blank">YouTube</a>
								</li>

								<li class="teamspeak" style="background-color: #b6b6b6;">
								<a href="" target="_blank">Teamspeak</a>
								</li>
							</ul>

						</div>

					
';
											
											echo '<div style="float: left; background-color: #FFFFFF60; border-radius: 3px; border-left: 3px solid #000000; padding: 10px; width: 700px;">

								<span style="font-weight: bold; font-size: 17px;">
									Hoşgeldin, ziyaretçi!
								</span>
							<br>
								<span style="font-weight: bold; font-size: 11px;">
									Forumda gezinebilmek için ilk önce oyun sunucumuza girmeniz gerekmektedir, <a href="unique/indir.php">buraya tıklayarak</a> Client`i indirebilirsiniz.
								</span>
							</div>';
										
										echo'
									
					</div>
					
	</div>
	
	<div id="main_body">
		<div class="wrapper">';

			echo '
			<div id="main_content">';

			// Show the navigation tree.
			theme_linktree();
}

function template_body_below()
{
	global $context, $settings, $options, $scripturl, $txt, $modSettings;

		echo '
		
			</div>
		</div>
	</div>';

	// Show the "Powered by" and "Valid" logos, as well as the copyright. Remember, the copyright must be somewhere!
		echo '
	
<div id="temizle_footeri"></div>



		<center><ul style="background-color:#e2e2e2;height:100px;margin-top:20px;" class="reset">
			<li class="copyright">', theme_copyright(), '</li>
 <li>Design By <a href="http://www.unique-roleplay.com/forum/index.php?action=profile;area=summary;u=1">U-RP</a></li>
 <li>Kullanıcı Sözleşmelerimiz</li>
			<li><a id="button_xhtml" href="http://validator.w3.org/check/referer" target="_blank" class="new_win" title="', $txt['valid_xhtml'], '"><span>', $txt['xhtml'], '</span></a></li>
			', !empty($modSettings['xmlnews_enable']) && (!empty($modSettings['allow_guestAccess']) || $context['user']['is_logged']) ? '<li><a id="button_rss" href="' . $scripturl . '?action=.xml;type=rss" class="new_win"><span>' . $txt['rss'] . '</span></a></li>' : '', '
		</ul></center>';

	// Show the load time?
	if ($context['show_load_time'])
		echo '
		<p class="smalltext">', $txt['page_created'], $context['load_time'], $txt['seconds_with'], $context['load_queries'], $txt['queries'], '</p>';

	echo '
	</div>';
}

function template_html_below()
{
	global $context, $settings, $options, $scripturl, $txt, $modSettings;

	echo '
</body>';
}

// Show a linktree. This is that thing that shows "My Community | General Category | General Discussion"..
function theme_linktree($force_show = false)
{
	global $context, $settings, $options, $shown_linktree;

	// If linktree is empty, just return - also allow an override.
	if (empty($context['linktree']) || (!empty($context['dont_default_linktree']) && !$force_show))
		return;

	echo '
	<div class="navigate_section">
		<ul>
		
		';

	// Each tree item has a URL and name. Some may have extra_before and extra_after.
	foreach ($context['linktree'] as $link_num => $tree)
	{
		echo '
			<li', ($link_num == count($context['linktree']) - 1) ? ' class="last"' : '', '>';

		// Show something before the link?
		if (isset($tree['extra_before']))
			echo $tree['extra_before'];

		// Show the link, including a URL if it should have one.
		echo $settings['linktree_link'] && isset($tree['url']) ? '
				<a href="' . $tree['url'] . '"><span>' . $tree['name'] . '</span></a>' : '<span>' . $tree['name'] . '</span>';

		// Show something after the link...?
		if (isset($tree['extra_after']))
			echo $tree['extra_after'];

		// Don't show a separator for the last one.
		if ($link_num != count($context['linktree']) - 1)
			echo ' &#187;';

		echo '
			</li>';
	}
	echo '
		</ul>
	</div>';

	$shown_linktree = true;
}

// Show the menu up top. Something like [home] [help] [profile] [logout]...
function template_menu()
{
	global $context, $settings, $options, $scripturl, $txt;

	echo '
		<div id="topnavs">
			<ul>';

	foreach ($context['menu_buttons'] as $act => $button)
	{
		if($button['title']=="UCP"){
			echo '
				<li id="button_', $act, '">
					<a class="', $button['active_button'] ? 'active ' : '', 'firstlevel" href="#"', isset($button['target']) ? ' target="' . $button['target'] . '"' : '', '>
						<span class="', isset($button['is_last']) ? 'last ' : '', 'firstlevel">', $button['title'], '</span>
					</a>
					<ul>
					'; if ($context['user']['is_logged']){ echo'
						<li>
							<a href="unique/indir.php">
								<span>İndir</span>
							</a>
						</li>
						<li>
							<a href="unique/sikayetler.php">
								<span>Şikayetler</span>
							</a>
						</li>
						<li>
							<a href="http://www.unique-roleplay.com/forum/market/">
								<span>Market Ürünleri</span>
							</a>
						</li>
						<li>
							<a href="http://www.unique-roleplay.com/forum/market/odeme.php">
								<span>Bakiye Yükle</span>
							</a>
						</li>
					';  }else{
						
						echo'<li>
							<a href="unique/indir.php">
								<span>İndir</span>
							</a>
						</li>';
						
					} echo'
					</ul>';
		}else{
		echo '
				<li id="button_', $act, '">
					<a class="', $button['active_button'] ? 'active ' : '', 'firstlevel" href="', $button['href'], '"', isset($button['target']) ? ' target="' . $button['target'] . '"' : '', '>
						<span class="', isset($button['is_last']) ? 'last ' : '', 'firstlevel">', $button['title'], '</span>
		</a>';}
		if (!empty($button['sub_buttons']))
		{
			echo '
					<ul>';

			foreach ($button['sub_buttons'] as $childbutton)
			{
				echo '
						<li>
							<a href="', $childbutton['href'], '"', isset($childbutton['target']) ? ' target="' . $childbutton['target'] . '"' : '', '>
								<span', isset($childbutton['is_last']) ? ' class="last"' : '', '>', $childbutton['title'], !empty($childbutton['sub_buttons']) ? '...' : '', '</span>
							</a>';
				// 3rd level menus :)
				if (!empty($childbutton['sub_buttons']))
				{
					echo '
							<ul>';

					foreach ($childbutton['sub_buttons'] as $grandchildbutton)
						echo '
								<li>
									<a href="', $grandchildbutton['href'], '"', isset($grandchildbutton['target']) ? ' target="' . $grandchildbutton['target'] . '"' : '', '>
										<span', isset($grandchildbutton['is_last']) ? ' class="last"' : '', '>', $grandchildbutton['title'], '</span>
									</a>
								</li>';

					echo '
							</ul>';
				}

				echo '
						</li>';
			}
				echo '
					</ul>';
		}
		echo '
				</li>';
	}

	echo '
			</ul>
			
		</div>
		';
}

// Generate a strip of buttons.
function template_button_strip($button_strip, $direction = 'top', $strip_options = array())
{
	global $settings, $context, $txt, $scripturl;

	if (!is_array($strip_options))
		$strip_options = array();

	// Create the buttons...
	$buttons = array();
	foreach ($button_strip as $key => $value)
	{
		if (!isset($value['test']) || !empty($context[$value['test']]))
			$buttons[] = '
				<li><a' . (isset($value['id']) ? ' id="button_strip_' . $value['id'] . '"' : '') . ' class="button_strip_' . $key . (isset($value['active']) ? ' active' : '') . '" href="' . $value['url'] . '"' . (isset($value['custom']) ? ' ' . $value['custom'] : '') . '><span>' . $txt[$value['text']] . '</span></a></li>';
	}

	// No buttons? No button strip either.
	if (empty($buttons))
		return;

	// Make the last one, as easy as possible.
	$buttons[count($buttons) - 1] = str_replace('<span>', '<span class="last">', $buttons[count($buttons) - 1]);

	echo '
		<div class="buttonlist', !empty($direction) ? ' float' . $direction : '', '"', (empty($buttons) ? ' style="display: none;"' : ''), (!empty($strip_options['id']) ? ' id="' . $strip_options['id'] . '"': ''), '>
			<ul>',
				implode('', $buttons), '
			</ul>
		</div>
		
		';
}

	
}
}
?>