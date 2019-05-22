<?php
    confirm_logged_in();
?>

<head>
    <link rel="stylesheet" href="/presentation/css/dashboard.css">  
</head>
<br>
<div class="row">
    <a href="/editProducts" class="btn dashboard">Back to products</a>
</div>

<form class="uploadForm" action="/../../business/imgupload/handleUpload.php" method="post" enctype="multipart/form-data">
    <p>Select Image File to Upload:
    <br>Please only upload PNG's with dimensions 500 x 500px.
    </p>
    
    <label for="file">
    <input class="uploadFormInput" type="file" name="file">
    <br>    
    <br>
    <br>
    <br>
    <p>Specify excact name of the duck:
    <br>Filename must be the same as the product name.</p>
    
    <input class="uploadFormInput" type="text" name="productName">
    <br>
    <input class="uploadFormBtn" type="submit" name="submit" value="Upload image">
</form>