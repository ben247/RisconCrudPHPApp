<?php
  if(!isset($page_title)) { $page_title = 'Admin Area'; }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Title - <?php echo h($page_title); ?></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/staff.css'); ?>" />
  <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/style.css'); ?>" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

  <body>
    <header>
      <h1>Admin Area</h1>
    </header>

    <navigation>
      <ul>
        <li><a href="<?php echo url_for('/staff/index.php'); ?>"><span class="symbols">&laquo;</span>Back to Menu</a></li>
      </ul>
    </navigation>

    <?php echo display_session_message(); ?>
