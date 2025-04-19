<?php
session_start();

// Initialize count if not already set
if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
}

// If form is submitted, increment the count
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['count']++;
}

// print_r($_SERVER);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Counter Button</title>
</head>
<body>

<form method="post">
  <button type="submit"><?php echo $_SESSION['count']; ?></button>
</form>

</body>
</html>
