<? 
session_start();
if(!session_is_registered(myusername)){
header("location:index.php");
}

include("header.php"); ?>

<section id="articles">
	<article>
	<? if (isset($_GET['e'])):?>
	<p style="color:red; border:3px solid black; border-radius:10px; padding:5px; height:12px; line-height:12px; font-size:12px;"><?=$_GET['e']?></p>
	<? endif; ?>
	<h3>Admin Protected Area (<a href="index.php?logout=1">Logout</a>)</h3>
	<a href="create_story.php">Create Story</a><br/>
	<a href="#">Moderate Comments</a><br/>
	<a href="#">Moderate Users</a>
	</article>
</section>
<?php include("../footer.php"); ?>