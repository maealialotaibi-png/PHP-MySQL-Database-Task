<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $id = intval($_POST["id"]);

    $stmt = $conn->prepare(
        "UPDATE users SET status = IF(status = 0, 1, 0) WHERE id = ?"
    );

    $stmt->bind_param("i", $id);
    $stmt->execute();

    $stmt = $conn->prepare(
        "SELECT status FROM users WHERE id = ?"
    );

    $stmt->bind_param("i", $id);
    $stmt->execute();

    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    echo $row["status"];

    $stmt->close();
}

$conn->close();
?>
