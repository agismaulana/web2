<?php

    session_start();

    session_unset();
    session_destroy();

    header("Location: /uas/pages/auth/login.php");