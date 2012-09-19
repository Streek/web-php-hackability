<? 
session_start();
if(!session_is_registered(myusername)){
header("location:index.php");
}

include("header.php"); ?>

<section id="articles">
	<article>
	<form action="exec_story.php" method="post">
	Title<br/>
	<input name="title" /><br/><br/>
	Body<br/>
	<textarea name="body" >Body</textarea><br/>
	<input type="submit"/>
	</form>
	</article>
</section>
<?php include("../footer.php"); ?>