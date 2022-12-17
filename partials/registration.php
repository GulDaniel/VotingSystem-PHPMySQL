<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PHP voting system - Sign Up</title>
        <!-- Bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body class="bg-dark">
        <h1 class="text-center text-info p-3">Quem vencerá a copa do Mundo?</h1>
        <div class="bg-info py-4">
            <h2 class="text-center">Sign Up</h2>
            <div class="container text-center">
                <form action="../actions/register.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <input type="text" class="form-control w-50 m-auto" placeholder="Digite seu nome" required="required" name="Nome">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control w-50 m-auto" placeholder="Digite seu email" required="required" name="Email">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control w-50 m-auto" placeholder="Digite sua senha" required="required" name="Senha">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control w-50 m-auto" placeholder="Confirme sua senha" required="required" name="CSenha">
                    </div>
                    <div class="mb-3">
                        <select name="std" class="form-select w-50 m-auto">
                            <option value="Seleção">Seleção</option>
                            <option value="Torcedor">Torcedor</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="file" class="form-control w-50 m-auto" name="Foto">
                    </div>
                    <button type="submit" class="btn btn-dark my-4 m-auto">Sign Up</button>
                    <p>Já possui Login? <a href="../" class="text-white">Login</a></p>
                </form>
            </div>
        </div>
    </body>
</html>
