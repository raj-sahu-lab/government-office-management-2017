<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: ADMIN PANEL ::</title>
</head>

<body>
<div align="center">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p style="font-family:verdana; color:#FF3300; font-size:12px">
  <?php 
  if(isset($_REQUEST["mode"]) && $_REQUEST["mode"]=="fail")
  echo "Please enter correct User ID / Password.";
  else if(isset($_REQUEST["mode"]) && $_REQUEST["mode"]=="logout")
  echo "Successfully Logged Out.";
  ?>
  </p>
  <form name="frmLogin" action="Login.Submit.php" method="post">
  <table width="400" border="0" style="font-family:verdana; background-color:#630E0E; color:#FFFFFF">
    <tr>
      <td height="31" colspan="3" align="center">ADMIN PANEL</td>
      </tr>
    <tr>
      <td width="195" height="33" style="text-align:right; font-size:12px">Login ID</td>
      <td width="10" style="text-align:center">:</td>
      <td width="190" style="text-align:left">
        <input type="text" name="LoginID" id="LoginID" style="width:150px" />
      </td>
    </tr>
    <tr>
      <td height="33" style="text-align:right; font-size:12px">Password</td>
      <td style="text-align:center">:</td>
      <td style="text-align:left"><input type="password" name="Password" id="Password" style="width:150px"/></td>
    </tr>
    <tr>
      <td height="31" colspan="3"><div align="center">
        <input type="submit" name="Submit" id="Submit" value="Login" />
      </div></td>
    </tr>
    <tr>
      <td height="31" colspan="3">&nbsp; </td>
    </tr>
  </table>
  </form>
  <p>&nbsp;</p>
</div>
</body>
</html>
