#!/usr/bin/php
<?php
	
	// Letras avulsas são parâmetros que não recebem valor
	// : denota parâmetro com valor obrigatório
	// :: denota parâmetro com valor opcional
	$curtas = 'hvu:p::';
	
	// Opções longas somente a partir do PHP 5.3
	$longas = array('help', 'verbose', 'user:', 'pass::');
	
	$opcoes = getopt($curtas, $longas);
	
	print_r($opcoes);