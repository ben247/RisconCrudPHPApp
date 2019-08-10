<?php
// prevents this code from being loaded directly in the browser
// or without first setting the necessary object
if(!isset($watersystem)) {
  redirect_to(url_for('/staff/watersystems/index.php'));
}
?>

<div class="main-table container .col-centered">
        <div class="row">
            <div class="col-md-4">
                <dl class="row">
                    <dt class="col-sm-6">System Name</dt>
                    <dd class="col-sm-6"><input type="text" name="system_name" value="" /></dd>

                    <dt class="col-sm-6">Area Council</dt>
                    <dd class="col-sm-6">
                    <select name="area_council">
                      <option value=""></option><?php foreach(WaterSystem::AREA_COUNCIL as $area_council) { ?>
                      <option value="<?php echo $area_council; ?>"><?php echo $area_council; ?></option><?php } ?>
                    </select>
                    </dd>

                    <dt class="col-sm-6">Island</dt>
                    <dd class="col-sm-6">
                      <select name="island">
                        <option value=""></option><?php foreach(WaterSystem::ISLAND as $island) { ?>
                        <option value="<?php echo $island; ?>"><?php echo $island; ?></option><?php } ?>
                      </select>
                    </dd>

                    <dt class="col-sm-6">Province</dt>
                    <dd class="col-sm-6">
                      <select name="province">
                        <option value=""></option><?php foreach(WaterSystem::PROVINCE as $province) { ?>
                        <option value="<?php echo $province; ?>"><?php echo $province; ?></option><?php } ?>
                      </select>
                    </dd>

                    <dt class="col-sm-6">System Latitude</dt>
                    <dd class="col-sm-6">
                      <input type="text" name="latitude" value="" />
                    </dd>

                    <dt class="col-sm-6">System Longitude</dt>
                    <dd class="col-sm-6">
                      <input type="text" name="longitude" value="" />
                    </dd>
                </dl>
            </div>

            <div class="col-md-4">
                <dl class="row">

                    <dt class="col-sm-6">Elevation</dt>
                    <dd class="col-sm-6">
                      <input type="text" name="elevation" value="" />
                    </dd>

                    <dt class="col-sm-6">Water Resourse Type</dt>
                    <dd class="col-sm-6">
                    <select name="resource_type">
                      <option value=""></option><?php foreach(WaterSystem::RESOURCE_TYPE as $resource_type) { ?>
                      <option value="<?php echo $resource_type; ?>"><?php echo $resource_type; ?></option><?php } ?>
                    </select>
                    </dd>

                    <dt class="col-sm-6">Water System Type</dt>
                    <dd class="col-sm-6">
                      <select name="system_type">
                        <option value=""></option><?php foreach(WaterSystem::SYSTEM_TYPE as $system_type) { ?>
                        <option value="<?php echo $system_type; ?>"><?php echo $system_type; ?></option><?php } ?>
                      </select>
                    </dd>

                    <dt class="col-sm-6">Improved</dt>
                    <dd class="col-sm-6">
                      <input type="text" name="improved" value="" />
                    </dd>

                    <dt class="col-sm-6">Functionality</dt>
                    <dd class="col-sm-6">
                      <input type="text" name="functionality" value="" />
                    </dd>

                    <dt class="col-sm-6">User Numbers</dt>
                    <dd class="col-sm-6">
                      <input type="text" name="number_users" value="" />
                    </dd>
                </dl>
            </div>
            <div class="col-md-4">
                <div id="operations">
                  <input type="submit" value="Create Water System" />
                </div>
            </div>
        </div>
    </div>
