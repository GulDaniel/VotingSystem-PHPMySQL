<?php
session_start();
include('connect.php');

$nome=$_POST['Nome'];
$email=$_POST['Email'];
$senha=$_POST['Senha'];
$std=$_POST['std'];

$sql = "Select * from `userdata` where nome='$nome' and email='$email' and senha='$senha' and instancia='$std'";

$result=mysqli_query($con,$sql);
if (mysqli_num_rows($result)>0){
    $sql="Select nome, foto, votos, id from `userdata` where instancia='Seleção'";
    $resultsel=mysqli_query($con,$sql);
    if(mysqli_num_rows($resultsel)>0){
        $sels=mysqli_fetch_all($resultsel, MYSQLI_ASSOC);
        $_SESSION['seleções']=$sels;
    }
    $data=mysqli_fetch_array($result);
    $_SESSION['id']=$data['id'];
    $_SESSION['estado']=$data['estado'];
    $_SESSION['data']=$data;

     echo '<script>
        window.location="../partials/dashboard.php";
        </script>';

}else{
    echo '<script>
        alert("Dados inválidos");
        window.location="../";
        </script>';
}

?>
