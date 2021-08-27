<?php

require __DIR__ . '/vendor/autoload.php';

var_dump(App\Validate::email('test@@sample.com'));
echo '<br>';
var_dump(App\Validate::url('platzi.com'));
echo '<br>';
var_dump(App\Validate::password('Contrasena2021*'));

