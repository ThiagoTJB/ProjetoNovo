<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>

    <!-- Cabeçalho e Rodapé -->
    <link rel="stylesheet" href="css/Footer_Header.css">

    <!--fle conosco-->
    <link rel="stylesheet" href="css/feleconosco.css">

    <!--RODAPE -->
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>
    <!--RODAPE -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css'>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <script src="css/Login/js/jquery.js"></script>

    <title>Login</title>

</head>

<body>
    <?php include_once('www_autenticar.php'); ?>


    <div class="container">
        
    <header>
            <div class="row">
                <div class="col-sm-12">
                    <?php include_once('_header.php'); ?>
                </div>
            </div>
        </header>
        <div style="height: 65px;"></div>
        <div class="container ">
            <div class="row">
                <div class="col-sm-3" style="background-color: red;">
                    <?php include_once('_menu.php'); ?>
                </div>
                <div class="col-sm-9 bg-dark"></div>
            </div>
        </div>

    </div>


    <footer class="footer">
        <div class="container-fluid">
            <?php include_once('_footer.php'); ?>
        </div>
    </footer>

    <script src="script.js"></script>
</body>

</html>