
<?php
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "observation_tool";

// Create connection
$conn = new mysqli("localhost", "root", "", "observation_tool");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Capture form data safely
$teacher = $_POST['teacher_name'] ?? '';
$observer = $_POST['observer_name'] ?? '';
$grade = $_POST['grade_section'] ?? '';
$subject = $_POST['subject'] ?? '';
$topic_discussed = $_POST['topic_discussed'] ?? '';
$datetime = $_POST['observation_date'] ?? '';
$cat1 = $_POST['cat1'] ?? 0;
$cat2 = $_POST['cat2'] ?? 0;
$cat3 = $_POST['cat3'] ?? 0;
$cat4 = $_POST['cat4'] ?? 0;   
$comments = $_POST['comments'] ?? 0;
$total = $_POST['total'] ?? 0;


// Insert data
$sql = "INSERT INTO observations (teacher_name, observer_name, grade_section, observation_date, cat1, cat2, cat3, cat4, comments, total)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssddddss", $teacher, $observer, $grade, $datetime, $cat1, $cat2, $cat3, $cat4, $comments, $total);

if ($stmt->execute()) {
    echo "Review your ratings and comments below:";
    echo "<br>Teacher Name: " . htmlspecialchars($teacher);
    echo "<br>Observer Name: " . htmlspecialchars($observer);   
    echo "<br>Grade Section: " . htmlspecialchars($grade);
    echo "<br>Observation Date: " . htmlspecialchars($datetime);    
    echo "<br>Category 1: " . htmlspecialchars($cat1);
    echo "<br>Category 2: " . htmlspecialchars($cat2);      
    echo "<br>Category 3: " . htmlspecialchars($cat3);
    echo "<br>Category 4: " . htmlspecialchars($cat4);
    echo "<br>Comments: " . htmlspecialchars($comments);
    echo "<br>Total: " . htmlspecialchars($total);
    echo "<br>Thank you for your feedback!";
    echo "<br>Click <a href='index.html'>here</a> to go back to the form.<br>";
    echo "✔️ Data saved successfully!";
} else {
    echo "❌ Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
