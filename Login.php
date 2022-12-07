<?php 
session_start();
include __DIR__ . "./bd/conexao.php"; 

    $clientArray =filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if($clientArray){
            if(in_array("", $clientArray)){
                $msg = "Preencha todos os campos";
            }else if(!filter_var($clientArray["Email"], FILTER_VALIDATE_EMAIL)){
    
                $msg = "Email inválido";
            }else if (mb_strlen($clientArray["Senha"]) < 6 ){
                $msg = "Sua senha deve conter ao menos 6 caracteres";
                      
           }else{
                $sql = "SELECT * "
                        . "FROM cadastro "
                        . " WHERE email LIKE '{$clientArray["Email"]}'";
                      
                $query = $conn-> prepare($sql);
                $query->execute(); 
                
                if($query->rowCount() > 0){
                    $row = $query-> fetch();
                    
                    if( password_verify($clientArray['Senha'], $row['senha'])){
                        $msg = "<h2>Seja bem vindo!!!</h2>";  
                        $perfilarray =[
                          "nome" => $row['nome'],  
                            "id" =>$row['id'],
                            "email" =>$row['email'],
                            "estado" => $row['estado']
                            ];
                        $_SESSION["logcliente"] = $perfilarray;
                        setcookie("logcliente", '1' , time()+ 60*10);
                        
                    }
                    else {
                        $msg = "<h2>Email ou senha não cadastrado</h2>";
                    }
                    
                    
                }
                else{
                    $msg = "<h2>Email ou senha não cadastrados</h2>";
                }       
        }
        
    }else {
      $clientArray["Email"] = "";
    }

?>


<!DOCTYPE html>
<html lang="en">

  <head>
    <?php include __DIR__ . "./includes/Head.php"; ?>
    <title>Login</title>

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
              <h2>Login</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php
    if(!empty($msg)){
        echo $msg;
    }
    ?> 
    
    
    
    <div class="products call-to-action">
      <div class="container">
        
        <div class="inner-content">
          <div class="contact-form">
              <form action="Login.php" method = "post" novalidate>
                   <div class="row">
                        <div class="col-sm-6 col-xs-12">
                             <div class="form-group">
                                  <label class="control-label">Email:</label>
                                  <input type="email" name = "Email"  value = "<?=$clientArray["Email"] ?>" class="form-control" >
                             </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                             <div class="form-group">
                                  <label class="control-label">Senha:</label>
                                  <input type="text" name = "Senha" class="form-control" >
                            </div>
                        </div>
                   </div>
                   <div class="clearfix">
                        <button type="submit" class="filled-button pull-left">Login</button>
                         
       
    
                   </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  

    <footer>
        <?php include __DIR__ . "./includes/Footer.php"; ?>
    </footer>
 


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>

</html>
