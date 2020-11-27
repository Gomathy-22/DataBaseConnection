<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Search Medicines</title>
    <link rel="stylesheet" href="styles.css" />
</head>

<body>
    <header>
        <div>
            <h1>Search Medicines</h1>
        </div>
    </header>
    <?php
        if(isset($_POST['sub'])){
        require('db_connect.php');
        $tname = $_POST["task"];
        $des = $_POST['des'];
        $date = $_POST['date'];
        $category = $_POST['category'];
        $date=date("Y-m-d",strtotime($date));
        $sql = "INSERT INTO `Search_list` (`NAME`,`DESCRIPTION`,`DATE`,`CATEGORY`) VALUES ('$tname','$des','$date','$category');";
        if ( mysqli_query($connection,$sql)=== TRUE) {
            echo "<script type='text/javascript'>alert('Item Found!!')';</script>";
        } else {
            echo "Error: " . $sql . "<br>";
        }
        }

    ?>
    <div class="row">
        <div class="col1">
            <div class="list-area">
                <div>
                    <form method="POST">
                    <h2>Search for your medicines</h2>
                        <input type="text" id="Medicines" name = "Medicines" placeholder="Medicines Name"><br><br>
                        <textarea placeholder="Description" id="des" name = "des" required></textarea><br><br>
                        <input type="date" id="date" name = "date"><br><br>
                        <select id="category" name = "category" required>
                            <option value="Name">Medicines Name</option>
                            <option value="Price">Price</option>
                            <option value="Quantity">Quantity</option>
                        </select>
                    </form>
                </div>
            </div>
        </div>
        <div class="col2">
            <div>
            
                <iframe src="Form.php"></iframe>
            </div>
        </div>
    </div>
</body>
</html>