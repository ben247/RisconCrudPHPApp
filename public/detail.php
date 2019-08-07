<?php require_once('../private/initialize.php'); ?>

<?php

  // Get requested System Name
  $system_name = $_GET['system_name'] ?? false; // ?? null coalescing operator

  if(!$system_name) {
      redirect_to('index.php');
  }

  // Find water system using system_name
  $watersystem = WaterSystem::find_by_system_name($system_name);

?>

<?php $page_title = 'System Name: ' . $watersystem->name(); ?>

<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">

  <a href="watersystem.php">Back to Water System</a>

  <div id="page">

    <div class="detail">
      <dl>
        <dt>System Name</dt>
        <dd><?php echo h($watersystem->system_name); ?></dd>
      </dl>
      <dl>
        <dt>Area Council</dt>
        <dd><?php echo h($watersystem->area_council); ?></dd>
      </dl>
      <dl>
        <dt>Island</dt>
        <dd><?php echo h($watersystem->island); ?></dd>
      </dl>
      <dl>
        <dt>Province</dt>
        <dd><?php echo h($watersystem->province); ?></dd>
      </dl>
      <dl>
        <dt>System Latitude</dt>
        <dd><?php echo h($watersystem->latitude); ?></dd>
      </dl>
      <dl>
        <dt>System Longitude</dt>
        <dd><?php echo h($watersystem->longitude); ?></dd>
      </dl>
      <dl>
        <dt>Elevation</dt>
        <dd><?php echo h($watersystem->elevation); ?></dd>
      </dl>
      <dl>
        <dt>Water Resourse Type</dt>
        <dd><?php echo h($watersystem->resource_type); ?></dd>
      </dl>
      <dl>
        <dt>Water System Type</dt>
        <dd><?php echo h($watersystem->system_type); ?></dd>
      </dl>
      <dl>
        <dt>Improved</dt>
        <dd><?php echo h($watersystem->improved); ?></dd>
      </dl>
      <dl>
        <dt>Functionality</dt>
        <dd><?php echo h($watersystem->functionality); ?></dd>
      </dl>
      <dl>
        <dt>User Numbers</dt>
        <dd><?php echo h($watersystem->number_users); ?></dd>
      </dl>
    </div>

  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
