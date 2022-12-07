<html lang="en">
<?php

include "contact.php";

$arrayPost = filter_input_array(INPUT_POST, FILTER_DEFAULT);
//var_dump($arrayPost);
//echo ("dados enviado com Sucesso");

if(in_array("", $arrayPost)){
    echo "<p class = 'trigger warning'> Preencha todos os campos</p>";
}else if(!filter_var($arrayPost["Email"], FILTER_VALIDATE_EMAIL)){
// echo "<p class = 'trigger warning'>Email inválido</p>"; 
    echo "<h2>class = 'trigger warning'>Email inválido</h2>"; 
}
else {
   var_dump($arrayPost);
echo ("dados enviado com Sucesso"); 
}



?>   
   
    

</html>
