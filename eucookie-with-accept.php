<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<style type="text/css">
<!--
#eucookielaw { display:none }
-->
</style>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
<?php 
if(!isset($_COOKIE['eucookie']))
{ ?>
<script type="text/javascript">
function SetCookie(c_name,value,expiredays)
{
var exdate=new Date()
	exdate.setDate(exdate.getDate()+expiredays)
	document.cookie=c_name+ "=" +escape(value)+";path=/"+((expiredays==null) ? "" : ";expires="+exdate.toGMTString())
}
</script>
<?php } ?>
  <title>EU Cookie Law Script 1</title>
</head>
<body>
<?php 
if(!isset($_COOKIE['eucookie']))
{ ?>
<div id="eucookielaw" >
<p>We use cookies. By browsing our site you agree to our use of cookies.</p>
<a id="removecookie">Accept this cookie</a>
<a id="more">Find out more</a>
</div>
<script type="text/javascript">
	if( document.cookie.indexOf("eucookie") ===-1 ){
		$("#eucookielaw").show();
	}	
    $("#removecookie").click(function () {
		SetCookie('eucookie','eucookie',365*10)
      $("#eucookielaw").remove();
    });
</script>
<?php } ?>
</body>
</html>