<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>College Portal</title>

<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html, body {
  height: 100%;
  background: white;
  font-family: Arial, sans-serif;
}

.container {
  display: flex;
  height: 100vh;
}

.left {
  width: 40%;
  background: white;
  padding: 40px;
}

.right {
  width: 60%;
  background: white;
}
</style>

</head>
<body>

<div class="container">

  <!-- LEFT: PHP OUTPUT ONLY -->
  <div class="left">
    <?php
      $page = $_GET['page'] ?? 'file';

      if ($page == 'file')     include 'file.php';
      if ($page == 'abc')      include 'abc.php';
      if ($page == 'abcd')     include 'abcd.php';
      if ($page == 'abcde')    include 'abcde.php';
      if ($page == 'abcdef')   include 'abcdef.php';
      if ($page == 'abcdefg')  include 'abcdefg.php';
    ?>
  </div>

  <!-- RIGHT: EMPTY -->
  <div class="right"></div>

</div>

</body>
</html>
