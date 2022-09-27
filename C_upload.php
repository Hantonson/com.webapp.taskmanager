<?php

/* Getting file name */
$filename = $_FILES['file']['name'];

/* Location */
$location = "assets/docs/" . $filename;
$uploadOk = 1;

if ($uploadOk == 0) {
    echo 0;
} else {
    /* Upload file */
    if (move_uploaded_file($_FILES['file']['tmp_name'], $location)) {//Copies file into location
        echo $location; //returns file location (for ajax call to store location string into database)
    } else {
        echo 0;
    }
}
