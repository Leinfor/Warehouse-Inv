<?php
include("inventory.php");
?>
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
        <h1>BLACK MESA CONTAINMENT</h1>
    <h2>The Black Mesa Facility features extensive warehouse, logistic, and storage infrastructure designed to handle everything from standard bureaucratic office supplies to classified military ordinance and hazardous items.</h2>

    <h3>Logistic & Warehousing:</h3>
    <p>This division manages all storage facilities across the complex-from high-security vaults to smaller, specialized depots. They oversee inventory organization, material tracking, and safe handling procedures.</p>
    <h3>Hazard Handling & Containment:</h3>
    <p>A specialized unit responsible for bulk storage and transport of dangerous, toxic, or radioactive materials, enforcing strict safety protocols and spill containment.</p>
    <h3>Transit Integration:</h3>
    <p> Sealed warehouse doors and internal tunnels directly link into the Black Mesa Transit System or flat-rail cargo lines for rapid bulk transport across sectors.</p>
    <h2>Total Items: <?php echo $totalItems; ?></h2>
    <h2>Total Added: <?php echo $totalAdded; ?></h2>
    </body>
</html>