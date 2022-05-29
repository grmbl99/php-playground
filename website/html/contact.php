<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Contact</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/menu.css" />
    <script src="https://kit.fontawesome.com/6142e8c861.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <div id="header"></div>
    <div id="sticky_header">
      <?php require_once("includes/menu.php"); ?>
    </div> 
    <div id="content">
      <?php require_once("includes/sections-from-database.php"); ?>
    </div>
    <div id="footer">
      <div class="copyright">
        <p>Copyright &copy; 2022</p>
      </div>
    </div>
  </body>
</html>
