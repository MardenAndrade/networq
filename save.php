<?php 


$nome = $_POST['nome'];
$email = $_POST['email'];



$fp = fopen("cadastrosfkdsjaflkasdjflk.txt","wb");
if( $fp == false ){
    //do debugging or logging here
}else{
    fwrite($fp,$content);
    fclose($fp);
}

echo("ola mundo!!");

?>

<form action="save.php" method="$_POST">
                <input type="text" name="nome" id="nome" placeholder="Informe seu nome">
                <input type="text" name="email" id="email" placeholder="Informe seu nome">
                <button>Enviar</button>
                
                 </form>