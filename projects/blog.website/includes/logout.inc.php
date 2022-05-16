<?php

session_start();
session_unset();
session_destroy();

//Goinga back to front page

header("location: ../index.php?error=none");