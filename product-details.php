 
<?php
session_start();
include __DIR__ . "./bd/conexao.php";
$descProd = filter_input(INPUT_GET, "descProd", FILTER_SANITIZE_SPECIAL_CHARS);
?>

<?php
if ($descProd === 'lixa') {
    $sql = "SELECT * FROM produtos WHERE id_prod = 1 ";

    $query = $conn->prepare($sql);
    $query->execute();
    if ($query->rowCount() > 0) {
        $row = $query->fetch();
    }
}
if ($descProd === 'rolamento') {
    $sql = "SELECT * FROM produtos WHERE id_prod = 2 ";

    $query = $conn->prepare($sql);
    $query->execute();
    if ($query->rowCount() > 0) {
        $row = $query->fetch();
    }
}
if ($descProd === 'roda') {
    $sql = "SELECT * FROM produtos WHERE id_prod = 3 ";

    $query = $conn->prepare($sql);
    $query->execute();
    if ($query->rowCount() > 0) {
        $row = $query->fetch();
    }
}
if ($descProd === 'shape') {
    $sql = "SELECT * FROM produtos WHERE id_prod = 4 ";

    $query = $conn->prepare($sql);
    $query->execute();
    if ($query->rowCount() > 0) {
        $row = $query->fetch();
    }
}
if ($descProd === 'truck') {
    $sql = "SELECT * FROM produtos WHERE id_prod = 5 ";

    $query = $conn->prepare($sql);
    $query->execute();
    if ($query->rowCount() > 0) {
        $row = $query->fetch();
    }
}
if ($descProd === 'vestuario') {
    $sql = "SELECT * FROM produtos WHERE id_prod = 6 ";

    $query = $conn->prepare($sql);
    $query->execute();
    if ($query->rowCount() > 0) {
        $row = $query->fetch();
    }
}
?>


<!DOCTYPE html>


<html lang="en">

    <head>    

<?php include __DIR__ . "./includes/Head.php"; ?>
        <title>Detalhes do Produto</title>

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
        <div class="page-heading about-heading header-text" style="background-image: url(assets/images/background2.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-content">
                            <h4>Online Skate Shop</h4>
                            <h2>Detalhes produto</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="products">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <div>
<?php
echo" <img src='{$row['imagem']}' alt='' class='img-fluid wc-image'>";
?>
                        </div>
                        <br>

                    </div>

                    <div class="col-md-8 col-xs-12">
                        <form action="#" method="post" class="form">
                            <?php
                            $dobro = $row['preco'] * 2;

                            echo "<h2>{$row['nome']}</h2>";
                            echo "<br><p class='lead'>
                <small><del> R$ {$dobro}  </del></small><strong class='text-primary'>R$ {$row['preco']}</strong>
              </p><br>";
                            echo " <p class='lead'>
                {$row['descricao']}
              </p>

              <br> ";
                            ?>


                            <div class="col-sm-8">
                                <label class="control-label">Quantidade</label>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <?php
                                            $_SESSION['quantidade'] = filter_input(INPUT_POST, FILTER_DEFAULT);
                                            
                                            ?>
                                            <input type="text" class="form-control" placeholder="1">
                           
                            

                                        </div>
                                    </div>

                                    <div class="col-sm-6">

<?php
if (!empty($_SESSION['logcliente'])) {

    echo" <a href='checkout.php' class='btn btn-primary btn-block' name='botao'>Adicionar ao carrinho</a>
                                        ";
    $_SESSION['idprod'] = $row['id_prod'];
    
//    $prodarray = [
//        "nome" => $row['nome'],
//        "preco" => $row['preco']     
//            ];
//    
//    
//    $_SESSION['carrinho'] = $prodarray ;
//
//    var_dump($_SESSION['carrinho']);
}
?>


                                    </div>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Produtos semelhantes</h2>
                        <a href="products.php">Ver mais <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-item">
                        <a href="product-details.php?descProd=roda"><img src="assets/images/produto2.jpg" alt=""></a>
                        <div class="down-content">
                            <a href="product-details.php"><h4>Rodas Skates</h4></a>
                            <h6><small><del>R$40.00 </del></small>R$20.00</h6>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="product-item">
                        <a href="product-details.php?descProd=truck"><img src="assets/images/produto3.jpg" alt=""></a>
                        <div class="down-content">
                            <a href="product-details.php"><h4>Truck skate</h4></a>
                            <h6><small><del>R$500.00</del></small>R$250.00</h6>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="product-item">
                        <a href="product-details.php?descProd=rolamento"><img src="assets/images/produto4.jpg" alt=""></a>
                        <div class="down-content">
                            <a href="product-details.php"><h4>Rolamentos</h4></a>
                            <h6><small><del>R$200.00 </del></small>R$100.00</h6>
                        </div>
                    </div>
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
                            <input type="text" class="form-control" placeholder="Nome Completo" required="">

                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <input type="text" class="form-control" placeholder="Endereço de Email" required="">
                                    </fieldset>
                                </div>

                                <div class="col-md-6">
                                    <fieldset>
                                        <input type="text" class="form-control" placeholder="Telefone" required="">
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
