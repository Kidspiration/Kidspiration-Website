@extends('layout/master')
@section('title','Kidspiration Quizzes')

@section('content')
    <style>
        body {
            background-image: linear-gradient(rgba(255, 255, 255, 0.527),rgba(255, 255, 255, 0.534)), url(img/bg4.jpg);
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
          max-width: 100vh;
      }

      .main .content a {
        display: block;
        margin-bottom: 20px;
        text-align: justify;
        padding-left: 40px;
        padding-top: 30px;
        padding-bottom: 30px;
        border: 1px solid rgb(78, 175, 255);
        border-radius: 1vh;
        background: white;
        color: rgb(78, 175, 255);
      }

      .main .content a:hover {
        background: rgb(78, 175, 255);
        color: white;
      }

       .content form .form-group .option {
          margin-left: 3vh;
      }

      .content form .form-group .answer {
          margin-left: 3vh;
          width: 50%;
      }

       form .form-group .form-control {
          margin-bottom: 1vh;
      }

      .main .content form .form-group .number {
          margin-top: 5vh;
          width: 205%;
      }

      .bottombar .quizzes {
        color: #ffffff;
      }

      .main .content .logout {
          position: fixed;
          right: 5%;
      }

      @media only screen and (max-width: 1100px) {
        .bottombar {
            display: inline;
            position: fixed;
            height: 5%;
            width: 100%;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 3;
            background: linear-gradient(rgb(58, 166, 255),rgb(78, 175, 255));
            overflow: auto;
        }

        .bottombar a {
            font-size: 200%;
            position: relative;
            margin-left: 4%;
        }

        .main .content {
            margin-left: -35%;
        }

        .main .content .add {
            position: relative;
            display: inline-block;
            margin-left: 10%;
        }

        .main .content table {
            position: relative;
            display: inline-block;
            margin-right: 15%;
            margin-left: -23%;
        }

        .main .content table .quiz {
            display: block;
            margin-bottom: 7%;
            margin-right: -35%;
            padding-left: 15%;
            padding-right: 10%;
            padding-top: 10%;
            padding-bottom: 10%;
        }

      }
    </style>

        <div class="main col">
            <div class="content">
                @auth
                <div>
                    <a class="logout" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                @endauth
                <div class="col-md-8 col-xl-6">
                    <h1>Create Quiz</h1>
                    <hr>

                    <form action="{{ route('quizzes.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <input type="text"
                            class="form-control @error('grade') is-invalid @enderror"
                            id="grade" name="grade" value="{{ old('grade') }}" placeholder="Grade for example A, B, C, etc">
                            @error('grade')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="form-control @error('name') is-invalid @enderror"
                            id="name" name="name" value="{{ old('name') }}" placeholder="Name your quiz">
                            @error('name')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="number form-control @error('quiz_1') is-invalid @enderror"
                            id="quiz_1" name="quiz_1" value="{{ old('quiz_1') }}" placeholder="Quiz number 1">
                            @error('quiz_1')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="option form-control @error('quiz_1_option1') is-invalid @enderror"
                            id="quiz_1_option1" name="quiz_1_option1" value="{{ old('quiz_1_option1') }}" placeholder="First option">
                            @error('quiz_1_option1')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="option form-control @error('quiz_1_option2') is-invalid @enderror"
                            id="quiz_1_option2" name="quiz_1_option2" value="{{ old('quiz_1_option2') }}" placeholder="Second option">
                            @error('quiz_1_option2')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="option form-control @error('quiz_1_option3') is-invalid @enderror"
                            id="quiz_1_option3" name="quiz_1_option3" value="{{ old('quiz_1_option3') }}" placeholder="Third option">
                            @error('quiz_1_option3')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="option form-control @error('quiz_1_option4') is-invalid @enderror"
                            id="quiz_1_option4" name="quiz_1_option4" value="{{ old('quiz_1_option4') }}" placeholder="Fourth option">
                            @error('quiz_1_option4')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="option form-control @error('quiz_1_option5') is-invalid @enderror"
                            id="quiz_1_option5" name="quiz_1_option5" value="{{ old('quiz_1_option5') }}" placeholder="Fifth option">
                            @error('quiz_1_option5')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="answer form-control @error('quiz_1_correct') is-invalid @enderror"
                            id="quiz_1_correct" name="quiz_1_correct" value="{{ old('quiz_1_correct') }}" placeholder="Correct answer">
                            @error('quiz_1_correct')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="number form-control @error('quiz_2') is-invalid @enderror"
                            id="quiz_2" name="quiz_2" value="{{ old('quiz_2') }}" placeholder="Quiz number 2">
                            @error('quiz_2')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="option form-control @error('quiz_2_option1') is-invalid @enderror"
                            id="quiz_2_option1" name="quiz_2_option1" value="{{ old('quiz_2_option1') }}" placeholder="First option">
                            @error('quiz_2_option1')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="option form-control @error('quiz_2_option2') is-invalid @enderror"
                            id="quiz_2_option2" name="quiz_2_option2" value="{{ old('quiz_2_option2') }}" placeholder="Second option">
                            @error('quiz_2_option2')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="option form-control @error('quiz_2_option3') is-invalid @enderror"
                            id="quiz_2_option3" name="quiz_2_option3" value="{{ old('quiz_2_option3') }}" placeholder="Third option">
                            @error('quiz_2_option3')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="option form-control @error('quiz_2_option4') is-invalid @enderror"
                            id="quiz_2_option4" name="quiz_2_option4" value="{{ old('quiz_2_option4') }}" placeholder="Fourth option">
                            @error('quiz_2_option4')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="option form-control @error('quiz_2_option5') is-invalid @enderror"
                            id="quiz_2_option5" name="quiz_2_option5" value="{{ old('quiz_2_option5') }}" placeholder="Fifth option">
                            @error('quiz_2_option5')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="answer form-control @error('quiz_2_correct') is-invalid @enderror"
                            id="quiz_2_correct" name="quiz_2_correct" value="{{ old('quiz_2_correct') }}" placeholder="Correct answer">
                            @error('quiz_2_correct')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="number form-control @error('quiz_3') is-invalid @enderror"
                            id="quiz_3" name="quiz_3" value="{{ old('quiz_3') }}" placeholder="Quiz number 3">
                            @error('quiz_3')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="option form-control @error('quiz_3_option1') is-invalid @enderror"
                            id="quiz_3_option1" name="quiz_3_option1" value="{{ old('quiz_3_option1') }}" placeholder="First option">
                            @error('quiz_3_option1')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="option form-control @error('quiz_3_option2') is-invalid @enderror"
                            id="quiz_3_option2" name="quiz_3_option2" value="{{ old('quiz_3_option2') }}" placeholder="Second option">
                            @error('quiz_3_option2')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="option form-control @error('quiz_3_option3') is-invalid @enderror"
                            id="quiz_3_option3" name="quiz_3_option3" value="{{ old('quiz_3_option3') }}" placeholder="Third option">
                            @error('quiz_3_option3')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="option form-control @error('quiz_3_option4') is-invalid @enderror"
                            id="quiz_3_option4" name="quiz_3_option4" value="{{ old('quiz_3_option4') }}" placeholder="Fourth option">
                            @error('quiz_3_option4')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="option form-control @error('quiz_3_option5') is-invalid @enderror"
                            id="quiz_3_option5" name="quiz_3_option5" value="{{ old('quiz_3_option5') }}" placeholder="Fifth option">
                            @error('quiz_3_option5')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="answer form-control @error('quiz_3_correct') is-invalid @enderror"
                            id="quiz_3_correct" name="quiz_3_correct" value="{{ old('quiz_3_correct') }}" placeholder="Correct answer">
                            @error('quiz_3_correct')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="number form-control @error('quiz_4') is-invalid @enderror"
                            id="quiz_4" name="quiz_4" value="{{ old('quiz_4') }}" placeholder="Quiz number 4">
                            @error('quiz_4')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="option form-control @error('quiz_4_option1') is-invalid @enderror"
                            id="quiz_4_option1" name="quiz_4_option1" value="{{ old('quiz_4_option1') }}" placeholder="First option">
                            @error('quiz_4_option1')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="option form-control @error('quiz_4_option2') is-invalid @enderror"
                            id="quiz_4_option2" name="quiz_4_option2" value="{{ old('quiz_4_option2') }}" placeholder="Second option">
                            @error('quiz_4_option2')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="option form-control @error('quiz_4_option3') is-invalid @enderror"
                            id="quiz_4_option3" name="quiz_4_option3" value="{{ old('quiz_4_option3') }}" placeholder="Third option">
                            @error('quiz_4_option3')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="option form-control @error('quiz_4_option4') is-invalid @enderror"
                            id="quiz_4_option4" name="quiz_4_option4" value="{{ old('quiz_1_option4') }}" placeholder="Fourth option">
                            @error('quiz_4_option4')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="option form-control @error('quiz_4_option5') is-invalid @enderror"
                            id="quiz_4_option5" name="quiz_4_option5" value="{{ old('quiz_1_option5') }}" placeholder="Fifth option">
                            @error('quiz_4_option5')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="answer form-control @error('quiz_4_correct') is-invalid @enderror"
                            id="quiz_4_correct" name="quiz_4_correct" value="{{ old('quiz_4_correct') }}" placeholder="Correct answer">
                            @error('quiz_4_correct')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="number form-control @error('quiz_5') is-invalid @enderror"
                            id="quiz_5" name="quiz_5" value="{{ old('quiz_5') }}" placeholder="Quiz number 5">
                            @error('quiz_5')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="option form-control @error('quiz_5_option1') is-invalid @enderror"
                            id="quiz_5_option1" name="quiz_5_option1" value="{{ old('quiz_5_option1') }}" placeholder="First option">
                            @error('quiz_5_option1')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="option form-control @error('quiz_5_option2') is-invalid @enderror"
                            id="quiz_5_option2" name="quiz_5_option2" value="{{ old('quiz_1_option2') }}" placeholder="Second option">
                            @error('quiz_5_option2')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="option form-control @error('quiz_5_option3') is-invalid @enderror"
                            id="quiz_5_option3" name="quiz_5_option3" value="{{ old('quiz_1_option3') }}" placeholder="Third option">
                            @error('quiz_5_option3')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="option form-control @error('quiz_5_option4') is-invalid @enderror"
                            id="quiz_5_option4" name="quiz_5_option4" value="{{ old('quiz_1_option4') }}" placeholder="Fourth option">
                            @error('quiz_5_option4')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="option form-control @error('quiz_5_option5') is-invalid @enderror"
                            id="quiz_5_option5" name="quiz_5_option5" value="{{ old('quiz_1_option5') }}" placeholder="Fifth option">
                            @error('quiz_5_option5')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="answer form-control @error('quiz_5_correct') is-invalid @enderror"
                            id="quiz_5_correct" name="quiz_5_correct" value="{{ old('quiz_5_correct') }}" placeholder="Correct answer">
                            @error('quiz_5_correct')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="number form-control @error('quiz_6') is-invalid @enderror"
                            id="quiz_6" name="quiz_6" value="{{ old('quiz_6') }}" placeholder="Quiz number 6">
                            @error('quiz_6')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="option form-control @error('quiz_6_option1') is-invalid @enderror"
                            id="quiz_6_option1" name="quiz_6_option1" value="{{ old('quiz_6_option1') }}" placeholder="First option">
                            @error('quiz_6_option1')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="option form-control @error('quiz_6_option2') is-invalid @enderror"
                            id="quiz_6_option2" name="quiz_6_option2" value="{{ old('quiz_6_option2') }}" placeholder="Second option">
                            @error('quiz_6_option2')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="option form-control @error('quiz_6_option3') is-invalid @enderror"
                            id="quiz_6_option3" name="quiz_6_option3" value="{{ old('quiz_6_option3') }}" placeholder="Third option">
                            @error('quiz_6_option3')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="option form-control @error('quiz_6_option4') is-invalid @enderror"
                            id="quiz_6_option4" name="quiz_6_option4" value="{{ old('quiz_6_option4') }}" placeholder="Fourth option">
                            @error('quiz_6_option4')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="option form-control @error('quiz_6_option5') is-invalid @enderror"
                            id="quiz_6_option5" name="quiz_6_option5" value="{{ old('quiz_6_option5') }}" placeholder="Fifth option">
                            @error('quiz_6_option5')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="answer form-control @error('quiz_6_correct') is-invalid @enderror"
                            id="quiz_6_correct" name="quiz_6_correct" value="{{ old('quiz_6_correct') }}" placeholder="Correct answer">
                            @error('quiz_6_correct')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="number form-control @error('quiz_7') is-invalid @enderror"
                            id="quiz_7" name="quiz_7" value="{{ old('quiz_7') }}" placeholder="Quiz number 7">
                            @error('quiz_7')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="option form-control @error('quiz_7_option1') is-invalid @enderror"
                            id="quiz_7_option1" name="quiz_7_option1" value="{{ old('quiz_7_option1') }}" placeholder="First option">
                            @error('quiz_7_option1')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="option form-control @error('quiz_7_option2') is-invalid @enderror"
                            id="quiz_7_option2" name="quiz_7_option2" value="{{ old('quiz_7_option2') }}" placeholder="Second option">
                            @error('quiz_7_option2')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="option form-control @error('quiz_7_option3') is-invalid @enderror"
                            id="quiz_7_option3" name="quiz_7_option3" value="{{ old('quiz_7_option3') }}" placeholder="Third option">
                            @error('quiz_7_option3')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="option form-control @error('quiz_7_option4') is-invalid @enderror"
                            id="quiz_7_option4" name="quiz_7_option4" value="{{ old('quiz_7_option4') }}" placeholder="Fourth option">
                            @error('quiz_7_option4')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="option form-control @error('quiz_7_option5') is-invalid @enderror"
                            id="quiz_7_option5" name="quiz_7_option5" value="{{ old('quiz_7_option5') }}" placeholder="Fifth option">
                            @error('quiz_7_option5')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="answer form-control @error('quiz_7_correct') is-invalid @enderror"
                            id="quiz_7_correct" name="quiz_7_correct" value="{{ old('quiz_7_correct') }}" placeholder="Correct answer">
                            @error('quiz_7_correct')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="number form-control @error('quiz_8') is-invalid @enderror"
                            id="quiz_8" name="quiz_8" value="{{ old('quiz_8') }}" placeholder="Quiz number 8">
                            @error('quiz_8')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="option form-control @error('quiz_8_option1') is-invalid @enderror"
                            id="quiz_8_option1" name="quiz_8_option1" value="{{ old('quiz_8_option1') }}" placeholder="First option">
                            @error('quiz_8_option1')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="option form-control @error('quiz_8_option2') is-invalid @enderror"
                            id="quiz_8_option2" name="quiz_8_option2" value="{{ old('quiz_8_option2') }}" placeholder="Second option">
                            @error('quiz_8_option2')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="option form-control @error('quiz_8_option3') is-invalid @enderror"
                            id="quiz_8_option3" name="quiz_8_option3" value="{{ old('quiz_8_option3') }}" placeholder="Third option">
                            @error('quiz_8_option3')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="option form-control @error('quiz_8_option4') is-invalid @enderror"
                            id="quiz_8_option4" name="quiz_8_option4" value="{{ old('quiz_8_option4') }}" placeholder="Fourth option">
                            @error('quiz_8_option4')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="option form-control @error('quiz_8_option5') is-invalid @enderror"
                            id="quiz_8_option5" name="quiz_8_option5" value="{{ old('quiz_8_option5') }}" placeholder="Fifth option">
                            @error('quiz_8_option5')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="answer form-control @error('quiz_8_correct') is-invalid @enderror"
                            id="quiz_8_correct" name="quiz_8_correct" value="{{ old('quiz_8_correct') }}" placeholder="Correct answer">
                            @error('quiz_8_correct')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="number form-control @error('quiz_9') is-invalid @enderror"
                            id="quiz_9" name="quiz_9" value="{{ old('quiz_9') }}" placeholder="Quiz number 9">
                            @error('quiz_9')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text"
                            class="option form-control @error('quiz_9_option1') is-invalid @enderror"
                            id="quiz_9_option1" name="quiz_9_option1" value="{{ old('quiz_9_option1') }}" placeholder="First option">
                            @error('quiz_9_option1')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="option form-control @error('quiz_9_option2') is-invalid @enderror"
                            id="quiz_9_option2" name="quiz_9_option2" value="{{ old('quiz_9_option2') }}" placeholder="Second option">
                            @error('quiz_9_option2')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="option form-control @error('quiz_9_option3') is-invalid @enderror"
                            id="quiz_9_option3" name="quiz_9_option3" value="{{ old('quiz_9_option3') }}" placeholder="Third option">
                            @error('quiz_9_option3')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="option form-control @error('quiz_9_option4') is-invalid @enderror"
                            id="quiz_9_option4" name="quiz_9_option4" value="{{ old('quiz_9_option4') }}" placeholder="Fourth option">
                            @error('quiz_9_option4')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="option form-control @error('quiz_9_option5') is-invalid @enderror"
                            id="quiz_9_option5" name="quiz_9_option5" value="{{ old('quiz_9_option5') }}" placeholder="Fifth option">
                            @error('quiz_9_option5')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="answer form-control @error('quiz_9_correct') is-invalid @enderror"
                            id="quiz_9_correct" name="quiz_9_correct" value="{{ old('quiz_9_correct') }}" placeholder="Correct answer">
                            @error('quiz_9_correct')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="number form-control @error('quiz_10') is-invalid @enderror"
                            id="quiz_10" name="quiz_10" value="{{ old('quiz_10') }}" placeholder="Quiz number 10">
                            @error('quiz_10')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="option form-control @error('quiz_10_option1') is-invalid @enderror"
                            id="quiz_10_option1" name="quiz_10_option1" value="{{ old('quiz_10_option1') }}" placeholder="First option">
                            @error('quiz_10_option1')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="option form-control @error('quiz_10_option2') is-invalid @enderror"
                            id="quiz_10_option2" name="quiz_10_option2" value="{{ old('quiz_10_option2') }}" placeholder="Second option">
                            @error('quiz_10_option2')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="option form-control @error('quiz_10_option3') is-invalid @enderror"
                            id="quiz_10_option3" name="quiz_10_option3" value="{{ old('quiz_10_option3') }}" placeholder="Third option">
                            @error('quiz_10_option3')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="option form-control @error('quiz_10_option4') is-invalid @enderror"
                            id="quiz_10_option4" name="quiz_10_option4" value="{{ old('quiz_10_option4') }}" placeholder="Fourth option">
                            @error('quiz_10_option4')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="option form-control @error('quiz_10_option5') is-invalid @enderror"
                            id="quiz_10_option5" name="quiz_10_option5" value="{{ old('quiz_10_option5') }}" placeholder="Fifth option">
                            @error('quiz_10_option5')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="answer form-control @error('quiz_10_correct') is-invalid @enderror"
                            id="quiz_10_correct" name="quiz_10_correct" value="{{ old('quiz_10_correct') }}" placeholder="QCorrect answer">
                            @error('quiz_10_correct')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary mb-2">Create</button>
                        <button type="reset" class="btn btn-primary mb-2">Reset</button>
                    </form>
            </div>
        </div>
@endsection
