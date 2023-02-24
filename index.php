<html>

<head>
    <title>Resgate de Conteúdo</title>
</head>

<body>
    <form action="recebedados.php" method="POST">
        Nome:<input type="text" name="nome"> </br>
        Idade:<input type="number" name="idade"> </br>
        Sexo:
        <select name="sexo">
            <option>Masculino</option>
            <option>Feminino</option>
        </select> </br>
        <input type="submit" value="Salvar">
    </form>
    </br>
    <a href="recebedados.php?nome=Alba">Enviando o nome Alba</a>
</body>

</html>