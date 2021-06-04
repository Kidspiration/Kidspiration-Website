@extends('layout/master')
@section('title','Quiz: '.$quiz->name)

@section('content')
    <style>
        body {
            background-image: linear-gradient(rgba(255, 255, 255, 0.527),rgba(255, 255, 255, 0.534)), url(/img/bg4.jpg);
            background-position: center;


        }

      .main {
        position: relative;
        margin-left: 0vh; /* Same as the width of the sidenav */
        font-size: 28px; /* Increased text to enable scrolling */
        padding: 0px 0px;
        top: 3vh;
        left: 7vh;
        right: 10vh;

        box-sizing: border-box;

      }

      .main .content {
          max-width: 155vh;
          margin-bottom: 5vh;
      }

      .main .content .quiz {
        display: block;
        margin-bottom: 20px;
        margin-right: 3vh;
        text-align: left;
        padding-left: 40px;
        padding-right: 40vh;
        padding-top: 30px;
        padding-bottom: 30px;
        border: 1px solid rgb(78, 175, 255);
        border-radius: 1vh;

        color: rgb(78, 175, 255);
      }

      .main .content .quiz:hover {
        background: rgb(78, 175, 255);
        color: white;
      }

      .main .content .edit {
          margin-right: 3vh;
          padding-left: 3vh;
          padding-right: 3vh;
          padding-top: 1vh;
          padding-bottom: 1vh;
          border: 1px solid rgb(78, 175, 255);
          background: rgb(78, 175, 255);
          color: white;
      }

      .main .content .edit:hover {
        background: white;
        color: rgb(78, 175, 255);
      }

      .main .content .delete {
            padding-left: 2vh;
            padding-right: 2vh;
            padding-top: 1vh;
            padding-bottom: 1vh;
            border: 1px solid rgb(78, 175, 255);
            background: rgb(78, 175, 255);
            color: white;
      }

      .main .content .delete:hover {
        background: white;
        color: rgb(78, 175, 255);
      }

      .main .content .btn {
            padding-left: 2vh;
            padding-right: 2vh;
            padding-top: 1vh;
            padding-bottom: 1vh;
            border: 1px solid rgb(78, 175, 255);
            background: rgb(78, 175, 255);
            color: white;
            margin-top: 3vh;
            margin-bottom: 3vh;
            font-family: 'Pangolin', cursive;
      }

      .main .content .btn:hover {
        background: white;
        color: rgb(78, 175, 255);
      }

      .bottombar .quizzes {
        color: #ffffff;
      }

      .main .content .logout {
          position: fixed;
          right: 3%;
          top: 6%;
          font-size: 3vh;
          padding: 1vh 2vh 1vh 2vh ;
          text-decoration: none;
          border: 1px solid rgb(78, 175, 255);
          border-radius: 1vh;
          background: white;
          color: rgb(78, 175, 255);
      }

      .main .content .logout:hover {
          background: rgb(78, 175, 255);
          color: white;
      }

      .main .content h2 {
        font-family: 'Kalam', cursive;
        font-weight: 1000;
        font-size: 7vh;
        width: 150%;
      }

      .main .content h3, h4 {
        font-family: 'Kalam', cursive;
      }

      .main .content p {
          font-size: 4.5vh;
          font-family: 'Pangolin', cursive;
          margin-top: 2vh;
          width: 150%;
      }

      .main .content .question {
          width: 150%;
      }

      .main .content .form-check-input {
          margin-left: 0vh;
          margin-right: 2vh;
      }

      .main .content .form-check-label {
        font-family: 'Pangolin', cursive;
        font-weight: lighter;
      }

      .bottom {
          background: linear-gradient(rgb(61, 168, 255),rgb(78, 175, 255));
          left: -25%;
          right: -50%;
          bottom: 0;
          position: absolute;
          width: 132.5%;
          height: 100px;
          z-index: -1;
          margin-bottom: -200px;
          color: white;
          overflow: auto;
      }

      .bottom .writers {
          position: relative;
          z-index: 5;
          font-size: 2.3vh;
          left: 18%;
          margin-top: 3.5%;
          max-width: 900px;
          bottom: 0;
          font-weight: lighter;
          font-family: cursive;
      }

      .right-icon {
          position: fixed;
          bottom: 10%;
          z-index: 10;
      }

      .right-icon .fas {
          padding: 20%;
          padding-top: 25%;
      }

      .right-icon .fa-users {
        padding: 20%;
          padding-left: 18%;
          padding-top: 25%;
      }

      .right-icon .about, .support {
          position: fixed;
          right: 3%;
          font-size: 5vh;
          transition: .3s ease;
          border: 1px solid rgb(78, 175, 255);
      }

      .right-icon .about:hover {
        background: rgb(255, 255, 255);
        color: rgb(78, 175, 255);
      }

      .right-icon .about {
        width: 10vh;
       height: 10vh;
       color: white;
       background: rgb(78, 175, 255);
       border-radius: 50vh;
       bottom: 17%;
      }

      .right-icon .support:hover {
        background: rgb(255, 255, 255);
        color: rgb(78, 175, 255);
      }

      .right-icon .support {
       width: 10vh;
       height: 10vh;
       color: white;
       background: rgb(78, 175, 255);
       border-radius: 50vh;
       bottom: 5%;
    }

    .main .content .image {
          display: block;
          text-align: center;
          align-items: center;
          width: 75%;
          margin-top: 7vh;
          margin-bottom: 7vh;
      }

      @media only screen and (min-width: 1850px) {
        .sidebar {
            width: 23%;
        }

        .bottombar {
            display: none;
        }

        .main .content {
          position: relative;
          left: 0%;
          right: 10%;
          top: 5%;
        }

        .main .content p {
          font-size: 3vh;
        }

        .bottom {
          background: linear-gradient(rgb(61, 168, 255),rgb(78, 175, 255));
          left: -25%;
          right: -50%;
          bottom: 0;
          position: absolute;
          width: 147.5%;
          height: 110px;
          z-index: -1;
          margin-bottom: -200px;
          color: white;
          overflow: auto;
      }

      .bottom .writers {
          position: relative;
          z-index: 5;
          font-size: 1.8vh;
          left: 15%;
          margin-top: 3%;
          max-width: 1500px;
          bottom: 0;
          font-weight: lighter;
        }
      }

      @media only screen and (max-width: 1849px) {
        .sidebar {
            width: 20%;
        }

        .sidebar a {
            position: relative;
            top: 35%;
            font-size: 4vh;
        }

        .sidebar .logo {
            top: 7%;
        }

        .sidebar .image {
            width: 60%;
        }

        .sidebar .fas {
            font-size: 5vh;
        }

        .sidebar .fab {
            font-size: 5vh;
        }

        .bottombar {
            display: none;
        }
      }

      @media only screen and (max-width: 1100px) {
        .bottombar {
            display: inline;
            position: fixed;
            height: 9%;
            width: 100%;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 3;
            background: linear-gradient(rgb(58, 166, 255),rgb(78, 175, 255));
            overflow: auto;
        }

        .bottombar a {
            position: relative;
            margin-left: 8%;
        }

        .main .content form {
            margin-left: -25%;
            margin-right: 40%;
        }

        .main .content form .btn {
            position: relative;
            margin-top: 3vh;
            margin-bottom: 7vh;
            display: inline-block;
            bottom: 35%;
        }
      }
    </style>
        <div class="right-icon">
            <a href="/about" class="about"><i class="fas fa-users"></i></a>
            <a href="/support" class="support"><i class="fas fa-comments"></i></a>
        </div>
        <div class="main col">
            @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="content">
                <div class="col-md-6 col-xl-8">
                    @auth
                        <a href="{{ route('quizzes.edit',['quiz' => $quiz->id]) }}"
                        class="btn btn-primary m-2">Edit</a>
                        <form action="{{ route('quizzes.destroy',
                        ['quiz' => $quiz->id]) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                        <div>
                            <a class="logout" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    @endauth
                    <form action="{{ route('quizzes.check',
                    ['quiz' => $quiz->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf

                    <h2>{{ $quiz->name }}</h2>
                    <h3>Grade: {{ $quiz->grade }}</h3>
                    <h3>ID: {{ $quiz->id }}</h3>
                    <hr>

                    {{-- Quiz question #1 below --}}

                    @if ($quiz->image_1 != NULL)
                        <img class="image" src={{asset('storage/' . $quiz->image_1)}} alt="Image_1">
                    @endif

                    <p class="question">{!! $quiz->quiz_1 !!}</p>

                    <div class="form-group">
                        <div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="quiz_1_answer"
                            id="quiz_1_option1" value="A"
                            {{ old('quiz_1_answer')=='A' ? 'checked': '' }} >
                            <label class="form-check-label" for="quiz_1_option1">{{ $quiz->quiz_1_option1 }}</label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="quiz_1_answer"
                            id="quiz_1_option2" value="B"
                            {{ old('quiz_1_answer')=='B' ? 'checked': '' }} >
                            <label class="form-check-label" for="quiz_1_option2">{{ $quiz->quiz_1_option2 }}</label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="quiz_1_answer"
                            id="quiz_1_option3" value="C"
                            {{ old('quiz_1_answer')=='C' ? 'checked': '' }} >
                            <label class="form-check-label" for="quiz_1_option3">{{ $quiz->quiz_1_option3 }}</label>
                          </div>

                          @if($quiz->quiz_1_option4 != NULL)

                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="quiz_1_answer"
                                  id="quiz_1_option4" value="D"
                                  {{ old('quiz_1_answer')=='D' ? 'checked': '' }} >
                                  <label class="form-check-label" for="quiz_1_option4">{{ $quiz->quiz_1_option4 }}</label>
                                </div>

                                @if($quiz->quiz_1_option5 != NULL)

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="quiz_1_answer"
                                            id="quiz_1_option5" value="E"
                                            {{ old('quiz_1_answer')=='E' ? 'checked': '' }} >
                                            <label class="form-check-label" for="quiz_1_option5">{{ $quiz->quiz_1_option5 }}</label>
                                        </div>

                                @endif

                          @endif
                          @error('quiz_1_answer')
                            <div class="text-danger">{{ $message }}</div>
                          @enderror
                        </div>
                    </div>

                    {{-- Quiz question #2 below --}}

                    @if ($quiz->image_2 != NULL)
                        <img class="image" src={{asset('storage/' . $quiz->image_2)}} alt="Image_2">
                    @endif

                    <p class="question">{!! $quiz->quiz_2 !!}</p>

                    <div class="form-group">
                        <div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="quiz_2_answer"
                            id="quiz_2_option1" value="A"
                            {{ old('quiz_2_answer')=='A' ? 'checked': '' }} >
                            <label class="form-check-label" for="quiz_2_option1">{{ $quiz->quiz_2_option1 }}</label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="quiz_2_answer"
                            id="quiz_2_option2" value="B"
                            {{ old('quiz_2_answer')=='B' ? 'checked': '' }} >
                            <label class="form-check-label" for="quiz_2_option2">{{ $quiz->quiz_2_option2 }}</label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="quiz_2_answer"
                            id="quiz_2_option3" value="C"
                            {{ old('quiz_2_answer')=='C' ? 'checked': '' }} >
                            <label class="form-check-label" for="quiz_2_option3">{{ $quiz->quiz_2_option3 }}</label>
                          </div>

                          @if($quiz->quiz_2_option4 != NULL)

                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="quiz_2_answer"
                                  id="quiz_2_option4" value="D"
                                  {{ old('quiz_2_answer')=='D' ? 'checked': '' }} >
                                  <label class="form-check-label" for="quiz_2_option4">{{ $quiz->quiz_2_option4 }}</label>
                                </div>

                                @if($quiz->quiz_2_option5 != NULL)

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="quiz_2_answer"
                                            id="quiz_2_option5" value="E"
                                            {{ old('quiz_2_answer')=='E' ? 'checked': '' }} >
                                            <label class="form-check-label" for="quiz_2_option5">{{ $quiz->quiz_2_option5 }}</label>
                                        </div>

                                @endif

                          @endif
                          @error('quiz_2_answer')
                            <div class="text-danger">{{ $message }}</div>
                          @enderror
                        </div>
                    </div>

                    {{-- Quiz question #3 below --}}

                    @if ($quiz->image_3 != NULL)
                        <img class="image" src={{asset('storage/' . $quiz->image_3)}} alt="Image_3">
                    @endif

                    <p class="question">{!! $quiz->quiz_3 !!}</p>

                    <div class="form-group">
                        <div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="quiz_3_answer"
                            id="quiz_3_option1" value="A"
                            {{ old('quiz_3_answer')=='A' ? 'checked': '' }} >
                            <label class="form-check-label" for="quiz_3_option1">{{ $quiz->quiz_3_option1 }}</label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="quiz_3_answer"
                            id="quiz_3_option2" value="B"
                            {{ old('quiz_3_answer')=='B' ? 'checked': '' }} >
                            <label class="form-check-label" for="quiz_3_option2">{{ $quiz->quiz_3_option2 }}</label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="quiz_3_answer"
                            id="quiz_3_option3" value="C"
                            {{ old('quiz_3_answer')=='C' ? 'checked': '' }} >
                            <label class="form-check-label" for="quiz_3_option3">{{ $quiz->quiz_3_option3 }}</label>
                          </div>

                          @if($quiz->quiz_3_option4 != NULL)

                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="quiz_3_answer"
                                  id="quiz_3_option4" value="D"
                                  {{ old('quiz_3_answer')=='D' ? 'checked': '' }} >
                                  <label class="form-check-label" for="quiz_3_option4">{{ $quiz->quiz_3_option4 }}</label>
                                </div>

                                @if($quiz->quiz_3_option5 != NULL)

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="quiz_3_answer"
                                            id="quiz_3_option5" value="E"
                                            {{ old('quiz_3_answer')=='E' ? 'checked': '' }} >
                                            <label class="form-check-label" for="quiz_3_option5">{{ $quiz->quiz_3_option5 }}</label>
                                        </div>

                                @endif

                          @endif
                          @error('quiz_3_answer')
                            <div class="text-danger">{{ $message }}</div>
                          @enderror
                        </div>
                    </div>

                    {{-- Quiz question #4 below --}}

                    @if ($quiz->image_4 != NULL)
                        <img class="image" src={{asset('storage/' . $quiz->image_4)}} alt="Image_4">
                    @endif

                    @if ($quiz->quiz_4 != NULL)

                        <p class="question">{!! $quiz->quiz_4 !!}</p>

                        <div class="form-group">
                            <div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="quiz_4_answer"
                                id="quiz_4_option1" value="A"
                                {{ old('quiz_4_answer')=='A' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_4_option1">{{ $quiz->quiz_4_option1 }}</label>
                              </div>

                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="quiz_4_answer"
                                id="quiz_4_option2" value="B"
                                {{ old('quiz_3_answer')=='B' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_4_option2">{{ $quiz->quiz_4_option2 }}</label>
                              </div>

                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="quiz_4_answer"
                                id="quiz_4_option3" value="C"
                                {{ old('quiz_4_answer')=='C' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_4_option3">{{ $quiz->quiz_4_option3 }}</label>
                              </div>

                              @if($quiz->quiz_4_option4 != NULL)

                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="quiz_4_answer"
                                      id="quiz_4_option4" value="D"
                                      {{ old('quiz_4_answer')=='D' ? 'checked': '' }} >
                                      <label class="form-check-label" for="quiz_4_option4">{{ $quiz->quiz_4_option4 }}</label>
                                    </div>

                                    @if($quiz->quiz_4_option5 != NULL)

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="quiz_4_answer"
                                                id="quiz_4_option5" value="E"
                                                {{ old('quiz_4_answer')=='E' ? 'checked': '' }} >
                                                <label class="form-check-label" for="quiz_4_option5">{{ $quiz->quiz_4_option5 }}</label>
                                            </div>

                                    @endif

                              @endif
                              @error('quiz_4_answer')
                                <div class="text-danger">{{ $message }}</div>
                              @enderror
                            </div>
                        </div>

                    @endif

                    {{-- Quiz question #5 below --}}

                    @if ($quiz->image_5 != NULL)
                        <img class="image" src={{asset('storage/' . $quiz->image_5)}} alt="Image_5">
                    @endif

                    @if ($quiz->quiz_5 != NULL)

                        <p class="question">{!! $quiz->quiz_5 !!}</p>

                        <div class="form-group">
                            <div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="quiz_5_answer"
                                id="quiz_5_option1" value="A"
                                {{ old('quiz_5_answer')=='A' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_5_option1">{{ $quiz->quiz_5_option1 }}</label>
                              </div>

                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="quiz_5_answer"
                                id="quiz_5_option2" value="B"
                                {{ old('quiz_5_answer')=='B' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_5_option2">{{ $quiz->quiz_5_option2 }}</label>
                              </div>

                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="quiz_5_answer"
                                id="quiz_5_option3" value="C"
                                {{ old('quiz_5_answer')=='C' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_5_option3">{{ $quiz->quiz_5_option3 }}</label>
                              </div>

                              @if($quiz->quiz_5_option4 != NULL)

                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="quiz_5_answer"
                                      id="quiz_5_option4" value="D"
                                      {{ old('quiz_5_answer')=='D' ? 'checked': '' }} >
                                      <label class="form-check-label" for="quiz_5_option4">{{ $quiz->quiz_5_option4 }}</label>
                                    </div>

                                    @if($quiz->quiz_5_option5 != NULL)

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="quiz_5_answer"
                                                id="quiz_5_option5" value="E"
                                                {{ old('quiz_5_answer')=='E' ? 'checked': '' }} >
                                                <label class="form-check-label" for="quiz_5_option5">{{ $quiz->quiz_5_option5 }}</label>
                                            </div>

                                    @endif

                              @endif
                              @error('quiz_5_answer')
                                <div class="text-danger">{{ $message }}</div>
                              @enderror
                            </div>
                        </div>

                    @endif

                    {{-- Quiz question #6 below --}}

                    @if ($quiz->image_6 != NULL)
                        <img class="image" src={{asset('storage/' . $quiz->image_6)}} alt="Image_6">
                    @endif

                    @if ($quiz->quiz_6 != NULL)

                        <p class="question">{!! $quiz->quiz_6 !!}</p>

                        <div class="form-group">
                            <div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="quiz_6_answer"
                                id="quiz_6_option1" value="A"
                                {{ old('quiz_6_answer')=='A' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_6_option1">{{ $quiz->quiz_6_option1 }}</label>
                              </div>

                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="quiz_6_answer"
                                id="quiz_6_option2" value="B"
                                {{ old('quiz_6_answer')=='B' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_6_option2">{{ $quiz->quiz_6_option2 }}</label>
                              </div>

                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="quiz_6_answer"
                                id="quiz_6_option3" value="C"
                                {{ old('quiz_6_answer')=='C' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_6_option3">{{ $quiz->quiz_6_option3 }}</label>
                              </div>

                              @if($quiz->quiz_6_option4 != NULL)

                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="quiz_6_answer"
                                      id="quiz_6_option4" value="D"
                                      {{ old('quiz_6_answer')=='D' ? 'checked': '' }} >
                                      <label class="form-check-label" for="quiz_6_option4">{{ $quiz->quiz_6_option4 }}</label>
                                    </div>

                                    @if($quiz->quiz_6_option5 != NULL)

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="quiz_6_answer"
                                                id="quiz_6_option5" value="E"
                                                {{ old('quiz_6_answer')=='E' ? 'checked': '' }} >
                                                <label class="form-check-label" for="quiz_6_option5">{{ $quiz->quiz_6_option5 }}</label>
                                            </div>

                                    @endif

                              @endif
                              @error('quiz_6_answer')
                                <div class="text-danger">{{ $message }}</div>
                              @enderror
                            </div>
                        </div>

                    @endif

                    {{-- Quiz question #7 below --}}

                    @if ($quiz->image_7 != NULL)
                        <img class="image" src={{asset('storage/' . $quiz->image_7)}} alt="Image_7">
                    @endif

                    @if ($quiz->quiz_7 != NULL)

                        <p class="question">{!! $quiz->quiz_7 !!}</p>

                        <div class="form-group">
                            <div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="quiz_7_answer"
                                id="quiz_7_option1" value="A"
                                {{ old('quiz_7_answer')=='A' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_7_option1">{{ $quiz->quiz_7_option1 }}</label>
                              </div>

                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="quiz_7_answer"
                                id="quiz_7_option2" value="B"
                                {{ old('quiz_7_answer')=='B' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_7_option2">{{ $quiz->quiz_7_option2 }}</label>
                              </div>

                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="quiz_7_answer"
                                id="quiz_7_option3" value="C"
                                {{ old('quiz_7_answer')=='C' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_7_option3">{{ $quiz->quiz_7_option3 }}</label>
                              </div>

                              @if($quiz->quiz_7_option4 != NULL)

                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="quiz_7_answer"
                                      id="quiz_7_option4" value="D"
                                      {{ old('quiz_7_answer')=='D' ? 'checked': '' }} >
                                      <label class="form-check-label" for="quiz_7_option4">{{ $quiz->quiz_7_option4 }}</label>
                                    </div>

                                    @if($quiz->quiz_7_option5 != NULL)

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="quiz_7_answer"
                                                id="quiz_7_option5" value="E"
                                                {{ old('quiz_7_answer')=='E' ? 'checked': '' }} >
                                                <label class="form-check-label" for="quiz_7_option5">{{ $quiz->quiz_7_option5 }}</label>
                                            </div>

                                    @endif

                              @endif
                              @error('quiz_7_answer')
                                <div class="text-danger">{{ $message }}</div>
                              @enderror
                            </div>
                        </div>

                    @endif

                    {{-- Quiz question #8 below --}}

                    @if ($quiz->image_8 != NULL)
                        <img class="image" src={{asset('storage/' . $quiz->image_8)}} alt="Image_8">
                    @endif

                    @if ($quiz->quiz_8 != NULL)

                        <p class="question">{!! $quiz->quiz_8 !!}</p>

                        <div class="form-group">
                            <div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="quiz_8_answer"
                                id="quiz_8_option1" value="A"
                                {{ old('quiz_8_answer')=='A' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_8_option1">{{ $quiz->quiz_8_option1 }}</label>
                              </div>

                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="quiz_8_answer"
                                id="quiz_8_option2" value="B"
                                {{ old('quiz_8_answer')=='B' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_8_option2">{{ $quiz->quiz_8_option2 }}</label>
                              </div>

                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="quiz_8_answer"
                                id="quiz_8_option3" value="C"
                                {{ old('quiz_8_answer')=='C' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_8_option3">{{ $quiz->quiz_8_option3 }}</label>
                              </div>

                              @if($quiz->quiz_8_option4 != NULL)

                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="quiz_8_answer"
                                      id="quiz_8_option4" value="D"
                                      {{ old('quiz_8_answer')=='D' ? 'checked': '' }} >
                                      <label class="form-check-label" for="quiz_8_option4">{{ $quiz->quiz_8_option4 }}</label>
                                    </div>

                                    @if($quiz->quiz_8_option5 != NULL)

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="quiz_8_answer"
                                                id="quiz_8_option5" value="E"
                                                {{ old('quiz_8_answer')=='E' ? 'checked': '' }} >
                                                <label class="form-check-label" for="quiz_8_option5">{{ $quiz->quiz_8_option5 }}</label>
                                            </div>

                                    @endif

                              @endif
                              @error('quiz_8_answer')
                                <div class="text-danger">{{ $message }}</div>
                              @enderror
                            </div>
                        </div>

                    @endif

                    {{-- Quiz question #9 below --}}

                    @if ($quiz->image_9 != NULL)
                        <img class="image" src={{asset('storage/' . $quiz->image_9)}} alt="Image_9">
                    @endif

                    @if ($quiz->quiz_9 != NULL)

                        <p class="question">{!! $quiz->quiz_9 !!}</p>

                        <div class="form-group">
                            <div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="quiz_9_answer"
                                id="quiz_9_option1" value="A"
                                {{ old('quiz_9_answer')=='A' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_9_option1">{{ $quiz->quiz_9_option1 }}</label>
                              </div>

                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="quiz_9_answer"
                                id="quiz_9_option2" value="B"
                                {{ old('quiz_9_answer')=='B' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_9_option2">{{ $quiz->quiz_9_option2 }}</label>
                              </div>

                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="quiz_9_answer"
                                id="quiz_9_option3" value="C"
                                {{ old('quiz_9_answer')=='C' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_9_option3">{{ $quiz->quiz_9_option3 }}</label>
                              </div>

                              @if($quiz->quiz_9_option4 != NULL)

                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="quiz_9_answer"
                                      id="quiz_9_option4" value="D"
                                      {{ old('quiz_9_answer')=='D' ? 'checked': '' }} >
                                      <label class="form-check-label" for="quiz_9_option4">{{ $quiz->quiz_9_option4 }}</label>
                                    </div>

                                    @if($quiz->quiz_9_option5 != NULL)

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="quiz_9_answer"
                                                id="quiz_9_option5" value="E"
                                                {{ old('quiz_9_answer')=='E' ? 'checked': '' }} >
                                                <label class="form-check-label" for="quiz_9_option5">{{ $quiz->quiz_9_option5 }}</label>
                                            </div>

                                    @endif

                              @endif
                              @error('quiz_9_answer')
                                <div class="text-danger">{{ $message }}</div>
                              @enderror
                            </div>
                        </div>

                    @endif

                    {{-- Quiz question #10 below --}}

                    @if ($quiz->image_10 != NULL)
                        <img class="image" src={{asset('storage/' . $quiz->image_10)}} alt="Image_10">
                    @endif

                    @if ($quiz->quiz_10 != NULL)

                        <p class="question">{!! $quiz->quiz_10 !!}</p>

                        <div class="form-group">
                            <div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="quiz_10_answer"
                                id="quiz_10_option1" value="A"
                                {{ old('quiz_10_answer')=='A' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_10_option1">{{ $quiz->quiz_10_option1 }}</label>
                              </div>

                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="quiz_10_answer"
                                id="quiz_10_option2" value="B"
                                {{ old('quiz_10_answer')=='B' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_10_option2">{{ $quiz->quiz_10_option2 }}</label>
                              </div>

                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="quiz_10_answer"
                                id="quiz_10_option3" value="C"
                                {{ old('quiz_10_answer')=='C' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_10_option3">{{ $quiz->quiz_10_option3 }}</label>
                              </div>

                              @if($quiz->quiz_10_option4 != NULL)

                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="quiz_10_answer"
                                      id="quiz_10_option4" value="D"
                                      {{ old('quiz_10_answer')=='D' ? 'checked': '' }} >
                                      <label class="form-check-label" for="quiz_10_option4">{{ $quiz->quiz_10_option4 }}</label>
                                    </div>

                                    @if($quiz->quiz_10_option5 != NULL)

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="quiz_10_answer"
                                                id="quiz_10_option5" value="E"
                                                {{ old('quiz_10_answer')=='E' ? 'checked': '' }} >
                                                <label class="form-check-label" for="quiz_10_option5">{{ $quiz->quiz_10_option5 }}</label>
                                            </div>

                                    @endif

                              @endif
                              @error('quiz_10_answer')
                                <div class="text-danger">{{ $message }}</div>
                              @enderror
                            </div>
                        </div>

                    @endif
                        <button type="submit" class="btn btn-primary mb-2">Check Result</button>
                    </form>

                    <div class="bottom">
                        <h4 class="writers">Written by {{ $quiz->writer }} | Created at {{ Carbon\Carbon::parse($quiz->created_at)->format('g:i A l jS F Y') }}
                            @if ($quiz->updated_at != $quiz->created_at)
                                | Updated at {{ Carbon\Carbon::parse($quiz->updated_at)->format('g:i A l jS F Y') }}
                            @endif
                        </h4>
                    </div>

                </div>
            </div>
        </div>
@endsection
