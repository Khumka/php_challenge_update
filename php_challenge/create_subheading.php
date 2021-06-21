<?php require_once('templates/header.php'); 

// Submitting Data
if (isset($_POST['submit_data'])) 
{ 
  // Client Information
  $name = trim(strtolower($_POST['name']));
  $points = trim(strtolower($_POST['points']));

  if ($message == '' && $class == '')
      { 
        $data = 
        [    
          ':name' => $name,
          ':points' => $points
        ];
        $query = "INSERT INTO subheading (name, points)
                  VALUES(:name, :points)";
         $statement = $conn->prepare($query);
        if ($statement->execute($data));
        { $message .='You\'ve successfully created client file.';
          $class .='alert-info'; ?>
          <script>window.location.href='index.php'</script>
        <?php } } } ?><br><br>

  <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    
    <div class="container">

      <h3>Form for creating Subheading</h3>

      <div class="row">

        <div class="col-md-6">
            <input type="text" name="name" class="form-control" placeholder="Create name" value="<?php echo isset($_POST['name']) ? $name : ''; ?>"required="">
        </div>

        <div class="col-md-6">
            <input type="number" name="points" class="form-control" placeholder="Create number" value="<?php echo isset($_POST['points']) ? $points : ''; ?>" required="">
        </div>
        
        <div class="col-md-12"><br>
         <input type="submit" name="submit_data" class="btn btn-primary btn-sm" value="Submit Data">
        </div>

      </div>
        
    </div>

  </form>

<?php require_once('templates/footer.php'); 