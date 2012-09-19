<?
mysql_connect(
	$server = "localhost",
	$username = "root",
	$password = "root"
) or die(mysql_error());
mysql_select_db("hackability") or die(mysql_error());
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Hackability</title>
        <link rel="stylesheet" type="text/css" href="../styles.css" />
        
        <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <style type="text/css">
        .clear {
          zoom: 1;
          display: block;
        }
        </style>
        <![endif]-->
    </head>
 
       <body>
    	
    	<section id="page">     
            <header> 
                    <ul>
                        <li><a href="../index.php">Recent News</a></li>
                    </ul>
            </header>
            <div style="text-align:right;">
                    <h1>Hackability</h1>
                    <h3>we are very secure!</h3>
</div>            