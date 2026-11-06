<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Black Mesa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>
<html>
    <body>
        <nav>
            <a href="index.php">HOME</a>
            <a href="inventlog.php">INVENTORY</a>
            <a href="stock.php">STOCK PAGE</a>
            <a href="supplier.php">CATEGORIES & SUPPLIERS PAGE</a>
        </nav>
<?php
        $con = mysqli_connect ("localhost", "root" , "" , "my_students");

    $firstname =$_POST["firstname"]??"";
    $lastname =$_POST["lastname"]??"";
    $email =$_POST["email"]??"";
    $date =$_POST["date"]??"";

    $result = mysqli_query($con, "SELECT * FROM students");

?>
    <h3>Managed Items and Inventory </h3>
         <div class="table-container">
        <table style="border: solid;">
            <th>ID</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Supplier</th>
            <th>Status</th>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <?php $lastname = (int) $row['lastname'];


            if ($lastname == 0) {
                $status = "Out Of Stock";
                $class = "out";
            } elseif ($lastname <= 5) {
                $status = "Low Stock";
                $class = "low";
            } else {
                $status = "In Stock";
                $class = "in";
            }
            ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['firstname']; ?></td>
            <td><?php echo $row['lastname']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $status; ?></td>
        </tr>
        <?php } ?>
        </table>
        </div>
<?php
        $con = mysqli_connect ("localhost", "root" , "" , "my_students");

    $id = $_POST["id"]??"";
    $firstname =$_POST["firstname"]??"";
    $lastname =$_POST["lastname"]??"";
    $email =$_POST["email"]??"";
    $date =$_POST["date"]??"";

    $result = mysqli_query($con, "SELECT * FROM stockout");

?>
         <h3>Shipped Out </h3>
         <div class="table-container">
        <table style="border: solid;">
            <th>ID</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Supplier</th>
            <th>Date</th>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <?php $lastname = (int) $row['lastname'];
    
            ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['firstname']; ?></td>
            <td><?php echo $row['lastname']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['date']; ?></td>
        </tr>
        <?php } ?>
        </table>
        </div>
    </body>
</html>