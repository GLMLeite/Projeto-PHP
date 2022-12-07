<!DOCTYPE html>
<html lang="en">

  <head>
      
      <?php include __DIR__ . "./includes/Head.php"; ?>
      
    <title>Home</title>
    
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
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Online Skate Shop</h4>
            <h2>Compre seu Skate!</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Online Skate Shop</h4>
            <h2>Skate lifestyle</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Online Skate Shop</h4>
            <h2>Variedades de Produtos</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Produtos Disponíveis</h2>
              <a href="products.php">veja mais <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
         

          <div class="col-md-4">
            <div class="product-item">
              <a href="product-details.php?descProd=rolamento"><img src="assets/images/produto4.jpg" alt=""></a>
              <div class="down-content">
                <a href="product-details.php?descProd=rolamento"><h4>Rolamentos</h4></a>
                <h6><small><del>R$50.00 </del></small> R$35.00</h6>
                <p>Rolamentos Red Bones têm a qualidade inquestionável, eles são duplamente inspecionados antes de serem liberados para os skatistas e já veem lubrificados na embalagem, eles possuem uma ótima combinação de performance, durabilidade e baixo custo, por este motivo é o mais lembrado entre os skatista pelo mundo.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="product-details.php?descProd=lixa"><img src="assets/images/produto5.jpg" alt=""></a>
              <div class="down-content">
                <a href="product-details.php?descProd=lixa"><h4>Lixa</h4></a>
                <h6><small><del>R$25.00 </del></small> R$18.99</h6>
                <p>Lixa top em qualidade, tem alta aderência, gasta menos tênis, é emborrachada e usada pelos melhores skatistas da atualidade.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="product-details.php?descProd=vestuario"><img src="assets/images/produto6.jpg" alt=""></a>
              <div class="down-content">
                <a href="product-details.php?descProd=vestuario"><h4>Tênis Vans Kyle Walker Pro </h4></a>
                <h6><small><del>R$499.00 </del></small> R$400.00</h6>
                <p>O novo Kyle Walker Pro da Vans, é feito com cabedal de lona e camurça. O sistema de absorção de impacto ULTRACUSH HD mantém o pé próximo ao skate, proporcionando o mais alto nível de absorção de impacto, e a construção revolucionária Wafflecup oferece a sustentação de uma sola montada, sem sacrificar a aderência ou boardfeel de um tênis vulcanizado tradicional.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Sobre Nós</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <p>Somos uma empresa de skate que tem como objetivo levar esse esporte e lifestyle para todas as pessoas do mundo por meio da internet. Temos foco total na qualidade do produto e na experiência do usuário, nos tornando assim uma das melhores e maiores representante da cultura skate no Brasil..</p>
              <ul class="featured-list">
                <li><a href="#">Qualidade total;</a></li>
                <li><a href="#">100% seguro;</a></li>
                <li><a href="#">Preço justo;</a></li>
                <li><a href="#">Variedade de produtos</a></li>
              </ul>
              <a href="about-us.php" class="filled-button">Sobre Nós</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/comunidadeskate.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="happy-clients">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Clientes Satisfeitos</h2>

              <a href="testimonials.php">leia mais <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-clients owl-carousel text-center">
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Argus Chapin</h4>
                  <p class="n-m"><em>"A competência dos donos do estabelecimento é admirável, nunca vi um serviço tão bem exercido, adorei o skate  que adquiri através da loja."</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Mário Neto</h4>
                  <p class="n-m"><em>"Produtos de alta qualidade e excelente suporte."</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Antônio Davi</h4>
                  <p class="n-m"><em>"Testei e aprovo, excelente usabilidade, trucks de ótima qualidade bem reforçados."</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>João Pedro</h4>
                  <p class="n-m"><em>"Ótima interface, muito intuitivo."</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Eduarda Alcantara</h4>
                  <p class="n-m"><em>"Gostei da inclusão, oferece produto para todos os gêneros."</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Gilberto Gil</h4>
                  <p class="n-m"><em>"Todos os itens estão em harmonia, o site é música para meus ouvidos."</em></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Duvidas e esclarecimentos.</h4>
                  <p>Qualquer dúvida em relação aos nossos serviços, entre em contato conosco.</p>
                </div>
                <div class="col-lg-4 col-md-6 text-right">
                  <a href="contact.php" class="filled-button">Fale Conosco</a>
                </div>
              </div>
            </div>
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