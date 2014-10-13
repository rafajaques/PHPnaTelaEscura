#!/usr/bin/php
<?php
	
	// Texto colorido em azul (34)
	fwrite(STDOUT, "\033[34m" . "Escrita colorida!" . PHP_EOL);
	
	// Restaura as cores
	//fwrite(STDOUT, "\033[0m" . "Cores de volta ao normal!" . PHP_EOL);