<?php require_once('../private/initialize.php'); ?>

<?php include(SHARED_PATH . '/public_header.php'); ?>

<h2>NIP-CAP Database - Water System</h2>

<?php

// $current_page = $GET_['page'] ?? 1; //Default the page to 1
// $per_page = 1;
// $total_count = 

// $pagination = new Pagination($current_page, $per_page, $total_count);


// Instantiate the WaterSystem class and call the find_all() class method
// Use pagination instead
$watersystem = WaterSystem::find_all();

?>

<?php foreach($watersystem as $system) { ?>

<div id="content">
    <div class="main-table container .col-centered">
        <div class="row">
            <div class="col-md-4">
                <dl class="row">
                    <dt class="col-sm-6">System Name: </dt>
                    <dd class="col-sm-6"><?php echo h($system->system_name); ?></dd>

                    <dt class="col-sm-6">Area Council: </dt>
                    <dd class="col-sm-6"><?php echo h($system->area_council); ?></dd>

                    <dt class="col-sm-6">Island: </dt>
                    <dd class="col-sm-6"><?php echo h($system->island); ?></dd>

                    <dt class="col-sm-6">Province: </dt>
                    <dd class="col-sm-6"><?php echo h($system->province); ?></dd>

                    <dt class="col-sm-6">System Latitude: </dt>
                    <dd class="col-sm-6"><?php echo h($system->latitude); ?></dd>

                    <dt class="col-sm-6">System Longitude: </dt>
                    <dd class="col-sm-6"><?php echo h($system->longitude); ?></dd>
                </dl>
            </div>

            <div class="col-md-4">
                <dl class="row">
                    <dt class="col-sm-6">Elevation: </dt>
                    <dd class="col-sm-6"><?php echo h($system->elevation); ?></dd>

                    <dt class="col-sm-6">Water Resourse Type: </dt>
                    <dd class="col-sm-6"><?php echo h($system->resource_type); ?></dd>

                    <dt class="col-sm-6">Water System Type: </dt>
                    <dd class="col-sm-6"><?php echo h($system->system_type); ?></dd>

                    <dt class="col-sm-6">Improved: </dt>
                    <dd class="col-sm-6"><?php echo h($system->improved); ?></dd>

                    <dt class="col-sm-6">Functionality: </dt>
                    <dd class="col-sm-6"><?php echo h($system->functionality); ?></dd>

                    <dt class="col-sm-6">User Numbers: </dt>
                    <dd class="col-sm-6"><?php echo h($system->number_users); ?></dd>
                </dl>
            </div>
            <div class="crud-btns col-md-4">
                <ul>
                    <li>
                        <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                    </li>
                    <li>
                        <a href="detail.php?system_name=<?php echo $system->system_name; ?>">
                            <button class="btn-default btn-sm">VIEW</button>
                        </a>
                    </li>
                    <li>
                        <button class="btn-default btn-sm">NEXT</button>
                    </li>
                    <li>
                        <button class="btn-default btn-sm">PREVIOUS</button>
                    </li>
                </ul>            
            </div>
        </div>
    </div>
</div>
<?php } ?>

<?php include(SHARED_PATH . '/public_footer.php'); ?>