<?php
session_start();
unset($_SESSION['ten']);
unset($_SESSION['ma']);
unset($_SESSION['cap_do']);
header('location: ../');