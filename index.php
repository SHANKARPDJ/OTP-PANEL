<?php
session_start();

// Agar session nahi mila to login.php bhejo
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit();
}

include("../header.php");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Super Admin Panel </title>
  <style>


.btn-row {
  display: flex;
  justify-content: center;
  gap: 10px; /* Button ke beech gap */
  flex-wrap: wrap; /* Small screen mein neeche aa jaye */
  margin-top: 20px;
}



p { padding: 5px 0px; }

</style>
</head>
<body>

   
  
  <div class="btn-row">
  <button class="btn" onclick="window.location.href='savedata.php'">Manage User</button>
  <button class="btn" onclick="window.location.href='download.php'">Downloader</button>
   <button class="btn" onclick="window.location.href='logout.php'">Logout</button>
</div>

<div class="btn-row">
  <button class="btn" onclick="window.location.href='update.php'">updater User</button>
  <button class="btn" onclick="window.location.href='register.php'">Downloader</button>
    
</div><br><br>
  
  <script>
  function toggleMenu() {
    // Disabled
  }
  </script>
  <?php include("../footer.php"); ?>
</body>
</html>
