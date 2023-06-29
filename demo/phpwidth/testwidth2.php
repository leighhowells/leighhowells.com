<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php session_start();
?>
<script language=javascript>
function SetCookie(cookieName,cookieValue,nDays) {
alert(cookieName);
var today = new Date();
var expire = new Date();
if (nDays==null || nDays==0) nDays=1;
expire.setTime(today.getTime() + 3600000*24*nDays);
document.cookie = cookieName+"="+escape(cookieValue)+ ";expires="+expire.toGMTString();
}
</script>
<?php
$browser_size="";

if(isset($_COOKIE["windsize"]))
{
$browser_size=$_COOKIE["windsize"];
}
else
{
echo"<script language=javascript>";
echo "var wsize=screen.width+'X'+screen.height;";
echo"SetCookie('windsize',wsize,1);";
echo"</script>";
$browser_size=$_COOKIE["windsize"];

}

echo " the browser size is".$browser_size;


?>