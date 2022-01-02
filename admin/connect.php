<?php

$connect = mysqli_connect('localhost', 'root','', 'j2school_project');
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

mysqli_set_charset($connect,"utf8");