<?php
$db = mysqli_connect('localhost', 'root', '', "alphahub_db");
if (!$db) {
    echo "Failed to connect to Server: ";
    exit();
}
