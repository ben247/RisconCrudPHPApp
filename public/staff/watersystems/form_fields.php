<?php
// prevents this code from being loaded directly in the browser
// or without first setting the necessary object
if(!isset($watersystem)) {
  redirect_to(url_for('/staff/watersystems/index.php'));
}
?>

<dl>
  <dt>System Name</dt>
  <dd><input type="text" name="system_name" value="" /></dd>
</dl>

<dl>
  <dt>Area Council</dt>
  <dd>
    <select name="area_council">
      <option value=""></option>
    <?php foreach(WaterSystem::AREA_COUNCIL as $area_council) { ?>
      <option value="<?php echo $area_council; ?>"><?php echo $area_council; ?></option>
    <?php } ?>
    </select>
  </dd>
</dl>

<dl>
  <dt>Island</dt>
  <dd>
    <select name="island">
      <option value=""></option>
    <?php foreach(WaterSystem::ISLAND as $island) { ?>
      <option value="<?php echo $island; ?>"><?php echo $island; ?></option>
    <?php } ?>
    </select>
  </dd>
</dl>

<dl>
  <dt>Province</dt>
  <dd>
    <select name="province">
      <option value=""></option>
    <?php foreach(WaterSystem::PROVINCE as $province) { ?>
      <option value="<?php echo $province; ?>"><?php echo $province; ?></option>
    <?php } ?>
    </select>
  </dd>
</dl>

<dl>
  <dt>Latitude</dt>
  <dd><input type="text" name="latitude" value="" /></dd>
</dl>

<dl>
  <dt>Longitude</dt>
  <dd><input type="text" name="longitude" value="" /></dd>
</dl>

<dl>
  <dt>Elevation</dt>
  <dd><input type="text" name="elevation" value="" /></dd>
</dl>

<dl>
  <dt>Resource Type</dt>
  <dd>
    <select name="resource_type">
      <option value=""></option>
    <?php foreach(WaterSystem::RESOURCE_TYPE as $resource_type) { ?>
      <option value="<?php echo $resource_type; ?>"><?php echo $resource_type; ?></option>
    <?php } ?>
    </select>
  </dd>
</dl>

<dl>
  <dt>System Type</dt>
  <dd>
    <select name="system_type">
      <option value=""></option>
    <?php foreach(WaterSystem::SYSTEM_TYPE as $system_type) { ?>
      <option value="<?php echo $system_type; ?>"><?php echo $system_type; ?></option>
    <?php } ?>
    </select>
  </dd>
</dl>

<dl>
  <dt>Improved</dt>
  <dd><input type="text" name="improved" value="" /></dd>
</dl>

<dl>
  <dt>Functionality</dt>
  <dd><input type="text" name="functionality" value="" /></dd>
</dl>

<dl>
  <dt>Number of Users</dt>
  <dd><input type="text" name="number_users" value="" /></dd>
</dl>
