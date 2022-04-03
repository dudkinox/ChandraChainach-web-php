<?php
require('../http/client.php');
$mode = isset($_GET['mode']) ? $_GET['mode'] : '';
$query = "";
switch ($mode) {
    case 'insert':
        $major = $_POST['major'];
        $year = $_POST['year'];
        $code = $_POST['code'];
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $level = $_POST['level'];

        if (basename($_FILES["file-image"]["name"]) != "") {
            $target_dir = "../file/";
            $target_file = $target_dir . basename($_FILES["file-image"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            $check = getimagesize($_FILES["file-image"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
                exit;
            }
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
                exit;
            } else {
                if (move_uploaded_file($_FILES["file-image"]["tmp_name"], $target_file)) {
                    $uploadImage = "INSERT INTO `detail_student`(
                                    `id_student`, 
                                    `image`, 
                                    `aptitude`, 
                                    `sport`, 
                                    `music`, 
                                    `computer`, 
                                    `english`, 
                                    `intern`, 
                                    `organization`, 
                                    `major`) 
                                    VALUES (
                                    '$code',
                                    '$target_file',
                                    '-',
                                    '-',
                                    '-',
                                    '-',
                                    '-',
                                    '-',
                                    '-',
                                    '$major')";
                    if ($conn->query($uploadImage) === TRUE) {
                        echo "New record created successfully";
                    } else {
                        echo "Error: " . $uploadImage . "<br>" . $conn->error;
                    }
                } else {
                    echo "Sorry, there was an error uploading your file.";
                    exit;
                }
            }
        }

        $query = "INSERT INTO 
        `student`
        (
        `คณะ`, 
        `ปีการศึกษา`, 
        `รหัสนักศึกษา`, 
        `ชื่อ`, 
        `นามสกุล`, 
        `ระดับการศึกษา`) 
        VALUES ('" . $major . "',
        '" . $year . "',
        '" . $code . "',
        '" . $name . "',
        '" . $lastname . "',
        '" . $level . "')";
        break;
}

if ($conn->query($query) === TRUE) {
    header('location: ../?page=add-student');
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}
