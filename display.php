<?php
include 'connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Opertaion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add User</a></button>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl No</th>
      <th scope="col">Particalar</th>
      <th scope="col">Amount</th>
      <th scope="col">Work Status</th>
      <th scope="col">Payment Status</th>
      <th scope="col">Due Date</th>
      <th scope="col">Payment Recieved Date</th>
      <th scope="col">Created At</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  <?php
    $sql = "SELECT * FROM `crud`";
    $result=mysqli_query($con,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $particular=$row['particular'];
            $amount=$row['amount'];
            $work_status=$row['work_status'];
            $payment_status=$row['payment_status'];
            $due_date=$row['due_date'];
            $payment_received_date=$row['payment_received_date'];
            $created_at=$row['created_at'];

            echo '
                <tr>
                    <td>'.$id.'</td>
                    <td>'.$particular.'</td>
                    <td>'.$amount.'</td>
                    <td>'.$work_status.'</td>
                    <td>'.$payment_status.'</td>
                    <td>'.$due_date.'</td>
                    <td>'.$payment_received_date.'</td>
                    <td>'.$created_at.'</td>
                    <td>
                        <button class="btn btn-primary"><a class="text-light" href="update.php">Update</a></button>
                        <button class="btn btn-danger"><a class="text-light" href="delete.php?delteteid='.$id.'">Delete</a></button>
                    </td>
                </tr> ';  
        }
    }
  ?>
   

  </tbody>
</table>
    </div>     
</body>
</html>