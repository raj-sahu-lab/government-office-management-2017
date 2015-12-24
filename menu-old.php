<style>
.link { color:#FFFFCC;}
</style>
<font color=yellow>
<a class="link" href='home.php'>Home</a>  | 
<?php
if($_SESSION['LoginType']==1)
{
?> 
<a  class="link"  href='ward_visit.php'>Ward Issue Entry</a>  |  
<a  class="link"  href='ward_contact.php'>Ward Contact Entry</a>  |  

<?php
}
?>
<a  class="link" href='issue_list.php'>Ward Issue List</a>  |||  
<?php
if($_SESSION['LoginType']==1)
{
?> 
<a  class="link"  href='village_visit.php'>Village Issue Entry</a>  | 
<a  class="link"  href='village_contact.php'>Village Contact Entry</a>  | 

<?php
}
?> 
<a  class="link"  href='village_issue_list.php'>Village Issue List</a>  |  
<a  class="link"  href='change_password.php'>Change Password</a>
</font>