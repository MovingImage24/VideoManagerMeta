<?php

$finder = Symfony\CS\Finder::create()->in([__DIR__ . '/lib']);
return Symfony\CS\Config::create()->finder($finder);