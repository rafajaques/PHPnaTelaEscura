#!/usr/bin/php
<?php
		
	# Define as extensões para checagem
	$checar = array('apc', 'bz2', 'curl', 'ftp', 'gd', 'libxml', 'memcached', 'rar', 'zlib');
	
	# Listinha de cores
	define('VERMELHO', "\033[31m");
	define('VERDE', "\033[32m");
	define('LIMPA', "\033[0m");
	
	fwrite(STDOUT, 'Checando extensões...' . PHP_EOL);
	
	foreach ($checar as $ext) {
		
		# Imprime na tela se a extensão está carregada ou não
		if (extension_loaded($ext)) {
			fwrite(STDOUT, '[ ' . VERDE . 'SIM' . LIMPA . ' ] ');			
		} else {
			fwrite(STDOUT, '[ ' . VERMELHO . 'NÃO' . LIMPA . ' ] ');
		}
		
		# Imprime o nome da extensão
		fwrite(STDOUT, $ext);
		
		fwrite(STDOUT, PHP_EOL);
		
		# Sleep pra dar um drama
		usleep(300000);
	}