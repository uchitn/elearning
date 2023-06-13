<?php
$con = new mysqli('localhost', 'root', '', 'crudoperation');
if (!$con) {
    die("Connection was not successful: " . mysqli_error($con));
}

if (isset($_GET['delete_course'])) {
    $course_id = $_GET['delete_course'];

    $sql = "DELETE FROM course WHERE course_id='$course_id'";

    if ($con->query($sql) === TRUE) {
        echo "Course deleted successfully";
    } else {
        echo "Error deleting course: " . $con->error;
    }
}

// Fetch all courses
$sql = "SELECT * FROM course";
$result = mysqli_query($con, $sql);
if (!$result) {
    die("Connection was not successful: " . mysqli_error($con));
}
?>