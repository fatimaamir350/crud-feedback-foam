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
    
</body>
</html>


<?php


$id = $_GET['id'];
$sql = "SELECT * FROM `feedbackfoam` where stu_id=$id";
$result = mysqli_query($conn, $sql);

foreach($result as $row)
{?>






<td><?php echo $row['stu_id'];?></td>
<td><?php echo $row['stu_name']; ?></td>
<td><?php echo $row['stu_email']; ?></td>
<td><?php echo $row['stu_phone']; ?></td>
<td><?php echo $row['stu_center']; ?></td>
<td><?php echo $row['stu_batch']; ?></td>
<td><?php echo $row['stu_desciption']; ?></td>









<?php }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $studentname  = $_POST['studentName'];
    $studentemail = $_POST['studentEmail'];
    $studentphone = $_POST['studentPhone'];
    $centername   = $_POST['centerName'];
    $batchcode    = $_POST['batchCode'];
    $description  = $_POST['description'];

    $sql = "update `feedbackfoam` set stu_name='$studentname',stu_email='$studentemail',stu_phone='$studentphone',stu_center='$centername',
    stu_batch='$batchcode',stu_desciption='$description' where stu_id=$id";

    $result = mysqli_query($conn, $sql);

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


<body style="font-family: Arial, sans-serif; padding: 40px; background-color: #f4f4f4;">

<h2 style="text-align: center; color: #333;">Update Form</h2>

<form action="" method="post" style="background: #fff; padding: 25px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); max-width: 800px; margin: auto;">
  <table style="width: 100%; border-collapse: collapse;">
    <input type="hidden" name="stu_id" value="<?php echo $row['stu_id']; ?>">

    <tr>
      <td style="padding: 12px; vertical-align: top;">
        <label for="studentName" style="font-weight: bold; color: #333;">Student Name:</label>
      </td>
      <td style="padding: 12px; vertical-align: top;">
        <input type="text" id="studentName" name="studentName" value="<?php echo $row['stu_name']; ?>" style="width: 100%; padding: 8px 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 14px;">
      </td>
      <td style="padding: 12px; vertical-align: top;">
        <label for="studentEmail" style="font-weight: bold; color: #333;">Student Email:</label>
      </td>
      <td style="padding: 12px; vertical-align: top;">
        <input type="email" id="studentEmail" name="studentEmail" value="<?php echo $row['stu_email']; ?>" style="width: 100%; padding: 8px 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 14px;">
      </td>
    </tr>

    <tr>
      <td style="padding: 12px; vertical-align: top;">
        <label for="studentPhone" style="font-weight: bold; color: #333;">Student Phone Number:</label>
      </td>
      <td style="padding: 12px; vertical-align: top;">
        <input type="tel" id="studentPhone" name="studentPhone" value="<?php echo $row['stu_phone']; ?>" style="width: 100%; padding: 8px 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 14px;">
      </td>
      <td style="padding: 12px; vertical-align: top;">
        <label for="centerName" style="font-weight: bold; color: #333;">Center Name:</label>
      </td>
      <td style="padding: 12px; vertical-align: top;">
        <input type="text" id="centerName" name="centerName" value="<?php echo $row['stu_center']; ?>" style="width: 100%; padding: 8px 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 14px;">
      </td>
    </tr>

    <tr>
      <td style="padding: 12px; vertical-align: top;">
        <label for="batchCode" style="font-weight: bold; color: #333;">Batch Code:</label>
      </td>
      <td colspan="3" style="padding: 12px; vertical-align: top;">
        <input type="text" id="batchCode" name="batchCode" value="<?php echo $row['stu_batch']; ?>" style="width: 30%; padding: 8px 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 14px;">
      </td>
    </tr>

    <tr>
      <td style="padding: 12px; vertical-align: top;">
        <label for="description" style="font-weight: bold; color: #333;">Add Description:</label>
      </td>
      <td colspan="3" style="padding: 12px; vertical-align: top;">
        <textarea id="description" name="description" rows="6" cols="70" placeholder="Write your feedback here..." style="width: 100%; padding: 8px 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 14px; resize: vertical;"><?php echo $row['stu_desciption']; ?></textarea>
      </td>
    </tr>

    <tr>
      <td colspan="4" style="padding: 12px; text-align: left;">
        <button type="submit" style="padding: 10px 20px; background-color: #007BFF; color: white; border: none; border-radius: 6px; font-size: 16px; cursor: pointer;">Update</button>
      </td>
    </tr>
  </table>
</form>

</body>



