<?php

$whiteList = ['name', 'email', 'telephone', 'details'];
$values = [];
$invalidValues = [];

function validate($string, $type) {
    if ($string === '') {
        return false;
    }
    return true;
}

foreach($_POST as $name => $value) {
    if ( in_array($name, $whiteList) ) {
        if(validate($value, $name)) {
            $values[$name] = $value;
        }
        else {
            $invalidValues[$name] = 'Неправильное значение';
        }
    }
}

if (count($values) === count($whiteList)) {
    $subject = 'From: '.$values['email'].' ('.$values['name'].')';
    $messageBody = wordwrap($values['details'], 70);
    $mail = mail('exymax@gmail.com', $subject, $messageBody);
    if ($mail) {
       return json_encode(['result' => 'sent']);
    }
} else {
    return json_encode(['result' => 'error']);
}