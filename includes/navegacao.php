<nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>Online <em>Skate Shop</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

               <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Produtos</a>
                    
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="products.php">Todos os produtos</a>
                      
                      <a class="dropdown-item" href="lista-produtos.php?tipoProd=lixa">Lixas</a>
                      <a class="dropdown-item" href="lista-produtos.php?tipoProd=rolamento">Rolamentos</a>
                      <a class="dropdown-item" href="lista-produtos.php?tipoProd=roda">Rodas</a>
                      <a class="dropdown-item" href="lista-produtos.php?tipoProd=shape">Shapes</a>
                      <a class="dropdown-item" href="lista-produtos.php?tipoProd=truck">Trucks</a>                                        
                      <a class="dropdown-item" href="lista-produtos.php?tipoProd=vestuario">Vestuário</a>
                    </div>
                    
                </li>
                <li class="nav-item"><a class="nav-link" href="checkout.php">Finalizar pedido</a></li>

                <li class="nav-item"><a class="nav-link" href="contact.php">Fale Conosco</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Mais</a>
                    
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="about-us.php">Sobre Nós</a>
                      
                      <a class="dropdown-item" href="testimonials.php">Depoimentos</a>
                      <a class="dropdown-item" href="terms.php">Termos</a>
                      
                    </div>
                    
                </li>
                               <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Cadastros</a>
                    
                    <div class="dropdown-menu">
                      <?php
                      if (empty ($_SESSION ["logcliente"])){
                       echo " <a class='dropdown-item' href='Cadastro.php'>Cadastre-se</a>";
                      
                      echo "<a class='dropdown-item' href='Login.php'>Login</a>";
                      } else {
                     echo "<a class='dropdown-item' href='perfil.php'>Alterar cadastro</a>";
                      echo "<a class='dropdown-item' href='logout.php'>Fazer logout</a>";
                     
                      }
                              ?>
                    </div>
                    
                </li>
               
                
                
            </ul>
          </div>
        </div>
      </nav>