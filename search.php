<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
	<?php
        if(isset($_POST['sub1'])){
            require('DB_Connect.php');
            $tname = $_POST["sname"];
            $cat = $_POST['medico'];
            if ($cat=="----"){
                $sql = "SELECT * FROM `Search_List` WHERE `NAME` LIKE '%$tname%'";
            }
            else if($cat=="----" && $tname=""){
                $sql = "SELECT * FROM `Search_List`";
            }
            else{
                $sql = "SELECT * FROM `Search_List` WHERE `NAME` LIKE '%$tname%' AND `CATEGORY`='$cat'";
            }
            $result = mysqli_query($connection,$sql);
            if ($result->num_rows > 0) {
                echo "<a href='form.php'><h1> List of tasks </h1></a><ol>";
            // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "
                        <li>
                            <input type='checkbox'>
                            <label>" . $row["NAME"]. "</label>
                            <span>" . $row["CATEGORY"]. " Task</span>
                            <span>" . $row["DATE"]. "</span>
                            <span>" . $row["DESCRIPTION"]. "</span><br />
                        </li>";
            }
            echo "</ol>";
            } 
            else {
                echo "0 results";
            }
        }
?>
</body>
</html>