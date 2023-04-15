<?php

    $connect = mysqli_connect('localhost', 'root', '', 'pet_project');

    if (!$connect) {
        die('Error connect to DataBase');
    }