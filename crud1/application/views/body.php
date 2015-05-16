<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Crud operation using jquery</title>

 		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

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

  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	</head>
	<body>
		<h1 class="text-center">Basic Crud Module</h1>
			<div class="container" id="" >
				<table class="table">
				    <thead>
				      <tr>
				        <th>Id</th>
				        <th>First name</th>
				        <th>Last name</th>
				        <th>Age</th>
				        <th>Gender</th>
				        <th>City</th>

				        <th>Address</th>
				        <th colspan="2">Operations</th>
				      </tr>
				    </thead>
				    <tbody>
						<?php foreach ($result as $row) {
	?>
        <tr class='row<?php echo $row->id;?>'>
          <td><?php echo $row->id;?></td>
          <td><?php echo $row->first_name;?></td>
          <td><?php echo $row->last_name;?></td>
          <td><?php echo $row->age;?></td>
          <td><?php echo $row->gender;?></td>
          <td><?php echo $row->city_name;?></td>
          <td><?php echo $row->address;?></td>
          <td>
           <a href="" class="btn btn-warning btn-xs" data-target="#modalupdate" data-toggle="modal" onclick="editRow('<?php echo $row->id;?>')"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
           <td><a href="<?php echo site_url('home/delete?id=' . $row->id);?>" class="btn btn-danger btn-xs" id="delete"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
          </td></tr>
      <?php

}?>
					</tbody>
   				</table>

   			<div>
   				<button class="btn btn-info" data-target="#modaladd" data-toggle="modal">
   				<span class="glyphicon glyphicon-plus"> AddMember</span></button>
   			</div>



			</div>
			<!-- Modal Add Member-->


					<div class="modal fade" id="modaladd"role="dialog" aria-labelledby="gridSystemModalLabel" aria-hidden="true">
					    <div class="modal-dialog">
					      <div class="modal-content">
					        <div class="modal-header">
					          <h4 class="modal-title" id="gridSystemModalLabel">Add Member</h4>
					        </div>
					        <div class="modal-body">
					          <div class="container-fluid">
					            <div class="row">
					             <form id="myform" action="home/save" method="post">


											<div class="form-group">
												<label for="first_name">First Name</label>
												<input type="text" class="form-control" name="first_name" value="" placeholder="Enter firstname" required>
												<label for="last_name">Last Name</label>
												<input type="text" class="form-control" name="last_name" placeholder="Enter lastname" >
												<label for="age">Age</label>

												<input type="text" class="form-control bfh-number" name="age"
												 placeholder="Enter Age" data-min="15" data-max="80" >
												<div class="radio" id="gender">Gender
													<label>
														<input type="radio" name="gender" id="" value="M" checked="">
														Male
													</label>
													<label>
														<input type="radio" name="gender" id="" value="F" checked="">
														Female
													</label>
												</div>
												<label for="city_name">City Name</label>
												<input type="text" class="form-control" name="city_name" id="tags" placeholder="Enter City" >
												<label for="address">Address</label>
												<textarea class="form-control" name="address" placeholder="Enter address" rows="4"  placeholder="Enter Address" ></textarea>
											</div>



											<button type="submit" class="btn btn-primary">Submit</button>
										</form>

					           	</div>
					          </div>
					        </div>
					        <div class="modal-footer">
					          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

					        </div>
					      </div><!-- /.modal-content -->
					    </div><!-- /.modal-dialog -->
					  </div><!-- /.modal -->
					  <div class="modal fade" id="modalupdate" role="dialog" aria-labelledby="gridSystemModalLabel" aria-hidden="true">
						    <div class="modal-dialog">
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						          <h4 class="modal-title" id="gridSystemModalLabel">Update</h4>
						        </div>
						        <div class="modal-body">
						          <div class="container-fluid">
						            <div class="row">
						             <form id="updateform" action="" method="post">


											<div class="form-group">


												<label for="first_name">First Name</label>
												<input type="text" class="form-control" name="first_name" value=""   required>
												<label for="last_name">Last Name</label>
												<input type="text" class="form-control" name="last_name"  >
												<label for="age">Age</label>

												<input type="text" class="form-control bfh-number" name="age"
												  data-max="80" >
												<div class="radio" id="gender">Gender
													<label>
														<input type="radio" name="gender" id="" value="M" checked="">
														Male
													</label>
													<label>
														<input type="radio" name="gender" id="" value="F" checked="">
														Female
													</label>
												</div>
												<label for="city_name">City Name</label>
												<input type="text" class="form-control" name="city_name" id="tags" placeholder="Enter City" >
												<label for="address">Address</label>
												<textarea class="form-control" name="address"  rows="4"  placeholder="Enter Address" ></textarea>
											</div>




											<button type="submit" class="btn btn-primary">Save</button>
										</form>
									    </div>
									</div>

						         </div>

						        <div class="modal-footer">
						          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

						        </div>
						      </div><!-- /.modal-content -->
						    </div><!-- /.modal-dialog -->
						  </div><!-- /.modal -->
<script type="text/javascript">

function editRow(varid){





	console.log($('.row'+varid));
	var trrow = $('.row'+varid);
	var allTd = trrow.children('td');

	var fname = $(allTd[1]).html();

	$( "input[name='first_name']" ).val( fname );
	var lname = $(allTd[2]).html();

	$( "input[name='last_name']" ).val( lname );
	var age = $(allTd[3]).html();

	$( "input[name='age']" ).val( age );

	var gender =$(allTd[4]).html();

	$("input[value='"+gender+"'][name='gender']").prop("checked", true);


	// if(gender == 'M'){
	// $("#radio_1").prop("checked", true)

	// }else{
	// 	$("#radio_1").prop("checked", true)
	// }
	$("input[name=gender][value=" + gender + "]").attr('checked', 'checked');
	var cname = $(allTd[5]).html();

	$( "input[name='city_name']" ).val( cname );
    var address = $(allTd[6]).html();


	$( "textarea[name='address']" ).html( address);




	$('form[id="updateform"]').attr('action', 'home/edit?id='+varid);



}


	var availableTags = [

      "Airoli","Ambivli","Asangaon","Belapur",
      "Dombivli", "Ghansoli",
      "Kalyan","Koperkhairane", "Kharghar","Mumbai",
      "Rabale",
      "Shahad","Thane",
      "Titwala"

    ];

	$( "input[name='city_name']" ).autocomplete({
      source: availableTags
    });
</script>
</body>
</html>
