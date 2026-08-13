<?php
include 'db.php';

$result = $conn->query("SELECT * FROM users ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Database</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>User Database</h1>

    <form id="userForm">
        <input type="text" id="name" name="name" placeholder="Name" required>

        <input type="number" id="age" name="age" placeholder="Age" required>

        <button type="submit">Submit</button>
    </form>

    <p id="message"></p>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody id="userTable">
            <?php while ($row = $result->fetch_assoc()): ?>

                <tr id="row-<?php echo $row['id']; ?>">
                    <td><?php echo $row['id']; ?></td>

                    <td><?php echo htmlspecialchars($row['name']); ?></td>

                    <td><?php echo $row['age']; ?></td>

                    <td class="status">
                        <?php echo $row['status']; ?>
                    </td>

                    <td>
                        <button
                            class="toggle-btn"
                            onclick="toggleStatus(<?php echo $row['id']; ?>, this)">
                            Toggle
                        </button>
                    </td>
                </tr>

            <?php endwhile; ?>
        </tbody>
    </table>

</div>

<script src="script.js"></script>

</body>
</html>
