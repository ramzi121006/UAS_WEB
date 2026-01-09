<?php
session_start();
session_destroy();
header("Location: /todo-uas/login");
exit;
