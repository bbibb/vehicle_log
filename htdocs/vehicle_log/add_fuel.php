<!DOCTYPE html>
<html>
<!--    Bryan Bibb, CPT283-W01, Feb 1 2024
-->

<?php include('header.php') ?>

<body class="bg-secondary"> <!-- gray background -->

<!--Page header with white background and centered text -->
<div class="card-header py-3 text-center text-light m-5 my-3">
    <h1>Add a Fuel Record</h1>
</div>
<!-- The outer container keeps the two inner containers in sync viz. width -->
<div class="container px-5">
    <div class="container px-lg-3 py-0 bg-light">
        <!-- The form creates a POST array and sends to add_vehicle.php -->
        <form action="add_fuel_db.php" method="post"
              id="add_fuel_form">
            <!-- The form is divided into two columns for ease of use -->
            <div class="row py-5 mx-5 justify-content-center">
                    <!-- Each input box creates a variable with a name that matches the database columns (for convenience)-->
                    <div class="mb-3">
                        <label for="date" class="form-label">Date:</label>
                        <input type="text" class="form-control" id="date" placeholder="Enter date" name="fuel_date">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="vehicle" class="form-label">Vehicle ID:</label>
                        <input type="text" class="form-control" id="vehicle" placeholder="Vehicle" name="vehicle_id">
                    </div>
                    <div class="mb-3">
                        <label for="source" class="form-label">Source:</label>
                        <input type="text" class="form-control" id="source" placeholder="Enter fuel source" name="fuel_source">
                    </div>
                    <div class="mb-3">
                        <label for="gallons" class="form-label">Gallons:</label>
                        <input type="text" class="form-control" id="gallons" placeholder="Enter gallons purchased" name="fuel_gallons">
                    </div>
                    <div class="mb-3">
                        <label for="cost" class="form-label">Cost:</label>
                        <input type="text" class="form-control" id="cost" placeholder="Enter fuel cost per gallon" name="fuel_cost">
                    </div>
                    <div class="mb-3">
                        <label for="mileage" class="form-label">Mileage:</label>
                        <input type="text" class="form-control" id="mileage" placeholder="Enter mileage since last fill" name="fuel_mileage">
                    </div>
                    <!-- Submit button triggers the POST method and sending of data to add_vehicle.php -->
                    <button type="submit" class="btn btn-primary" value="add fuel">Submit</button>
<!--                </div>-->
            </div>
        </form>

    </div>
</div>
</body>
</html>