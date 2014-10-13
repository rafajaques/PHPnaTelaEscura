#!/usr/bin/php
<?php
	
	$textos = array(
		'txt/txt1.txt',
		'txt/txt2.txt',
		'txt/txt3.txt',
		'txt/txt4.txt',
		'txt/txt5.txt',
		'txt/txt6.txt',
		'txt/txt7.txt',
	);
	
	$i = 0;
	
	foreach ($textos as $txt) {
		$i++;

	    // Faz o fork do processo e armazena o id
	    $pid = pcntl_fork();
		$pids[] = $pid

	    // Verifica se é um processo filho
	    if ($pid > 0) {
			echo "Nasceu o processo {$i}" . PHP_EOL;
	        file_put_contents($txt, rand(0,100));

	        // Para o processo para que ele não gere um próximo filho
	        die();
	    }
	}
