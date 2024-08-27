<?php
declare(strict_types = 1);

$value = $_GET['testvar'] ?? 'testval';

setcookie('testvar', $value);

header("Location: http://localhost:8000");
