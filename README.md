# omie-php
Cliente PHP para o ERP [Omie (Omiexperience)](http://www.omie.com.br)

![Travis](https://travis-ci.org/DfKimera/omie-php.svg?branch=master)
---

## Módulos disponíveis
- CEP
- Clientes
- Produtos
- Pedidos


## Como instalar
WIP

## Como usar
```
<?php
require("vendor/autoload.php");

$omie = new Omie("SUA_API_KEY", "SUA_API_SECRET");

$clientes = $omie->clientes()->listar();

foreach($clientes as $cliente) { /* @var $cliente Cliente */
	echo "<p>{$cliente->nome_fantasia}</p>";
}
?>
```

## Help wanted!
- Demais módulos
- Documentação detalhada
- Maior cobertura de testes