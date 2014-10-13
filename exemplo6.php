#!/usr/bin/php
<?php

	// Abre o diretório atual
	$dir = new DirectoryIterator('./');

	// Passa por todos os arquivos
	foreach ($dir as $arquivo) {
		
		if ($arquivo->getFilename() == '.' || $arquivo->getFilename() == '..')
			continue;
		
		// Verifica erros de sintaxe através do "php -l"
		$erro = shell_exec("php -l " . $arquivo->getFilename());
		
		fwrite(STDOUT, $erro);
	}