<?php
/***************************************
** BIBLIOTECAS
****************************************/
require_once 'include/db.php';
require_once 'include/phpLib.php';


$usuarios   = getAll_usuarios();
//echo '<pre>'; print_r($usuarios); echo '</pre>';exit;

$idUsuario  = (int)$_GET['idUsuario'];
if($idUsuario) {
    $usuario = get_usuario($idUsuario);
}
//echo '<pre>'; print_r($usuario); exit;
?>




<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>GRAPHIS</title>

        <!-- BIBLIOTECAS CSS CORE -->
        <!-- bootstrap -->
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap-theme.min.css">
        <!-- fontawesome -->
        <link rel="stylesheet" href="bower_components/fontawesome/css/font-awesome.min.css">
        <!-- animatecss -->
        <link rel="stylesheet" href="bower_components/animate.css/animate.min.css">
    </head>
    <body>


        <h1 class="text-center">SELECT</h1>
        
        
        <div class="container">
           <a href="comBanco.php" class="btn">NOVO</a>
           
            <div class="row">
                <div class="col-xs-12">
                    <div class="col-xs-12">
                        <p>Usuarios</p>
                        <ul>
                            <?php for($i=0;  $i<count($usuarios);   $i++) { ?>
                            <li><a href="comBanco.php?idUsuario=<?php echo $usuarios[$i]['idUsuario']; ?>"><?php echo $usuarios[$i]['nome']; ?> / senha: <?php echo $usuarios[$i]['senha']; ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            
            
            
            <form action="action/usuario_inserir.php" method="post">
                <input type="hidden" name="idUsuario" value="<?php echo $idUsuario; ?>">
               
                <h1 class="text-center">INSERT ou UPDATE</h1>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="jdflsa">nome</label>
                                <input type="text" name="nome" class="form-control" value="<?php echo $usuario['nome'];?>">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="jdflsa">senha</label>
                                <input type="text" name="senha" class="form-control" value="<?php echo $usuario['senha'];?>">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-xs-offset-8 col-xs-4">
                            <button class="btn btn-block btn-primary">ENVIAR</button>
                        </div>
                    </div>
                </div>    
            </form>
            
            
            
            
            
            
            
            
        </div>


        <!-- BIBLIOTECAS JS CORE -->
        <!-- Jquery -->
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <!-- bootstrap -->
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- BIBLIOTECAS JS CUSTOM -->
        <script src="js/graphis.js"></script>
    </body>
</html>