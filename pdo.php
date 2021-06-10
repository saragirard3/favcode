<?php
//PDO
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=girasgpm_portfolio','girasgpm_profile', 'ZcG9iF]_29W2');

// See the 'errors' folder for details
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>