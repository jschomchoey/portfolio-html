<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    echo "<h1>Form Submitted Successfully</h1>";
    echo "<p>Name: $name</p>";
} else {
    echo "<h1>Error: Form not submitted properly.</h1>";
}
?>
