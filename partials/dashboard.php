<?php
session_start();
if(!isset($_SESSION['id'])){
    header('location:../');
}
$data=$_SESSION['data'];
if($_SESSION['estado']==1){
    $estado='<b style="background-color:black;" class="text-success">Votou</b';
}else{
    $estado='<b style="background-color:black" class="text-danger">Não votou</b';
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <!-- Bootstrap css link -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <!-- css file -->
        <link rel="stylesheet" href="../style.css">

        <title>voting system Dashboard</title>
    </head>
    <body class="bg-secondary text-light">
    <div class="container my-5">
        <a href="../"><button class="btn btn-dark text-light px-3">Voltar</button></a>
        <a href="logout.php"><button class="btn btn-dark text-light px-3">Logout</button></a>
        <h1 class="my-3">Quem sairá com a vitória?</h1>
        <div class="row my-5">
            <div class="col-md-7">
                <!-- seleções -->
                <?php
                if(isset($_SESSION['seleções'])){
                    $sels=$_SESSION['seleções'];
                    for($i=0;$i<count($sels);$i++){
                    ?>
                    <div class="row">
                        <div class="col-md-4">
                        <img src="../uploads/<?php echo $sels[$i]['foto'] ?>" alt="selecao">
                        </div>  
                        <div class="col-md-8">
                            <strong class="text-dark h5">Seleção:</strong>
                            <?php echo $sels[$i]['nome'] ?><br>
                            <strong class="text-dark h5">Votos:</strong>
                            <?php echo $sels[$i]['votos'] ?><br>
                        </div>  
                    </div>
                
                <form action="../actions/voting.php" method="post">
                <input type="hidden" name="selvotos" value="<?php echo $sels[$i]['votos'] ?>">
                <input type="hidden" name="selid" value="<?php echo $sels[$i]['id'] ?>">
                <?php
                        if($_SESSION['estado']==1){
                            ?>
                            <button class="bg-success my-3 text-white px-4">Votou</button> 
                            <?php
                        }else{
                            ?>
                            <button class="bg-danger my-3 text-white px-4" type="submit">Votar</button> 
                            <?php
                        }
                ?>
                </form>
                <hr>
                <?php
                    }
                }else{
                    ?>
                    <div class="container">
                        <p>Sem seleções para mostrar</p>
                    </div>
                    <?php
                }
                ?> 
                
            </div> 
            <div class="col-md-5">
                <!-- torcedores -->
            <img src="../uploads/<?php echo $data['foto']; ?>" alt="torcedor"><br><br> 
            <strong class="text-dark h5">Nome:</strong>
            <?php echo $data['nome']; ?><br><br>
            <strong class="text-dark h5">Email:</strong>
            <?php echo $data['email']; ?><br><br>
            <strong class="text-dark h5">Estado:</strong>
            <?php echo $estado; ?>
            </div> 
        </div>
    </div>
    </body>
</html>
