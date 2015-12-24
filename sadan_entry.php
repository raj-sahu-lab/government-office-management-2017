<?php
include("dbconnect.php");
?>
<html>
<head>
<meta http-equiv="Content-Language" content="hi">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>राजनांदगॉव सदन </title>
</head>

<body>

<form name="frmSadan" method="get" action="sadan_entry.submit.php">
<table border="1" width="632" height="253" align="center" cellpadding="0" cellspacing="0">
	<tr>
	  <td colspan="3" style="font-size:14px; text-align:center; height:40px"><strong>राजनांदगॉव सदन मे रुकने वाले व्यक्तियों की जानकारी</strong></td>
    </tr>
	<tr>
		<td width="" colspan="3">
		<span lang="en-us" style="font:verdana; color:#FF0000">
        <?php
        if(isset($_REQUEST["mode"]) && $_REQUEST["mode"]=="1")
		{
		echo "Record Saved.";
		}
		
		 if(isset($_REQUEST["mode"]) && $_REQUEST["mode"]=="0")
		{
		echo "Some Error.";
		}
		?>
        </span>        </td>
	</tr>
	<tr>
		<td width="351" align="right">माह </td>
		<td width="4">:</td>
		<td width="255">
		<select size="1" name="cmb_month">
			<option selected value="0">--- Select ---</option>
			<option value="1">January</option>
			<option value="2">February</option>
			<option value="3">March</option>
			<option value="4">April</option>
			<option value="5">May</option>
			<option value="6">June</option>
			<option value="7">July</option>
			<option value="8">August</option>
			<option value="9">September</option>
			<option value="10">October</option>
			<option value="11">November</option>
			<option value="12">December</option>
		</select></td>
	</tr>
	<tr>
		<td width="351" align="right">वर्ष </td>
		<td width="4">:</td>
		<td width="255">
		<select size="1" name="cmb_year">
			<option selected value="0">--- Select ---</option>
			<option value="2012">2012</option>
			<option value="2011">2011</option>
		</select></td>
	</tr>
	<tr>
		<td width="351" align="right">सदन मे रुके मरीजो की संख्या </td>
		<td width="4">:</td>
		<td width="255"><input type="text" name="total_patient" size="20"></td>
  </tr>
	<tr>
		<td width="351" align="right" height="31">साथ आये परिजन की संख्या </td>
		<td width="4" height="31">:</td>
		<td width="255" height="31"><input type="text" name="total_caretaker" size="20"></td>
	</tr>
	<tr>
		<td width="351" align="right">सदन मे बिना रुके ईलाज कराये मरीजो की 
		संख्या </td>
		<td width="4">:</td>
		<td width="255"><input type="text" name="total_outdoor" size="20"></td>
	</tr>
	<tr>
		<td width="351" align="right" height="23">निशुल्क उपचार हेतु पत्र </td>
		<td width="4" height="23">:</td>
		<td width="255" height="23"><input type="text" name="total_nishulk_letter" size="20"></td>
	</tr>
	<tr>
		<td width="351" align="right">सदन मे भोजन करने वालो की संख्या </td>
		<td width="4">:</td>
		<td width="255"><input type="text" name="total_bhojan" size="20"></td>
	</tr>
	<tr>
		<td width="351" align="right">&nbsp;</td>
		<td width="4">&nbsp;</td>
		<td width="255">&nbsp;</td>
	</tr>
	<tr>
		<td width="622" align="right" colspan="3">
		<p align="center"><input type="submit" value="Submit" name="B1">
		<input type="reset" value="Reset" name="B2"></td>
	</tr>
</table>
</form>
<?php
$sql = "SELECT 
		  CONCAT(month_name.sMonth, ' ', rjnsadan.iYear) AS sMonth,
		  rjnsadan.iTotalIndoorPatient,
		  rjnsadan.iTotalOutDoorPatient,
		  rjnsadan.iTotalCareTaker,
		  rjnsadan.iFreeTreatmentLetter,
		  rjnsadan.iTotalPersonFood
		FROM
		  rjnsadan
		  INNER JOIN month_name ON (rjnsadan.iMonth = month_name.ID)
		ORDER BY
		  rjnsadan.iYear,
		  rjnsadan.imonth";
		  
		$rs1 = mysql_query($sql);
		mysql_query("SET NAMES utf8");
		
		  
?>
<table border="1" width="100%" cellspacing="0" cellpadding="0">
	<tr>
		<td bgcolor="#000080" width="50"><font color="#FFFFFF">SNo</font></td>
		<td bgcolor="#000080" width="176"><font color="#FFFFFF">Month</font></td>
		<td bgcolor="#000080"><span lang="hi"><font color="#FFFFFF">&#2360;&#2342;&#2344; &#2350;&#2375; &#2352;&#2361;&#2325;&#2352; 
		&#2312;&#2354;&#2366;&#2332;</font></span></td>
		<td bgcolor="#000080"><font color="#FFFFFF">&nbsp;<span lang="hi">&#2360;&#2342;&#2344; &#2350;&#2375; 
		&#2348;&#2367;&#2344;&#2366; &#2352;&#2369;&#2325;&#2375; &#2312;&#2354;&#2366;&#2332;</span></font></td>
		<td bgcolor="#000080"><span lang="hi"><font color="#FFFFFF">&#2350;&#2352;&#2368;&#2332; &#2325;&#2375; 
		&#2346;&#2352;&#2367;&#2332;&#2344;</font></span></td>
		<td bgcolor="#000080"><span lang="hi"><font color="#FFFFFF">&#2325;&#2369;&#2354; &#2344;&#2367;:&#2358;&#2369;&#2354;&#2381;&#2325; 
		&#2346;&#2340;&#2381;&#2352; </font></span></td>
		<td bgcolor="#000080" width="209"><span lang="hi"><font color="#FFFFFF">
		&#2349;&#2379;&#2332;&#2344; &#2325;&#2352;&#2344;&#2375; &#2357;&#2366;&#2354;&#2379; &#2325;&#2368; &#2360;&#2306;&#2326;&#2381;&#2351;&#2366;</font></span></td>
	</tr>
    <?php
	$i=1;
    while($row = mysql_fetch_array($rs1))
		{
	?>	
	<tr>
		<td width="50"><font face="Verdana" size="2"><span lang="hi">&nbsp;<?php echo $i; ?></span></font></td>
		<td width="176"><font face="Verdana" size="2"><span lang="hi">&nbsp;<?php echo $row['sMonth']?></span></font></td>
		<td><font face="Verdana" size="2"><span lang="hi">&nbsp;<?php echo $row['iTotalIndoorPatient']?></span></font></td>
		<td><font face="Verdana" size="2"><span lang="hi">&nbsp;<?php echo $row['iTotalOutDoorPatient']?></span></font></td>
		<td><font face="Verdana" size="2"><span lang="hi">&nbsp;<?php echo $row['iTotalCareTaker']?></span></font></td>
		<td><font face="Verdana" size="2"><span lang="hi">&nbsp;<?php echo $row['iFreeTreatmentLetter']?></span></font></td>
		<td width="209"><font face="Verdana" size="2"><span lang="hi">&nbsp;<?php echo $row['iTotalPersonFood']?></span></font></td>
	</tr>
    <?php
    	}
	?>	
</table>


</body>

</html>