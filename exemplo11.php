#!/usr/bin/php
<?php
	
	// Gravar a posição do cursos
	fwrite(STDOUT, "\0337");
	
	for ($i = 0; $i <= 100; $i += 5) {
		$passo = intval($i / 10);
		// Utiliza o <ESC>8 para voltar para a posição salva
		fwrite(STDOUT, "\0338");
		
		// Imprime a barra de porcentagem
		fwrite(STDOUT, "[\033[32m" . str_repeat('|', $passo) . str_repeat(' ', 10 - $passo) . "\033[0m]");
		
		// Imprime a porcentagem no final da barra
		fwrite(STDOUT, sprintf(' %02d', $i)."% completo");
		
		// Aguarda meio segundo
		usleep(500000);
	}
	
	// Quebra a linha e fim :)
	fwrite(STDOUT, PHP_EOL);