<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro de Cliente</h1>
    <form method="post" action="salvar.php">
        Nome: <input name="nome" required><br>
        Cidade: <input name="cidade" required> <br>
        Idade: <input name="idade" required> <br>
        Telefone: <input name="tel" required><br>
        Rua: <input name="rua"><br>
        Número da Casa: <input name="numero_casa"> <br>

        Genero  <select name="genero"><br>

    <option value="Masculino">Masculino</option>
    <option value="Feminino">Feminino</option>
    <option value="Não informar">Prefiro não informar</option>

        </select>


        <button type="submit">salvar</button>
    </form>
</body>
</html>