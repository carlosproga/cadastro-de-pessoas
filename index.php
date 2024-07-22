<?php
    if(isset($_post["bt_nome"])){
        echo "teste_deu certo";
    }
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cadastro de Pessoas</title>

<style>

.voltar-btn {
        background-color: RED;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        border-radius: 5px;
        border: NONE;
        cursor: pointer;
        font-size: 16px;
    }

    body {
        font-family: Arial, sans-serif;
        padding: 20px;
    }
    form {
        max-width: 400px;
        margin: 0 auto;
        background: #f9f9f9;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    h2 {
        text-align: center;
    }
    label {
        font-weight: bold;
        margin-bottom: 8px;
    }
    input[type="text"], input[type="email"], select {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>

</head>

<body>
    <form action="cadastro.php" method="post">

        <h2>Cadastro de Pessoas</h2>

        <label for="nome">Nome:</label>
        <input class="form-control" type="text" name="bt_nome" required>

        <label for="endereço">Endereço:</label>
        <input class="form-control" type="text" name="endereço" required>

        <label for="estado">Estado:</label>
        <select class="form-control" name="estado">
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
        </select>

        <label for="cidade">Cidade:</label>
        <input class="form-control" type="text" name="cidade">

        <label for="telefone">Telefone:</label>
        <input class="form-control" type="text" name="">

        <label for="email">Email:</label>
        <input class="form-control" type="email" name="email" required>

        <label for="Data de Nascimento">Data de Nascimento:</label>
        <input class="form-control" type="text" name="data de nascimento" required>

        <div class="dob-container">
        <label for="dia">Dia:</label>
        <input type="number" id="dia" name="dia" min="1" max="31" required>

        <br>
        <br>

        <label for="mes">Mês:</label>
        <select id="mes" name="mes" required>
            <option value="">-- Selecione --</option>
            <option value="1">Janeiro</option>
            <option value="2">Fevereiro</option>
            <option value="3">Março</option>
            <option value="4">Abril</option>
            <option value="5">Maio</option>
            <option value="6">Junho</option>
            <option value="7">Julho</option>
            <option value="8">Agosto</option>
            <option value="9">Setembro</option>
            <option value="10">Outubro</option>
            <option value="11">Novembro</option>
            <option value="12">Dezembro</option>
        </select>

        <br>
        <br>

        <label for="ano">Ano:</label>
        <input type="number" id="ano" name="ano" min="1900" max="2024" required>
    
        <br>
        <br>
        
        <label for="CPF">CPF:</label>
        <input class="form-control" type="text" name="CPF">

        <BR><label for="senha">Senha:</label></BR>
        <input class="form-control" type="password" name="CPF">

            <div class="mb-3">
                <BR><label for="">Repetir Senha:</label></BR>
                <input class="form-control" type="password">
            </div>

        <BR></BR>

        <input class="btn btn-success" type="submit" value="Cadastrar">
        <a href="#" class="voltar-btn">Voltar</a>

    </form>
</body>
</html>