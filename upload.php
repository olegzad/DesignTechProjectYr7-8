<?php
if (isset($_POST['submit'])) {
  $file = $_FILES['design-brief-upload'];

  $fileName = $_FILES['design-brief-upload']['name'];
  $fileTmpName = $_FILES['design-brief-upload']['tmp-name'];
  $fileSize = $_FILES['design-brief-upload']['size'];
  $fileError = $_FILES['design-brief-upload']['error'];
  $fileType = $_FILES['design-brief-upload']['type'];

  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));

  $allowed = array('jpg', 'jpeg', 'pdf', 'png', 'docx', 'bmp');

  if (in_array($fileActualExt, $allowed)) {
    if ($fileError === 0) {
      if ($fileSize < 100000) {
        $fileNameNew = uniqid('', true).".".$fileActualExt;
        $fileDestination = 'uploads/'.$fileNameNew;
        move_uploaded_file($fileTmpName, $fileDestination);
        header("Location: gallery.html?uploadsuccess");
      } else {
        echo "Filesize too big";
      }
    } else {
      echo "There was an error uploading your file";
    }
  } else {
    echo "You cannot upload that type of file!";
  }
}
?>
