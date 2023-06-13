
<?php
$conn = new mysqli('localhost', 'root', '', 'crudoperation');
if (!$conn) {
    die("Connection was not successful: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        .navbar {
            background-color: #333;
            padding: 10px;
        }
        
        .navbar a {
            color: #fff;
            text-decoration: none;
            margin-right: 10px;
        }
        
        .container {
            margin: 20px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: #f2f2f2;
        }
        
        input[type="text"], input[type="file"], textarea {
            width: 100%;
            padding: 5px;
            margin-top: 5px;
        }
        
        input[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
        
        .success-message {
            background-color: #d4edda;
            color: #155724;
            padding: 10px;
            margin-top: 10px;
        }
        
        .error-message {
            background-color: #f8d7da;
            color: #721c24;
            padding: 10px;
            margin-top: 10px;
        }
    </style>
</head>
    <body>
        <div class="navbar">
            <a href="#">Home</a>
            <a href="#">User table</a>
            <a href="#">All course</a>
        </div>
        
        <section class="home" id="home">

<div class="image">
    <img src="images/home-img.svg" alt="">
</div>

<div class="content">
    <h3>WELCOME ADMIN</h3>
    
</div>
</section>

        <section class="User_table">
        <div class="container">
            <button><a href="../signup.php">ADD</a></button>
            <h2>User Table</h2>
            <table>
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Mobile</th>
                        <th>Operation</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sn = 1;
                    $sql = "SELECT * FROM `crud`";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $name = $row['name'];
                            $id = $row['id'];
                            $email = $row['email'];
                            $password = $row['password'];
                            $mobile = $row['mobile'];
                            echo '<tr>
                                <td>' . $sn++ . '</td>
                                <td>' . $name . '</td>
                                <td>' . $email . '</td>
                                <td>' . $password . '</td>
                                <td>' . $mobile . '</td>
                                <td>
                                    <button><a href="../update.php?updateid=' . $id . '">Update</a></button>
                                    <button><a href="../delete.php?deleteid=' . $id . '">Delete</a></button>
                                </td>
                            </tr>';
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
        </section>
    <section class="All_course">
        <h2>All Courses</h2>
        <div class="container">
            <form method="post" action="" enctype="multipart/form-data">
                <input type="submit" name="add_course" value="Add Course">
                <br>
                <br>
                <input type="text" name="course_name" placeholder="Course Name" required><br>
                <input type="file" name="pdf" required><br><br>
                <textarea name="course_description" placeholder="Course Description" required></textarea><br>
            </form>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>PDF</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
                <?php
                $sn = 1;
                $query = "SELECT * FROM course";
                $result = mysqli_query($conn, $query);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $sn++ . "</td>";
                        echo "<td>" . $row['course_name'] . "</td>";
                        echo "<td>" . $row['pdf'] . "</td>";
                        echo "<td>" . $row['course_description'] . "</td>";
                        echo "<td><a href='?update_course=" . $row['course_id'] . "'>Edit</a> | <a href='?delete_course=" . $row['course_id'] . "'>Delete</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No course found</td></tr>";
                }
                ?>
            </table>
        </div>
        </section>

        <?php
        // Add course
        if (isset($_POST['add_course'])) {
            $course_name = $_POST['course_name'];
            $course_description = $_POST['course_description'];
            $pdf_name = $_FILES['pdf']['name']; // Get the file name
            $pdf_tmp = $_FILES['pdf']['tmp_name']; // Get the temporary file path

            // Move the uploaded file to a desired location
            $target_directory = "../uploads"; // Specify the directory where you want to store the uploaded files
            $target_file = $target_directory . basename($pdf_name);
            move_uploaded_file($pdf_tmp, $target_file);

            $sql = "INSERT INTO course (course_name, pdf, course_description) VALUES ('$course_name', '$target_file', '$course_description')";

            if (mysqli_query($conn, $sql)) {
                echo "Course added successfully";
            } else {
                die(mysqli_error($conn));
            }
        }

        // Update course
        if (isset($_POST['update_course'])) {
            $course_id = $_POST['course_id'];
            $course_name = $_POST['course_name'];
            $pdf = $_POST['pdf'];
            $course_description = $_POST['course_description'];

            $sql = "UPDATE course SET course_name='$course_name', pdf='$pdf', course_description='$course_description' WHERE course_id='$course_id'";

            if ($conn->query($sql) === TRUE) {
                echo "Course updated successfully";
            } else {
                echo "Error updating course: " . $conn->error;
            }
        }

        // Delete course
        if (isset($_GET['delete_course'])) {
            $course_id = $_GET['delete_course'];

            $sql = "DELETE FROM course WHERE course_id='$course_id'";

            if ($conn->query($sql) === TRUE) {
                echo "Course deleted successfully";
            } else {
                echo "Error deleting course: " . $conn->error;
            }
        }

        // Fetch all courses
        $sql = "SELECT * FROM course";
        $result = mysqli_query($conn, $sql);
        ?>

        <?php
        $conn->close();
        ?>
    </body>
    </html>

