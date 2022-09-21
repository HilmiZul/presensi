<?php
if (isset($_POST['signin'])) {
  $user = $_POST['username'];
  $pass = $_POST['password'];

  $query = "select a.*, b.* from tb_users a
  INNER JOIN tb_peserta b on a.id=b.id_user
  where a.username='$user' && a.`password`=SHA1('$pass')";
  $result = mysqli_query($db, $query);
  $count = mysqli_num_rows($result);

  // cek jika ada data, maka bikin session dan sign in berhasil
  if ($count > 0) {
    $session = mysqli_fetch_assoc($result);
    $_SESSION['id_user'] = $session['id_user'];
    $_SESSION['user'] = $session['username'];
    $_SESSION['level'] = $session['level'];
    $_SESSION['nama'] = $session['nama'];
    $_SESSION['seksi'] = $session['seksi'];

    print $_SESSION['nama'];
    // redirect ke halaman utama
    header("Location: /?nav=home");
  }
}
?>


<style>
  body {
    font-family: Arial, Helvetica, sans-serif;
    margin: 0 auto;
    display: table;
    justify-content: center;
    align-items: baseline;
  }

  /* Full-width input fields */
  input[type=text],
  input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }

  /* Set a style for all buttons */
  button {
    background-color: #04AA6D;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
  }

  button:hover {
    opacity: 0.8;
  }

  /* Extra styles for the cancel button */
  .cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
  }

  /* Center the image and position the close button */
  .imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
  }

  img.avatar {
    width: 20%;
    border-radius: 0%;
  }

  .container {
    padding: 16px;
  }

  span.psw {
    float: right;
    padding-top: 16px;
  }

  /* The Modal (background) */
  .modal {
    display: none;
    /* Hidden by default */
    position: fixed;
    /* Stay in place */
    z-index: 1;
    /* Sit on top */
    left: 0;
    top: 0;
    width: 100%;
    /* Full width */
    height: 100%;
    /* Full height */
    overflow: auto;
    /* Enable scroll if needed */
    background-color: rgb(0, 0, 0);
    /* Fallback color */
    background-color: rgba(0, 0, 0, 0.4);
    /* Black w/ opacity */
    padding-top: 60px;
  }

  /* Modal Content/Box */
  .modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto;
    /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%;
    /* Could be more or less, depending on screen size */
  }

  /* The Close Button (x) */
  .close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
  }

  .close:hover,
  .close:focus {
    color: red;
    cursor: pointer;
  }

  /* Add Zoom Animation */
  .animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
  }

  @-webkit-keyframes animatezoom {
    from {
      -webkit-transform: scale(0)
    }

    to {
      -webkit-transform: scale(1)
    }
  }

  @keyframes animatezoom {
    from {
      transform: scale(0)
    }

    to {
      transform: scale(1)
    }
  }

  /* Change styles for span and cancel button on extra small screens */
  @media screen and (max-width: 300px) {
    span.psw {
      display: block;
      float: none;
    }

    .cancelbtn {
      width: 100%;
    }
  }
</style>

<h2>PRESENSI KPPN TASIKMALAYA</h2>

<div>
  <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
</div>

<div id="id01" class="modal">

  <form class="modal-content animate" action="" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="./pages/users.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="password"><b>Masukan username</b></label>
      <input type="text" placeholder="Enter username" name="username" required>

      <label for="password"><b>Masukan password</b></label>
      <input type="password" placeholder="Enter password" name="password" required>

      <button type="submit" name="signin">Login</button>
    </div>
    <!-- 
      <div class="container" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">PIN?</a></span>
      </div> -->
  </form>
</div>

<script>
  // Get the modal
  var modal = document.getElementById('id01');

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
</script>


</div>
</div>
</div>