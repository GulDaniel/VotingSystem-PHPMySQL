<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP voting system</title>
    <!-- Bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <h1 class="text-info text-center p-3">Quem vencerá a copa do Mundo?</h1>
    <div class="bg-info py-4">
        <h2 class="text-center">Login</h2>
        <div class="container text-center">
            <form action="./actions/login.php" method="POST">
                <div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto" name="Nome" placeholder="Digite seu nome" required="required">
                </div>
                 <div class="mb-3">
                    <input type="email" class="form-control w-50 m-auto" name="Email" placeholder="Digite seu email" required="required">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control w-50 m-auto" name="Senha" placeholder="Digite sua senha" required="required">
                </div>
                <div class="mb-3">
                    <select name="std" class="form-select w-50 m-auto">
                        <option value="Seleção">Seleção</option>
                        <option value="Torcedor">Torcedor</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-dark my-4">Login</button>
                <p>Não possui Login? <a href="./partials/registration.php" class="text-white">Sign Up</a></p>
            </form>        
        </div>
    </div>
</body>
</html>
