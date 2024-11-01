<?php

//PHP file with code that takes the input on registration.php 
// and uses it to create a new user in the database.


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "RecZone";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted name from the form input

    try {

        if ($_POST['psw'] == $_POST['confirmpsw']){

            // Create a new PDO instance (connect to the database)
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // Set PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare the SQL statement with a placeholder
        $sql = "INSERT INTO User (FirstName, LastName, Email, Grade, DOB, Password, Gender) VALUES (:first, :last, :email, :grade, :dob, :psw, :gender)";

        // Prepare the statement
        $stmt = $conn->prepare($sql);

        // Bind the form input to the prepared statement
        $stmt->bindParam(':first', $_POST['fname']);
        $stmt->bindParam(':last', $_POST['lname']);
        $stmt->bindParam(':email', $_POST['email']);
        $stmt->bindParam(':grade', $_POST['grade']);
        $stmt->bindParam(':dob', $_POST['DoB']);
        $stmt->bindParam(':psw', $_POST['psw']);
        $stmt->bindParam(':gender', $_POST['gender']);

        // Execute the statement
        $stmt->execute();

        echo "New user added successfully";
        } else {
            echo "passwords do not match.";
        }
        
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    // Close the connection
    $conn = null;

    header("Location: ../index.php");
    exit;
}
?>
