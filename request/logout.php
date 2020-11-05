<?php
session_start();
session_destroy();
header('Location: lesson3.php');