#!/usr/bin/php
<?php

	for ($i = 1; $i <= 10; $i++) {
		fwrite(STDOUT, $i);
		usleep(300000);
	}