<?php
    
    include 'employeeManager.php';

    $employeeManager = new EmployeeManager();
    $data = $employeeManager->getAllEmployees();

?>

<!doctype html>
<html lang="en">

<head>
	<title>Table 09</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="table-09/css/style.css">

</head>

<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Table #09</h2>
					<a href="insert.php">Insert Data</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Date de naissance</th>
									<th>fonction</th>
									<th>departement</th>
									<th>salaire</th>
									<th>Action</th>
								</tr>
							</thead>
							<?php
							foreach($data as $employee){
					?>
		
					<tr>
						<td><?= $employee->getFirstName()?></td>
						<td><?= $employee->getLastName()?></td>
						<td><?= $employee->getAge()?></td>
						<td>
							<a href="edit.php?id=<?php echo $employee->getId() ?>" class="btn btn-success">Edit</a>
							<a href="delete.php?id=<?php echo $employee->getId() ?>" class="btn btn-warning">delete</a>
						</td>
					</tr>
					<?php }?>
							<!-- <tbody>
								<tr>
									<th scope="row">1001</th>
									<td>Mark Otto</td>
									<td>Japan</td>
									<td>$3000</td>
									<td>$1200</td>
									<td><a href="edit.php?id=<?php echo $employee->getId() ?>" class="btn btn-success">Edit</a></td>
								</tr>


								<th scope="row">1001</th>
								<td>Mark Otto</td>
								<td>Japan</td>
								<td>$3000</td>
								<td>$1200</td>
								<td><a href="delete.php?id=<?php echo $employee->getId() ?>" class="btn btn-warning">Delete</a></td>
								</tr> -->

							
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>

</html>