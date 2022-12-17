<?php
include('connect.php');

$nome=$_POST['Nome'];
$email=$_POST['Email'];
$senha=$_POST['Senha'];
$csenha=$_POST['CSenha'];
$foto=$_FILES['Foto']['name'];
$tmp_nome=$_FILES['Foto']['tmp_name'];
$std=$_POST['std'];

if ($senha!=$csenha){
    echo '<script>
            alert("Senhas não coincidem");
            window.location="../partials/registration.php";
        </script>';
}else {
    move_uploaded_file($tmp_nome,"../uploads/$foto");
    $sql="insert into `userdata` (nome, email, senha, foto, instancia, votos, estado) values ('$nome', '$email', '$senha', '$foto', '$std', 0, 0)";

    $result=mysqli_query($con, $sql);

    if($result){
        echo '<script>
            alert("Cadastro realizado");
            window.location="../";
        </script>';
    }else{
        die(mysqli_error($con));
    }
}

?>
