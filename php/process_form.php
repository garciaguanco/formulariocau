<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to your MySQL database (replace these variables with your database credentials)
    $servername = "your_server_name";
    $username = "your_username";
    $password = "your_password";
    $dbname = "your_database_name";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Extract form data
    $apellidos = $_POST["apellidos"];
    $nombres = $_POST["nombres"];
    // Add more fields as needed

    // SQL query to insert data into the database (replace table_name with your table name)
    $sql = "INSERT INTO table_name (apellidos, nombres) VALUES ('$apellidos', '$nombres')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
