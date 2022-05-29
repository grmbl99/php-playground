<!-- width specified directly in html because it depends on the number of items in the menu -->
<div id="menu">
  <a href="index.php" style="width: 20%"><i class="fas fa-home"></i> Home</a>
  <div class="dropdown" style="width: 20%">
    <button class="dropbtn"><i class="fas fa-info-circle"></i> Info</button>
    <div class="dropdown-content" style="width: 20%">
      <a href="about.php">About</a>
      <a href="contact.php">Contact</a>
    </div>
  </div>

  <?php
  if (isset($_SESSION['username'])) {
    echo '<a href="add.php" style="width: 20%"><i class="fas fa-plus"></i> Add</a>';
    echo '<a href="#" class="placeholder" style="width: 20%"></a>';
    echo '<a href="logout.php" style="width: 20%"><i class="fas fa-sign-out-alt"></i> ('.$_SESSION['username'].')</a>';
  } else {
    echo '<a href="#" class="placeholder" style="width: 40%"></a>';
    require_once("includes/login.php");
  }
  ?>
</div>
