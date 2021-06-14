<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>User</title>
</head>
<body>
	<div class="container">
		<h1>Users</h1>
        <button class="btn btn-primary" onclick="addUser()">Add User</button>
		<hr>
        <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
            	<th>No</th>
                <th>Name</th>
                <th>Birthday</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        	<?php 
        		$i = 1;
        		foreach ($users as $user) {

        			echo "<tr>";
        			echo "<td>".$i."</td>";
        			echo "<td>".$user->firstname." ".$user->lastname."</td>";
        			echo "<td>".$user->birthday."</td>";
        			echo "<td>".$user->email."</td>";
        			$gender = $user->gender == 1 ? "Male" : "Female"; 
        			echo "<td>".$gender."</td>";
        			echo "<td>".$user->address."</td>";
                    echo "<td>".$user->password."</td>";
        			echo "<td>"."<button class='btn btn-primary' onclick='editUser(".$user->id.")'>Edit</button> <button class='btn btn-warning' onclick='removeUser(".$user->id.")'>Delete</button>"."</td>";
        			echo "</tr>";
        			$i++;
        		}
        	?>
        </tbody>
        <tfoot>
            <tr>
            	<th>No</th>
                <th>Name</th>
                <th>Birthday</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
	</div>
</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
	    $('#example').DataTable();
	} );

    function addUser() {
        location.href = "/user/create/";
    }

	function editUser(id) {
		location.href = "/user/edit/" + id;
	}

	function removeUser(id) {
		location.href = "/user/remove/" + id;
	}
</script>
</html>