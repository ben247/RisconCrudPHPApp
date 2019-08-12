<?php

require_once('../../../private/initialize.php');

if(is_post_request()) {

  // Create record using post parameters
  $args = $_POST['watersystem'];
  $watersystem = new WaterSystem($args);
  $result = $watersystem->save();
  
  if($result === true) {
    $new_id = $watersystem->system_id;
    $_SESSION['message'] = 'The water system was created successfully.';
    redirect_to(url_for('/staff/watersystems/show.php?system_id=' . $new_id));
  } else {
    // show errors
  }

} else {
  // display the form
  $watersystem = new WaterSystem;
}

?>

<?php $page_title = 'Add new water system'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/watersystems/index.php'); ?>"><span class="symbols">&laquo;</span> Back to Database</a>

  <div class="bicycle new">
    <h2>Create Water System</h2>

    <?php // echo display_errors($errors); ?>

    <form action="<?php echo url_for('/staff/watersystems/new.php'); ?>" method="post">

      <?php include('form_fields.php'); ?>

      <div id="operations">
        <input type="submit" value="Create Water System" />
      </div>
      
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
