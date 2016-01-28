<!DOCTYPE html>
<html>
	<head>
		<title>AlphaGov:: Starwars</title>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<!-- Bootstrap and FontAwesome -->
	    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<!-- Scripts -->
	    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 

	    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />

	<!-- FormValidation CSS file -->
	    <link rel="stylesheet" href="css/starwars.css">
	    <link rel="stylesheet" href="./formvalidation/dist/css/formValidation.min.css">

	<!-- FormValidation plugin and the class supports validating Bootstrap form -->
	    <script src="./formvalidation/dist/js/formValidation.min.js"></script>
	    <script src="./formvalidation/dist/js/framework/bootstrap.min.js"></script>

	    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->  
	</head>
	<body>

	<form id="basicBootstrapForm" class="form-horizontal">

		<div class="a1">

			<h1>Star Wars Questionnaire</h1>

		    <div class="form-group">
		        <label class="col-xs-3 control-label">What is your favourite Star Wars film?</label>
		        <div class="col-xs-4">
		            <input type="text" class="form-control alpha2" name="film" placeholder="Your favourite film" />
		        </div>
		    </div>

		    <div class="form-group">
				<label class="col-xs-3 control-label">Which of these characters are from the Star Wars universe?</label>
		        <div class="col-xs-6">
		            <div class="checkbox">
		                <label>
		                    <input type="checkbox" name="character" value="Spock" /> Spock
		                </label>
		            </div>
		            <div class="checkbox">
		                <label>
		                    <input type="checkbox" name="character" value="Darth Vader" /> Darth Vader
		                </label>
		            </div>
		            <div class="checkbox">
		                <label>
		                    <input type="checkbox" name="character" value="Captain Kirk" /> Captain Kirk
		                </label>
		            </div>
		            <div class="checkbox">
		                <label>
		                    <input type="checkbox" name="character" value="Luke Skywalker" /> Luke Skywalker
		                </label>
		            </div>
		            <div class="checkbox">
		                <label>
		                    <input type="checkbox" name="character" value="Rey Mysterio" /> Rey Mysterio
		                </label>
		            </div>
		        </div>
			</div>

		    <div class="form-group">
		        <label class="col-xs-3 control-label">Do you know who Rey’s parents are?</label>
		        <div class="col-xs-6">
		            <div class="radio">
		                <label>
		                    <input type="radio" name="paternity" value="yes" /> Yes
		                </label>
		            </div>
		            <div class="radio">
		                <label>
		                    <input selected type="radio" name="paternity" value="no" /> No
		                </label>
		            </div>
		        </div>
		    </div>


		    <div class="form-group" id="paternity">
		        <label class="col-xs-3 control-label">Who are Rey’s parents?</label>
		        <div class="col-xs-4">
		            <input type="text" class="form-control alpha2" name="reyparents" placeholder="Mom + Pop?" />
		        </div>
		    </div>			

<!-- 
		    <div class="form-group">
		        <label class="col-xs-3 control-label" id="captchaOperation"></label>
		        <div class="col-xs-4">
		            <input type="text" class="form-control" name="captcha" />
		        </div>
		    </div>

 -->
 		    <div class="form-group">
		        <div class="col-xs-9 col-xs-offset-3">
		            <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Submit</button>
		        </div>
		    </div>

		</div>

	</form>

	<script type="text/javascript" src="js/listener.js"></script>
	<script type="text/javascript" src="js/starwars.js"></script>
	</body>
</html>
