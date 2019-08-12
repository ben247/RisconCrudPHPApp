<?php

require_once('../../../private/initialize.php');

if(!isset($_GET['system_id'])) {
  redirect_to(url_for('/staff/watersystems/index.php'));
}
$id = $_GET['system_id'];
$watersystem = WaterSystem::find_by_id($id);
if($watersystem == false) {
    redirect_to(url_for('/staff/watersystems/index.php'));
}

if(is_post_request()) {

  // Save record using post parameters

  $args = $_POST['watersystem'];
  $watersystem->merge_attributes($args);
  $result = $watersystem->save();

  $result = false;
  if($result === true) {
    $_SESSION['message'] = 'The watersystem was updated successfully.';
    redirect_to(url_for('/staff/watersystems/show.php?system_id=' . $id));
  } else {
    // show errors
  }

} else {

  // display the form
}

?>

<?php $page_title = 'Edit Water System'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/watersystems/index.php'); ?>">&laquo; Back to List</a>

  <div class="bicycle edit">
    <h2>Edit Water System</h2>

    <?php // echo display_errors($errors); ?>

    <form action="<?php echo url_for('/staff/watersystems/edit.php?system_id=' . h(u($id))); ?>" method="post">

      <?php include('form_fields.php'); ?>
      
      <div id="operations">
        <input type="submit" value="Edit Water System" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
