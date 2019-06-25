<?php

/* La variable stock les caractère que nous utliserons pour le captcha */
$permitted_chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

function generate_string($input, $strength = 5){
    $input_length  = strlen($input);
    $random_string = '';
    
}