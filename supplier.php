<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Black Mesa</title>
    <link rel="stylesheet" href="style.css">
</head>
    <body>
        <nav>
            <a href="index.php">HOME</a>
            <a href="inventlog.php">INVENTORY</a>
            <a href="stock.php">STOCK PAGE</a>
            <a href="supplier.php">CATEGORIES & SUPPLIERS PAGE</a>
        </nav>
        <form action="create2.php" method="post">
            <input type="text" name="supp_name" placeholder="SUPPLIER NAME"><br><br>
            <input type="text" name="contact" placeholder="CONTACT NO."><br><br>
            <input type="text" name="product_supp" placeholder="PRODUCT SUPPLIED"><br><br>
            <input type="submit" value="Save">
        </form>
        <?php
            $con = mysqli_connect ("localhost", "root" , "" , "my_students");
            $result = mysqli_query($con, "SELECT * FROM supplier");
        ?>
        <table style="border: solid;">
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['supp_name']; ?></td>
            <td><?php echo $row['contact']; ?></td>
            <td><?php echo $row['product_supp']; ?></td>
            <td>
                <a href="edit2.php?id=<?php echo $row['id']; ?>">Edit</a>    
                <a href="delete2.php?id=<?php echo $row['id']; ?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </body>
</html>