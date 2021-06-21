        <!--Image div-->
    <div id="image_div" class="image_div col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">

      <h3>Dynamic image slider </h3>

      <ul id="adaptive" class="cs-hidden">
        <?php 
            $sql = "SELECT * FROM images";
            $stmt=$conn->prepare($sql);
            $stmt->execute(array());
            ;
             while ($row=$stmt->fetch(PDO::FETCH_BOTH)){  ?>
              <li class="item-a"><span><?php echo ucwords($row['name'])?></span><img src="<?php echo $row['path_url']?>"></li>
            <?php } ?>
      </ul>
      
    </div>
        
        <!--Heading and subheading div-->
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
      
      <h3>Heading and subheading div</h3>

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Main navigation">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Heading</a>
    <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Admin Dashboard</a>
          <ul class="dropdown-menu" aria-labelledby="dropdown01">
            <li><a class="dropdown-item" href="#">Dropdown item 1</a></li>
            <li><a class="dropdown-item" href="#">Dropdown item 2</a></li>
            <li><a class="dropdown-item" href="#">Dropdown item 3</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search anything here..." aria-label="Search">
        <button class="btn btn-outline-info btn-sm" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="nav-scroller bg-body shadow-sm"> 
  <div class="container"> 
    <nav class="nav nav-underline" aria-label="Secondary navigation"> 
      <?php 
            $sql = "SELECT * FROM subheading";
            $stmt=$conn->prepare($sql);
            $stmt->execute(array());
            ;
             while ($row=$stmt->fetch(PDO::FETCH_BOTH)){  ?>
              <a class="nav-link" href="#"> <?php echo ucwords($row['name'])?> <span class="badge bg-light text-dark rounded-pill align-text-bottom"><?php echo ucwords($row['points'])?></span> </a> 
      <?php } ?>

</nav> </div> </div>

    </div>
    
  </div>
  
</div>

