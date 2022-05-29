<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>About</title>
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
      <div class="section">
        <h1>About</h1>
        <p>Dit is een sectie met daarin een tabel. De tabel wordt gevuld met data vanuit javascript.</p>
        <table id="about_table">
          <tr>
            <th>Company</th>
            <th>Contact</th>
            <th>Country</th>
          </tr>
        </table>
        <p>Dit is text onder de tabel.</p>
        <div class="image_box">
          <img class="portrait" src="images/IMG_1195.jpeg" alt="logo" />
          <div class="image_text">This is a test</div>
        </div>
      </div>
      <div class="section">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat.
        </p>
        <p>
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <div class="image_box">
          <img class="landscape" src="images/screenshot2.png" alt="logo" />
          <div class="image_text">This is a test</div>
        </div>
      </div>
      <div class="section">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
          est laborum.
        </p>
        <div class="image_box">
          <img class="landscape" src="images/IMG_1301.jpeg" alt="logo" />
          <div class="image_text">This is a test</div>
        </div>
      </div>
    </div>
    <div id="footer">
      <div class="copyright">
        <p>Copyright &copy; 2022</p>
      </div>
    </div>
    <script src="js/table.js"></script>
  </body>
</html>
