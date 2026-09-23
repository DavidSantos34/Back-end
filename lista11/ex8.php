<?php

$email =$_POST['email'];
$senha =$_POST['senha'];

if($email == "david@gmail.com" && $senha == "Fireforce2#"){
    echo "Login, bem sucedido!!!";
}
else{
    echo"Login ou senha invalido!!!";
}


?>