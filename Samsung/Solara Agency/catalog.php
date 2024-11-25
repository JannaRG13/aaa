<?php
include('db.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Catalog</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<header>
  <img style="height: 100%; width: 30%;" src="janna/logo.png" alt="">
</header>
<body>
<ul>
            <li><a href="administrador/index.html">Inicio</a></li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Mobiles</a>
                <div class="dropdown-content">
                <a href="smartphones.html">Smartphones</a>
                <a href="tablets.html">Tablets</a>
                <a href="watches.html">Watches</a>
                <a href="buds.html">Galaxy Buds</a>
                </div>
            </li>
            <li><a href="administrador/televisiones.html">TV's</a></li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Linea Blanca</a>
                <div class="dropdown-content">
                <a href="administrador/refrigeradores.html">Refrigeradores</a>
                <a href="administrador/lavadoras.html">Lavadoras</a>
                <a href="administrador/electrodomesticos.html">Electrodomesicos</a>
                </div>
            </li>
            <li><a href="accesorios.html">Accesorios</a></li>
            <li style="float: right;"><a href="../catalog.php">Catalogo de venta</a></li>
            </ul>
            <br><br><br>
    <div class="login-box">
        <h2>Product Catalog</h2>
        <table>
            <tr>
                <th>Product Image</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Stock</th>
            </tr>
            <?php
            $sql = "SELECT * FROM products";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td><img src='" . $row['image'] . "' alt='" . $row['name'] . "' width='50' height='50'></td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['price'] . "</td>";
                    echo "<td>" . $row['stock'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No products found</td></tr>";
            }
            ?>
        </table>
        <hr color="black">
        <br>
        <a href="cartier/paginadeadmin.html" class="btn">Regresar</a>   <a href="register_product.php" class="btn">Agregar productos</a>
    </div>
</body>
</html>