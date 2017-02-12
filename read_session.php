<?php

session_start();

echo $_SESSION['mySessionData'];

session_destroy();