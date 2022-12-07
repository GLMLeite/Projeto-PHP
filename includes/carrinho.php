

<div class="products call-to-action">
      <div class="container">
        <ul class="list-group list-group-flush">
         <?php 
         
         
         echo" <li class='list-group-item'>
            <div class='row'>
                  <div class='col-6'>
                       ";
                       if (!empty($_SESSION['idprod'])) {
                      $sql = "SELECT * FROM produtos WHERE id_prod = {$_SESSION['idprod']} ";
                      $query = $conn->prepare($sql);
                      $query->execute();
                     if ($query->rowCount() > 0) {
                     $row = $query->fetch();
                       }      
                       
                       echo "<em>{$row['nome']}</em>
                         ";
                       }
                      
             echo"     </div>
                  
                  <div class='col-6 text-right'>
                  ";    
                    if (!empty($_SESSION['idprod'])) {
                    
                           
                           echo"  <strong>R$ {$row['preco']}</strong>
                         ";
                       } 
                       else{
                        echo" <h2>O carrinho está vazio!</h2>
                           ";
                       }
                 echo"      
                  </div>
             </div>  
          </li>
";          
?>
          

          <li class="list-group-item">
               <div class="row">
                    <div class="col-6">
                         <em>Frete</em>
                    </div>

                    <div class="col-6 text-right">
                         <strong>R$ 10.00</strong>
                    </div>
               </div>
          </li>

          <li class="list-group-item">
               <div class="row">
                    <div class="col-6">
                        
                        <em>Total</em>
                    </div>
                   

                    <div class="col-6 text-right">
                         <?php 
                      
                       $total= $row['preco'] + 10;
                       echo"  <strong>R$ {$total}</strong>
                          ";
?>
                    
                    
                    </div>
                   
               </div>
          </li>

        </ul>

        <br>
        
        <div class="inner-content">
          <div class="contact-form">
              <form action="#">

                   <div class="row">
                        <div class="col-sm-6 col-xs-12">
                             <div class="form-group">
                                  <label class="control-label">Método de Pagamento</label>

                                  <select class="form-control">
                                       <option value="">-- Escolha --</option>
                                       <option value="credito">Cartão de Crédito</option>
                                       <option value="pix">Pix</option>
                                       <option value="paypal">PayPal</option>
                                  </select>
                             </div>
                        </div>

                      
                   </div>

                   <div class="form-group">
                        <label class="control-label">
                             <input type="checkbox">

                             Eu estou de acordo com os <a href="terms.php" target="_blank">Termos &amp; Condições</a>
                        </label>
                   </div>

                   <div class="clearfix">
                        
                        
                        <button type="submit" class="filled-button pull-right">Finalizar</button>
                        
                   </div>
              </form>
          </div>
        </div>
      </div>
    </div>