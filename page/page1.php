<form method="post">
    <input type="number" name="input_tabmassa" placeholder="Informe seu peso">
    <input type="text" name="input_tabaltura" placeholder="Informe sua altura em metros">    
    <input type="submit" value="Gerar">

</form>
<h3></h3>

<?php
    if(isset($_POST['input_tabmassa'])){
        $massa = $_POST['input_tabmassa'];
        $altura = $_POST['input_tabaltura'];
        $imc = $massa /($altura * $altura);
        echo"<h3>$massa /( $altura * $altura) = $imc</h3>";
          if($imc<16.9){
            echo'muito abaixo do peso';
          }

        else  if($imc<18.4){
            echo' abaixo do peso';
          } 

            else  if($imc<24.9){
            echo' peso normal ' ;
          }

          else  if($imc<29.9){
            echo'acima do peso';
           }
               else  if($imc<34.9){
            echo'obesidade grau 1  ';
          } 
          else  if($imc<40){
            echo'obesidade grau 2' ;
          } 
          else  if($imc>40){
            echo'obesidade grau 3 ';
          } 






    }

?>
