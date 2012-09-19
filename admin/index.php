<? if (isset($_GET['logout'])){
	session_start();
	session_destroy();
}
include("header.php"); ?>
<section id="articles">
	<article>
	<? if (isset($_GET['e'])):?>
	<p style="color:red; border:3px solid black; border-radius:10px; padding:5px; height:12px; line-height:12px; font-size:12px;"><?=$_GET['e']?></p>
	<? endif; ?>
		<table width="300" border="0" align="center" cellpadding="0" cellspacing="1">
		<tr>
		<form name="form1" method="post" action="exec_login.php">
		<td>
		<table width="100%" border="0" cellpadding="3" cellspacing="1">
		<tr>
		<td colspan="3"><strong>Admin Login </strong></td>
		</tr>
		<tr>
		<td width="78">Username</td>
		<td width="6">:</td>
		<td width="294"><input name="myusername" type="text" id="myusername"></td>
		</tr>
		<tr>
		<td>Password</td>
		<td>:</td>
		<td><input name="mypassword" type="text" id="mypassword"></td>
		</tr>
		<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td><input type="submit" name="Submit" value="Login"></td>
		</tr>
		</table>
		</td>
		</form>
		</tr>
		</table>
	</article>
</section>
<?php include("../footer.php"); ?>