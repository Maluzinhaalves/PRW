
<!DOCTYPE html>
<html>
<head>
	<title>Dados do Formulário</title>
</head>
<body>
	<h1>Dados do Formulário</h1>
	<p><strong>Caixa de texto de uma linha:</strong> <?php echo $_POST['texto']; ?></p>
	<p><strong>Caixa de texto de rolagem:</strong> <?php echo $_POST['textoarea']; ?></p>
	<p><strong>Caixa de seleção:</strong> <?php echo $_POST['checkbox'] == 1 ? 'Sim' : 'Não'; ?></p>
	<p><strong>Botão de opção:</strong> <?php echo $_POST['radio']; ?></p>
	<p><strong>Menu suspenso:</strong> <?php echo $_POST['menu']; ?></p>
</body>
</html>
