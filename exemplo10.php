#!/usr/bin/php
<?php
	
	// Gravar a posição do cursos
	fwrite(STDOUT, "\0337");
	
	for ($i = 0; $i <= 100; $i += 10) {
		// Utiliza o <ESC>8 para voltar para a posição salva
		fwrite(STDOUT, "\0338" . "{$i}% completo" . PHP_EOL);
		usleep(500000);
	}