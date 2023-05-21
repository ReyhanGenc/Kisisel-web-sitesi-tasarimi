<?php
$email = 'g221210009@sakarya.edu.tr';
$parola = 'g221210009'

if(isset($_POST['email'])){
    $mail = $_POST['email'];
    $sifre= $_POST['parola'];

    if($mail==$email && $sifre==$parola){
        echo "Hoşgeldiniz g221210009";
    }
    else {
        echo "E-mail veya parola hatalı";
    }
}

?>