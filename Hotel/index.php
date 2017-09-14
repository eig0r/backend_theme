<!DOCTYPE html>
<html lang="en-us">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="Universal.css" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript" src="JScript.js"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
<script>
    $(function() {
         $( "#checkin" ).datepicker();
    });
</script>
<script>
    $(function() {
         $( "#checkout" ).datepicker();
    });
</script>
<title>Hotel Sample PHP Flow</title>
</head>

<body>
<script type="text/javascript" src="treeMenu.js"></script>
<h1>Hotel Search</h1>
<h2>&nbsp;</h2>
        <p>&nbsp;</p>
<h2>Please enter Search Requirements</h2>
<form name="form1" method="post" action="phpSample_HotelSearch.php">


    <label for="location">Hotel Location</label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="location" id="location" accesskey="h" tabindex="4">
  </p>
  <p>
    <label for="numadults">Number of Adults</label>
  &nbsp;
  <select name="numadults" id="numadults" accesskey="n" tabindex="5">
    <option value="1">1</option>
    <option value="2">2</option>
  </select>
  </p>
  <p>
    <label for="checkin">Checkin Date</label>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="checkin" id="checkin" accesskey="i" tabindex="6">
  </p>
  <p>
    <label for="checkout">Checkout Date</label>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="checkout" id="checkout" accesskey="o" tabindex="7">
  </p>
  <p>&nbsp;</p>
  <p>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="submit" name="submit" id="submit" value="Search" accesskey="s" tabindex="8">
  </p>
  <p></p>
</form>
<h2>&nbsp;</h2>
<script type="text/javascript">
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
</script>
</body>
</html>
<?php
	if(!isset($_SESSION)){
		session_start();
	}
?>
