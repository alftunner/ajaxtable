<?php
try {
    $pdo = new PDO('mysql:host=mysql60.hostland.ru;dbname=host1323541_itstep27', 'host1323541_itstep', '269f43dc');
} catch (PDOException $e) {
    header('Refresh: 0; url=/disconnect.html');
    header('Refresh: 3; url=/index.html');
}
