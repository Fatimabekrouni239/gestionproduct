<style>
body{
    background-image:url("../image/bg.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center ;
    background-attachment: fixed
}
</style>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $targetDirectory = "uploads/";
    $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
        // Image uploaded successfully, insert into the database
        $mysqli = new mysqli("localhost", "username", "password", "your_database");

        $imagePath = $targetFile;
        $query = "INSERT INTO images (image_path) VALUES ('$imagePath')";
        $mysqli->query($query);

        $mysqli->close();
        echo "Image uploaded and reference inserted into the database.";
    } else {
        echo "Error uploading image.";
    }
}
?>
<center style="">
    <h1 style="background-color:#DE847B; width:500px;"> bienvenu Ajouter les produit  svp </h1>
    <form action="affichage.php" method="post">
        <table>
                <tr>
                    <td> NOM :</td>
                    <td> <input type="text" name="nom" id=""></td>
                </tr>
                <tr>
                    <td> prix</td>
                    <td> <input type="text" name="prix" id=""></td>
                </tr>
                <tr>
                    <td>promotion</td>
                    <td> <input type="text" name="promotion" id=""></td>
                </tr>
                <tr>
                    <td> Image</td>
                    <td> <input type="file" name="fil[]" accept=".jpg,.jpeg,.png" required multipe id=""> </td>
                </tr>
                <tr>
                <td class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" style="background-color:#DE847B" type="submit">Envoyer</button>
                <button class="btn btn-primary"  style="background-color:#DE847B"type="rest">Annuler</button>
</td>
                </tr>
        </table>
    </form>
</center>
