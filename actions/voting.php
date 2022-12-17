<?php
session_start();
include('connect.php');

$votos=$_POST['selvotos'];
$totalvotos=$votos+1;

$sid=$_POST['selid'];
$nid=$_SESSION['id'];

$updatevotos=mysqli_query($con,"update `userdata` set votos='$totalvotos' where id='$sid'");
$updateestado=mysqli_query($con,"update `userdata` set estado=1 where id='$nid'");

if($updatevotos and $updateestado){
    $getsels=mysqli_query($con,"Select nome, foto, votos, id from `userdata` where instancia='Seleção'");
    $sels=mysqli_fetch_all($getsels,MYSQLI_ASSOC);
    $_SESSION['seleções']=$sels;
    $_SESSION['estado']=1;
    echo '<script>
            alert("Voto contabilizado");
            window.location="../partials/dashboard.php";
        </script>';

}else{
    echo '<script>
            alert("Erro técnico, tente novamente em alguns minutos");
            window.location="../partials/dashboard.php";
        </script>';
}

?>
