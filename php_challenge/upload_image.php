<?php require_once('templates/header.php'); 

// Submitting Data
if (isset($_POST['submit_data'])) 
{ 
  // Client Information
  $name = trim(strtolower($_POST['name']));
 
  $fileName = $_FILES['path_url']['name'];
  $fileTmpName = $_FILES['path_url']['tmp_name'];
  $fileSize = $_FILES['path_url']['size'];
  $fileError = $_FILES['path_url']['error'];
  $fileType = $_FILES['path_url']['type'];

  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));

  $allowed = array('jpg', 'jpeg', 'png', 'pdf', 'docx', 'xlsx', 'excel');

  if (in_array($fileActualExt, $allowed)) {
    if ($fileError === 0) {
      if ($fileSize < 50000000) {
        $fileNameNew = uniqid('', true).".".$fileActualExt;
        $fileDestination = 'images/'.$fileNameNew;
        $full_url = $fileDestination;
        move_uploaded_file($fileTmpName, $fileDestination);
     } else {
        $message .="You file is too big.";
        $class .='alert-danger';
      }
    } else {
      $message .="There was an error uploading your file!.";
      $class .='alert-danger';
    }
  } else {
    $message .="You cannot upload files of this type!.";
    $class .='alert-danger';
  }


  if ($message == '' && $class == '')
      { 
        $data = 
        [    
          ':name' => $name,
          ':path_url' => $full_url
        ];
        $query = "INSERT INTO images (name, path_url)
                  VALUES(:name, :path_url)";
         $statement = $conn->prepare($query);
        if ($statement->execute($data));
        { $message .='You\'ve successfully created client file.';
          $class .='alert-info'; ?>
          <script>window.location.href='index.php'</script>
        <?php } } } ?><br><br>

  <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
    
    <div class="container">

      <h3>Form for uploading images</h3>

      <div class="row">

        <div class="col-md-6">
            <input type="text" name="name" class="form-control" placeholder="Create image name" value="<?php echo isset($_POST['name']) ? $name : ''; ?>"required="">
        </div>

        <div class="col-md-6">
            <input type="file" name="path_url" class="form-control" placeholder="Upload file here" value="<?php echo isset($_POST['path_url']) ? $path_url : ''; ?>" required="">
        </div>
        
        <div class="col-md-12"><br>
         <input type="submit" name="submit_data" class="btn btn-primary btn-sm" value="Submit Data">
        </div>

      </div>
        
    </div>

  </form>

<?php require_once('templates/footer.php'); 