<?php session_start();
include("baza.php");
$edit = false;
if (isset($_SESSION['ime'])) {
    
    
    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        $radnici = mysqli_query($conn, "SELECT * FROM radnici WHERE  id =' $id'"); 
                $row = mysqli_fetch_array($radnici);
                      $id = $row['id'];
                      $ime = $row['ime'];
                      $edit = true;
                      $prezime = $row['prezime'];
                      $email = $row['email'];
                      $pozicija = $row['pozicija'];    
                  }?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-4---Table-Fixed-Header.css">
    <link rel="stylesheet" href="assets/css/Data-Table.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Pricing-Table-Style-01.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark navbar-custom">
            <div class="container"><a class="navbar-brand" href="index.html">THE Gym</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navbarResponsive"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="index.html">home</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="korisnickastranica.php"><?php echo "Zdravo ". $_SESSION['ime']; ?></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="logout.php?logout">odjavi se</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section style="margin-top: 150px;text-align: center;">
<form id="prijava" class="form-container col-9 " method="post" action="crud.php">
    <h2 class="text-center"><strong> Zaposleni</strong></h2>

   <?php if(isset($_GET['edit'])){ ?>

    <div class="form-group"><input type="hidden" class="form-control" name="id" value="<?php echo  $id ; ?>"required /></div>
    <div class="form-group"><input type="text" class="form-control" name="ime" placeholder="ime" value="<?php echo $ime; ?>" required /></div>
    <div class="form-group"><input type="text" class="form-control" name="prezime" placeholder="prezime" value="<?php echo $prezime; ?>" required /></div>
    <div class="form-group"><input type="email" class="form-control" name="email" placeholder="e-posta"value="<?php echo  $email ; ?>"  required /></div>
    <div class="form-group"><input type="text" class="form-control" name="pozicija" placeholder="pozicija" value="<?php echo   $pozicija; ?>" required /></div>
  <?php } else { ?>
  <div class="form-group"><input type="hidden" class="form-control" name="id" required /></div>
    <div class="form-group"><input type="text" class="form-control" name="ime" placeholder="ime" required /></div>
    <div class="form-group"><input type="text" class="form-control" name="prezime" placeholder="prezime" required /></div>
    <div class="form-group"><input type="email" class="form-control" name="email" placeholder="e-posta"  required /></div>
    <div class="form-group"><input type="text" class="form-control" name="pozicija" placeholder="pozicija" required /></div>

   <?php } if($edit == false){ ?>
    <div class="form-group"><button class="btn btn-primary btn-block" id="potvrda" type="submit" name="potvrda">Potvrdi</button></div>
<?php }else{ ?>
    <div class="form-group"><button class="btn btn-primary btn-block" id="potvrda" type="submit" name="izmena">Izmeni</button></div>
<?php } ?>
</form>

</section>
    <footer class="footer-basic">
        <ul class="list-inline">
            <li class="list-inline-item"><a href="index.html">Home</a></li>
        </ul>
        <p class="copyright">The Gym&nbsp; © 2021</p>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/Provera-formeJS.js"></script>
    <script src="assets/js/Table-With-Search.js"></script>
</body>

</html>
<?php 
}
else{
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-4---Table-Fixed-Header.css">
    <link rel="stylesheet" href="assets/css/Data-Table.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Pricing-Table-Style-01.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark navbar-custom">
            <div class="container"><a class="navbar-brand" href="#">THE Gym</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navbarResponsive"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="index.html">home</a></li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    <section style="margin-top: 150px;text-align: center;">
        <h1>Vrati se na pocetnu stranu</h1>
    <footer class="footer-basic">
        <ul class="list-inline">
            <li class="list-inline-item"><a href="index.html">Home</a></li>
        </ul>
        <p class="copyright">The Gym&nbsp; © 2021</p>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/Provera-formeJS.js"></script>
    <script src="assets/js/Table-With-Search.js"></script>
</body>

</html>
<?php 

}
?>