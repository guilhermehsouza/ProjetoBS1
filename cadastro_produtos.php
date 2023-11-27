<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>replit</title>
  <link href="style.css" rel="stylesheet" type="text/css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
</head>

<body>
    <div class="bg-danger text-white text-center p-5 mb-2">
        <h1>Cadastro de Produtos</h1>
        <p>Loja de Celulares</p>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-sm-8 mx-auto border border-danger p-3 rounded">

                <form action="cadastro_adm1.php" method="post">
                
                    <p>
                        Digite a descrição do produto
                        <input type="text" name="nome" class="form-control">
                    </p>

                    <p>
                        Digite o preçco do produto
                        <input type="text" name="email" class="form-control">
                    </p>

                    <p>
                        Digite a quantidade em estoque
                        <input type="password" name="senha" class="form-control">
                    </p>

                    <p>
                        Escolha a categoria
                        <select name="categoria" class="form-control">
                            <option value="">Escolha a categoria</option>
                        </select>
                    </p>

                    <p>
                        <input type="submit" value="Cadastrar" class="btn btn-danger">
                        <a href="index.php" class="btn btn-link text-danger">Voltar</a>
                    </p>
                
                </form>
            
            
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 mt-5">
                <h3 class="text-center text-danger">Trabalho desenvolvido pelo aluno < informar o seu nome ></h3>
            </div>
        </div>
    </div>

    
</body>
</html>