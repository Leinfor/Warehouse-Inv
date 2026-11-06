<html>
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
        <form action="create.php" method="post">
            <input type="text" name="firstname" placeholder="ENTER PRODUCT"><br><br>
            <input type="text" name="lastname" placeholder="ENTER QUANTITY"><br><br>
            <input type="text" name="email" placeholder="ENTER SUPPLIER"><br><br>
            <label>ENTER DATE RECEIVED: </label>
            <input type="datetime-local" name="date"><br><br>
            <input type="submit" value="Save">
        </form>