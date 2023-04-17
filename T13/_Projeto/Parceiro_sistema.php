<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/bootstrap.css">
   <!--cabeçalho --> <link rel="stylesheet" href="css/headerdeuruim.css">
   <!--rodape--><link rel="stylesheet" href="css/footerAMEM.css">
   <!--Menu --><link rel="stylesheet" href="css/MenuParceiro/Parceiro_Menu.css">
   <!--Menu --><link rel="stylesheet" href="css/MenuParceiro/fonts-icones.css">
   <!--Menu --><link rel="stylesheet" href="css/MenuParceiro/reset.css">
   <!-- RedeSocial<link rel="stylesheet" href="css/redeSocial.css"> css ta bugando a estrutura--> 

   <!--fle conosco--> <link rel="stylesheet" href="css/feleconosco.css">

    <!--RODAPE --><link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>
    <!--RODAPE --><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css'>
    <!--RODAPE --><link rel="stylesheet" href="css/footerAMEM.css">
    <!--icones bootstrap-->   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <script src="css/Login/js/jquery.js"></script>

    <title>Login</title>

</head>
<body>

<?php include_once('Parceiro_autenticar.php');?>
<?php include_once('_header.php');?>
    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-12">
                <!-- <header class="main_header container">        
                    <div class="content">

                    </div> -->
                </header>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1">
                <?php include_once('Parceiro_menu.php');?>
            </div>
            <div class="col-sm-10 ">
                <?php
                    if($_GET)
                    {

                        if(isset($_GET['Tela']))
                        {

                            $tela = $_GET['Tela'];

                            if($tela  == 'Parceiro')
                            {
                                include_once('frm_Parceiro.php');
                            }
                            elseif($tela =='Categoria')
                            {
                                include_once('Parceiro_Categoria.php');
                            }
                            elseif($tela =='Servicos')
                            {
                                include_once('frm_ParceiroServicos.php');
                            }
                            elseif($tela =='FaleConosco')
                            {
                                include_once('frm_FaleConosco.php');
                            }

                            elseif($tela =='Sair')
                            {
                                include_once('Parceiro_autenticarSair.php');
                            }
                        }
                        else{
                            echo '<h1> ERRO, Pagina não encontrada </h1>';
                        }

                    }
                ?>
            </div>
            <div class="col-sm-1">
                <?php include_once('Parceiro_RedeSocial.php');?> <!--aqi funciona mais nao posso pega o css se nao ele desaparece-->
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
                <?php include_once('_footer.php');?>
        </div>
    </footer> 
    <!-- ?php include_once('Parceiro_RedeSocial.php');? --><!--aqi funciona mais bug a estrutura com o css-->
<script src="js/RedeSocial/Rede_Social.js"></script>
<script src="js/RedeSocial/jquery.js"></script>
<script src="script.js"></script>
</body>
</html>