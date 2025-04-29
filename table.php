<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include_once("config.php"); ?>
</head>
<body>




    <body style="font-family: Arial, sans-serif; padding: 40px; background-color: #f4f4f4;">

  <h2 style="text-align: center; color: #333;">Feedback Foam</h2>

  <form action="" method="post" style="background: #fff; padding: 25px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); max-width: 800px; margin: auto;">
    <table style="width: 100%; border-collapse: collapse;">
    <input type="hidden" name="stu_id" value="<?php echo $row['stu_id']; ?>">

<table style="width: 100%; border-collapse: collapse;">
  
      
      
      <tr>
        <td style="padding: 12px; vertical-align: top;">
          <label for="studentName" style="font-weight: bold; color: #333;">Student Name:</label>
        </td>
        <td style="padding: 12px; vertical-align: top;">
          <input type="text" id="studentName" name="studentName" style="width: 100%; padding: 8px 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 14px;">
        </td>
        <td style="padding: 12px; vertical-align: top;">
          <label for="studentEmail" style="font-weight: bold; color: #333;">Student Email:</label>
        </td>
        <td style="padding: 12px; vertical-align: top;">
          <input type="email" id="studentEmail" name="studentEmail" style="width: 100%; padding: 8px 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 14px;">
        </td>
      </tr>

      
      <tr>
        <td style="padding: 12px; vertical-align: top;">
          <label for="studentPhone" style="font-weight: bold; color: #333;">Student Phone Number:</label>
        </td>
        <td style="padding: 12px; vertical-align: top;">
          <input type="tel" id="studentPhone" name="studentPhone" style="width: 100%; padding: 8px 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 14px;">
        </td>
        <td style="padding: 12px; vertical-align: top;">
          <label for="centerName" style="font-weight: bold; color: #333;">Center Name:</label>
        </td>
        <td style="padding: 12px; vertical-align: top;">
          <input type="text" id="centerName" name="centerName" style="width: 100%; padding: 8px 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 14px;">
        </td>
      </tr>

    
      <tr>
        <td style="padding: 12px; vertical-align: top;">
          <label for="batchCode" style="font-weight: bold; color: #333;">Batch Code:</label>
        </td>
        <td colspan="3" style="padding: 12px; vertical-align: top;">
          <input type="text" id="batchCode" name="batchCode" style="width: 30%; padding: 8px 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 14px;">
        </td>
      </tr>

      

     
      <tr>
        <td style="padding: 12px; vertical-align: top;">
          <label for="description" style="font-weight: bold; color: #333;">Add Description:</label>
        </td>
        <td colspan="3" style="padding: 12px; vertical-align: top;">
          <textarea id="description" name="description" rows="6" cols="70" placeholder="Write your feedback here..." style="width: 100%; padding: 8px 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 14px; resize: vertical;"></textarea>
        </td>
      </tr>

      
      <tr>
        <td colspan="4" style="padding: 12px; text-align: left;">
          <button type="submit" style="padding: 10px 20px; background-color: #007BFF; color: white; border: none; border-radius: 6px; font-size: 16px; cursor: pointer;">Submit</button>
        </td>
      </tr>
    </table>
  </form>

  


</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $stu_id = $_POST['stu_id'];
    $studentname  = $_POST['studentName'];
    $studentemail = $_POST['studentEmail'];
    $studentphone = $_POST['studentPhone'];
    $centername   = $_POST['centerName'];
    $batchcode    = $_POST['batchCode'];
    $description  = $_POST['description'];

    $sql = "INSERT INTO `feedbackfoam` 
    (`stu_name`, `stu_email`, `stu_phone`, `stu_center`, `stu_batch`, `stu_desciption`)
    VALUES 
    ('$studentname','$studentemail','$studentphone','$centername','$batchcode','$description')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
      echo "<script>
      ('Feedback added successfully');
      window.location.href = 'view.php';
  </script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }
}
?>


