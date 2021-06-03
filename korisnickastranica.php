<!DOCTYPE html>
<html>
<?php session_start();?>
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
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">zdravo neko</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">odjavi se</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <?php echo "ZdrVO". $_SESSION['$email ']; ?>
    <section style="margin-top: 150px;text-align: center;">
        <h1>Radnici</h1>
    </section>
    <section>
        <article>
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="card m-auto" style="max-width:850px">
                        <div class="card-body" style="/*height: 20px;*/">
                            <form class="d-flex align-items-center"><i class="fas fa-search d-none d-sm-block h4 text-body m-0"></i><input class="form-control form-control-lg flex-shrink-1" type="search" placeholder="pretrazi ime" name="searchbar" style="/*height: 20px;*/"><button class="btn btn-success btn-lg"
                                    type="submit">Pretraga</button></form>
                        </div>
                    </div>
                </div>
            </div>
           <a href="novizaposleni.html"  > <button class ="offset-md-10 my-4 btn btn-success btn-lg">Novi Radnik</button></a>
            <table id="" class="table table-striped table-bordered " cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Godine</th>
                <th>Pozicija</th>
                <th>Akcije</th>
              
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Michael Bruce</td>
                <td>Javascript Developer</td>
                <td>Singapore</td>
                <td>29</td>
                <td><i class="far fa-eye"></i> <i class="fas fa-pen"></i> <i class="fas fa-trash"></i> </td>
                
            </tr>
            <tr>
                <td>Donna Snider</td>
                <td>Customer Support</td>
                <td>New York</td>
                <td>27</td>
                <td>2011/01/25</td>
                
            </tr>
        </tbody>
    </table></article>
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