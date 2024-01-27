<?php

include 'header.php';
include 'navbar.php';
$sql = "SELECT * FROM product";
$result = mysqli_query($connection, $sql);
var_dump($result)
?>
<div class="container mt-4">
    <h2>Product List</h2>

    <div class="row">
        <?php
    while ($row = mysqli_fetch_assoc($result)) 
    echo '<div class="col-md-4 mb-4">';
    echo '<div class="card">';
    echo '<img src="images/' . $row['image_path'] . '" class="card-img-top" alt="' . $row['name'] . '">';
    echo '<div class="card-body">';
    echo '<h5 class="card-title">' . $row['name'] . '</h5>';
    echo '<p class="card-text">' . $row['description'] . '</p>';
    echo '<p class="card-text"><strong>Price:</strong>';
    echo $row['promotion'] ? '<span class="text-danger">' . $row['price'] . '€ (Promo)</span>' : $row['price'] . '€';
    echo '</p>';
    echo '<a href="#" class="btn btn-primary">Buy Now</a>';
    echo '</div></div></div>';
   ?>
</div>

<?php include 'footer.php'; ?>