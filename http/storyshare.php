<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Tell me what happened</title>
	<!-- Bootstrap -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
<<<<<<< HEAD:http/storyshare.html
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">
                        <span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>
                    <li><a ui-sref="survey.html">
                         <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Take a survey</a></li>
					<li><a href="storyshare.html">
                        <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> Tell me what happened</a></li>
                    <li><a ui-sref="#">
						 <span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Results &amp; Resources</a></li>
                    <li><a ui-sref="resources.html">
						 <span class="glyphicon glyphicon-tree-conifer" aria-hidden="true"></span> Wellness &amp; Self-Care</a></li>
					<li><a ui-sref="contactus.html">
						 <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Contact Us</a></li>
                </ul>
                
            </div>
        </div>
    </nav>
    <br>
	<br>
||||||| merged common ancestors
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">
                        <span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>
                    <li><a ui-sref="app.survey">
                         <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Take a survey</a></li>
					<li><a href="#">
                        <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> Tell me what happened</a></li>
                    <li><a ui-sref="app.results">
						 <span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Results</a></li>
                    <li><a ui-sref="app.resources">
						 <span class="glyphicon glyphicon-tree-conifer" aria-hidden="true"></span> Resources &amp; Next Steps</a></li>
					<li><a ui-sref="app.contactus">
						 <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Contact Us</a></li>
                </ul>
                
            </div>
        </div>
    </nav>
    <br>
	<br>
=======
	<?php include "modules/navbar.php" ?>
>>>>>>> 097c0a91f1d912afe6fb199729b5a1bcc27bd0c3:http/storyshare.php
	<div class="container">
		<div class="page-header">
			<h1>You can share your story here / <small>you are not alone</small></h1>
		</div>
		<form class="form-horizontal" role="form" name="feedbackForm" novalidate>
			<div class="form-group">
				<label for="feedback" class="col-sm-2 control-label">Your Feedback</label>
				<div class="col-sm-9">
					<textarea class="form-control" id="feedback" name="feedback" rows="12"></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary">Tell your story</button>
				</div>
			</div>
		</form>
	</div>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>
