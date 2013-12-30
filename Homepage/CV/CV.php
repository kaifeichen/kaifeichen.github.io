<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php session_start() ?>
<html>
<head>
<title>Kaifei Chen &gt; Curriculum Vitae</title>
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
<link HREF="../style.css" REL="stylesheet" TYPE="text/css">
<!--[if IE 7]>
  <link href="../ie.css" rel="stylesheet" type="text/css" />
  <![endif]-->
<link REL="shortcut icon" HREF="../Favicon.ico">
<style TYPE="text/css">
<!--
    .STYLE1 {font-weight: bold}
    -->
    </style>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-25679190-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
<div ID="wrap">
  <div ID="header">
    <h1 ID="sitename"> <a HREF="../index.html">Kaifei Chen</a>  </h1>
    <div ID="topmenu">
      <ul>
        <li> <a HREF="../index.html">Home</a> </li>
        <li> <a HREF="../Research/Research.html">Research</a> </li>
        <li> <a HREF="../Publications/Publications.html">Publications</a> </li>
        <li> <a HREF="../Education/Education.html">Education</a> </li>
        <li CLASS="active"> <a HREF="#">CV</a> </li>
        <li> <a HREF="../Miscellaneous/Miscellaneous.html">Miscellaneous</a> </li>
      </ul>
    </div>
  </div>
  <div ID="content">
    <p> <span CLASS="STYLE1"><a HREF="../index.html">Home</a> &gt; Curriculum Vitae</span> </p>
    <hr align="left" STYLE="width:200px">
    <h2 align="justify"> Curriculum Vitae </h2>
    <p align="justify">&nbsp; </p>
    
    <form method="post" action="verify.php">
    <?php
      if (isset($_SESSION['verified'])) {
        echo "[<a HREF=\"data/CV_KaifeiChen.pdf\" TARGET=\"_blank\">Download pdf version of CV</a>]";
      } else {
        require_once('recaptchalib.php');
        $publickey = "6LfwKs8SAAAAAIrR8Iu3QyVHwlEM0A6QaM6G0i_H"; // you got this from the signup page
        echo recaptcha_get_html($publickey);
        echo "<input type=\"submit\" />";
      }
    ?>
      
    </form>

  </div>
  <div ID="footer">
    <div ID="ft_btm"> Last updated on
      <!-- #BeginDate format:IS1 -->2012-01-21<!-- #EndDate -->
      <br>
      <br>
      <br>
    </div>
  </div>
</div>
</body>
</html>
