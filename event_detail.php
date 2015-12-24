<?php 
include("dbconnect.php"); 
//getting number of rows and calculating no of pages
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>[Hon. Chief Minister], [State Name]</title>

<!-- for tab menu  start -->
    
	<link rel="stylesheet" href="css/general.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/shadow-border.css" />
	<link rel="stylesheet" href="css/global.css">
    
<!-- for tab menu  end -->

  <style>
  	.desc 
	{
	font-family:Verdana; font-size:14px;; text-align:justify; padding-left:10px; padding-right:10px; padding-top:10px; word-spacing:3px; line-height:20px;
	}
	
	.descImg 
	{
	 padding-right:10px; padding-bottom:5px; padding-left:10px;
	}
  </style>
    
    <style>
	input, textarea
	{	
	  border-right: #a9a9a9 1px solid;
	  padding-right: 4px;
	  border-top: #a9a9a9 1px solid;
	  padding-left: 4px;
	  padding-bottom: 4px;
	  border-left: #a9a9a9 1px solid;
	  padding-top: 4px;
	  border-bottom: #a9a9a9 1px solid;
	}
	</style>
    
  <!--<script src="http://code.jquery.com/jquery-latest.js"></script>-->
  <!-- <script type="text/javascript" src="http://dev.jquery.com/view/trunk/plugins/validate/jquery.validate.js"></script>-->
  <script src="js/jquery-1.6.2.js"></script> 

<!--Hover menu js css start-->
<script language="javascript" src="js/dropdown.js"></script>

<style type="text/css">

a.sample_attach, a.sample_attach:visited, div.sample_attach
{
  display: block;
  width:   110px;

  border:  1px solid #999999;
  padding: 0px 0px;

  background: #cacaca;

  text-decoration: none;
  font-family: Verdana, Sans-Sherif;
  font-weight: 900;
  font-size: 16px;
  color:   #000000;
  text-align:left;
  height:40px;
  padding-left:5px;
  padding-top:13px
}

a.sample_attach:hover{
	background-color:#eba14a;
	
}
</style>
<!--Hover menu js css end-->
<link rel="stylesheet" type="text/css" href="chrometheme/chromestyle.css" />
<script type="text/javascript" src="chromejs/chrome.js"></script>
</head>
<body bgcolor="#eeeeee">
<center>
<table id="tbl_parent" border="0" width="966">
<tr>
	<td>
    <!-- Start Header Table-->
	<?php include("header.php");?>
    <!-- End Header Table -->        
	</td>
</tr>

<tr>
	<td class="breadcrumb" style=" text-align:left; padding-left:10px; font-size:14px;"> 
    <a href="index.php">मुख्य पृष्ठ</a>&nbsp;&nbsp;<img src="images/arrow_green.gif" />&nbsp;&nbsp;<a href="news_detail.php"><font color="#FF6600">समाचार</font></a></td>
</tr>


<tr>
	<td>
    <table  width="950" border="0" cellpadding="0" cellspacing="0">
    	<tr>
    		<td width="" valign="top">
            <!-- Start Description Table-->
                    <table id="tbl_header" width="709" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td class="tl"></td>
                        <td class="top"></td>
                        <td class="tr"></td>
                      </tr>
                      <tr>
                        <td class="vl"></td>
                        <td style="vertical-align:top; background-color:#FFFFFF" height="535" width="">
                        <a name="xcaptcha"></a>
                        <div style="width:98%; height:35px; text-align:left; padding-left:15px; padding-top:5px;  background-image:url(images/yellow_bg.jpg); font-family:Georgia; font-size:20px; color:#660000"> 
<?php
	if(isset($_REQUEST['id']))
	{
?>                                       
विस्तृत समाचार
<?php
	}
	else
	{
?>
समाचार
<?php	
	}
?>                          
    </div>

    <div id="desc" style="margin-left:10px; margin-right:10px; margin-top:10px">
	<?php
	if(isset($_REQUEST['id']))
	{
		 $sqlNews =	"select * from news_event where News_Type='E' and Active_YN='Y' and ID=". $_REQUEST['id'];
		 $rsNews  = mysql_query($sqlNews);
		 
		 $row = mysql_fetch_row($rsNews);
		
		 echo " <p class='subHead' style='color:#336699; font-weight:bold; text-align:left'><img src='images/news_ico.jpg' /> <b> ". $row[1] ."</b><br><br> </p> ";
		 echo "	<p style='line-height:30px; text-align:justify'> ". str_replace("\n","<br>", $row[2]) ." </p>";
	}	 
	?>		 
    <br />
    </div>
