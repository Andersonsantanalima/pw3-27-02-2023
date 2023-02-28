<form method="post">
    <input type="text" name="input_tabvalorcum" placeholder="Informe o valor do compustivel">
    <input type="text"  name="input_tabalto"   placeholder="aultonomia do seu aultomovel" >
    <input type="text"  name="input_tabdista"   placeholder="informe a distancia" >

    <input type="submit" value="Gerar">
</form>
<h3></h3>

<?php
    if(isset($_POST['input_tabvalorcum'])){
        $valor = $_POST['input_tabvalorcum'];
        $alto  = $_POST['input_tabalto'] ;
        $dis   = $_POST['input_tabdista'];
        $media = ($dis  / $alto * $valor) ;
           echo"<h3>'$media sera o custo da sua viajem</h3>";
    }

?>

