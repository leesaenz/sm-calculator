<!DOCTYPE html>
<html>
  <head>
    <title>SmartMusic Calculator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="css/touchspin.min.css">
    <link rel="stylesheet" href="css/smcalculator.min.css">
  </head>
  <body>
  <div class="container">
  	<section class="calc col-md-12">
  		<form role="form" action="http://www.smartmusic.com/quote?utm_source=landingpage&utm_medium=site&utm_campaign=new">
			  <div class="input-group bootstrap-touchspin">
				  <label class="input-group-addon" for="teachers">Teachers</label>
				  <input id="teachers" type="number" class="form-control" placeholder="0" min="0" max="10000" aria-describedby="teacher-addon" tabIndex="1">
				  <span class="input-group-btn-vertical">
						<button class="btn btn-default bootstrap-touchspin-up teacher-up" type="button">
							<i class="glyphicon glyphicon-chevron-up"></i>
						</button>
						<button class="btn btn-default bootstrap-touchspin-down teacher-down" type="button">
							<i class="glyphicon glyphicon-chevron-down"></i>
						</button>
					</span>
				</div>
				<small>How many teachers will use the new SmartMusic?</small>

			  <div class="input-group">
				  <label class="input-group-addon" for="students">Students</label>
				  <input id="students" type="number" class="form-control" placeholder="0" min="0" aria-describedby="student-addon" tabIndex="2">
				  <span class="input-group-btn-vertical">
						<button class="btn btn-default bootstrap-touchspin-up" type="button">
							<i class="glyphicon glyphicon-chevron-up"></i>
						</button>
						<button class="btn btn-default bootstrap-touchspin-down" type="button">
							<i class="glyphicon glyphicon-chevron-down"></i>
						</button>
					</span>
				</div>
				<small>How many total students will use it?</small>

				<div class="input-group">
				  <label class="input-group-addon" for="upgrades">Upgrade</label>
				  <input id="upgrades" type="number" class="form-control" placeholder="0" min="0" aria-describedby="upgrade-addon" tabIndex="3">
				  <span class="input-group-btn-vertical">
						<button class="btn btn-default bootstrap-touchspin-up upgrade-up" type="button">
							<i class="glyphicon glyphicon-chevron-up"></i>
						</button>
						<button class="btn btn-default bootstrap-touchspin-down" type="button">
							<i class="glyphicon glyphicon-chevron-down"></i>
						</button>
					</span>
				</div>
				<small>How many of those students will upgrade?</small>

				<div class="input-group total-group">
				  <label class="input-group-addon" for="total" disabled>Total</label>
				  <input id="total" type="text" class="form-control" placeholder="$0.00" min="0" aria-describedby="total" disabled>
				</div>
			  <button type="submit" class="btn btn-default submit">Get Quote</button>
			</form>
  	</section>
  </div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="js/touchspin.min.js"></script>
    <script src="js/smcalculator.min.js"></script>
  </body>
</html>