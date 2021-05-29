<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/animate.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Courgette&family=Farro:wght@300&family=Indie+Flower&family=Kalam:wght@300&family=Pangolin&family=Titillium+Web:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/87c10079f1.js" crossorigin="anonymous"></script>
    <title>Kidspiration Creators</title>
    <link rel="icon" type="image/png" href="/img/K.png">
    <style>
        body {
            background: linear-gradient(rgb(58, 166, 255),rgb(141, 206, 255));
            background-position: center;
            background-size: cover;
            height: 100%;
        }

        .second {
            background-color: white;
            height: 100vh;
        }

        .main {
            margin-bottom: 50vh;
            height: 135vh;
        }

        .container {
            margin: auto;
            width: 950px;
            display: flex;
            margin-top: 7vh;
            margin-bottom: 10vh;
        }

        .container2 {
            margin: auto;
            width: 670px;
            position: relative;
            display: flex;
            margin-top: 7vh;
        }

        .container .frame1 {
            width: 50vh;
            height: 50vh;
            position: relative;
            left: 0;
            margin-right: 5vh;
        }

        .container .frame2 {
            width: 50vh;
            height: 50vh;
            position: relative;
            right: 0;
        }

        .container .frame3 {
            width: 50vh;
            height: 50vh;
            position: relative;
            right: 0;
            margin-left: 5vh;
        }

        .container2 .frame4 {
            width: 50vh;
            height: 50vh;
            position: absolute;
            display: inline-block;
            left: 0;
        }

        .container2 .frame5 {
            width: 50vh;
            height: 50vh;
            position: absolute;
            display: inline-block;
            right: 0;
        }

        .frame1 .photo {
            overflow: hidden;
            border-radius: 50vh;
            width: 100%;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3), 0 6px 20px 0 rgba(0, 0, 0, 0.3);
            margin-bottom: 5%;
        }

        .frame1 .photo img {
            border-radius: 50vh;
            box-sizing: border-box;
            width: 100%;
            margin: 0%;
            transition: .3s ease;
        }

        .frame1 .photo img:hover {
            transform: scale(1.2);

        }

        .frame1 .head h2 {
            text-align: center;
            color: white;
        }

        .frame1 .head h3 {
            text-align: center;
            color: white;
        }

        .frame2 .photo {
            overflow: hidden;
            border-radius: 50vh;
            width: 100%;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3), 0 6px 20px 0 rgba(0, 0, 0, 0.3);
            margin-bottom: 5%;
        }

        .frame2 .photo img {
            border-radius: 50vh;
            box-sizing: border-box;
            width: 100%;
            margin: 0%;
            transition: .3s ease;
        }

        .frame2 .photo img:hover {
            transform: scale(1.2);
        }

        .frame2 .head h2 {
            text-align: center;
            color: white;
        }

        .frame2 .head h3 {
            text-align: center;
            color: white;
        }

        .frame3 .photo {
            overflow: hidden;
            border-radius: 50vh;
            width: 100%;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3), 0 6px 20px 0 rgba(0, 0, 0, 0.3);
            margin-bottom: 5%;
        }

        .frame3 .photo img {
            border-radius: 50vh;
            box-sizing: border-box;
            width: 100%;
            margin: 0%;
            transition: .3s ease;
        }

        .frame3 .photo img:hover {
            transform: scale(1.2);
        }

        .frame3 .head h2 {
            text-align: center;
            color: white;
        }

        .frame3 .head h3 {
            text-align: center;
            color: white;
        }

        .frame4 .photo {
            overflow: hidden;
            border-radius: 50vh;
            width: 100%;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3), 0 6px 20px 0 rgba(0, 0, 0, 0.3);
            margin-bottom: 5%;
        }

        .frame4 .photo img {
            border-radius: 50vh;
            box-sizing: border-box;
            width: 100%;
            margin: 0%;
            transition: .3s ease;
        }

        .frame4 .photo img:hover {
            transform: scale(1.2);
        }

        .frame4 .head h2 {
            text-align: center;
            color: white;
        }

        .frame4 .head h3 {
            text-align: center;
            color: white;
        }

        .frame5 .photo {
            overflow: hidden;
            border-radius: 50vh;
            width: 100%;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3), 0 6px 20px 0 rgba(0, 0, 0, 0.3);
            margin-bottom: 5%;
        }

        .frame5 .photo img {
            border-radius: 50vh;
            box-sizing: border-box;
            width: 100%;
            margin: 0%;
            transition: .3s ease;
        }

        .frame5 .photo img:hover {
            transform: scale(1.2);
        }

        .frame5 .head h2 {
            text-align: center;
            color: white;
        }

        .frame5 .head h3 {
            text-align: center;
            color: white;
        }

        .main h1 {
            text-align: center;
            margin-top: 10vh;
            color: white;
        }

        .main .contributor {
            margin-top: 23vh;
        }

        .second {

        }

        .second .content h1 {
            text-align: center;
            position: relative;
            margin-top: 10vh;
            padding-top: 10vh;
            top: 30%;
            color: rgb(58, 166, 255);
        }

        .second .content .logo img {
            width: 85%;
        }

        .second .content .text p {
            text-align: justify;
            font-size: 6vh;
        }

        .second .content .bottom {
            margin-top: 17vh;
        }

        .second .content .bottom ul {
            text-align: center;
            position: relative;
            padding-bottom: 0vh;
            color: white;
            font-size: 3vh;
        }

        .second .content .bottom .cp {
            padding-bottom: 4vh;
            font-size: 2vh;
        }

        .second .content .bottom ul li {
            display: inline;
        }

        .second .content .bottom ul li a {
            text-decoration: none;
            color: white;
            font-size: 3vh;
        }

        .second .content .bottom ul li a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="main">
        <h1 class="core">Core Team</h1>
        <div class="container">
            <div class="frame1">
                <div class="photo">
                    <img src="/img/frans.jpg" alt="">
                </div>
                <div class="head">
                    <h2>Frans Achmad</h2>
                    <h3>Lead Developer</h3>
                </div>
            </div>
            <div class="frame2">
                <div class="photo">
                    <img src="/img/frans.jpg" alt="">
                </div>
                <div class="head">
                    <h2>Gifari Asmara</h2>
                    <h3>Advisor & Designer</h3>
                </div>
            </div>
            <div class="frame3">
                <div class="photo">
                    <img src="/img/salah.jpeg" alt="">
                </div>
                <div class="head">
                    <h2>Salah Abdullah</h2>
                    <h3>Front-End</h3>
                </div>
            </div>
        </div>
        <h1 class="contributor">Contributors</h1>
        <div class="container2">
            <div class="frame4">
                <div class="photo">
                    <img src="/img/alif.jpg" alt="">
                </div>
                <div class="head">
                    <h2>Alif Rizky</h2>
                    <h3>Materials Writer</h3>
                </div>
            </div>
            <div class="frame5">
                <div class="photo">
                    <img src="/img/salsa.jpg" alt="">
                </div>
                <div class="head">
                    <h2>Andiani Salsa</h2>
                    <h3>Materials Writer</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="second">
        <div class="content">
            <h1>About Us</h1>
            <div class="container p-4 animated fadeIn">
                <div class="row">
                    <div class="col-4">
                        <div class="logo">
                            <img src="/img/K.png" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="content animated fadeInUp">
                            <div class="text">
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias ut tenetur nihil eveniet deleniti corrupti rem maiores ab, vitae voluptatem, impedit esse libero! Nemo, consequatur?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom">
                <ul>
                    <li><a href="{{ route('courses.index') }}">Home</a></li> |
                    <li><a href="{{ route('courses.course') }}">Courses</a></li> |
                    <li><a href="{{ route('courses.quiz') }}">Quizzes</a></li> |
                    <li><a href="#">Copyright</a></li> |
                    <li><a href="#">Support</a></li>
                </ul>
                <ul class="cp">
                    <li>&copy; Copyright Kidspiration 2021</li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
