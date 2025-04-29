<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<?php
include("config.php");


?>
<body>
    <div class="container">
    <table class="table table-striped table-hover">
<tr>
    <th>S.No</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Center</th>
    <th>Batch Code</th>
    <th>Description</th>
</tr>
    </div>


     <?php
     $sql = "SELECT * FROM `feedbackfoam`";

      $result = mysqli_query($conn, $sql);
      

      foreach($result as $row)
      {?>
      
  <tr>

  
  <td><?php echo $row['stu_id']; ?></td>
   
    <td><?php echo $row['stu_name']; ?></td>
    <td><?php echo $row['stu_email']; ?></td>
    <td><?php echo $row['stu_phone']; ?></td>
    <td><?php echo $row['stu_center']; ?></td>
    <td><?php echo $row['stu_batch']; ?></td>
    <td><?php echo $row['stu_desciption']; ?></td>
   <td><a href="updat.php?id=<?php echo$row['stu_id']?>">Edit</a></td>
   <td><a href="delete.php?id=<?php echo$row['stu_id']?>">Delete</a></td>
   
  </tr>

     



      <?php }



     ?>

    
    




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js" integrity="sha384-VQqxDN0EQCkWoxt/0vsQvZswzTHUVOImccYmSyhJTp7kGtPed0Qcx8rK9h9YEgx+" crossorigin="anonymous"></script>

</body>
</html>

