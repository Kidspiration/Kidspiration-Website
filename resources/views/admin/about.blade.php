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

        .main .core {
            font-size: 7vh;
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

        .container .core {
            animation-duration: .9s;
            animation-delay: .5s;
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

        .containe2 .contributor {
            animation-duration: .9s;
            animation-delay: 2s;
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

        .frame1 {
            animation-duration: .7s;
            animation-delay: 1s;
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

        .frame2 {
            animation-duration: .7s;
            animation-delay: 1.5s;
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

        .frame3 {
            animation-duration: .7s;
            animation-delay: 2s;
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

        .frame4 {
            animation-duration: .7s;
            animation-delay: 2.5s;
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

        .frame5 {
            animation-duration: .7s;
            animation-delay: 3s;
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
            font-size: 7vh;
        }

        .second {
            background-image: linear-gradient(rgba(255, 255, 255, 0.698),rgba(255, 255, 255, 0.678)), url(/img/bg4.jpg);
            background-position: center;
        }

        .second .content .container {
            width: 200vh;
        }

        .second .content h1 {
            text-align: center;
            position: relative;
            margin-top: 10vh;
            padding-top: 10vh;
            font-size: 7vh;
            top: 30%;
            color: rgb(58, 166, 255);
        }

        .second .content .logo img {
            width: 85%;
        }

        .second .content .text p {
            text-align: justify;
            font-size: 5vh;
            margin-bottom: 30vh;
        }

        .second .content .bottom {
            margin-top: -11vh;
            padding-top: 0vh;
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

        @media only screen and (min-width: 1850px) {
            .second {
                background-color: white;
                height: 100vh;
            }

            .main {
                margin-bottom: 50vh;
                height: 65vh;
            }

            .container {
                margin: auto;
                width: 950px;
                display: flex;
                margin-top: 7vh;
                margin-bottom: 0vh;
            }

            .container2 {
                margin: auto;
                width: 670px;
                position: relative;
                display: flex;
                margin-top: 5vh;
            }

            .main .contributor {
                margin-top: -10vh;
            }

            .container2 .frame4 {
                width: 50vh;
                height: 50vh;
                position: relative;
                display: inline-block;
                left: 0%;
            }

            .container2 .frame5 {
                width: 50vh;
                height: 50vh;
                position: relative;
                display: inline-block;
                right: 0;
                margin-left: 6vh;
            }

            .frame4 {
            animation-duration: .7s;
            animation-delay: 2.5s;
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

        .second .content h1 {
            text-align: center;
            position: relative;
            margin-top: 10vh;
            padding-top: 20vh;
            font-size: 7vh;
            color: rgb(58, 166, 255);
        }

        .second .content .container {
            width: 350vh;
        }

        .second .content .logo img {
            width: 85%;
        }

        .second .content .text p {
            text-align: justify;
            font-size: 4vh;
        }

        .second .content .bottom {
            position: relative;
            margin-top: -8vh;
        }
    }
    </style>
</head>
<body>
    <div class="main">
        <h1 class="core animated fadeIn">Core Team</h1>
        <div class="container">
            <div class="frame1 animated fadeInUp">
                <div class="photo">
                    <img src="/img/frans.jpg" alt="">
                </div>
                <div class="head">
                    <h2>Frans Achmad</h2>
                    <h3>Lead Developer</h3>
                </div>
            </div>
            <div class="frame2 animated fadeInUp">
                <div class="photo">
                    <img src="/img/gifari.jpg" alt="">
                </div>
                <div class="head">
                    <h2>Gifari Asmara</h2>
                    <h3>Advisor & Designer</h3>
                </div>
            </div>
            <div class="frame3 animated fadeInUp">
                <div class="photo">
                    <img src="/img/salah.jpeg" alt="">
                </div>
                <div class="head">
                    <h2>Salah Abdullah</h2>
                    <h3>Front-End</h3>
                </div>
            </div>
        </div>
        <h1 class="contributor animated fadeIn">Contributors</h1>
        <div class="container2">
            <div class="frame4 animated fadeInUp">
                <div class="photo">
                    <img src="/img/alif.jpg" alt="">
                </div>
                <div class="head">
                    <h2>Alif Rizky</h2>
                    <h3>Materials Writer</h3>
                </div>
            </div>
            <div class="frame5 animated fadeInUp">
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
            <div class="container animated fadeIn">
                <div class="row">
                    <div class="col-4">
                        <div class="logo">
                            <img src="/img/K.png" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="content animated fadeInUp">
                            <div class="text">
                                <p>Kidspiration is an English education website made by 5 young university students. This website has a goal that is to help Indonesian elementary students improve their English. Even if they still can't understand English material from their school's teacher. Hopefully, this website can be an alternate for their learning.</p>
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
                    <li><a href="{{ route('support.index') }}">Support</a></li>
                </ul>
                <ul class="cp">
                    <li>&copy; Copyright Kidspiration 2021</li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
