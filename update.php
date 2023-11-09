<?php
include 'config.php';

$result = mysqli_query($conn, "SELECT * FROM cv_info WHERE id=1"); // Sesuaikan dengan id CV
$data = mysqli_fetch_array($result);

$name = $data["name"];
$occupation = $data["occupation"];
$city = $data["city"];
$about = $data["about"];
$email = $data["email"];
$address = $data["address"];
$telepon = $data["telepon"];
$web = $data["web"];
$education = $data["education"];
$work_experience = $data["work_experience"];
$skills = $data["skills"];
$foto = $data['foto'];

if(isset($_POST['update'])) {
    $newName = $_POST['name'];
    $newOccupation = $_POST['occupation'];
    $newCity = $_POST['city'];
    $newAbout = $_POST['about'];
    $newEmail = $_POST['email'];
    $newAddress = $_POST['address'];
    $newTelepon = $_POST['telepon'];
    $newWeb = $_POST['web'];
    $newEducation = $_POST['education'];
    $newWorkExperience = $_POST['work_experience'];
    $newSkills = $_POST['skills'];
    $newFoto = $_POST['foto'];

    $updateQuery = "UPDATE cv_info SET name='$newName', occupation='$newOccupation', city='$newCity', about='$newAbout', email='$newEmail', address='$newAddress', telepon='$newTelepon', web='$newWeb', education='$newEducation', work_experience='$newWorkExperience', skills='$newSkills' WHERE id='1'";

    if(mysqli_query($conn, $updateQuery)) {
        echo "<script>alert('Data CV has been successfully updated.')</script>";
    } else {
        echo "<script>alert('Error updating data CV: ".mysqli_error($conn)."')</script>";
    }

    if(mysqli_query($conn, $updateQuery)) {
        echo "<script>alert('Data CV has been successfully updated.')</script>";
        header('Location: index.php');
    } else {
        echo "<script>alert('Error updating data CV: ".mysqli_error($conn)."')</script>";
    }
}


mysqli_close($conn);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit CV Info</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .form-title {
            font-size: 2rem;
            margin-bottom: 2rem;
        }

        .form-control-label {
            font-size: 1.2rem;
            font-weight: 500;
        }

        .default-btn:hover{
            transition: 2s;
            color: white;
            background-color:black;
        }

        .default-btn{
            font-size: 15px;
            height: 40px;
            line-height: 40px;
            padding: 0 10px;
            /*background-color: #3deaa4;*/
            max-width: 120px;

        }


        .form-btn {
            margin-top: 1rem;
        }
    </style>

</head>

<body>
<nav class="navbar navbar-light fixed-top bg-body-tertiary">
    <div class="container-fluid">
        <div class="h3 font-weight-bold">Curiculum Vitae</div>
        <a class="navbar-brand" href="index.php">
            <button type="button" class="default-btn btn btn-primary">View</button>
        </a>
    </div>
</nav>

<div class="container my-5 pt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="form-title text-center mb-5">Edit CV Info</h1>
            <form method="POST">
                <div class="mb-3">
                    <label class="form-control-label">Name</label>
                    <input type="text" class="form-control" value="<?php echo $name ?>" name="name" required>
                </div>
                <div class="mb-3">
                    <label class="form-control-label">Occupation</label>
                    <input type="text" class="form-control" value="<?php echo $occupation ?>" name="occupation" required>
                </div>
                <div class="mb-3">
                    <label class="form-control-label">City</label>
                    <input type="text" class="form-control" value="<?php echo $city ?>" name="city" required>
                </div>
                <div class="mb-3">
                    <label class="form-control-label">About</label>
                    <textarea class="form-control" rows="5" name="about" required><?php echo $about ?></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-control-label">Email</label>
                    <input type="email" class="form-control" value="<?php echo $email ?>" name="email" required>
                </div>
                <div class="mb-3">
                    <label class="form-control-label">Address</label>
                    <textarea class="form-control" rows="3" name="address" required><?php echo $address ?></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-control-label">Telepon</label>
                    <input type="text" class="form-control" value="<?php echo $telepon ?>" name="telepon" required>
                </div>
                <div class="mb-3">
                    <label class="form-control-label">Web</label>
                    <input type="text" class="form-control" value="<?php echo $web ?>" name="web" required>
                </div>
                <div class="mb-3">
                    <label class="form-control-label">Education</label>
                    <textarea class="form-control" rows="7" name="education" required><?php echo $education ?></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-control-label">Work Experience</label>
                    <textarea class="form-control" rows="7" name="work_experience" required><?php echo $work_experience ?></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-control-label">Skills</label>
                    <textarea class="form-control" rows="4" name="skills" required><?php echo $skills ?></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-control-label">Foto Path</label>
                    <input type="text" class="form-control" value="<?php echo $foto ?>" name="foto" required>
                </div>
                <div class="form-btn text-center">
                    <button type="submit" class="btn btn-primary" name="update">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-4mx1pvoq9ia0tX9yoOtysSgqSa0s8L1G06xN/ml7FdaKJlUREM9XvQR6jljsoIir" crossorigin="anonymous"></script>

</body>

</html>