<!-- End paging -->
     
             </td>
                        <td  class="vr"></td>
                      </tr>
                       
                      <tr>
                         <td class="bl"></td>
                         <td class="bottom"></td>
                         <td class="br"></td>
                       </tr>
                    </table> 
                    <!-- End Description Table-->
            </td>
            <td>&nbsp;</td>
            <td style="vertical-align:top">
            		
                <!-- Start Right Menu Box Table-->
               		<?php //include("RamanMenuBox.Inc.php"); ?>                
                <!-- End Right Menu Box Table-->
                
                 <!-- Start Right Menu Box Table-->
					<?php include("MenuLinkBox.Inc.php"); ?>
                <!-- End Right Menu Box Table-->                    
            </td>
    	</tr>
    </table>
   </td>
</tr>    

<tr>
	<td><!-- Add Blank Row --></td>
</tr>


<tr>
	<td>
    <!-- Start Links Table-->
        <table id="tbl_header" width="966" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td class="tl" style="width:8px"></td>
            <td class="top"></td>
            <td class="tr"></td>
          </tr>
          <tr>
            <td class="vl"></td>
            <td style="vertical-align:top; background-color:#FFFFFF" height="125" width="950">
                <table width="950" height="120" border="0" style="font-family: Verdana; font-size:12px; color:#003300; text-align:left; padding-top:6px; font-weight:bold">
                  <tr>
                    <td style="padding-left:15px"><a href="http://[state-gov-website]/" target="_blank" style="color:#0066FF; font-weight:bold">Govt. of [State Name]</a></td>
                    <td style="padding-left:15px"><a href="http://[government-website]" target="_blank"  style="color:#0066FF; font-weight:bold">Department of Agriculture</a></td>
                    <td style="padding-left:15px"><a href="http://www.bjp.org"  target="_blank"  style="color:#0066FF; font-weight:bold">www.bjp.org</a></td>
                  </tr>
                  <tr>
                    <td style="padding-left:15px"><a href="http://[state-gov-website]" target="_blank"  style="color:#0066FF; font-weight:bold">CG State Industrial Development</a></td>
                    <td style="padding-left:15px"><a href="http://[government-website]" target="_blank"  style="color:#0066FF; font-weight:bold">Department of Finance</a></td>
                    <td style="padding-left:15px"><a href="http://www.lkadvani.in" target="_blank"  style="color:#0066FF; font-weight:bold">www.lkadvani.in</a></td>
                  </tr>
                  <tr>
                    <td style="padding-left:15px"><a href="http://[state-gov-website]" target="_blank"  style="color:#0066FF; font-weight:bold">[State Name] Tourism</a></td>
                    <td style="padding-left:15px"><a href="http://[state-gov-website]" target="_blank"  style="color:#0066FF; font-weight:bold">[State Name] NIC</a></td>
                    <td style="padding-left:15px"><a href="http://www.nitingadkari.org" target="_blank"  style="color:#0066FF; font-weight:bold">www.nitingadkari.org</a></td>
                  </tr>
                  <tr>
                    <td style="padding-left:15px"><a href="http://[state-assembly-website]" target="_blank"  style="color:#0066FF; font-weight:bold">[State Name] Vidhansabha</a></td>
                    <td style="padding-left:15px"><a href="http://[government-website]" target="_blank"  style="color:#0066FF; font-weight:bold">Directorate of Public Relations</a></td>
                    <td style="padding-left:15px"><a href="http://www.narendramodi.in" target="_blank"  style="color:#0066FF; font-weight:bold">www.narendramodi.in</a></td>
                  </tr>
                 
              </table>
            </td>
            <td class="vr"></td>
          </tr>          
          <tr>
             <td class="bl"></td>
             <td class="bottom"></td>
             <td class="br"></td>
           </tr>
        </table> 
        <!-- End Links Table -->        
	</td>
</tr>
</table>    
<?php include("footer.php");?>
</center>
</body>
</html>
