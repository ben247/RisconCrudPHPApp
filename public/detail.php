<?php require_once('../private/initialize.php'); ?>

<?php

  // Get requested System Name
  $system_name = $_GET['System_Name'] ?? false; // ?? null coalescing operator

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
        <dd><?php echo h($watersystem->System_Name); ?></dd>
      </dl>
      <dl>
        <dt>System ID</dt>
        <dd><?php echo h($watersystem->stem_ID); ?></dd>
      </dl>
      <dl>
        <dt>Area Council</dt>
        <dd><?php echo h($watersystem->Area_Council); ?></dd>
      </dl>
      <dl>
        <dt>Island</dt>
        <dd><?php echo h($watersystem->Island); ?></dd>
      </dl>
      <dl>
        <dt>Province</dt>
        <dd><?php echo h($watersystem->Province); ?></dd>
      </dl>
      <dl>
        <dt>System Latitude</dt>
        <dd><?php echo h($watersystem->System_Lat); ?></dd>
      </dl>
      <dl>
        <dt>System Longitude</dt>
        <dd><?php echo h($watersystem->System_Long); ?></dd>
      </dl>
      <dl>
        <dt>Elevation</dt>
        <dd><?php echo h($watersystem->Elevation); ?></dd>
      </dl>
      <dl>
        <dt>Water Resourse Type</dt>
        <dd><?php echo h($watersystem->Water_Resource_Type); ?></dd>
      </dl>
      <dl>
        <dt>Water System Type</dt>
        <dd><?php echo h($watersystem->Water_System_Type); ?></dd>
      </dl>
      <dl>
        <dt>Improved</dt>
        <dd><?php echo h($watersystem->Improved); ?></dd>
      </dl>
      <dl>
        <dt>Functionality</dt>
        <dd><?php echo h($watersystem->Functionality); ?></dd>
      </dl>
      <dl>
        <dt>User Numbers</dt>
        <dd><?php echo h($watersystem->Number_Users); ?></dd>
      </dl>
      <dl>
        <dt>Year Installed</dt>
        <dd><?php echo h($watersystem->Year_Installed); ?></dd>
      </dl>
    </div>

  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
