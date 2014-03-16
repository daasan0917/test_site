<?php
	mb_language("japanese");
	mb_internal_encoding("UTF-8");
	
	$to = $_POST['email'];
	$namae = $_POST['namae'];
	$subject = $_POST['subject'];
	$text = $_POST['text'];
	$daasan = "daasan0917@gmail.com";
	$from = mb_encode_mimeheader(mb_convert_encoding("WEBDA問い合わせ","JIS","UTF-8"))."<daasan0917@gmail.com>";
	
	$success = mb_send_mail($daasan,"WEBDAに問い合わせ","WEBDAに問い合わせがありました。\n\n以下内容です。\n\n\n■お名前\n".$namae."\n■件名\n".$subject."\n■メールアドレス\n".$to."\n■問い合わせ内容\n".$text,"From:".$from);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="WEBデザイナー,大阪,枚方市,卵,デザイン,ロゴ,コンタクト,メールフォーム,お問い合わせ," />
<meta name="description" content="大阪枚方市在住のWEBデザイナー「岡田大誠」のポートフォリオサイトです。お問い合わせやご意見等ございましたら、どうぞお気軽にご連絡ください。" />
<title>WEBDA Contact</title>
<!-- ========== web-weatures.net Paralax Background ================= -->
<script type="text/javascript" src="js/palalax.js"></script>
<script type="text/javascript" src="http://web-features.net/api/wf.pbb.api.js"></script>
<!-- ========== web-weatures.net Paralax Background ================= -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/snowfall.min.jquery.js"></script>
<link rel="stylesheet" type="text/css" href="CSS/common.css"/>
<link rel="stylesheet" type="text/css" href="CSS/contact.css"/>
<script type='text/javascript'>    
    $(document).ready(function(){
    $(document).snowfall({
	flakeCount : 180,
	})
});
</script>
</head>
<body>
<a href="#header"><img class="top" src="images/top.png" width="79" height="22" alt="topへ" /></a>
<div id="head_white">
  <div id="header">
    <p class="aaa">大阪のWEBデザイナー　岡田大誠のポートフォリオサイト</p>
    <a href="index.html"><img class="logo" src="images/logo.jpg" width="394" height="142" alt="WEBDAのロゴ" /></a>
    <div id="navi">
      <ul>
        <li><a href="index.html"><img src="images/home.jpg" width="46" height="13" alt="home" /></a></li>
        <li><a href="profile.html"><img src="images/profile.jpg" width="76" height="13" alt="profile" /></a></li>
        <li><a href="portfolio.html"><img src="images/portfolio.jpg" width="98" height="13" alt="portfolio" /></a></li>
        <li><a href="http://daasan.minibird.jp/daasan/" target="_blank"><img src="images/blog.jpg" width="44" height="13" alt="blog" /></a></li>
        <li><a class="portfolio"href="contact.html"><img src="images/contact.jpg" width="81" height="13" alt="contact" /></a></li>
      </ul>
    </div>
    <!--navi_end-->
  </div>
  <!--header_end-->
</div>
<!--head_white_end-->
<div id="wrap">
  <h1><img class="main_photo" src="images/contact_main.jpg" width="902" height="350" alt="コンタクト" /></h1>
  <div id="form_top">
    <?php
	if ($success) {
	print('<p>送信しました。こちらから連絡いたしますのでしばらくお待ちください。</p>');
	} else {
	print('<p>送信に失敗しました。</p>');
	}
	?>
  </div>
  </div>
</div>
<!--wrap_end-->
<div id="footer">
  <div id="footer_body">
    <ul>
      <li><a href="index.html">HOME</a></li>
      <li><a href="profile.html">PROFILE</a></li>
      <li><a href="portfolio.html">PORTFOLIO</a></li>
      <li><a href="http://daasan.minibird.jp/daasan/" target="_blank">BLOG</a></li>
      <li><a href="contact.html">CONTACT</a></li>
    </ul>
    <p>Copyright(C) 2012 WEBDA　All Rights Reserved.</p>
  </div>
</div>
<!--footer_end-->
</body>
</html>
