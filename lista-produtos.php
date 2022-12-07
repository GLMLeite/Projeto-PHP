 <?php
    include __DIR__ . "./bd/conexao.php";
    $tipoProd = filter_input(INPUT_GET, "tipoProd", FILTER_SANITIZE_SPECIAL_CHARS);
    ?>

<?php if ($tipoProd === 'lixa') {
            $sql = "SELECT * FROM produtos WHERE id_prod = 1 ";

                $query = $conn->prepare($sql);
                $query->execute();
                  if($query->rowCount() > 0){
                    $row = $query-> fetch();
                  }
               
}
if ($tipoProd === 'rolamento') {
            $sql = "SELECT * FROM produtos WHERE id_prod = 2 ";

                $query = $conn->prepare($sql);
                $query->execute();
                  if($query->rowCount() > 0){
                    $row = $query-> fetch();
                  }
                
}
if ($tipoProd === 'roda') {
            $sql = "SELECT * FROM produtos WHERE id_prod = 3 ";

                $query = $conn->prepare($sql);
                $query->execute();
                  if($query->rowCount() > 0){
                    $row = $query-> fetch();
                  }
                
}
if ($tipoProd === 'shape') {
            $sql = "SELECT * FROM produtos WHERE id_prod = 4 ";

                $query = $conn->prepare($sql);
                $query->execute();
                  if($query->rowCount() > 0){
                    $row = $query-> fetch();
                  }
                
}
if ($tipoProd === 'truck') {
            $sql = "SELECT * FROM produtos WHERE id_prod = 5 ";

                $query = $conn->prepare($sql);
                $query->execute();
                  if($query->rowCount() > 0){
                    $row = $query-> fetch();
                  }
                
}
if ($tipoProd === 'vestuario') {
            $sql = "SELECT * FROM produtos WHERE id_prod = 6 ";

                $query = $conn->prepare($sql);
                $query->execute();
                  if($query->rowCount() > 0){
                    $row = $query-> fetch();
                  }
              
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <?php include __DIR__ . "./includes/Head.php"; ?>
        <title>Produtos</title>

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
<?php
        include __DIR__ . "./bd/conexao.php";
        $tipoProd = filter_input(INPUT_GET, "tipoProd", FILTER_SANITIZE_SPECIAL_CHARS);
        ?>
        <!-- Page Content -->
        <div class="page-heading about-heading header-text" style="background-image: url(assets/images/background3.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-content">
                            <h4>Online Skate Shop</h4>
                       <?php  
                            echo"<h2>{$row['tipo']}s</h2>";
                           
                          ?>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
      
        <div class="products">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="product-item">
                            <?php
                           
                                $dobro = $row['preco'] * 2;
                                echo"
                <a href='product-details.php?descProd={$row['tipo']}'><img src='{$row['imagem']}' alt=''></a>
              <div class='down-content'>
                <a href='product-details.php?descProd={$row['tipo']}'><h4>{$row['nome']}</h4></a>
                <h6><small><del>R$ {$dobro}</del></small>R$ {$row['preco']} </h6>
                <p>{$row['descricao']}</p>
              </div>
            </div>
          </div>          
";
                          
                                ?>


                               
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
