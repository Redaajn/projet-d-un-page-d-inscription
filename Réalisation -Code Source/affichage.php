<?php
 // Traitement

 // Initialisation du session
 session_start();

 // Initialisation du tableau des participants
 $NOM = [];
 $PRENOM= [];
 $email= [];



 // Trouver ou créer le tableau dans Session
 if( isset( $_SESSION['NOM'] ) ) {
    $NOM =  $_SESSION['NOM'] ;
 }else {
    $_SESSION['NOM'] =  $NOM;
 }

 if( isset( $_SESSION['PRENOM'] ) ) {
    $PRENOM =  $_SESSION['PRENOM'] ;
 }else {
    $_SESSION['PRENOM'] =  $PRENOM;
}

 if( isset( $_SESSION['email'] ) ) {
    $email =  $_SESSION['NOM'] ;
 }else {
    $_SESSION['email'] =  $email;
 }
 


 // Ajouter le nom du nom dans le tableau
 $NOM[] = $_POST["NOM"] ;
 $PRENOM[] = $_POST["PRENOM"] ;
 $email[] = $_POST["email"] ;

 // Enregistrer le tableau dans la session
$_SESSION['NOM'] =  $NOM;
$_SESSION['PRENOM'] =  $PRENOM;
$_SESSION['email'] =  $email;
?>

<!-- Affichage -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="row">
    <div class="col-md-3">
<h1>NOM</h1>
<ul>
    <?php
        foreach ($NOM as $value) { 
        ?>
        <li><?php echo $value ?></li>
        <?php
        }
    ?>  
</ul>
</div>
<div class="col-md-3">
<h1>PRENOM</h1>
<ul>
    <?php
        foreach ($PRENOM as $value) { 
        ?>
        <li><?php echo $value ?></li>
        <?php
        }
    ?>  
</ul>
</div>
<div class="col-md-3">
<h1>Emails</h1>
<ul>
<?php
        foreach ($email as $value) { 
        ?>
        <li><?php echo $value ?></li>
        <?php
        }
    ?> 
   
</ul>
</div>
</div>

<button onclick="window.print()">Print</button>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>