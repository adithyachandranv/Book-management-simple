<?php
$conn = mysqli_connect("localhost", "root", "", "book");
if (!$conn) {
    echo "connection not";
} else {
    echo "<div id=main>";
    echo "<div id=success>";
    echo "Connection established";
    echo "</div>";
    echo "</div>";
}

$request = $_POST['request'];
$sql = "SELECT * FROM allbooks WHERE name = '$request'";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row["name"];
        echo $row["acc_no"];
    }
}
?>
