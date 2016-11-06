<!DOCTYPE html>
<html lang="en">
<head>
<title>SafeBridge - Home</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script type="text/javascript">
// Command response framework

var _in, _out;

function init()
{
  _in = document.getElementById("input");
  _out = document.getElementById("output");
}

function inputKeydown(e) {
  // Use onkeydown because IE doesn't support onkeypress for arrow keys

  //alert(e.keyCode + " ^ " + e.keycode);

  if (e.shiftKey && e.keyCode == 13) { // shift-enter
    // don't do anything; allow the shift-enter to insert a line break as normal
  } else if (e.keyCode == 13) { // enter
    // execute the input on enter
    try { go(); } catch(er) { alert(er); };
    setTimeout(function() { _in.value = ""; }, 0); // can't preventDefault on input, so clear it later
  }  else { }

  //return true;
}

function go(s)
{
  _in.value = question = s ? s : _in.value;

  if (question == "")
    return;

  // Unfortunately, this has to happen *before* the JavaScript is run, so that
  // print() output will go in the right place.
  _in.value='';

  // put chatbot code here!!!!!!!
  println("I don't know how to respond to: " + question);
}

function println(s)
{
  if((s=String(s)))
  {
    var newdiv = document.createElement("div");
    newdiv.appendChild(document.createTextNode(s));
    //newdiv.className = type;
    _out.appendChild(newdiv);
    return newdiv;
  }
}

</script>




</head>
<body onload="init()">
<?php include "modules/navbar.php" ?>


<div class="container">
	<div class="page-header">
		<h1>Get Some Answers / <small>but not from taylor swift.</small></h1>
	</div>
	<form class="form-horizontal" role="form" name="feedbackForm" novalidate>
		<div class="form-group">
			<label for="commandresponse" class="col-sm-2 control-label">Go ahead, type something!</label>
			<div class="col-sm-9">
				<div id="output"><h3>Responses appear here.</h3></div>
				<textarea id="input" class="form-control" onkeydown="inputKeydown(event)" name="input" rows="12"></textarea>
			</div>
		</div>

	</form>
</div>




</body>
</html>