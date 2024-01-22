<?php
$db = mysqli_connect('localhost', 'root', '', "test");
if (!$db) {
    echo "Failed to connect to Server: ";
    exit();
}
