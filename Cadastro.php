<?php
include __DIR__ . "./bd/conexao.php";
?>

<!DOCTYPE html>

<html lang="en">

    <head>
        <?php include __DIR__ . "./includes/Head.php"; ?>
        <title>Cadastre-se</title>

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
                            <h2>Cadastre-se</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        $clientArray = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        


//    var_dump($clientArray);
        if ($clientArray) {
            $sql = "SELECT * FROM cadastro WHERE email IN  ('{$clientArray["Email"]}')";

                $query = $conn->prepare($sql);
                $query->execute();

            if (in_array("", $clientArray)) {
                echo "Preencha todos os campos";
            } else if (!filter_var($clientArray["Email"], FILTER_VALIDATE_EMAIL)) {

                echo "Email inválido";
            } else if (mb_strlen($clientArray["Senha"]) < 6) {
                echo "Sua senha deve conter ao menos 6 caracteres";
            }
            
 
            else if ($query->rowCount() >= 1)  {
                // $sql = "SELECT * FROM cadastro WHERE email LIKE  '{$clientArray["Email"]}'";

                //$query = $conn->prepare($sql);
               // $query->execute();
                 
                echo "<p>Email já cadastrado!</p>";
                                            
                
                 }
                else{                            
                
                    $crip = password_hash($clientArray["Senha"], PASSWORD_DEFAULT);

                $sql = "INSERT INTO cadastro"
                        . " VALUES (null, '{$clientArray["nome"]}', '{$crip}', '{$clientArray["Email"]}', '{$clientArray["estado"]}', null, null)";

                $query = $conn->prepare($sql);
                $query->execute();
                echo "Cadastro realizado com sucesso!!";
                
            }
            $name = $clientArray ["nome"];
            $senha = $clientArray ["Senha"];
            $email = $clientArray ["Email"];
            $estado = $clientArray ["estado"];
        } else {
            $name = "";
            $senha = "";
            $email = "";
            $estado = "";
        }
//    $hash = $senha;
//   if (!password_verify($senha, $hash)){
//   echo "Senha inválida";
//  }else{
//      echo "Senha correta"; 
//      }
//     $nome = "";
//     $Email = "";
        ?> 

        <div class="products call-to-action">
            <div class="container">        
                <div class="inner-content">
                    <div class="contact-form">
                        <form action="Cadastro.php" method = "post" novalidate>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label">Nome:</label>
                                        <input type="text" name= "nome"  class="form-control" value = "<?= $name; ?>" >
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label">Senha:</label>
                                        <input type="text" name ="Senha" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label">Email:</label>
                                        <input type="email" name = "Email"  class="form-control" value = "<?= $email; ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label">Estado:</label>
                                        <input type="text" name ="estado" class="form-control" value = "<?= $estado; ?>">
                                    </div>
                                </div>
                            </div>


                            <!--                   <div class="row">
                                                    <div class="col-sm-6 col-xs-12">
                                                         <div class="form-group">
                                                              <label class="control-label">Cidade:</label>
                                                              <input type="text" name="cidade" class="form-control">
                                                         </div>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-12">
                                                         <div class="form-group">
                                                              <label class="control-label">Estado:</label>
                                                              <input type="text" name ="cidade" class="form-control">
                                                         </div>
                                                    </div>
                                               </div>
                                              <div class="row">
                                                         <div class="col-sm-6 col-xs-12">
                                                         <div class="form-group">
                                                              <label class="control-label">Telefone:</label>
                                                              <input type="text" name="telefone" class="form-control">
                                                         </div>
                                                    </div>
                                               </div>-->

                            <div class="form-group">
                                <label class="control-label">
                                    <input type="checkbox">

                                    Eu estou de acordo com os <a href="terms.php" target="_blank">Termos &amp; Condições</a>
                                </label>
                            </div>

                            <div class="clearfix">
                                <button type="button" class="filled-button pull-left">Voltar</button>

                                <button type="submit" class="filled-button pull-right">Finalizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

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
