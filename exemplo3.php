#!/usr/bin/php
<?php

	fwrite(STDOUT, "Escreva seu nome: ");

	// Lê a entrada do usuário
	$nome = fgets(STDIN);

	fwrite(STDOUT, "Olá, {$nome}.");
	fwrite(STDOUT, PHP_EOL);
	
	// Exit com sinal OK
	exit(0);