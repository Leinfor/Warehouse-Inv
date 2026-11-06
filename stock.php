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
        <h2>Please detail the amount of supply or hazardous materials that are being transported in and out to this terminal. Thank You!</h2>
        <section class="stock-in section">
        <h3>STOCK-IN</h3>
        <form action="create.php" method="post">
            <input type="text" name="firstname" placeholder="ENTER PRODUCT"><br><br>
            <input type="text" name="lastname" placeholder="ENTER QUANTITY"><br><br>
            <input type="text" name="email" placeholder="ENTER SUPPLIER"><br><br>
            <label>ENTER DATE RECEIVED: </label>
            <input type="datetime-local" name="date"><br><br>
            <input type="submit" value="Save">
        </form>
        <div class="table-container"></div>
        <?php
            $con = mysqli_connect ("localhost", "root" , "" , "my_students");
            $result = mysqli_query($con, "SELECT * FROM students");
        ?>
        <table style="border: solid;">
            <th>ID</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Supplier</th>
            <th>Date</th>
            <th>Change</th>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['firstname']; ?></td>
            <td><?php echo $row['lastname']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>

            </td>
        </tr>
        <?php } ?>
        </table>
        </div>
    </section>
    <section class="stock-section">
        <h3>STOCK-OUT</h3>
        <div class="table-container">
        <?php
            $con = mysqli_connect ("localhost", "root" , "" , "my_students");
            $result = mysqli_query($con, "SELECT * FROM students");
        ?>
        <table style="border: solid;">
            <th>ID</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Supplier</th>
            <th>Date</th>
            <th>Confirm?</th>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['firstname']; ?></td>
            <td><?php echo $row['lastname']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td>
                <a href="create3.php?id=<?php echo $row['id']; ?>" >Ship Out</a>
            </td>
        </tr>
        <?php } ?>
    </body>
</table>
</div>
</section>
</html>