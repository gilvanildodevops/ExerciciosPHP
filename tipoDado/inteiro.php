<?php

// Declaração de uma variavel como inteiro
$ano_nascimento = 1977;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tipo Inteiro no PHP</title>
</head>

<body>
<p>Tipo inteiro são números. Eu nasci no ano de <?php echo $ano_nascimento; ?></p>
<p>Se eu diminuir 2022 menos o ano de nascimento, chego a minha idade, Hoje estou com <?php echo 2022 - $ano_nascimento; ?></p>
</body>
</html>