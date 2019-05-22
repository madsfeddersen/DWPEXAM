<?php
// Include the database configuration file
include 'imgDbCon.php';
$statusMsg = '';
// File upload path
$targetDir = "../../presentation/img/products/";
$fileName = basename($_FILES["file"]["name"]);
$forDuck = $_POST['productName'];
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $db->query("INSERT into images (file_name, for_duck, uploaded_on) VALUES ('$fileName', '$forDuck', NOW())");
            var_dump($db);
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                redirect_to("/editProducts");
            }else{
                $statusMsg = "File upload failed, please try again.";
                redirect_to("/upload");
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
            redirect_to("/upload");
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
        redirect_to("/upload");
    }
}else{
    $statusMsg = 'Please select a file to upload.';
    redirect_to("/upload");
}

// Display status message
echo $statusMsg;
?>