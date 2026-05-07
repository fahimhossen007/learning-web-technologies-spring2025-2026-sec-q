<?php
include 'db.php';

$query = $_GET['query'];
$sql = "SELECT * FROM employees WHERE name LIKE '%$query%'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
            <td>{$row['name']}</td>
            <td>{$row['contact_no']}</td>
            <td>{$row['username']}</td>
            <td>
                <a href='update.php?id={$row['id']}'>Update</a> | 
                <a href='delete.php?id={$row['id']}'>Delete</a>
            </td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='4'>No employee found</td></tr>";
}
?>