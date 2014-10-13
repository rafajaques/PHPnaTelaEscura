#!/usr/bin/php
<?php
	
	for ($i = 0; $i <= 100; $i += 10) {
		fwrite(STDOUT, "{$i}% completo" . PHP_EOL);
		usleep(500000);
	}