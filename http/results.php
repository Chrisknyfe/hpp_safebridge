<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Results &amp; Resources</title>
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
                    <li><a ui-sref="survey.php">
                         <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Take a survey</a></li>
					<li><a href="storyshare.php">
                        <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> Tell me what happened</a></li>
                    <li><a ui-sref="#">
						 <span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Results &amp; Resources</a></li>
                    <li><a ui-sref="resources.php">
						 <span class="glyphicon glyphicon-tree-conifer" aria-hidden="true"></span> Wellness &amp; Self-Care</a></li>
					<li><a ui-sref="contactus.php">
						 <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Contact Us</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<br>
	<br>
	<div class="container">
		<div class="page-header">
			<h1>What does it mean to be 'healthy'? Where do I stand?</h1>
		</div>
		
		
		<!-- Slider or bar graph showing comparison to what is healthy based on the responses of other users (Results 1) -->
		<div class="row row-content">
			<h4><p>The yellow bar is where you stand on recovery, based on the answers you supplied. The green bar is for the fully healthy and/or recovered.<br>
			</p></h4>
			<div class="progress" id="standing">
				<div class="progress-bar progress-bar-danger" style="width: 10%">
					<span class="sr-only">10% Complete (danger)</span>
				</div>
				<div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 40%">
					<span class="sr-only">20% Complete (warning)</span>
				</div>
				<div class="progress-bar progress-bar-success" style="width: 15%">
					<span class="sr-only">35% Complete (success)</span>
				</div>
			</div>
		</div>
		<!-- Classification of user's experience according to Stanford scheme (Results 4-7) -->
		<!-- Results 2, 3 -->
		<div class="row row-content">
			<div class="col-sm-4">
				<h4>Stanford classifies your experience as <strong>Possible Sexual Assault/Misconduct</strong>.</h4>
				<div class="well well-lg">
					<u>Possible Sexual Assault/Misconduct</u><br>Penetration without consent and oral sex without consent, either completed or attempted, where more information would be needed about how the act was accomplished to determine whether it would be categorized as assault or misconduct.
				</div>
			</div>
			<div class="col-sm-4">
				<h4><u>Further resources at Stanford</u></h4><br>
				<ul class="list-unstyled">
					<li>
						<blockquote>
							<p><a href="https://vaden.stanford.edu/make-appointment/counseling-and-psychological-services">Counseling and Psychological Services</a></p>
							<address>
							866 Campus Drive<br>
							Stanford, CA 94305-8580<br>
							<!-- <span class="glyphicon glyphicon-earphone"></span> (650) 498-2336 -->
							<a class="btn btn-primary btn-xlg" href="(650) 498-2336"><span class="glyphicon glyphicon-earphone"></span> Click to Call
							</a>
							</address>
						</blockquote>
					</li>
				</ul>
			</div>
			<div class="col-sm-4">
				<h4><u>Further resources off-campus</u></h4><br>
				<ul class="list-unstyled">
					<li>
						<blockquote>
							<p><a href="http://calyouth.org/ca-youth-crisis-line/">California Youth Crisis Line</a></p>
							24/7 free, confidential service for persons in need up to age 24.<br>
							<!-- <span class="glyphicon glyphicon-earphone"></span> 1-800-843-5200 -->
							<a class="btn btn-primary btn-xlg" href="1-800-843-5200"><span class="glyphicon glyphicon-earphone"></span> Click to Call
							</a>
						</blockquote>
					</li>
					<li>
						<blockquote>
							<p><a href="http://ywca-sv.org/our-services/support-services/sexualassaultservices/">YWCA-Silicon Valley Sexual Assault Services</a></p>
							Free, confidential crisis counseling.
							Accompaniment of survivor to the hospital and through the reporting and judicial process.<br><br>
							<address>
							Sunnyvale Family Justice Center<br>
							298 South Sunnyvale Drive<br>
							Sunnyvale, CA 94086<br><br>
							<!-- <span class="glyphicon glyphicon-earphone"></span> 1-800-572-2782 <small>(Immediate crisis counseling assistance)</small><br>
							<span class="glyphicon glyphicon-earphone"></span> (408) 749-0793 -->
							<a class="btn btn-warning btn-xlg" href="1-800-572-2782"><span class="glyphicon glyphicon-earphone"></span> Click to Call
							</a><small>(For immediate crisis counseling assistance)</small><br>
							<a class="btn btn-primary btn-xlg" href="(408) 749-0793"><span class="glyphicon glyphicon-earphone"></span> Click to Call
							</a>
							</address>
						</blockquote>
					</li>
				</ul>
			</div>
		</div>
	</div>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>