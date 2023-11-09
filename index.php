<?php

include 'config.php';

$result = mysqli_query($conn, "SELECT * FROM cv_info WHERE id=1"); // Sesuaikan dengan id CV
$data = mysqli_fetch_array($result);
//ambil data dari database

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

mysqli_close($conn);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>

        body{
            background-color:#111318;
        }


        .main-title{
            margin-top: 20px;
            /* max-width: 300px; */
            margin-left: 180px;
            font-size: 60px;
            color: white;
            /* font-family: 'Playfair Display', serif; */
            font-weight: 700;
            margin-bottom: 20px;
            line-height: 1.3;
        }
        .main-p{
            line-height: 1.8;
            color: #ccc;
            display: block;
            font-size: 18px;
            position: relative;
            padding-left: 190px;
        }
        .img{
            margin-left: 170px;
            border-radius: 50px;
        }
        .about-me{
            display: inline-block;
            font-size: 23px;
            margin-bottom: 60px;
            color: #3deaa4;
            line-height: 1;
            position: relative;

            /* content: url(../img/zigzag.svg); */
            top: 35px;
            left: 0;
        }
        .about-title{
            color: white;
        }
        .about-p{
            margin-top: 20px;
            margin-bottom: 30px;
            font-weight: 300;
            line-height: 1.8;
            color: #ccc;
        }
        hr{
            border-top: 2px solid;
        }
        .default-btn{
            font-size: 15px;
            height: 40px;
            line-height: 40px;
            padding: 0 10px;
            /*background-color: #3deaa4;*/
            max-width: 120px;

        }
        .default-btn:hover{
            transition: 2s;
            color: white;
            background-color:black;
        }

        .about-line{
            border-top: 5px solid;
            color: #3deaa4;
            max-width: 90px;

        }
        .social-line{
            margin-left: 50px;
            border-top: 5px solid;
            color: #3deaa4;
            max-width: 90px;
        }
        .skill-line{
            border-top: 6px solid;
            color: #3deaa4;
            background-color: #3deaa4;
            max-width: 99%;
            margin-top: 2px;
        }
    </style>
</head>
<body>
<!-- nav start -->
<nav class="navbar navbar-light fixed-top bg-body-tertiary">
    <div class="container-fluid">
        <div class="h3 font-weight-bold">Curiculum Vitae</div>
        <a class="navbar-brand" href="update.php">
            <button type="button" class="default-btn btn btn-primary">Admin</button>
        </a>
    </div>
</nav>
<!-- navbar end -->

<!-- home start -->
<div class="container pt-5 py-5">
    <div class="row">
        <div class="col-4 py-5 ml-5">
            <div>
                <img class="img-fluid img" src="<?php echo $foto ?>" alt="">
            </div>
        </div>
        <div class="col-6 py-5">
            <h1 class="main-title">Hey, I am <?php echo $name; ?></h1>
            <p class="main-p"><?php echo $occupation; ?></p>
        </div>
    </div>
</div>

<!-- home end -->

<hr>
<!-- about start -->
<div class="container py-5">
    <div class="row">
        <h3 class="about-me">About Me
            <hr class="about-line">
        </h3>

        <h4 class="about-title">My name is <?php echo $name; ?>. I am a <?php echo $occupation; ?> and lives in <?php echo $city; ?> City.</h4>
        <p class="about-p"><?php echo $about; ?></p>

        <h3 class="about-me">Contact Info
            <hr class="about-line">
        </h3>

        <p class="about-p">Email: <?php echo $email; ?></p>
        <p class="about-p">Address: <?php echo $address; ?></p>
        <p class="about-p">Telepon: <?php echo $telepon; ?></p>
        <p class="about-p">Web: <?php echo $web; ?></p>

        <h3 class="about-me">Education
            <hr class="about-line">
        </h3>

        <p class="about-p"><?php echo $education; ?></p>

        <h3 class="about-me">Work Experience
            <hr class="about-line">
        </h3>

        <p class="about-p"><?php echo $work_experience; ?></p>

        <h3 class="about-me">Skills
            <hr class="about-line">
        </h3>

        <p class="about-p"><?php echo $skills; ?></p>

    </div>

</div>
</body>
<!-- about-end -->
</html>