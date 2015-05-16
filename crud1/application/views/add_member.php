<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Crud operation using jquery</title>

		<!-- Bootstrap CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="assets/style/css/bootstrap-formhelpers.min.css">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
				<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/style/js/bootstrap-formhelpers.js"></script>

	</head>
	<body>
	<div class="container">
		<form id="myform" action="home/save" method="post">
			<legend>Add Member</legend>

			<div class="form-group">
				<label for="first_name">First Name</label>
				<input type="text" class="form-control" name="first_name" value="" placeholder="Enter firstname" required>
				<label for="last_name">Last Name</label>
				<input type="text" class="form-control" name="last_name" placeholder="Enter lastname" >
				<label for="age">Age</label>

				<input type="text" class="form-control bfh-number" name="age"
				 placeholder="Enter Age" data-min="15" data-max="80" >
				<div class="radio" id="gender">
					<label>
						<input type="radio" name="gender" id="" value="M" checked="">
						Male
					</label>
					<label>
						<input type="radio" name="gender" id="" value="F" checked="">
						Female
					</label>
				</div>

				<label for="address">Address</label>
				<textarea class="form-control" name="address" placeholder="Enter address" rows="4"  placeholder="Enter Address" >
				</textarea>
			</div>



			<button type="submit" class="btn btn-primary">Submit</button>
		</form>

	</div>
	<script>
/*	$(function(){
		$( "#sub" ).click(function() {


		var firstname = $('#first_name').val();
		var lastname = $('#last_name').val();
		var age = $('#age').val();
		var gender = $("input[name='gender']").val();
		//var dateA = $('#date').val();
		var address = $('#address').val();
		console.log(firstname,lastname,age,gender,dateA,address);
		});

onsubmit="return false;"
	});


*/

	</script>

	</body>
	</html>
