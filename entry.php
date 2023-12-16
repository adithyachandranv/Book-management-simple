<style>
    #main {
        display: flex;
        align-items: center;
        justify-content: center;
        padding-top: 220px;

    }

    #success {
        font-size: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: poppins;
        border-radius: 10px;
        background-color: brown;
        padding: 100px;
        height: 50px;
        width: 410px;
        color: white;
    }
</style>

<?php
$conn = mysqli_connect("localhost", "root", "", "book");
if (!$conn) {
    echo "connection not";
} else {
    echo "<div id=main>";
    echo "<div id=success>";
    echo "Successfully uploded data!";
    echo "</div";
    echo "</div";
}

$name = $_POST["book-name"];
$acc = $_POST["acc_no"];
$author = $_POST["author"];

$sql = "INSERT INTO allbooks(name,acc_no,author) VALUES('" . $name . "','" . $acc . "','" . $author . "')";

$result = mysqli_query($conn, $sql);
?>