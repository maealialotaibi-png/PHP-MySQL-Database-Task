<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = trim($_POST["name"]);
    $age = intval($_POST["age"]);

    if ($name !== "" && $age > 0) {

        $stmt = $conn->prepare(
            "INSERT INTO users (name, age, status) VALUES (?, ?, 0)"
        );

        $stmt->bind_param("si", $name, $age);
        $stmt->execute();

        echo "success";

        $stmt->close();
    } else {
        echo "invalid";
    }
}

$conn->close();
?>
