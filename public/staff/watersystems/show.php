<?php require_once('../../../private/initialize.php'); ?>

<?php

$id = $_GET['system_id'] ?? '1'; // PHP > 7.0

$watersystem = WaterSystem::find_by_id($id);

?>

<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/watersystems/index.php'); ?>">&laquo; Back to List</a>

  <div class="bicycle show">

    <h1>Water System</h1>

    <div class="attributes">
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
        <dt>Latitude</dt>
        <dd><?php echo h($watersystem->latitude); ?></dd>
      </dl>
      <dl>
        <dt>Longitude</dt>
        <dd><?php echo h($watersystem->longitude); ?></dd>
      </dl>
      <dl>
        <dt>Elevation</dt>
        <dd><?php echo h($watersystem->elevation); ?></dd>
      </dl>
      <dl>
        <dt>System Type</dt>
        <dd><?php echo h($watersystem->system_type); ?></dd>
      </dl>
      <dl>
        <dt>Imroved</dt>
        <dd><?php echo h($watersystem->improved); ?></dd>
      </dl>
      <dl>
        <dt>Functionality</dt>
        <dd><?php echo h($watersystem->functionality); ?></dd>
      </dl>
      <dl>
        <dt>Number of Users</dt>
        <dd><?php echo h($watersystem->number_users); ?></dd>
      </dl>
    </div>

  </div>

</div>
