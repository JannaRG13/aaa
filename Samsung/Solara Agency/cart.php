<?php
include('db.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div style="margin-top: 100px; margin-left:480px;" class="login-box">
        <h2>Carrito</h2>
        <table>
            <tr>
                <th>Product Name</th>
                <th>Price</th>
                <th>Stock</th>
            </tr>
            <?php
            $sql = "SELECT * FROM products";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<tr><td colspan='3'>Vacio</td></tr>";
            } else {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['price'] . "</td>";
                    echo "<td>" . $row['stock'] . "</td>";
                    echo "</tr>";
                }
                
            }
            ?>
        </table>
        <a href="janna/index.html" class="btn">Regresar</a>
    </div>
</body>
</html>