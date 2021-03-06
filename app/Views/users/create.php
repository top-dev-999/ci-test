<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style type="text/css">
	form .error {
  color: #ff0000;
}

</style>
</head>
<body>
	<div class="container">
		<h1>Create</h1>
		<form action="/user/add" method='post' name="create">
			<label for="basic-url" class="form-label">Firstname</label>
			<div class="input-group mb-3">
			  <input type="text" class="form-control" name="firstname" aria-describedby="basic-addon3" >
			</div>

			<label for="basic-url" class="form-label">Lastname</label>
			<div class="input-group mb-3">
			  <input type="text" class="form-control" name="lastname" aria-describedby="basic-addon3" >
			</div>

			<label for="basic-url" class="form-label">Birthday</label>

	         <div class="form-group mb-3">
	            <div class='input-group date' id='datetimepicker1' >
	               <input type='text' class="form-control" name='birthday' />
	               <span class="input-group-addon">
	               <span class="glyphicon glyphicon-calendar"></span>
	               </span>
	            </div>
	         </div>

			<label for="basic-url" class="form-label">Email</label>
			<div class="input-group mb-3">
			  <input type="text" class="form-control" name="email" aria-describedby="basic-addon3" >
			</div>

			<label for="basic-url" class="form-label">Gender</label>
			<div class="input-group mb-3">
			 <select class="js-example-basic-single form-control"  name="gender">
			 		<option value='1'>Male</option>
			  		<option value='0'>Female</option>";
			</select>
			</div>

			<label for="basic-url" class="form-label">Password</label>
			<div class="input-group mb-3">
			  <input type="text" class="form-control" name="password" aria-describedby="basic-addon3" >
			</div>

			<label for="basic-url" class="form-label">Address</label>
			<div class="input-group mb-3">
			  <input type="text" class="form-control" name="address" aria-describedby="basic-addon3" >
			</div>

			<button type="submit" class="btn btn-primary">New User</button>
			<a class="btn btn-warning" href="/">Back</a>
		</form>
	</div>
</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
$('#datetimepicker1').datepicker({
	format: 'yyyy-mm-dd',
});
$("form[name='create']").validate({
    rules: {
      firstname: "required",
      lastname: "required",
      email: {
        required: true,
        email: true
      },
      password: {
        required: true,
        minlength: 5
      },
      address: "required"
    },
    // Specify validation error messages
    messages: {
      firstname: "Please enter your firstname",
      lastname: "Please enter your lastname",
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      email: "Please enter a valid email address"
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
</script>
</html>