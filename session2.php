<?php

$age = 18;


if ($age < 18) {
    echo "Access denied, Come back here when you get older... KID\n";
    exit(0);
}

$access = "editor";

switch ($access) {
    case "admin":
        echo "FULL ACCESS TO THE SERVERS GRANDED!\n";
        break;
    case "editor":
        echo "Edit access granded.\n";
        break;
    case "viewer":
        echo "Read-only access granded.\n";
        break;
    default:
        echo "Access denied\n";
        break;
    case "hacker":
        echo "Access denied, you are a hacker!\n";
        break;
}





