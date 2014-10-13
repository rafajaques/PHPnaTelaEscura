#!/usr/bin/php
<?php

	// Função de exemplo - Não leve a sério
	function thumb($img, $largura = 150, $altura = 150) {
    
	    $nova = explode('.', $img);
		$ext = array_pop($nova);
	    $nova = implode('.', $nova) . '_thumb.' . $ext;
    
	    list($largura_real, $altura_real) = getimagesize($img);

	    $thumb = imagecreatetruecolor($largura, $altura);
	    $original = imagecreatefromjpeg($img);

	    imagecopyresampled($thumb, $original, 0, 0, 0, 0, $largura, $altura, $largura_real, $altura_real);

	    imagejpeg($thumb, $nova, 100);
	}
	
	$imagens = array(
		'img/img1.jpg',
		'img/img2.jpg',
		'img/img3.jpg',
		'img/img4.jpg',
		'img/img5.jpg',
		'img/img6.jpg',
	);
	
	foreach ($imagens as $img) {
	    // Faz o fork do processo e armazena o id
	    $pid = pcntl_fork();

	    // Verifica se é um processo filho
	    if ($pid > 0) {
	        //echo ' novo processo filho ' . PHP_EOL;
	        thumb($img);

	        // Para o processo para que ele não gere um próximo filho
	        die();
	    }
	}
	
	foreach ($imagens as $img) {
		pcntl_wait($status);	
	}