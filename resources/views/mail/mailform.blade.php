<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <script src="/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/animate.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Courgette&family=Farro:wght@300&family=Indie+Flower&family=Kalam:wght@300&family=Pangolin&family=Titillium+Web:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/87c10079f1.js" crossorigin="anonymous"></script>
    <title>Kidspiration Support</title>
    <link rel="icon" type="image/png" href="/img/K.png">
</head>
<style>
    html {
        scroll-behavior: smooth;
    }

    body {
        background: linear-gradient(rgb(58, 166, 255),rgb(141, 206, 255));
        background-position: center;
        background-size: cover;
        height: 100%;
    }

    .alert {

    }

    .second {
        background-color: white;
        height: 100vh;
    }

    .main {
        margin-bottom: 0vh;
        height: 85vh;
        color: white;
    }

    .main .core {
        animation-duration: .7s;
        animation-delay: .7s;
    }

    .main .container {
        margin: auto;
        width: 950px;
        display: block;
        margin-top: 7vh;
        margin-bottom: 10vh;
        font-size: 3.5vh;
        animation-duration: .7s;
        animation-delay: 1.1s;
    }

    .main .container ul li {
        list-style: none;
    }

    .main .container ul .fas {
        margin-right: 1.5vh;
    }

    .container2 {
        margin: auto;
        width: 670px;
        position: relative;
        display: flex;
        margin-top: 7vh;
    }

    .main h1 {
        text-align: center;
        margin-top: 10vh;
        color: white;
    }

    .second .content h1 {
        text-align: center;
        position: relative;
        margin-top: 10vh;
        padding-top: 10vh;
        top: 30%;
        color: rgb(58, 166, 255);
    }

    .second .content form {
        margin: auto;
        width: 650px;
        margin-top: 10vh;
    }

    .second .content .form-group {
        margin-bottom: 3vh;
    }

    .second .content form .btn {
        width: 30%;
        display: block;
        margin-left: auto;
        margin-right: auto;
        border: 1px solid rgb(78, 175, 255);
        background: rgb(78, 175, 255);
        color: white;
    }

    .second .content form .btn:hover {
        background: white;
        color: rgb(78, 175, 255);
    }

    .second .content .bottom {
        margin-top: 25vh;
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

    .arrow a {
    color: white;
    text-decoration: none;
    font-size: 10vh;
    animation-duration: .7s;
    animation-delay: 1.6s;
    }

    .arrow {
    text-align: center;
    margin: 8% 0;
    font-size: 10vh;
    animation-duration: .7s;
    animation-delay: 1.6s;
    }

    .bounce {
        -webkit-animation: bounce 2s infinite;
        animation: bounce 2s infinite;
    }

    @-webkit-keyframes bounce {
        0%,
        20%,
        50%,
        80%,
        100% {
            transform: translateY(0);
        }

        40% {
            transform: translateY(-30px);
        }

        60% {
            transform: translateY(-15px);
        }

    }

    @keyframes bounce {
        0%,
        20%,
        50%,
        80%,
        100% {
            transform: translateY(0);
        }
        40% {
            transform: translateY(-30px);
        }
        60% {
            transform: translateY(-15px);
        }
    }
</style>
</head>
<body>
<div class="animated fadeIn">
    @if(session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session()->get('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
<div class="main">
    <h1 class="core animated fadeInUp">Kidspiration Support</h1>
    <div class="container animated fadeInUp">
        <p>Hello, we're from the Kidspiration team. If you have any problem, confused, or want to help us. You can contact us from these addresses:</p>
        <ul>
            <li><i class="fas fa-phone"></i> +62 89 524892538</li>
            <li><i class="fas fa-envelope"></i> support@kidspiration.com</li>
        </ul>
        <p>Or just send us your request from this form below. Have a nice day.</p>
    </div>
    <div class="arrow bounce animated fadeInUp">
        <a class="fa fa-arrow-down fa-2x" href="#sec-2"></a>
    </div>
</div>
<section id="sec-2">
<div class="second">
    <div class="content">
        <h1>Submit your request</h1>

        <form action="{{ route('support.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="">Email address</label>
              <input type="email" class="form-control" name="email" id="" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label for="">Your name</label>
                <input type="text" class="form-control" name="name" id="" placeholder="Input your name">
              </div>
            <div class="form-group">
              <label for="">Tell us your problem</label>
              <textarea class="form-control" name="body" id="" rows="3" placeholder="Not just a problem, your feedback also will be highly appreciated"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mb-2">Submit</button>
          </form>

          <div class="bottom">
            <ul>
                <li><a href="{{ route('courses.index') }}">Home</a></li> |
                <li><a href="{{ route('courses.course') }}">Courses</a></li> |
                <li><a href="{{ route('courses.quiz') }}">Quizzes</a></li> |
                <li><a href="/about">About Us</a></li> |
                <li><a href="#">Copyright</a></li>
            </ul>
            <ul class="cp">
                <li>&copy; Copyright Kidspiration 2021</li>
            </ul>
        </div>
    </div>
</div>
</section>
</div>
</body>
</html>
