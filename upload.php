<?php

$target_dir = "/uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$filetype = strtolower(pathinfo($_target_file,PATHINFO_EXTENSION));

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])){
  $folder = isset($_POST['folder']) ? $_POST['folder'] : null;

//   $uploadDir = "./uploads/";
  echo "Upload done!";

  // file upload section
  if(isset($_FILES["file"]) && $_FILES["file"]["error"] == 0){
    $filename = $_FILES["file"]["name"];
    $filetype = $_FILES["file"]["type"];
    $filesize = $_FILES["file"]["size"];
    $random_name = get_random_name()  ."." . pathinfo($filename, PATHINFO_EXTENSION);
    if(file_exists($target_dir . $random_name)){
      echo $filename . " is already exists.";
    } else{
      move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir . $random_name);
      //save_to_gallery($random_name, $filename);
      save_to_file_manager($random_name, $filename, $filetype, $filesize, get_folder_id());
      reload_current_directory();
    }
  }else{
    if($folder){
      save_a_folder($folder, get_folder_id());
      reload_current_directory();
    }
  }

}
?>