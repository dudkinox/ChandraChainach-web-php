<?php
session_start();
require('../http/client.php');

$method = isset($_GET["method"]) ? $_GET["method"] : "";

$aptitude = $_POST["aptitude"];
$sport = $_POST["sport"];
$music = $_POST["music"];
$computer = $_POST["computer"];
$english = $_POST["english"];
$intern = $_POST["intern"];
$organization = $_POST["organization"];
$major = $_POST["major"];
$idStudent = $_POST["id-student"];
$imagry = "";

if (isset($_FILES["image"])) {
    $target_dir = "../file/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["image"]["tmp_name"]);
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
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $imagry = $target_file;
        } else {
            echo "Sorry, there was an error uploading your file.";
            exit;
        }
    }
}

$query = "";
if ($method == "insert") {
    $query = "INSERT INTO 
            detail_student
                (id_student, 
                 `image`, 
                 aptitude, 
                 sport, 
                 music, 
                 computer, 
                 english, 
                 intern, 
                 organization, 
                 major) 
            VALUES (
                '$idStudent',
                '$imagry',
                '$aptitude',
                '$sport',
                '$music',
                '$computer',
                '$english',
                '$intern',
                '$organization',
                '$major')";
} else {
    $query = "UPDATE 
                detail_student 
                SET 
                `image`='$imagry',
                aptitude='$aptitude',
                sport='$sport',
                music='$music',
                computer='$computer',
                english='$english',
                intern='$intern',
                organization='$organization',
                major='$major' 
                WHERE id_student='$idStudent'";
}

if ($conn->query($query) === TRUE) {
    $_SESSION["alertInsertDetail"] = '1';
    header("location: ../");
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}
