<?php
echo "<pre>";
if(isset($_FILES['upload'])){   
print_r($_FILES['upload']);
}
echo "</pre>";echo "<hr>";echo "<hr>";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <?php if(!empty($message)){ echo "<p>{$message}</p>";}?>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
            <input type="file" name="upload">
            <input type="submit" name="submit" value="Upload">
        </form>
    </body>
</html>
