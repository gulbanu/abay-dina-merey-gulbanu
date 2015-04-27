<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head profile="http://gmpg.org/xfn/11">

    <title>Wook HTML</title>
	
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	
	<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
	<script src="js/cufon-yui.js" type="text/javascript"></script>
	<script src="js/Wook_Bold.font.js" type="text/javascript"></script>
	<script src="js/Wook_Regular.font.js" type="text/javascript"></script>
	<script type="text/javascript">
		Cufon.replace('h1,h2,h3,caption,button,div#title,div#slider a span', { fontFamily: 'Wook Bold' });
		Cufon.replace('ul#siteNav > li > a, ul#pageTabs > li > a', { fontFamily: 'Wook Regular', hover: true });
		Cufon.replace('p.intro', { fontFamily: 'Wook Regular' });
	</script>
	
	<link rel="stylesheet" type="text/css" href="styles/reset.css">
	<link rel="stylesheet" type="text/css" href="styles/clearfix.css">
	<link rel="stylesheet" type="text/css" href="styles/jquery.fancybox-1.3.1.css" media="screen">
	<link rel="stylesheet" type="text/css" href="styles/nivo-slider.css" media="screen">
	<link rel="stylesheet" type="text/css" href="styles/base.css">
	<link rel="stylesheet" type="text/css" href="styles/dark.css">
	<!--[if IE 8]><link rel="stylesheet" type="text/css" href="styles/style_ie8.css"><![endif]-->
	<!--[if IE 7]><link rel="stylesheet" type="text/css" href="styles/style_ie7.css"><![endif]-->
	<!--[if IE 6]><link rel="stylesheet" type="text/css" href="styles/style_ie6.css"><![endif]-->
	
</head>
<?php
if(isset($_POST['add']))
{
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$name=$_POST['name'];
$msg=$_POST['message'];
$email=$_POST['email'];
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = "INSERT INTO soft ".
       "(name,email, msg) ".
       "VALUES ( '$name', '$email', '$msg' )";

mysql_select_db('hello');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
mysql_close($conn);
}

?>

<body class="jsDisabled">
<script type="text/javascript">$('body').removeClass('jsDisabled');</script>

<div id="header" class="clearfix">
	
	<div class="holder clearfix">
	
		<div class="skipLink"><a href="#content" title="Skip to content">Skip to content</a></div>
		
		<div id="title"><span><a href="index.html" title="Wook" rel="home">Wook</a></span></div>
		
		<ul id="siteNav">
			<li><a href="index.html">Home</a></li>
			<li class="selected"><a href="contact.html">Contact</a></li>
		</ul>

	</div>
		
</div><!-- #header -->

<div id="wrapper">

	<div id="main" class="clearfix">
		
		<div class="mainCol">
		
			<h1>Contact</h1>
		
			<form method="post" action="#" id="commentForm">
	
	  			<div class="formSection" id="formSectionAuthor">
					<div class="formLabel">
						<label for="author">Name <span class="required">*</span>
						<input name="name" type="text" />
						</label>
					</div>
					<div class="formInput">
						<input type="text" title="Name" class="hint" name="author" id="author">
					</div>
	  			</div>
	
	  			<div class="formSection" id="formSectionEmail">
					<div class="formLabel">
						<label for="email">Email <span class="required">*</span>
						<input name="email" type="text" />
						</label>
					</div>
					<div class="formInput">
						<input type="text" title="Email" class="hint" name="email" id="email">
					</div>
	  			</div>
	  			
	
	  			<div class="formSection" id="formSectionComment">
					<div class="formLabel">
						<label for="comment">Comment</label>
					</div>
					<div class="formTextarea">
						<textarea title="What do you want to say?" class="hint" name="message" id="comment" rows="5" cols="5"></textarea>
					</div>
	  			</div>
	  			
				<div class="formSubmit">
					<button type="submit" name="add" id="submit">Contact Us</button>
				</div>

			</form>
		
		</div>
		
	</div><!-- #main -->

	<div id="footer">
		
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="galery.html">Gallery</a></li>
			<li><a href="blog.html">Blog</a></li>
			<li><a href="pages_default.html">Pages</a></li>
			<li><a href="styles.html">Styles</a></li>
			<li><a href="contact.html">Contact</a></li>
		</ul>
		
	</div><!-- #footer -->
	
</div><!-- #wrapper -->

<script type="text/javascript">

	// apply cufon & force a redraw for IE
	Cufon.now(); document.body.className = '';

</script>

<script type="text/javascript" src="js/jquery.livequery.js"></script>
<script type="text/javascript" src="js/jquery-css-transform.js"></script>
<script type="text/javascript" src="js/jquery-animate-css-rotate-scale.js"></script>
<script type="text/javascript" src="js/jquery.fancybox-1.3.1.pack.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel-3.0.2.pack.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="js/jquery.quicksand.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/base.js"></script>
<script type="text/javascript" src="http://twitterjs.googlecode.com/svn/trunk/src/twitter.min.js"></script>


</body>
</html>
