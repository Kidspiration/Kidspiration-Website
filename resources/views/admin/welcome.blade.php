<!DOCTYPE html>
<html lang="en" class="">
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
    <title>Welcome to Kidspiration</title>
    <link rel="icon" type="image/png" href="/img/K.png">
</head>
<style>
    .animated.fadeInUp {
        animation-duration: .5s;
        animation-delay: 1.7s;
    }

    .animated.jackInTheBox {
        animation-duration: .7s;
        animation-delay: 1.2s;
    }

    .animated.bounceInRight {
        animation-duration: .7s;
        animation-delay: .5s;
    }

    body {

    }

    .bg {
        background: linear-gradient(rgba(35, 204, 255, 0.644),rgba(62, 184, 255, 0.5)), url('/img/bg.jpg');
        position: fixed;
        height: 100%;
        width: 755px;
        background-size: cover;
        background-position: center;
        top: 0;
        left: 0;
        z-index: 0;
        transition: 0.3s ease;
    }

    .bg .bg-logo {
        position: fixed;
        top: 10%;
        left: 10%;
        transition: 0.3s ease;
    }

    .main {
        position: fixed;
        z-index: 2;
        /* font-family: 'Acme', sans-serif; */
        /* font-family: 'Courgette', cursive; */
        /* font-family: 'Farro', sans-serif; */
        /* font-family: 'Indie Flower', cursive; */
        font-family: 'Kalam', cursive;
        /* font-family: 'Pangolin', cursive; */
        /* font-family: 'Titillium Web', sans-serif; */
    }

    .main .logo {
          border-radius: 100vh;
          width: 10%;
          display: inline-block;
          position: fixed;
          top: 10%;
          left: 77%;
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3), 0 6px 20px 0 rgba(0, 0, 0, 0.3);
          transition: 0.7s ease;
      }

      .main .logo:hover {
          transform: scale(0.8) rotate(360deg);
      }

    .container .row .main {

    }

    .content {
        align-items: center;
        position: fixed;
        right: 70px;
        top: 38%;
        bottom: 25%;
        z-index: 2;
    }

    .content a {
        border: 2px solid rgb(92, 193, 239);
        border-radius: 40px;;
        color: rgb(60, 135, 255);
        display: block;
        padding: 10px;
        padding-left: 20%;
        padding-right: 20%;
        text-align: center;
        text-decoration: none;
        margin-bottom: 5px;
        margin: 10% 10% -5% 0;
        font-size: 18px;
        font-weight: 750;
    }

    .content .btnAdmin {
        background: rgb(92, 193, 239);
        color: white;
        transition: .2s ease;
        font-family: 'Titillium Web', sans-serif;
    }

    .content .btnAdmin:hover {
        border: 2px solid rgb(88, 182, 226);
        background: rgb(88, 182, 226);
    }

    .content .btnAdmin:focus {
        border: 2px solid rgb(88, 182, 226);
    }

    .content .btnStudent {
        background: rgba(92, 193, 239, 0);
        color: rgb(92, 193, 239);
        transition: .2s ease;
        font-family: 'Titillium Web', sans-serif;
    }

    .content .btnStudent:hover {
        background: rgba(127, 205, 241, 0.301);
        border: 2px solid rgb(88, 182, 226);
    }

    .content .btnStudent:focus {
        border: 2px solid rgb(88, 182, 226);
    }

    .content .satu, .dua, .tiga {
        font-size: 30px;
        margin-bottom: -15px;
        font-weight: 500;
    }

    .content .empat {
        margin-top: 65px;
        margin-bottom: -3px;
        font-weight: 100;
    }

    .cp {
        position: absolute;
        bottom: -33%;
        left: 15%;
    }

    .cp li {
        list-style: none;
    }

    @media only screen and (min-width: 1850px) {
        .bg {
            width: 62%;
            height: 100vh;
        }

        .bg .bg-logo {
            position: fixed;
            top: 15%;
            left: 5%;
            transition: 0.3s ease;
            width: 50%;
        }

        .main .logo {
          border-radius: 100vh;
          width: 10%;
          display: inline-block;
          position: fixed;
          top: 10%;
          left: 76%;
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3), 0 6px 20px 0 rgba(0, 0, 0, 0.3);
          transition: 0.7s ease;
      }

        .main .content {
            left: 69%;
            position: fixed;
            display: inline-block;
            margin: -4%;
            align-items: center;
            padding: 0;
            box-sizing: border-box;
        }

        .content .satu {
            margin-top: 7vh;
        }

        .content .satu, .dua, .tiga {
            font-size: 4vh;
            margin-bottom: 1px;

        }

        .content .empat {
            font-size: 2.3vh;
            margin-top: 3vh;
            margin-bottom: 1vh;
        }

        .content .btnAdmin {
            margin-bottom: -5vh;
        }

        .content a {
            border: 2px solid rgb(92, 193, 239);
            border-radius: 40px;;
            color: rgb(60, 135, 255);
            display: block;
            padding: 15px;
            padding-left: 20%;
            padding-right: 20%;
            text-align: center;
            text-decoration: none;
            margin-bottom: 5px;
            margin: 10% 10% -5% 0;
            font-size: 18px;
            font-weight: 750;
        }

        .cp {
            position: absolute;
            bottom: -33%;
            left: 26%;
        }
    }

    @media only screen and (max-width: 1849px)
    {
        .bg {
            width: 63%;
            height: 100vh;
        }

        .bg .bg-logo {
            position: fixed;
            top: 15%;
            left: 8%;
            transition: 0.3s ease;
            width: 45%;
        }

        .main .content {
            display: inline-block;
            margin: -3%;
            position: fixed;
            top: 35%;
            left: 70%;
            align-items: center;
            padding: auto;
            box-sizing: border-box;
        }

        .content .satu {
            margin-top: 7vh;
        }

        .content .satu, .dua, .tiga {
            font-size: 4vh;
            margin-bottom: 1px;;

        }

        .content .empat {
            margin-top: 15px;
            margin-bottom: -3px;
        }

        .content .btnAdmin {
            margin-bottom: -5vh;
        }
    }

    @media only screen and (max-width: 1100px) {
        .bg {
            display: none;
        }

        .main .logo {
          width: 25%;
          display: inline-block;
          position: fixed;
          top: 15%;
          left: 40%;
      }

        .main .content {
            position: fixed;
            align-items: center;
            display: inline-block;
            left: 20%;
            margin-left: auto;
            margin-right: auto;
            padding: auto;
            box-sizing: border-box;
        }


    }
</style>
<body>
    <div class="container animated fadeIn">
        <div class="row">
            <div class="col">
                <div>
                    <div class="bg">
                        <img class="bg-logo animated jackInTheBox" src="/img/logo_2.png" alt="KDS">
                    </div>
                </div>
            </div>

            <div class="main d-fluid">
                <div class="content">
                    <img class="logo" src="/img/K.png" alt="KDS">
                    <p class="animated bounceInRight satu" >Hi, how are you?</p>
                    <p class="animated bounceInRight dua" >Are you still having problem</p>
                    <p class="animated bounceInRight tiga" >with English in elementary school?</p>
                    <p class="animated bounceInRight empat" >Take it easy, let's learn with us!!</p>
                    <a class="animated fadeInUp btnAdmin btn btn-primary" type="button" href="/admin-login">Admin</a>
                    <a class="animated fadeInUp btnStudent btn btn-primary" type="button" href="/welcome">Student</a>
                    <ul class="cp">
                        <li>&copy; Copyright Kidspiration 2021</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
