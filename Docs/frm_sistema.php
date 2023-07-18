<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Sistema</title>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <?php 
            include_once('login_autenticar.php');
            include_once('_topo.php')
            ?>
        </div>
        <div class="row">
            <div class="col-sm-3" id="menu">
                <?php include_once('_menu.php')?>
            </div>
            <div class="col-sm-9" id="conteudo">
                <?php
                if(isset($_GET['tela']))
                {
                    if($_GET['tela']=='home')
                    {
                        include_once('frm_home.php');
                    }
                    else if($_GET['tela']=='usuario')
                    {
                        include_once('frm_usuario.php');
                    }
                    else if($_GET['tela']=='regiao')
                    {
                        include_once('frm_regiao.php');
                    }
                    else if($_GET['tela']=='area')
                    {
                        include_once('frm_area.php');
                    }
                    else if($_GET['tela']=='material')
                    {
                        include_once('frm_material.php');
                    }
                    else if($_GET['tela']=='mensageiro')
                    {
                        include_once('frm_mensageiro.php');
                    }
                    else if($_GET['tela']=='reciclador')
                    {
                        include_once('frm_reciclador.php');
                    }
                    else if($_GET['tela']=='solicitacaoColeta')
                    {
                        include_once('frm_solicitacaoColeta.php');
                    }
                    else if($_GET['tela']=='pontoColeta')
                    {
                        include_once('frm_pontoColeta.php');
                    }
                    else if($_GET['tela']=='sair')
                    {
                        include_once('_home.php');
                    }
                }
                else
                {
                    include_once('_home.php');
                }
                ?>
            </div>
        </div>
        <div class="row">
            <?php include_once('_rodape.php')?>
        </div>
    </div>

    <script src="../js/bootstrap.js"></script>
</body>
</html>