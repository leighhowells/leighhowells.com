<html>

<head>
<title>Envirosound</title>
<script language="JavaScript">
<!--
function MM_swapImgRestore() { //v2.0
  if (document.MM_swapImgData != null)
    for (var i=0; i<(document.MM_swapImgData.length-1); i+=2)
      document.MM_swapImgData[i].src = document.MM_swapImgData[i+1];
}

function MM_preloadImages() { //v2.0
  if (document.images) {
    var imgFiles = MM_preloadImages.arguments;
    if (document.preloadArray==null) document.preloadArray = new Array();
    var i = document.preloadArray.length;
    with (document) for (var j=0; j<imgFiles.length; j++) if (imgFiles[j].charAt(0)!="#"){
      preloadArray[i] = new Image;
      preloadArray[i++].src = imgFiles[j];
  } }
}

function MM_swapImage() { //v2.0
  var i,j=0,objStr,obj,swapArray=new Array,oldArray=document.MM_swapImgData;
  for (i=0; i < (MM_swapImage.arguments.length-2); i+=3) {
    objStr = MM_swapImage.arguments[(navigator.appName == 'Netscape')?i:i+1];
    if ((objStr.indexOf('document.layers[')==0 && document.layers==null) ||
        (objStr.indexOf('document.all[')   ==0 && document.all   ==null))
      objStr = 'document'+objStr.substring(objStr.lastIndexOf('.'),objStr.length);
    obj = eval(objStr);
    if (obj != null) {
      swapArray[j++] = obj;
      swapArray[j++] = (oldArray==null || oldArray[j-1]!=obj)?obj.src:oldArray[j];
      obj.src = MM_swapImage.arguments[i+2];
  } }
  document.MM_swapImgData = swapArray; //used for restore
}
//-->
</script>
</head>

<body bgcolor="#000000" text="#FFFFFF" topmargin="0" leftmargin="0"
onLoad="MM_preloadImages('images/but_about_on.gif','#914263458526');MM_preloadImages('images/but_louvres_on.gif','#914263590836');MM_preloadImages('images/but_hvac_on.gif','#914263618907');MM_preloadImages('images/but_test_on.gif','#914263645054');MM_preloadImages('images/but_enclosures_on.gif','#914263678192');MM_preloadImages('images/but_contact_on.gif','#914263727092');MM_preloadImages('images/but_enquiries_on.gif','#914263756194')">

<table border="0" cellpadding="0" cellspacing="0" width="600">
  <tr>
    <td width="166" valign="top" align="left"><img src="images/main_circle.gif"
    alt="Envirosound" WIDTH="166" HEIGHT="122"></td>
    <td valign="top" align="left" width="274"><img src="images/red_corner.gif" WIDTH="274"
    HEIGHT="51"><br>
    <img src="images/hdr_enquiries.gif" alt="Enquiries" WIDTH="112" HEIGHT="29"><p>&nbsp;</p>
    <font FACE="Arial"><p><small><%

Set Mailer = Server.CreateObject("SMTPsvg.Mailer")

Mailer.FromName   = "Envirosound Website"

Mailer.FromAddress= "website@envirosound.co.uk"

Mailer.RemoteHost = "relay1.red.net"

Mailer.AddRecipient "Envirosound", "barrywoodcock@hotmail.com"

Mailer.Subject    = "Brochure Request from website"

