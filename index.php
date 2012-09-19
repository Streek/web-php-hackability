<?php include("header.php"); ?>
<section id="articles">
	<?php 
	$result = mysql_query("SELECT * FROM news order by id DESC")
	or die(mysql_error());  
	
	// store the record of the "example" table into $row
	while($row = mysql_fetch_array($result)){ ?>
		<div class="line"></div>
		<article id="article1">
			<h2><?=$row['title']?></h2>
			<div class="line"></div>
			<div class="articleBody clear">
				<a href="news.php?id=<?=$row['id']?>">Read This...</a>
			</div>
		</article>
	<?php } ?>
</section>
<?php include("inc/footer.php"); ?>