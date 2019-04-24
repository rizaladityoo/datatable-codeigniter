<!DOCTYPE html>
<html>
<head>
	<title>User data</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" rel="stylesheet">
</head>
<body>
	<center><h1>User Data</h1></center>

	<div class="container">
		<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
							<th>FOTO</th>
							<th>NAMA</th>
							<th>EMAIL</th>
							<th>NO HP</th>
							<th>Gender</th>
							<th>Pekerjaan</th>
							<th>delete</th>
						</tr>
        </thead>
        <tbody>
					<?php foreach($user as $u){ ?>
					<tr>
						<td><?php echo $u->photo ?></td>
						<td><?php echo $u->nama ?></td>
						<td><?php echo $u->email ?></td>
						<td><?php echo $u->no_telepon ?></td>
						<td><?php echo $u->gender ?></td>
						<td><?php echo $u->pekerjaan ?></td>
						<td><button>delete</button></td>
					</tr>
					<?php } ?>
        </tbody>
    </table>
	</div>
	<center><a href="http://localhost/shirobyte/CodeIgniter-3.1.10/index.php/crud/registration"> registraion</a></center>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
	<script>
	$(document).ready(function() {
		$('#example').DataTable();
	} );
	</script>

</body>
</html>
