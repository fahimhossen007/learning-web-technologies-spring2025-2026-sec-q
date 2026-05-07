<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <script src="script.js"></script>
</head>
<body>
    <h2>Admin Dashboard - Employee List</h2>
    
    <input type="text" id="searchBox" onkeyup="searchEmployee()" placeholder="Search employee by name...">
    <br><br>

    <table border="1" id="employeeTable">
        <tr>
            <th>Name</th>
            <th>Contact No</th>
            <th>Username</th>
            <th>Action</th>
        </tr>
        <tbody id="tableBody">
            <?php
            $result = mysqli_query($conn, "SELECT * FROM employees");
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
            ?>
        </tbody>
    </table>
</body>
</html>