#!/usr/bin/php
<?php
	// Função de autocompletar
	function autocompletar() {
	    return array('limpar', 'timestamp', 'pi', 'd20', 'sair', 'tchau');
	}
	
	// Indica para o readline qual a função de autocompletar
	readline_completion_function('autocompletar');

	while (true) {
		// Lê um comando do usuário
	    $comando = strtolower(trim(readline('Ao seu dispor: ')));
	    
		// Adiciona o comando no histórico do readline
		readline_add_history($comando);

	    switch ($comando) {
	        case 'limpar':
	            readline_clear_history();
				break;
			case 'timestamp':
				echo time()  . PHP_EOL;
				break;
			case 'pi':
				fwrite(STDOUT, pi() . PHP_EOL);
				break;
			case 'd20':
				fwrite(STDOUT, rand(1,20) . PHP_EOL);
				break;
	        case 'sair':
			case 'tchau':
	            break 2;
	    }
	}