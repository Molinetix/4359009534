<?php

unset($_SESSION['id'],$_SESSION['user'],$_SESSION['email']);
session_destroy();
header('location: ?view=index');
?>