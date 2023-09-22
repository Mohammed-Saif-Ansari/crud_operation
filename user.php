<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $particular = $_POST['particular'];
    $amount = $_POST['amount'];
    $work_status = $_POST['work_status'];
    $payment_status = $_POST['payment_status'];
    $due_date = $_POST['due_date'];
    $payment_received_date = $_POST['payment_received_date'];

    // Ensure that the $conn variable is properly defined in your 'connect.php' file

    $sql = "INSERT INTO `crud` (particular, amount, work_status, payment_status, due_date, payment_received_date) 
            VALUES ('$particular', '$amount', '$work_status', '$payment_status', '$due_date', '$payment_received_date')";

    if ($con->query($sql) === TRUE) {
        // echo "Data inserted successfully";
        header('location:display.php');

    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    // Close the database connection
    $con->close();
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label for="particular" class="form-label">Particular</label>
                <input type="text" class="form-control" id="particular" name="particular" required>
            </div>
            <!-- <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" autocomplete="off">
            </div> -->
            <div class="mb-3">
                <label for="amount" class="form-label">Amount</label>
                <input type="number" class="form-control" id="amount" name="amount" required>
            </div>
            <div class="mb-3">
                <label for="work_status" class="form-label">Work Status</label>
                <input type="text" class="form-control" id="work_status" name="work_status" required>
            </div>
            <div class="mb-3">
                <label for="payment_status" class="form-label">Payment Status</label>
                <input type="text" class="form-control" id="payment_status" name="payment_status">
            </div>
            <div class="mb-3">
                <label for="due_date" class="form-label">Due Date</label>
                <input type="date" class="form-control" id="due_date" name="due_date">
            </div>
            <div class="mb-3">
                <label for="payment_received_date" class="form-label">Payment Received Date</label>
                <input type="date" class="form-control" id="payment_received_date" name="payment_received_date">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>


  </body>
</html>