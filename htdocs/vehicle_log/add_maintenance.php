<!DOCTYPE html>
<html>
<!--    Bryan Bibb, CPT283-W01, Feb 1 2024
-->

<?php include('header.php') ?>

<body class="bg-secondary"> <!-- gray background -->

<!--Page header with white background and centered text -->
<div class="card-header py-3 text-center text-light m-5 my-3">
    <h1>Add Maintenance Record</h1>
</div>
<!-- The outer container keeps the two inner containers in sync viz. width -->
<div class="container px-5">
    <div class="container px-lg-3 py-0 bg-light">
        <!-- The form creates a POST array and sends to add_vehicle.php -->
        <form action="add_maintenance_db.php" method="post"
              id="add_maintenance_form">
            <!-- The form is divided into two columns for ease of use -->
            <div class="row py-5 mx-5 justify-content-center">
                <!-- Each input box creates a variable with a name that matches the database columns (for convenience)-->
                <div class="mb-3">
                    <label for="date" class="form-label">Date:</label>
                    <input type="text" class="form-control" id="date" placeholder="Enter date" name="maintenance_date">
                </div>
                <div class="mb-3">
                    <label for="maintenance_id" class="form-label">Maintenance Type ID:</label>
                    <input type="text" class="form-control" id="maintenance_type_id" placeholder="Enter Maintenance Type Code" name="maintenance_type_id">
                </div>
                <div class="mb-3 mt-3">
                    <label for="vehicle" class="form-label">Vehicle ID:</label>
                    <input type="text" class="form-control" id="vehicle" placeholder="Vehicle" name="vehicle_id">
                </div>
                <div class="mb-3">
                    <label for="vendor" class="form-label">Vendor:</label>
                    <input type="text" class="form-control" id="vendor" placeholder="Enter maintenance vendor" name="maintenance_vendor">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description:</label>
                    <input type="text" class="form-control" id="description" placeholder="Enter description of service" name="maintenance_description">
                </div>
                <div class="mb-3">
                    <label for="maintenance_vendor_address" class="form-label">Maintenance Vendor Address:</label>
                    <input type="text" class="form-control" id="maintenance_vendor_address" placeholder="Enter vendor address" name="maintenance_vendor_address">
                </div>
                <div class="mb-3">
                    <label for="cost" class="form-label">Cost:</label>
                    <input type="text" class="form-control" id="cost" placeholder="Enter cost" name="maintenance_cost">
                </div>
                <div class="mb-3">
                    <label for="mileage" class="form-label">Mileage:</label>
                    <input type="text" class="form-control" id="mileage" placeholder="Enter current mileage" name="maintenance_mileage">
                </div>
                <!-- Submit button triggers the POST method and sending of data to add_vehicle.php -->
                <button type="submit" class="btn btn-primary" value="add maintenance">Submit</button>
                <!--                </div>-->
            </div>
        </form>

    </div>
</div>
</body>
</html>