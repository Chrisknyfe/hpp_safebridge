<!DOCTYPE html>
<html lang="en">
<head>
<title>SafeBridge - Home</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<?php include "modules/navbar.php" ?>

<div class="container">
		<div class="page-header">
			<h1>Take a Survey / <small>feel free to share any details you are comfortable with</small></h1>
		</div>
		<form class="form-horizontal" role="form" name="feedbackForm" novalidate>
			<div class="form-group">
				<label for="incidentlocation" class="col-sm-2 control-label">Where did this incident take place?</label>
				<div class="col-sm-9">
					<!--<textarea class="form-control" id="feedback" name="feedback" rows="12"></textarea>-->
					<select>
						<option value="residential">On the college campus, in a residential building, or in affiliated housing</option>
						<option value="nonresidental">On the college campus in a non-residential building</option>
						<option value="offcampus">Off campus</option>
						<option value="other">Other:</option>
					</select>
					<br>
					If other location, type here:
					<input type="text" name="other">
				</div>
			</div>

				Have you ever experienced any of the following, without your consent, since you came to Stanford?
				<br>
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
				<label for="kissed" class="col-sm-2 control-label">Someone touched, fondled, or rubbed up against the private areas of my body without my consent</label>
				<div class="col-sm-9">
					<input type="radio" name="q1" value="once"> Once
					<input type="radio" name="q1" value="more"> More
					<input type="radio" name="q1" value="never"> Never
					<input type="radio" name="q1" value="unsure"> Unsure

				</div>
			</div>
			<div class="form-group">
				<label for="kissed" class="col-sm-2 control-label">Someone removed some of my clothes without my consent</label>
				<div class="col-sm-9">
					<input type="radio" name="q1" value="once"> Once
					<input type="radio" name="q1" value="more"> More
					<input type="radio" name="q1" value="never"> Never
					<input type="radio" name="q1" value="unsure"> Unsure

				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary">Submit Survey</button>
				</div>
			</div>
		</form>
	</div>




</body>
</html>