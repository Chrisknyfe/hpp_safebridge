<!DOCTYPE html>
<html lang="en">
<head>
<title>SafeBridge - Survey</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="modules/styling.css">
</head>
<body>
<?php include "modules/navbar.php" ?>

<div class="container">
	<div class="page-header">
		<h1>Take a Survey / <small>feel free to share any details you are comfortable with</small></h1>
	</div>
	<div class="row row-content">
		<ul class="nav nav-tabs" role="tablist">
			<li role="presentation" class="active">
				<a href="#about" aria-controls="about" role="tab" data-toggle="tab">About Yourself</a>
			</li>
			<li role="presentation">
				<a href="#incident" aria-controls="incident" role="tab" data-toggle="tab">Incident</a>
			</li>
			<li role="presentation">
				<a href="#psych" aria-controls="psych" role="tab" data-toggle="tab">Psych</a>
			</li>
		</ul>
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane fade in active" id="about">
				<!-- Age, gender, cultural background, religion; other demographics can be added as desired -->
				<form class="form-horizontal" role="form" name="aboutForm" novalidate>
					<h4>Please give us some details about who you are.</h4>
					<br>
					<div class="form-group">
						<label for="age" class="col-sm-2 control-label">What is your age?</label>
						<div class="col-sm-9">
							<input type="text" name="age" id="age"/>
						</div>
					</div>
					<div class="form-group">
						<label for="gender" class="col-sm-2 control-label">How do you identify your gender?</label>
						<div class="col-sm-9">
							<input type="radio" name="q2" value="male"> Male
							<input type="radio" name="q2" value="female"> Female
							<input type="radio" name="q2" value="other"> Other / Nonbinary
						</div>
					</div>
					<div class="form-group">
						<label for="stripped" class="col-sm-2 control-label">What is your cultural/ethnic background?</label>
						<div class="col-sm-9">
							<input type="radio" name="q3" value="caucasian"> Caucasian
							<input type="radio" name="q3" value="aframer"> Black / African-American
							<input type="radio" name="q3" value="nativeamer"> Native American / Alaskan
							<input type="radio" name="q3" value="asian"> Asian
							<input type="radio" name="q3" value="pacislander"> Native Hawaiian / Pacific Islander
							<input type="radio" name="q3" value="multi"> Multiracial
						</div>
					</div>
					<div class="form-group">
						<label for="incidentlocation" class="col-sm-2 control-label">Do you identify with a religion? If so, please specify.</label>
						<div class="col-sm-9">
							<input type="text" name="religion"/>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-primary">Submit Survey</button>
						</div>
					</div>
				</form>
			</div>
			<div role="tabpanel" class="tab-pane fade" id="incident">
				<form class="form-horizontal" role="form" name="incidentForm" novalidate>
					<h4>Have you ever experienced any of the following since you came to Stanford?</h4>
					<br>
					<div class="form-group">
						<label for="kissed" class="col-sm-2 control-label">Someone kissed me without my consent</label>
						<div class="col-sm-9">
							<input type="radio" name="q1" value="once"> Once
							<input type="radio" name="q1" value="more"> More
							<input type="radio" name="q1" value="never"> Never
							<input type="radio" name="q1" value="unsure"> Unsure
						</div>
					</div>
					<div class="form-group">
						<label for="fondled" class="col-sm-2 control-label">Someone touched, fondled, or rubbed up against the private areas of my body without my consent</label>
						<div class="col-sm-9">
							<input type="radio" name="q2" value="once"> Once
							<input type="radio" name="q2" value="more"> More
							<input type="radio" name="q2" value="never"> Never
							<input type="radio" name="q2" value="unsure"> Unsure
						</div>
					</div>
					<div class="form-group">
						<label for="stripped" class="col-sm-2 control-label">Someone removed some of my clothes without my consent</label>
						<div class="col-sm-9">
							<input type="radio" name="q2" value="once"> Once
							<input type="radio" name="q2" value="more"> More
							<input type="radio" name="q2" value="never"> Never
							<input type="radio" name="q2" value="unsure"> Unsure
						</div>
					</div>
					<div class="form-group">
						<label for="incidentlocation" class="col-sm-2 control-label">Where did this incident take place?</label>
						<div class="col-sm-9">
							<!--<textarea class="form-control" id="feedback" name="feedback" rows="12"></textarea>-->
							<select>
								<option value="residential">On the college campus, in a residential building, or in affiliated housing</option>
								<option value="nonresidential">On the college campus in a non-residential building</option>
								<option value="offcampus">Off campus</option>
								<option value="other">Other:</option>
							</select>
							<br>
							If other location, type here:
							<input type="text" name="other">
						</div>
					</div>
					<div class="form-group">
						<label for="feedback" class="col-sm-2 control-label">Are there any more details you would like to share?</label>
						<div class="col-sm-9">
							<textarea class="form-control" id="feedback" name="feedback" rows="12" placeholder="Tell your story here"></textarea>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-primary">Submit Survey</button>
						</div>
					</div>
				</form>
			</div>
			<div role="tabpanel" class="tab-pane fade" id="psych">
				<img src="../images/psychquiz.png" alt="Psych quiz"></img>
			</div>
		</div>
	</div>
		
</div>




</body>
</html>