<?php
session_destroy();
unset($_session["username"]);
header("location:home.html");
?>