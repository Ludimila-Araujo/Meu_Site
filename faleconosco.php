<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fale Conosco</title>
    <link rel="stylesheet" href="estilo.padaria.plus.css">
</head>
<body>
<div class="secao secao-destaque" id="faleconosco">
    <h2>Formulário de Contato</h2>
    <form action="?pg=envia_msg" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone">

        <label for="motivo">Motivo do Contato:</label>
        <select id="motivo" name="motivo" required>
            <option value="sugestao">Sugestão</option>
            <option value="reclamacao">Reclamação</option>
            <option value="elogios">Elogios</option>
            <option value="mais_informacoes">Mais Informações</option>
        </select>

        <label for="mensagem">Mensagem:</label>
        <textarea id="mensagem" name="mensagem" rows="4" required></textarea>

        <button type="submit">Enviar</button>
        <button type="button" onclick="document.querySelector('form').reset();">Apagar</button>
    </form>
</div>
    
</body>
</html>