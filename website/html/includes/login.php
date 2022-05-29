<div class="dropdown" style="width: 20%">
  <button class="dropbtn"><i class="fas fa-sign-in-alt"></i></button>
  <!-- "right: xx" to not let dropdown-content fall off right side of the screen -->
  <div class="dropdown-content" style="width: 20%;">
    <form>
      <label for="username">Username:</label>
      <input type="text" id="username" name="username">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password">
      <a href="#" onclick="handleSubmit();">Submit</a>
    </form>
  </div>
</div>

<script>
  document.getElementById('password').addEventListener('keyup', function(event) {
    if (event.code === 'Enter')
    {
        event.preventDefault();
        handleSubmit();
    }
  });

  function handleSubmit() {
    var form = document.querySelector('form');
    var xhr = new XMLHttpRequest();
    var data = new FormData(form);

    xhr.onreadystatechange=function() {
      if (xhr.readyState==4 && xhr.status==200) {
        var response = xhr.responseText;
        if(response > 0) {
          location.reload();
        } else {
          document.getElementById("username").style.borderColor = "red";
          document.getElementById("password").style.borderColor = "red";
        }
      }
    }

    xhr.open('POST','auth.php')
    xhr.send(data);
  }
</script>