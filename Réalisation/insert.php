<?php

    include 'configuration.php';
	include 'employe.php';
	include 'employeManager.php';

   if(!empty($_POST)){
	   $employe = new Employe();
	   $employeManager=new EmployeManager();

	   $employe->setFirstName($_POST['prenom']);
	   $employe->setLastName($_POST['nom']);
	   $employe->setAge($_POST['age']);

	   $employeManager->insertEmploye($connectData,$employe);
	   header("Location: index.php");
   }

?>
<!doctype html>
<html lang="en">

<head>
	<title>Hello</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/style.css">

</head>

<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h1 class="heading-section">Hello</h1>
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
						<h3 class="mb-4 text-center">Entrer votre informations</h3>
						<form action="#" class="signin-form"  method="POST" >
							<div class="form-group">
							Prenom : <input type="text" class="form-control" placeholder="Prénom" required name="prenom">
							</div>
							<div class="form-group">
								Nom : <input id="password-field" type="text" class="form-control" placeholder="Nom"
									required name="nom">
								
							</div>
							<div class="form-group">
							Date de Naissance : <input type="date" class="form-control" placeholder="mm/dd/yy" required name="age">
							</div>
							<div class="form-group">
							Département: <input id="password-field" type="text" class="form-control" placeholder="Département "
									required name="Département">
								
							</div>
							<div class="form-group">
							Salaire : <input id="password-field" type="nombre" class="form-control" placeholder="salaire"
									required name="salaire">
								
							</div>
							<div class="form-group">
							fonction :  <input id="password-field" type="text" class="form-control" placeholder="fonction"
									required name="fonction">
								
							</div>
							<div class="form-group">
							photo : <input id="password-field" type="text" class="form-control" placeholder="photo"
									required name="photo">
							</div>
							<div class="form-group">
								<button type="submit" class="form-control btn btn-primary submit px-3"> Ajouter</button>
							</div>
						</form>
						
					</div>
				</div>
			</div>
		</div>
	</section>

</body>

</html>