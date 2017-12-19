<?php

unset($_SESSION['id'],$_SESSION['user'],$_SESSION['email'],$_SESSION['online']);
session_destroy();
header('location: ?view=index');
?>