Mailer.BodyText   = "Test Cells: "  & Request.Form("Test Cells") & VbCrLf & "Water Cooling/ Ventilation/ Other Services: " & Request.Form("Water Cooling/ Ventilation/ Other Services") & VbCrLf & "Engine Aspiration Air Systems: " & Request.Form("Engine Aspiration Air Systems") & VbCrLf & "EVP Acoustic Enclosures: " & Request.Form("EVP Acoustic Enclosures") & VbCrLf & "EVP Factory Built Modular Units: " & Request.Form("EVP Factory Built Modular Units") & VbCrLf & "EVP Factory Built Modular Units: " & Request.Form("EVP Factory Built Modular Units") & VbCrLf & "EVP Panelwork and Screens: " & Request.Form("EVP Panelwork and Screens") & VbCrLf & "EVP Wall Lining Systems: " & Request.Form("EVP Wall Lining Systems") & VbCrLf & "EVP Absorbers: " & Request.Form("EVP Absorbers") & VbCrLf & "EVP Doors and Windows: " & Request.Form("EVP Doors and Windows") & VbCrLf & "EVL Acoustic and Weather Louvres: " & Request.Form("EVL Acoustic and Weather Louvres") & VbCrLf & "EVS Engine Aspiration Air System: " & Request.Form("EVS Engine Aspiration Air System") & VbCrLf & "EVS Ventilation Silencers: " & Request.Form("EVS Ventilation Silencers") & VbCrLf & "EVS Ventilation Systems: " & Request.Form("EVS Ventilation Systems") & VbCrLf & "EVS Engine Silencers: " & Request.Form("EVS Engine Silencers") & VbCrLf & "EVI Anti Vibration Mountings and Inertia Bases: " & Request.Form("EVI Anti Vibration Mountings and Inertia Bases") & VbCrLf & "EVI Floating Floors: " & Request.Form("EVI Floating Floors") & VbCrLf & "Studios: " & Request.Form("Studios") & VbCrLf & "Anechoic Facilities: " & Request.Form("Anechoic Facilities") & VbCrLf & "Noise Survey/ Design/ Consultancy: " & Request.Form("Noise Survey/ Design/ Consultancy") & VbCrLf & "lease arrange a site visit to discuss my requirements: " & Request.Form("Please arrange a site visit to discuss my requirements") & VbCrLf & "My requirement is: " & Request.Form("requirement") & VbCrLf & "Name: " & Request.Form("name") & VbCrLf & "Position: " & Request.Form("position") & VbCrLf & "Company: " & Request.Form("company") & VbCrLf & "Telephone: " & Request.Form("telephone") & VbCrLf & "Fax: " & Request.Form("fax") & VbCrLf & "e-mail: " & Request.Form("email") & VbCrLf & "Address: " & Request.Form("address")

if Mailer.SendMail then

  Response.Write "Thank you for contacting us - your response has been received and will be dealt with as soon as possible."

else

  Response.Write "There has been an error - please contact us using a different method. Error was " & Mailer.Response

end if

%></small></font></td>
    <td valign="top" align="right" width="160"><img src="images/red_line.gif" WIDTH="160"
    HEIGHT="10"><br>
    <a href="about.html" onMouseOut="MM_swapImgRestore()"
    onMouseOver="MM_swapImage('document.About','document.About','images/but_about_on.gif','#914263458526')"><img
    name="About" border="0" src="images/but_about_off.gif" WIDTH="71" HEIGHT="16"></a><br>
    <a href="louvres.html" onMouseOut="MM_swapImgRestore()"
    onMouseOver="MM_swapImage('document.Louvres','document.Louvres','images/but_louvres_on.gif','#914263590836')"><img
    name="Louvres" border="0" src="images/but_louvres_off.gif" WIDTH="64" HEIGHT="16"></a><br>
    <a href="hvac.html" onMouseOut="MM_swapImgRestore()"
    onMouseOver="MM_swapImage('document.HVAC','document.HVAC','images/but_hvac_on.gif','#914263618907')"><img
    name="HVAC" border="0" src="images/but_hvac_off.gif" WIDTH="51" HEIGHT="16"></a><br>
    <a href="test.html" onMouseOut="MM_swapImgRestore()"
    onMouseOver="MM_swapImage('document.Test','document.Test','images/but_test_on.gif','#914263645054')"><img
    name="Test" border="0" src="images/but_test_off.gif" WIDTH="38" HEIGHT="16"></a><br>
    <a href="enclosures.html" onMouseOut="MM_swapImgRestore()"
    onMouseOver="MM_swapImage('document.Enclosures','document.Enclosures','images/but_enclosures_on.gif','#914263678192')"><img
    name="Enclosures" border="0" src="images/but_enclosures_off.gif" WIDTH="86" HEIGHT="16"></a><br>
    <a href="contact.html" onMouseOut="MM_swapImgRestore()"
    onMouseOver="MM_swapImage('document.Contact','document.Contact','images/but_contact_on.gif','#914263727092')"><img
    name="Contact" border="0" src="images/but_contact_off.gif" WIDTH="88" HEIGHT="16"></a><br>
    <img name="Enquiries" border="0" src="images/but_enquiries_on.gif" WIDTH="80" HEIGHT="16">
    </td>
  </tr>
</table>
</body>
</html>
