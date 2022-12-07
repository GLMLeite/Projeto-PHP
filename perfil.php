
<?php
session_start();
include __DIR__ . "./bd/conexao.php";
    
    
    


if(!empty($_SESSION["logcliente"]) && !empty($_COOKIE["logcliente"])){
//    var_dump($_SESSION["logcliente"], $_COOKIE);
   // $nomecliente = $_SESSION["logcliente"]["nome"];
   // echo "Seja bem vindo cliente {$nomecliente}";
    $arrayClient = $_SESSION ["logcliente"];
    //var_dump ($arrayClient);
    $sql = "SELECT email, nome, telefone, endereco  FROM cadastro WHERE id = '{$arrayClient["id"]}' ";
    $query = $conn->prepare($sql);
    $query->execute();
    $row = $query->fetch();
    $name = $row ["nome"];
    $email = $row ["email"];
    $telefone = $row ["telefone"];
    $endereco = $row ["endereco"];
    
    
    
    //var_dump($sql);
    
}else {
    echo "não existe usuário logado";
}
?>
<html lang="en">

    <head>
        <?php include __DIR__ . "./includes/Head.php"; ?>
        <title>Alterar perfil</title>

    </head>

    <body>

        <!-- ***** Preloader Start ***** -->
        <div id="preloader">
            <div class="jumper">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>  
        <!-- ***** Preloader End ***** -->

        <!-- Header -->
        <header class="">
            <?php include __DIR__ . "./includes/navegacao.php"; ?>
        </header>

        <!-- Page Content -->
        <div class="page-heading about-heading header-text" style="background-image: url(assets/images/background3.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-content">
                            <h4>Online Skate Shop</h4>
                            <h2>Alterar Perfil</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
        <div class="products call-to-action">
            <div class="container">        
                <div class="inner-content">
                    <div class="contact-form">
                        <form action="perfil.php" method = "post" novalidate>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label">Nome:</label>
                                        <input type="text" name= "nome"  class="form-control"  value = "<?=$name; ?>">
                                    </div>
                                </div>
                               <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label">Email:</label>
                                        <input type="email" name = "Email"  class="form-control"  value = "<?=$email; ?>">
                                    </div>
                                </div>
                                </div>
                            
                            <div class="row"> 
                                                  
                                                         <div class="col-sm-6 col-xs-12">
                                                         <div class="form-group">
                                                              <label class="control-label">Telefone:</label>
                                                              <input type="text" name="telefone" class="form-control" value = "<?=$telefone; ?>">
                                                         </div>
                                                         </div>
                                                  
                            
                            <!--                   <div class="row">
                                                    <div class="col-sm-6 col-xs-12">
                                                         <div class="form-group">
                                                              <label class="control-label">Cidade:</label>
                                                              <input type="text" name="cidade" class="form-control">
                                                         </div>
                                                    </div>-->
                                                   
                            
                                                    <div class="col-sm-6 col-xs-12">
                                                         <div class="form-group">
                                                              <label class="control-label">Endereço:</label>
                                                              <input type="text" name ="endereco" class="form-control" value = "<?=$endereco; ?>">
                                                         </div>
                                                    </div>
                                
                                          </div>
                                          
                    
                            <div class="clearfix">
                                

                                <button name = "finalizar" type="submit" class="filled-button pull-right">Finalizar</button>
                            </div>
                    
                        </form>
                    </div>
                </div>
            </div>
        </div>
<?php

$arrayPost = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$sql = "SELECT nome, email, telefone, endereco "
            . "FROM cadastro " 
                ."WHERE email LIKE '{$arrayPost["Email"]}'";

    $query2 = $conn-> prepare($sql);
    $query2->execute();
    
         
            
            if (!filter_var($arrayPost["Email"], FILTER_VALIDATE_EMAIL)) {

                echo "Email inválido";
            }
             else if($query2->rowCount() >= 1){
            echo "<div class ='single-page-header fixed-top'>";
            echo "<p>email ja cadastrado!</p>"; 
            echo "</div>"; 

            }else {
                    $sql = "update cadastro set nome = '{$_POST['nome']}' ,email = '{$_POST['Email']}',telefone = '{$_POST['telefone']}', endereco = '{$_POST['endereco']}' where id = {$_SESSION["logcliente"]['id']}";
              
                $query = $conn->prepare($sql);
                $query->execute();
                
            }
            
            
            ?>
        <footer>
<?php include __DIR__ . "./includes/Footer.php"; ?>
        </footer>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="contact-form">
                            <form action="#" id="contact">
                                <div class="row">
                                    <div class="col-md-6">
                                        <fieldset>
                                            <input type="text" class="form-control" placeholder="Pick-up location" required="">
                                        </fieldset>
                                    </div>

                                    <div class="col-md-6">
                                        <fieldset>
                                            <input type="text" class="form-control" placeholder="Return location" required="">
                                        </fieldset>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <fieldset>
                                            <input type="text" class="form-control" placeholder="Pick-up date/time" required="">
                                        </fieldset>
                                    </div>

                                    <div class="col-md-6">
                                        <fieldset>
                                            <input type="text" class="form-control" placeholder="Return date/time" required="">
                                        </fieldset>
                                    </div>
                                </div>
                                <input type="text" class="form-control" placeholder="Enter full name" required="">

                                <div class="row">
                                    <div class="col-md-6">
                                        <fieldset>
                                            <input type="text" class="form-control" placeholder="Enter email address" required="">
                                        </fieldset>
                                    </div>

                                    <div class="col-md-6">
                                        <fieldset>
                                            <input type="text" class="form-control" placeholder="Enter phone" required="">
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Book Now</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


        <!-- Additional Scripts -->
        <script src="assets/js/custom.js"></script>
        <script src="assets/js/owl.js"></script>
    </body>

</html>


