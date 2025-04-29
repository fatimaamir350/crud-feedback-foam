<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include ("config.php");
    ?>
</head>
<body>
    <?php
    if(isset($_GET['id'])){
        $id=$_GET['id'];

        $sql= "delete from `feedbackfoam` where stu_id=$id";
        $result = mysqli_query($conn,$sql);
        if ($result) {
            echo "<script>
            ('updated added successfully');
            window.location.href = 'view.php';
        </script>";
          } else {
              echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
          }
    }
    ?>
</body>
</html>