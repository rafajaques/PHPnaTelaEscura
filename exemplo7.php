#!/usr/bin/php
<?php

	$piped = !posix_isatty(STDOUT);

	if ($piped)
		fwrite(STDOUT, 'Fui traído!' . PHP_EOL);
	else
		fwrite(STDOUT, 'Tudo certo!' . PHP_EOL);