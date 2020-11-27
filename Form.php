<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<form method="POST" action="search.php">
<a href="form.php"><h1> List of Medicines </h1></a>
                    <input type="text" id="sname" name="sname"/><br><br>
                    <select id="medico" name = "medico" required>
                                <option value="Covid safety products">----</option>
                                <option value="Groceries">Personal</option>
                                <option value="Dettol">Work</option>
                                <option value="Others">Others</option>
                            </select>
                    <button name="sub1" id="sub1">Search / List</button>
</body>
</html>