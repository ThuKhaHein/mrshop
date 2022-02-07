<?php 
include('db.php');
?>
<?php 
if(isset($_GET['id']))
{
  $main_id = $_GET['id'];
  $sql_update = mysqli_query($con,"UPDATE order_product SET status=1 WHERE id='$main_id'");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/own_style.css">
<script src="https://kit.fontawesome.com/200b5244f2.js" crossorigin="anonymous"></script>

    <title></title>
  </head>
  <body>

    <div class="container" id="table1">
      <div class="row">
        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">S.no</th>
      <th scope="col">Equipment Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Full Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Order date</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $sr_no=1;
    $sql_get = mysqli_query($con, "SELECT * FROM order_product WHERE status=1");
    while($main_result = mysqli_fetch_assoc($sql_get)) :?>
    <tr>
      <th scope="row"><?php echo $sr_no++; ?></th>
      <td><?php echo $main_result['name']; ?></td>
      <td><?php echo $main_result['price']; ?></td>
      <td><?php echo $main_result['quantity']; ?></td>
      <td><?php echo $main_result['fname']; ?></td>
      <td><?php echo $main_result['phone']; ?></td>
      <td><?php echo $main_result['address']; ?></td>
      <td><?php echo $main_result['cr_date']; ?></td>
      <td><a href="delete.php?id=<?php echo $main_result['id'];?>" class="text-danger"><i class="fas fa-trash-alt"></i></a></td>
    </tr>
  <?php endwhile ?>
  </tbody>
</table>
      </div>
    </div>

   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>