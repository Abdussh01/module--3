<?php
function generatePassword($length) {
    $password = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
    return substr(str_shuffle($password), 0, $length);
  }
    echo generatePassword(12)."\n";