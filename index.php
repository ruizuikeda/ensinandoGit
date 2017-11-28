<?php
$resultado  = $_GET['resultado'];

$numero  = $_GET['numero'];
$numero2  = $_GET['numero2'];
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

       <form action="myScript.php" method="post">
           
           <!-- container principal -->
           <div class="container">
               <h1>PHP - transmissao de dados</h1>

               <div class="jumbotron">
                   <div class="row">
                       <div class="col-xs-12">
                           <div class="col-xs-4"></div>
                           <div class="col-xs-4">
                               <div class="form-group">
                                   <label for="idkjfdalsj">Numero</label>
                                   <input type="text" class="form-control" name="numero" value="<?php echo $numero; ?>">
                               </div>
                           </div>
                           <div class="col-xs-4"></div>
                       </div>
                   </div>
                   
                   <div class="row">
                       <div class="col-xs-12">
                           <div class="col-xs-4"></div>
                           <div class="col-xs-4">
                               <div class="form-group">
                                   <label for="idkjfdalsj">Numero 2</label>
                                   <input type="text" class="form-control" name="numero2" value="<?php echo $numero2; ?>">
                               </div>
                           </div>
                           <div class="col-xs-4"></div>
                       </div>
                   </div>


                   <div class="row">
                       <div class="col-xs-12">
                           <div class="col-xs-4"></div>
                           <div class="col-xs-4">
                               <button type="submit" class="btn btn-block btn-primary">Enviar</button>
                           </div>
                           <div class="col-xs-4"></div>
                       </div>
                   </div>

                   <hr>

                   <div class="row">
                       <div class="col-xs-12">
                           <div class="col-xs-4"></div>
                           <div class="col-xs-4">
                               <div class="form-group">
                                   <label for="fdasfdsafdsa">Resultado</label>
                                   <input type="text" class="form-control" disabled value="<?php echo $resultado; ?>">
                               </div>
                           </div>
                           <div class="col-xs-4"></div>
                       </div>
                   </div>

               </div>

           </div>
           <!-- //container principal -->

      
       </form>

        





        <!-- BIBLIOTECAS JS CORE -->
        <!-- Jquery -->
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <!-- bootstrap -->
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- BIBLIOTECAS JS CUSTOM -->
        <script src="js/graphis.js"></script>
    </body>
</html>
