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
          font-family: 'Titillium Web', sans-serif;
          margin-bottom: 7vh;
      }

      .main .content .btn {
          margin-top: 3vh;
          margin-bottom: 3vh;
          background: rgb(78, 175, 255);
          color: white;
          border: 1px solid rgb(78, 175, 255);
      }

      .main .content .btn:hover {
          background: white;
          color: rgb(78, 175, 255);
      }

      .content form .form-group .letter {
          position: absolute;
          font-size: 4vh;
          margin-left: 3vh;
      }

       .content form .form-group .option {
          margin-top: 2vh;
          margin-left: 7vh;
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
          right: 3%;
          font-size: 3vh;
          padding: 1vh 2vh 1vh 2vh ;
          text-decoration: none;
      }

      .input-group label {
          padding: 7% 100% 7% 10%;
          margin-right: 7vh;
          font-size: 3vh;
      }

      .input-group select {
          font-size: 3vh;
          text-align: center;
          padding-left: 3vh;
          padding-right: 2vh;
      }

      .quiz-correct {
          font-size: 3vh;
          width: 500px;
      }

      .quiz-correct #abc {
          margin-left: 3vh;
          margin-right: 3vh;
          margin-bottom: 7vh;
      }

      .main .content .insert {
          margin-top: 3vh;
          margin-bottom: 3vh;
          font-size: 4vh;
      }

      .form-group .name {
          font-size: 4vh;
          width: 105vh;
      }

      .main .content .form-group .writer {
          width: 150%;
      }

        .row .sidebar .extra .support {
        padding-left: 1vh;
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
          left: 5%;
          right: 10%;
          top: 1%;
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
                        <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                @endauth
                <div class="col-md-8 ">
                    <h1>Create Quiz</h1>
                    <hr>

                    <form action="{{ route('quizzes.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                              <label class="input-group-text" for="grade">Grade</label>
                            </div>
                            <select class="custom-select @error('grade') is-invalid @enderror"" id="grade" name="grade">
                              <option selected>Choose...</option>
                              <option id="grade" name="grade" value="A">A</option>
                              <option id="grade" name="grade" value="B">B</option>
                              <option id="grade" name="grade" value="C">C</option>
                              <option id="grade" name="grade" value="D">D</option>
                              <option id="grade" name="grade" value="E">E</option>
                              <option id="grade" name="grade" value="F">F</option>
                            </select>
                            @error('grade')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="name form-control @error('name') is-invalid @enderror"
                            id="name" name="name" value="{{ old('name') }}" placeholder="Name your quiz">
                            @error('name')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                            class="writer form-control @error('writer') is-invalid @enderror"
                            id="writer" name="writer" value="{{ old('writer') }}" placeholder="Written by">
                            @error('writer')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- <div class="form-group">
                            <input type="text"
                            class="number form-control @error('quiz_1') is-invalid @enderror"
                            id="quiz_1" name="quiz_1" value="{{ old('quiz_1') }}" placeholder="Quiz number 1">
                            @error('quiz_1')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div> --}}

                        <div class="insert form-group">
                            <label for="berkas">Insert Image for Quiz 1 </label>
                            <input type="file" class="form-control-file" id="image_1" name="image_1" value="{{ old('image_1') }}">
                            @error('image_1')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <textarea id="summernote" name="quiz_1"></textarea>

                        <script>
                            $(document).ready(function() {
                                $('#summernote').summernote({
                                    placeholder: 'Input quiz 1 here',
                                    tabsize: 2,
                                    height: 175,
                                    width: 850,
                                    fontSizes: ['8', '9', '10', '11', '12', '13', '14', '16', '20', '24', '28', '36'],
                                    toolbar: [
                                        ['style', ['style']],
                                        ['font', ['bold', 'underline', 'clear']],
                                        ['fontsize', ['fontsize']],
                                        ['color', ['color']],
                                        ['para', ['ul', 'ol', 'paragraph']],
                                        ['table', ['table']],
                                        ['insert', ['link','picture']],
                                        ['view', ['fullscreen', 'codeview', 'help']]
                                    ]
                                });
                            });
                        </script>

                        <div class="form-group">
                            <label for="" class="letter">A</label>
                            <input type="text"
                            class="option form-control @error('quiz_1_option1') is-invalid @enderror"
                            id="quiz_1_option1" name="quiz_1_option1" value="{{ old('quiz_1_option1') }}" placeholder="First option">
                            @error('quiz_1_option1')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="" class="letter">B</label>
                            <input type="text"
                            class="option form-control @error('quiz_1_option2') is-invalid @enderror"
                            id="quiz_1_option2" name="quiz_1_option2" value="{{ old('quiz_1_option2') }}" placeholder="Second option">
                            @error('quiz_1_option2')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="" class="letter">C</label>
                            <input type="text"
                            class="option form-control @error('quiz_1_option3') is-invalid @enderror"
                            id="quiz_1_option3" name="quiz_1_option3" value="{{ old('quiz_1_option3') }}" placeholder="Third option">
                            @error('quiz_1_option3')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="" class="letter">D</label>
                            <input type="text"
                            class="option form-control @error('quiz_1_option4') is-invalid @enderror"
                            id="quiz_1_option4" name="quiz_1_option4" value="{{ old('quiz_1_option4') }}" placeholder="Fourth option">
                            @error('quiz_1_option4')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="" class="letter">E</label>
                            <input type="text"
                            class="option form-control @error('quiz_1_option5') is-invalid @enderror"
                            id="quiz_1_option5" name="quiz_1_option5" value="{{ old('quiz_1_option5') }}" placeholder="Fifth option">
                            @error('quiz_1_option5')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="quiz-correct form-group">
                            <div>
                              <label id="abc" for="quiz_1_correct">Correct Answer</label>

                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quiz_1_correct"
                                id="quiz_1_correct" value="A"
                                {{ old('quiz_1_correct') == 'A' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_1_correct">A</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quiz_1_correct"
                                id="quiz_1_correct" value="B"
                                {{ old('quiz_1_correct') == 'B' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_1_correct">B</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quiz_1_correct"
                                id="quiz_1_correct" value="C"
                                {{ old('quiz_1_correct') == 'C' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_1_correct">C</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quiz_1_correct"
                                id="quiz_1_correct" value="D"
                                {{ old('quiz_1_correct') == 'D' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_1_correct">D</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quiz_1_correct"
                                id="quiz_1_correct" value="E"
                                {{ old('quiz_1_correct') == 'E' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_1_correct">E</label>
                              </div>

                              @error('quiz_1_correct')
                                <div class="text-danger">{{ $message }}</div>
                              @enderror
                            </div>
                        </div>

                        {{-- <div class="form-group">
                            <input type="text"
                            class="number form-control @error('quiz_2') is-invalid @enderror"
                            id="quiz_2" name="quiz_2" value="{{ old('quiz_2') }}" placeholder="Quiz number 2">
                            @error('quiz_2')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div> --}}

                        <div class="insert form-group">
                            <label for="berkas">Insert Image for Quiz 2 </label>
                            <input type="file" class="form-control-file" id="image_2" name="image_2" value="{{ old('image_2') }}">
                            @error('image_2')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <textarea id="quiz2" name="quiz_2"></textarea>

                        <script>
                            $(document).ready(function() {
                                $('#quiz2').summernote({
                                    placeholder: 'Input quiz 2 here',
                                    tabsize: 2,
                                    height: 175,
                                    width: 850,
                                    fontSizes: ['8', '9', '10', '11', '12', '13', '14', '16', '20', '24', '28', '36'],
                                    toolbar: [
                                        ['style', ['style']],
                                        ['font', ['bold', 'underline', 'clear']],
                                        ['fontsize', ['fontsize']],
                                        ['color', ['color']],
                                        ['para', ['ul', 'ol', 'paragraph']],
                                        ['table', ['table']],
                                        ['insert', ['link','picture']],
                                        ['view', ['fullscreen', 'codeview', 'help']]
                                    ]
                                });
                            });
                        </script>

                        <div class="form-group">
                            <label for="" class="letter">A</label>
                            <input type="text"
                            class="option form-control @error('quiz_2_option1') is-invalid @enderror"
                            id="quiz_2_option1" name="quiz_2_option1" value="{{ old('quiz_2_option1') }}" placeholder="First option">
                            @error('quiz_2_option1')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="" class="letter">B</label>
                            <input type="text"
                            class="option form-control @error('quiz_2_option2') is-invalid @enderror"
                            id="quiz_2_option2" name="quiz_2_option2" value="{{ old('quiz_2_option2') }}" placeholder="Second option">
                            @error('quiz_2_option2')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="" class="letter">C</label>
                            <input type="text"
                            class="option form-control @error('quiz_2_option3') is-invalid @enderror"
                            id="quiz_2_option3" name="quiz_2_option3" value="{{ old('quiz_2_option3') }}" placeholder="Third option">
                            @error('quiz_2_option3')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="" class="letter">D</label>
                            <input type="text"
                            class="option form-control @error('quiz_2_option4') is-invalid @enderror"
                            id="quiz_2_option4" name="quiz_2_option4" value="{{ old('quiz_2_option4') }}" placeholder="Fourth option">
                            @error('quiz_2_option4')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="" class="letter">E</label>
                            <input type="text"
                            class="option form-control @error('quiz_2_option5') is-invalid @enderror"
                            id="quiz_2_option5" name="quiz_2_option5" value="{{ old('quiz_2_option5') }}" placeholder="Fifth option">
                            @error('quiz_2_option5')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="quiz-correct form-group">
                            <div>
                              <label id="abc" for="quiz_2_correct">Correct Answer</label>

                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quiz_2_correct"
                                id="quiz_2_correct" value="A"
                                {{ old('quiz_2_correct') == 'A' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_2_correct">A</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quiz_2_correct"
                                id="quiz_2_correct" value="B"
                                {{ old('quiz_2_correct') == 'B' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_2_correct">B</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quiz_2_correct"
                                id="quiz_2_correct" value="C"
                                {{ old('quiz_2_correct') == 'C' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_2_correct">C</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quiz_2_correct"
                                id="quiz_2_correct" value="D"
                                {{ old('quiz_2_correct') == 'D' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_2_correct">D</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quiz_2_correct"
                                id="quiz_2_correct" value="E"
                                {{ old('quiz_2_correct') == 'E' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_2_correct">E</label>
                              </div>

                              @error('quiz_2_correct')
                                <div class="text-danger">{{ $message }}</div>
                              @enderror
                            </div>
                        </div>

                        {{-- <div class="form-group">
                            <input type="text"
                            class="number form-control @error('quiz_3') is-invalid @enderror"
                            id="quiz_3" name="quiz_3" value="{{ old('quiz_3') }}" placeholder="Quiz number 3">
                            @error('quiz_3')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div> --}}

                        <div class="insert form-group">
                            <label for="berkas">Insert Image for Quiz 3 </label>
                            <input type="file" class="form-control-file" id="image_3" name="image_3" value="{{ old('image_3') }}">
                            @error('image_3')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <textarea id="quiz3" name="quiz_3"></textarea>

                        <script>
                            $(document).ready(function() {
                                $('#quiz3').summernote({
                                    placeholder: 'Input quiz 3 here',
                                    tabsize: 2,
                                    height: 175,
                                    width: 850,
                                    fontSizes: ['8', '9', '10', '11', '12', '13', '14', '16', '20', '24', '28', '36'],
                                    toolbar: [
                                        ['style', ['style']],
                                        ['font', ['bold', 'underline', 'clear']],
                                        ['fontsize', ['fontsize']],
                                        ['color', ['color']],
                                        ['para', ['ul', 'ol', 'paragraph']],
                                        ['table', ['table']],
                                        ['insert', ['link','picture']],
                                        ['view', ['fullscreen', 'codeview', 'help']]
                                    ]
                                });
                            });
                        </script>

                        <div class="form-group">
                            <label for="" class="letter">A</label>
                            <input type="text"
                            class="option form-control @error('quiz_3_option1') is-invalid @enderror"
                            id="quiz_3_option1" name="quiz_3_option1" value="{{ old('quiz_3_option1') }}" placeholder="First option">
                            @error('quiz_3_option1')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="" class="letter">B</label>
                            <input type="text"
                            class="option form-control @error('quiz_3_option2') is-invalid @enderror"
                            id="quiz_3_option2" name="quiz_3_option2" value="{{ old('quiz_3_option2') }}" placeholder="Second option">
                            @error('quiz_3_option2')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="" class="letter">C</label>
                            <input type="text"
                            class="option form-control @error('quiz_3_option3') is-invalid @enderror"
                            id="quiz_3_option3" name="quiz_3_option3" value="{{ old('quiz_3_option3') }}" placeholder="Third option">
                            @error('quiz_3_option3')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="" class="letter">D</label>
                            <input type="text"
                            class="option form-control @error('quiz_3_option4') is-invalid @enderror"
                            id="quiz_3_option4" name="quiz_3_option4" value="{{ old('quiz_3_option4') }}" placeholder="Fourth option">
                            @error('quiz_3_option4')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="" class="letter">E</label>
                            <input type="text"
                            class="option form-control @error('quiz_3_option5') is-invalid @enderror"
                            id="quiz_3_option5" name="quiz_3_option5" value="{{ old('quiz_3_option5') }}" placeholder="Fifth option">
                            @error('quiz_3_option5')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="quiz-correct form-group">
                            <div>
                              <label id="abc" for="quiz_3_correct">Correct Answer</label>

                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quiz_3_correct"
                                id="quiz_3_correct" value="A"
                                {{ old('quiz_3_correct') == 'A' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_3_correct">A</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quiz_3_correct"
                                id="quiz_3_correct" value="B"
                                {{ old('quiz_3_correct') == 'B' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_3_correct">B</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quiz_3_correct"
                                id="quiz_3_correct" value="C"
                                {{ old('quiz_3_correct') == 'C' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_3_correct">C</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quiz_3_correct"
                                id="quiz_3_correct" value="D"
                                {{ old('quiz_3_correct') == 'D' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_3_correct">D</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quiz_3_correct"
                                id="quiz_3_correct" value="E"
                                {{ old('quiz_3_correct') == 'E' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_3_correct">E</label>
                              </div>

                              @error('quiz_3_correct')
                                <div class="text-danger">{{ $message }}</div>
                              @enderror
                            </div>
                        </div>

                        {{-- <div class="form-group">
                            <input type="text"
                            class="number form-control @error('quiz_4') is-invalid @enderror"
                            id="quiz_4" name="quiz_4" value="{{ old('quiz_4') }}" placeholder="Quiz number 4">
                            @error('quiz_4')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div> --}}

                        <div class="insert form-group">
                            <label for="berkas">Insert Image for Quiz 4 </label>
                            <input type="file" class="form-control-file" id="image_4" name="image_4" value="{{ old('image_4') }}">
                            @error('image_4')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <textarea id="quiz4" name="quiz_4"></textarea>

                        <script>
                            $(document).ready(function() {
                                $('#quiz4').summernote({
                                    placeholder: 'Input quiz 4 here',
                                    tabsize: 2,
                                    height: 175,
                                    width: 850,
                                    fontSizes: ['8', '9', '10', '11', '12', '13', '14', '16', '20', '24', '28', '36'],
                                    toolbar: [
                                        ['style', ['style']],
                                        ['font', ['bold', 'underline', 'clear']],
                                        ['fontsize', ['fontsize']],
                                        ['color', ['color']],
                                        ['para', ['ul', 'ol', 'paragraph']],
                                        ['table', ['table']],
                                        ['insert', ['link','picture']],
                                        ['view', ['fullscreen', 'codeview', 'help']]
                                    ]
                                });
                            });
                        </script>

                        <div class="form-group">
                            <label for="" class="letter">A</label>
                            <input type="text"
                            class="option form-control @error('quiz_4_option1') is-invalid @enderror"
                            id="quiz_4_option1" name="quiz_4_option1" value="{{ old('quiz_4_option1') }}" placeholder="First option">
                            @error('quiz_4_option1')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="" class="letter">B</label>
                            <input type="text"
                            class="option form-control @error('quiz_4_option2') is-invalid @enderror"
                            id="quiz_4_option2" name="quiz_4_option2" value="{{ old('quiz_4_option2') }}" placeholder="Second option">
                            @error('quiz_4_option2')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="" class="letter">C</label>
                            <input type="text"
                            class="option form-control @error('quiz_4_option3') is-invalid @enderror"
                            id="quiz_4_option3" name="quiz_4_option3" value="{{ old('quiz_4_option3') }}" placeholder="Third option">
                            @error('quiz_4_option3')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="" class="letter">D</label>
                            <input type="text"
                            class="option form-control @error('quiz_4_option4') is-invalid @enderror"
                            id="quiz_4_option4" name="quiz_4_option4" value="{{ old('quiz_4_option4') }}" placeholder="Fourth option">
                            @error('quiz_4_option4')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="" class="letter">E</label>
                            <input type="text"
                            class="option form-control @error('quiz_4_option5') is-invalid @enderror"
                            id="quiz_4_option5" name="quiz_4_option5" value="{{ old('quiz_4_option5') }}" placeholder="Fifth option">
                            @error('quiz_4_option5')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="quiz-correct form-group">
                            <div>
                              <label id="abc" for="quiz_4_correct">Correct Answer</label>

                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quiz_4_correct"
                                id="quiz_4_correct" value="A"
                                {{ old('quiz_4_correct') == 'A' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_4_correct">A</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quiz_4_correct"
                                id="quiz_4_correct" value="B"
                                {{ old('quiz_4_correct') == 'B' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_4_correct">B</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quiz_4_correct"
                                id="quiz_4_correct" value="C"
                                {{ old('quiz_4_correct') == 'C' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_4_correct">C</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quiz_4_correct"
                                id="quiz_4_correct" value="D"
                                {{ old('quiz_4_correct') == 'D' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_4_correct">D</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quiz_4_correct"
                                id="quiz_4_correct" value="E"
                                {{ old('quiz_4_correct') == 'E' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_4_correct">E</label>
                              </div>

                              @error('quiz_4_correct')
                                <div class="text-danger">{{ $message }}</div>
                              @enderror
                            </div>
                        </div>

                        {{-- <div class="form-group">
                            <input type="text"
                            class="number form-control @error('quiz_5') is-invalid @enderror"
                            id="quiz_5" name="quiz_5" value="{{ old('quiz_5') }}" placeholder="Quiz number 5">
                            @error('quiz_5')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div> --}}

                        <div class="insert form-group">
                            <label for="berkas">Insert Image for Quiz 5 </label>
                            <input type="file" class="form-control-file" id="image_5" name="image_5" value="{{ old('image_5') }}">
                            @error('image_5')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <textarea id="quiz5" name="quiz_5"></textarea>

                        <script>
                            $(document).ready(function() {
                                $('#quiz5').summernote({
                                    placeholder: 'Input quiz 5 here',
                                    tabsize: 2,
                                    height: 175,
                                    width: 850,
                                    fontSizes: ['8', '9', '10', '11', '12', '13', '14', '16', '20', '24', '28', '36'],
                                    toolbar: [
                                        ['style', ['style']],
                                        ['font', ['bold', 'underline', 'clear']],
                                        ['fontsize', ['fontsize']],
                                        ['color', ['color']],
                                        ['para', ['ul', 'ol', 'paragraph']],
                                        ['table', ['table']],
                                        ['insert', ['link','picture']],
                                        ['view', ['fullscreen', 'codeview', 'help']]
                                    ]
                                });
                            });
                        </script>

                        <div class="form-group">
                            <label for="" class="letter">A</label>
                            <input type="text"
                            class="option form-control @error('quiz_5_option1') is-invalid @enderror"
                            id="quiz_5_option1" name="quiz_5_option1" value="{{ old('quiz_5_option1') }}" placeholder="First option">
                            @error('quiz_5_option1')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="" class="letter">B</label>
                            <input type="text"
                            class="option form-control @error('quiz_5_option2') is-invalid @enderror"
                            id="quiz_5_option2" name="quiz_5_option2" value="{{ old('quiz_5_option2') }}" placeholder="Second option">
                            @error('quiz_5_option2')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="" class="letter">C</label>
                            <input type="text"
                            class="option form-control @error('quiz_5_option3') is-invalid @enderror"
                            id="quiz_5_option3" name="quiz_5_option3" value="{{ old('quiz_5_option3') }}" placeholder="Third option">
                            @error('quiz_5_option3')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="" class="letter">D</label>
                            <input type="text"
                            class="option form-control @error('quiz_5_option4') is-invalid @enderror"
                            id="quiz_5_option4" name="quiz_5_option4" value="{{ old('quiz_5_option4') }}" placeholder="Fourth option">
                            @error('quiz_5_option4')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="" class="letter">E</label>
                            <input type="text"
                            class="option form-control @error('quiz_5_option5') is-invalid @enderror"
                            id="quiz_5_option5" name="quiz_5_option5" value="{{ old('quiz_5_option5') }}" placeholder="Fifth option">
                            @error('quiz_5_option5')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="quiz-correct form-group">
                            <div>
                              <label id="abc" for="quiz_5_correct">Correct Answer</label>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quiz_5_correct"
                                id="quiz_5_correct" value="A"
                                {{ old('quiz_5_correct') == 'A' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_5_correct">A</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quiz_5_correct"
                                id="quiz_5_correct" value="B"
                                {{ old('quiz_5_correct') == 'B' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_5_correct">B</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quiz_5_correct"
                                id="quiz_5_correct" value="C"
                                {{ old('quiz_5_correct') == 'C' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_5_correct">C</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quiz_5_correct"
                                id="quiz_5_correct" value="D"
                                {{ old('quiz_5_correct') == 'D' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_5_correct">D</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quiz_5_correct"
                                id="quiz_5_correct" value="E"
                                {{ old('quiz_5_correct') == 'E' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_5_correct">E</label>
                              </div>
                              @error('quiz_5_correct')
                                <div class="text-danger">{{ $message }}</div>
                              @enderror
                            </div>
                        </div>

                        {{-- <div class="form-group">
                            <input type="text"
                            class="number form-control @error('quiz_6') is-invalid @enderror"
                            id="quiz_6" name="quiz_6" value="{{ old('quiz_6') }}" placeholder="Quiz number 6">
                            @error('quiz_6')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div> --}}

                        <div class="insert form-group">
                            <label for="berkas">Insert Image for Quiz 6 </label>
                            <input type="file" class="form-control-file" id="image_6" name="image_6" value="{{ old('image_6') }}">
                            @error('image_6')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <textarea id="quiz6" name="quiz_6"></textarea>

                        <script>
                            $(document).ready(function() {
                                $('#quiz6').summernote({
                                    placeholder: 'Input quiz 6 here',
                                    tabsize: 2,
                                    height: 175,
                                    width: 850,
                                    fontSizes: ['8', '9', '10', '11', '12', '13', '14', '16', '20', '24', '28', '36'],
                                    toolbar: [
                                        ['style', ['style']],
                                        ['font', ['bold', 'underline', 'clear']],
                                        ['fontsize', ['fontsize']],
                                        ['color', ['color']],
                                        ['para', ['ul', 'ol', 'paragraph']],
                                        ['table', ['table']],
                                        ['insert', ['link','picture']],
                                        ['view', ['fullscreen', 'codeview', 'help']]
                                    ]
                                });
                            });
                        </script>

                        <div class="form-group">
                            <label for="" class="letter">A</label>
                            <input type="text"
                            class="option form-control @error('quiz_6_option1') is-invalid @enderror"
                            id="quiz_6_option1" name="quiz_6_option1" value="{{ old('quiz_6_option1') }}" placeholder="First option">
                            @error('quiz_6_option1')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="" class="letter">B</label>
                            <input type="text"
                            class="option form-control @error('quiz_6_option2') is-invalid @enderror"
                            id="quiz_6_option2" name="quiz_6_option2" value="{{ old('quiz_6_option2') }}" placeholder="Second option">
                            @error('quiz_6_option2')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="" class="letter">C</label>
                            <input type="text"
                            class="option form-control @error('quiz_6_option3') is-invalid @enderror"
                            id="quiz_6_option3" name="quiz_6_option3" value="{{ old('quiz_6_option3') }}" placeholder="Third option">
                            @error('quiz_6_option3')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="" class="letter">D</label>
                            <input type="text"
                            class="option form-control @error('quiz_6_option4') is-invalid @enderror"
                            id="quiz_6_option4" name="quiz_6_option4" value="{{ old('quiz_6_option4') }}" placeholder="Fourth option">
                            @error('quiz_6_option4')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="" class="letter">E</label>
                            <input type="text"
                            class="option form-control @error('quiz_6_option5') is-invalid @enderror"
                            id="quiz_6_option5" name="quiz_6_option5" value="{{ old('quiz_6_option5') }}" placeholder="Fifth option">
                            @error('quiz_6_option5')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="quiz-correct form-group">
                            <div>
                              <label id="abc" for="quiz_6_correct">Correct Answer</label>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quiz_6_correct"
                                id="quiz_6_correct" value="A"
                                {{ old('quiz_6_correct') == 'A' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_6_correct">A</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quiz_6_correct"
                                id="quiz_6_correct" value="B"
                                {{ old('quiz_6_correct') == 'B' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_6_correct">B</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quiz_6_correct"
                                id="quiz_6_correct" value="C"
                                {{ old('quiz_6_correct') == 'C' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_6_correct">C</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quiz_6_correct"
                                id="quiz_6_correct" value="D"
                                {{ old('quiz_6_correct') == 'D' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_6_correct">D</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quiz_6_correct"
                                id="quiz_6_correct" value="E"
                                {{ old('quiz_6_correct') == 'E' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_6_correct">E</label>
                              </div>
                              @error('quiz_6_correct')
                                <div class="text-danger">{{ $message }}</div>
                              @enderror
                            </div>
                        </div>

                        {{-- <div class="form-group">
                            <input type="text"
                            class="number form-control @error('quiz_7') is-invalid @enderror"
                            id="quiz_7" name="quiz_7" value="{{ old('quiz_7') }}" placeholder="Quiz number 7">
                            @error('quiz_7')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div> --}}

                        <div class="insert form-group">
                            <label for="berkas">Insert Image for Quiz 7 </label>
                            <input type="file" class="form-control-file" id="image_7" name="image_7" value="{{ old('image_7') }}">
                            @error('image_7')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <textarea id="quiz7" name="quiz_7"></textarea>

                        <script>
                            $(document).ready(function() {
                                $('#quiz7').summernote({
                                    placeholder: 'Input quiz 7 here',
                                    tabsize: 2,
                                    height: 175,
                                    width: 850,
                                    fontSizes: ['8', '9', '10', '11', '12', '13', '14', '16', '20', '24', '28', '36'],
                                    toolbar: [
                                        ['style', ['style']],
                                        ['font', ['bold', 'underline', 'clear']],
                                        ['fontsize', ['fontsize']],
                                        ['color', ['color']],
                                        ['para', ['ul', 'ol', 'paragraph']],
                                        ['table', ['table']],
                                        ['insert', ['link','picture']],
                                        ['view', ['fullscreen', 'codeview', 'help']]
                                    ]
                                });
                            });
                        </script>

                        <div class="form-group">
                            <label for="" class="letter">A</label>
                            <input type="text"
                            class="option form-control @error('quiz_7_option1') is-invalid @enderror"
                            id="quiz_7_option1" name="quiz_7_option1" value="{{ old('quiz_7_option1') }}" placeholder="First option">
                            @error('quiz_7_option1')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="" class="letter">B</label>
                            <input type="text"
                            class="option form-control @error('quiz_7_option2') is-invalid @enderror"
                            id="quiz_7_option2" name="quiz_7_option2" value="{{ old('quiz_7_option2') }}" placeholder="Second option">
                            @error('quiz_7_option2')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="" class="letter">C</label>
                            <input type="text"
                            class="option form-control @error('quiz_7_option3') is-invalid @enderror"
                            id="quiz_7_option3" name="quiz_7_option3" value="{{ old('quiz_7_option3') }}" placeholder="Third option">
                            @error('quiz_7_option3')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="" class="letter">D</label>
                            <input type="text"
                            class="option form-control @error('quiz_7_option4') is-invalid @enderror"
                            id="quiz_7_option4" name="quiz_7_option4" value="{{ old('quiz_7_option4') }}" placeholder="Fourth option">
                            @error('quiz_7_option4')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="" class="letter">E</label>
                            <input type="text"
                            class="option form-control @error('quiz_7_option5') is-invalid @enderror"
                            id="quiz_7_option5" name="quiz_7_option5" value="{{ old('quiz_7_option5') }}" placeholder="Fifth option">
                            @error('quiz_7_option5')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                         <div class="quiz-correct form-group">
                            <div>
                              <label id="abc" for="quiz_7_correct">Correct Answer</label>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quiz_7_correct"
                                id="quiz_7_correct" value="A"
                                {{ old('quiz_7_correct') == 'A' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_7_correct">A</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quiz_7_correct"
                                id="quiz_7_correct" value="B"
                                {{ old('quiz_7_correct') == 'B' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_7_correct">B</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quiz_7_correct"
                                id="quiz_7_correct" value="C"
                                {{ old('quiz_7_correct') == 'C' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_7_correct">C</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quiz_7_correct"
                                id="quiz_7_correct" value="D"
                                {{ old('quiz_7_correct') == 'D' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_7_correct">D</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quiz_7_correct"
                                id="quiz_7_correct" value="E"
                                {{ old('quiz_7_correct') == 'E' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_7_correct">E</label>
                              </div>
                              @error('quiz_7_correct')
                                <div class="text-danger">{{ $message }}</div>
                              @enderror
                            </div>
                        </div>

                        {{-- <div class="form-group">
                            <input type="text"
                            class="number form-control @error('quiz_8') is-invalid @enderror"
                            id="quiz_8" name="quiz_8" value="{{ old('quiz_8') }}" placeholder="Quiz number 8">
                            @error('quiz_8')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div> --}}

                        <div class="insert form-group">
                            <label for="berkas">Insert Image for Quiz 8 </label>
                            <input type="file" class="form-control-file" id="image_8" name="image_8" value="{{ old('image_8') }}">
                            @error('image_8')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <textarea id="quiz8" name="quiz_8"></textarea>

                        <script>
                            $(document).ready(function() {
                                $('#quiz8').summernote({
                                    placeholder: 'Input quiz 8 here',
                                    tabsize: 2,
                                    height: 175,
                                    width: 850,
                                    fontSizes: ['8', '9', '10', '11', '12', '13', '14', '16', '20', '24', '28', '36'],
                                    toolbar: [
                                        ['style', ['style']],
                                        ['font', ['bold', 'underline', 'clear']],
                                        ['fontsize', ['fontsize']],
                                        ['color', ['color']],
                                        ['para', ['ul', 'ol', 'paragraph']],
                                        ['table', ['table']],
                                        ['insert', ['link','picture']],
                                        ['view', ['fullscreen', 'codeview', 'help']]
                                    ]
                                });
                            });
                        </script>

                        <div class="form-group">
                            <label for="" class="letter">A</label>
                            <input type="text"
                            class="option form-control @error('quiz_8_option1') is-invalid @enderror"
                            id="quiz_8_option1" name="quiz_8_option1" value="{{ old('quiz_8_option1') }}" placeholder="First option">
                            @error('quiz_8_option1')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="" class="letter">B</label>
                            <input type="text"
                            class="option form-control @error('quiz_8_option2') is-invalid @enderror"
                            id="quiz_8_option2" name="quiz_8_option2" value="{{ old('quiz_8_option2') }}" placeholder="Second option">
                            @error('quiz_8_option2')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="" class="letter">C</label>
                            <input type="text"
                            class="option form-control @error('quiz_8_option3') is-invalid @enderror"
                            id="quiz_8_option3" name="quiz_8_option3" value="{{ old('quiz_8_option3') }}" placeholder="Third option">
                            @error('quiz_8_option3')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="" class="letter">D</label>
                            <input type="text"
                            class="option form-control @error('quiz_8_option4') is-invalid @enderror"
                            id="quiz_8_option4" name="quiz_8_option4" value="{{ old('quiz_8_option4') }}" placeholder="Fourth option">
                            @error('quiz_8_option4')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="" class="letter">E</label>
                            <input type="text"
                            class="option form-control @error('quiz_8_option5') is-invalid @enderror"
                            id="quiz_8_option5" name="quiz_8_option5" value="{{ old('quiz_8_option5') }}" placeholder="Fifth option">
                            @error('quiz_8_option5')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                       <div class="quiz-correct form-group">
                            <div>
                              <label id="abc" for="quiz_8_correct">Correct Answer</label>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quiz_8_correct"
                                id="quiz_8_correct" value="A"
                                {{ old('quiz_8_correct') == 'A' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_8_correct">A</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quiz_8_correct"
                                id="quiz_8_correct" value="B"
                                {{ old('quiz_8_correct') == 'B' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_8_correct">B</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quiz_8_correct"
                                id="quiz_8_correct" value="C"
                                {{ old('quiz_8_correct') == 'C' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_8_correct">C</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quiz_8_correct"
                                id="quiz_8_correct" value="D"
                                {{ old('quiz_8_correct') == 'D' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_8_correct">D</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quiz_8_correct"
                                id="quiz_8_correct" value="E"
                                {{ old('quiz_8_correct') == 'E' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_8_correct">E</label>
                              </div>
                              @error('quiz_8_correct')
                                <div class="text-danger">{{ $message }}</div>
                              @enderror
                            </div>
                        </div>

                        {{-- <div class="form-group">
                            <input type="text"
                            class="number form-control @error('quiz_9') is-invalid @enderror"
                            id="quiz_9" name="quiz_9" value="{{ old('quiz_9') }}" placeholder="Quiz number 9">
                            @error('quiz_9')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div> --}}

                        <div class="insert form-group">
                            <label for="berkas">Insert Image for Quiz 9 </label>
                            <input type="file" class="form-control-file" id="image_9" name="image_9" value="{{ old('image_9') }}">
                            @error('image_9')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <textarea id="quiz9" name="quiz_9"></textarea>

                        <script>
                            $(document).ready(function() {
                                $('#quiz9').summernote({
                                    placeholder: 'Input quiz 9 here',
                                    tabsize: 2,
                                    height: 175,
                                    width: 850,
                                    fontSizes: ['8', '9', '10', '11', '12', '13', '14', '16', '20', '24', '28', '36'],
                                    toolbar: [
                                        ['style', ['style']],
                                        ['font', ['bold', 'underline', 'clear']],
                                        ['fontsize', ['fontsize']],
                                        ['color', ['color']],
                                        ['para', ['ul', 'ol', 'paragraph']],
                                        ['table', ['table']],
                                        ['insert', ['link','picture']],
                                        ['view', ['fullscreen', 'codeview', 'help']]
                                    ]
                                });
                            });
                        </script>

                        <div class="form-group">
                            <label for="" class="letter">A</label>
                            <input type="text"
                            class="option form-control @error('quiz_9_option1') is-invalid @enderror"
                            id="quiz_9_option1" name="quiz_9_option1" value="{{ old('quiz_9_option1') }}" placeholder="First option">
                            @error('quiz_9_option1')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="" class="letter">B</label>
                            <input type="text"
                            class="option form-control @error('quiz_9_option2') is-invalid @enderror"
                            id="quiz_9_option2" name="quiz_9_option2" value="{{ old('quiz_9_option2') }}" placeholder="Second option">
                            @error('quiz_9_option2')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="" class="letter">C</label>
                            <input type="text"
                            class="option form-control @error('quiz_9_option3') is-invalid @enderror"
                            id="quiz_9_option3" name="quiz_9_option3" value="{{ old('quiz_9_option3') }}" placeholder="Third option">
                            @error('quiz_9_option3')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="" class="letter">D</label>
                            <input type="text"
                            class="option form-control @error('quiz_9_option4') is-invalid @enderror"
                            id="quiz_9_option4" name="quiz_9_option4" value="{{ old('quiz_9_option4') }}" placeholder="Fourth option">
                            @error('quiz_9_option4')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="" class="letter">E</label>
                            <input type="text"
                            class="option form-control @error('quiz_9_option5') is-invalid @enderror"
                            id="quiz_9_option5" name="quiz_9_option5" value="{{ old('quiz_9_option5') }}" placeholder="Fifth option">
                            @error('quiz_9_option5')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="quiz-correct form-group">
                            <div>
                              <label id="abc" for="quiz_9_correct">Correct Answer</label>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quiz_9_correct"
                                id="quiz_9_correct" value="A"
                                {{ old('quiz_9_correct') == 'A' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_9_correct">A</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quiz_9_correct"
                                id="quiz_9_correct" value="B"
                                {{ old('quiz_9_correct') == 'B' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_9_correct">B</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quiz_9_correct"
                                id="quiz_9_correct" value="C"
                                {{ old('quiz_9_correct') == 'C' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_9_correct">C</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quiz_9_correct"
                                id="quiz_9_correct" value="D"
                                {{ old('quiz_9_correct') == 'D' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_9_correct">D</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quiz_9_correct"
                                id="quiz_9_correct" value="E"
                                {{ old('quiz_9_correct') == 'E' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_9_correct">E</label>
                              </div>
                              @error('quiz_9_correct')
                                <div class="text-danger">{{ $message }}</div>
                              @enderror
                            </div>
                        </div>

                        {{-- <div class="form-group">
                            <input type="text"
                            class="number form-control @error('quiz_10') is-invalid @enderror"
                            id="quiz_10" name="quiz_10" value="{{ old('quiz_10') }}" placeholder="Quiz number 10">
                            @error('quiz_10')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div> --}}

                        <div class="insert form-group">
                            <label for="berkas">Insert Image for Quiz 10 </label>
                            <input type="file" class="form-control-file" id="image_10" name="image_10" value="{{ old('image_10') }}">
                            @error('image_10')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <textarea id="quiz10" name="quiz_10"></textarea>

                        <script>
                            $(document).ready(function() {
                                $('#quiz10').summernote({
                                    placeholder: 'Input quiz 10 here',
                                    tabsize: 2,
                                    height: 175,
                                    width: 850,
                                    fontSizes: ['8', '9', '10', '11', '12', '13', '14', '16', '20', '24', '28', '36'],
                                    toolbar: [
                                        ['style', ['style']],
                                        ['font', ['bold', 'underline', 'clear']],
                                        ['fontsize', ['fontsize']],
                                        ['color', ['color']],
                                        ['para', ['ul', 'ol', 'paragraph']],
                                        ['table', ['table']],
                                        ['insert', ['link','picture']],
                                        ['view', ['fullscreen', 'codeview', 'help']]
                                    ]
                                });
                            });
                        </script>

                        <div class="form-group">
                            <label for="" class="letter">A</label>
                            <input type="text"
                            class="option form-control @error('quiz_10_option1') is-invalid @enderror"
                            id="quiz_10_option1" name="quiz_10_option1" value="{{ old('quiz_10_option1') }}" placeholder="First option">
                            @error('quiz_10_option1')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="" class="letter">B</label>
                            <input type="text"
                            class="option form-control @error('quiz_10_option2') is-invalid @enderror"
                            id="quiz_10_option2" name="quiz_10_option2" value="{{ old('quiz_10_option2') }}" placeholder="Second option">
                            @error('quiz_10_option2')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="" class="letter">C</label>
                            <input type="text"
                            class="option form-control @error('quiz_10_option3') is-invalid @enderror"
                            id="quiz_10_option3" name="quiz_10_option3" value="{{ old('quiz_10_option3') }}" placeholder="Third option">
                            @error('quiz_10_option3')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="" class="letter">D</label>
                            <input type="text"
                            class="option form-control @error('quiz_10_option4') is-invalid @enderror"
                            id="quiz_10_option4" name="quiz_10_option4" value="{{ old('quiz_10_option4') }}" placeholder="Fourth option">
                            @error('quiz_10_option4')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="" class="letter">E</label>
                            <input type="text"
                            class="option form-control @error('quiz_10_option5') is-invalid @enderror"
                            id="quiz_10_option5" name="quiz_10_option5" value="{{ old('quiz_10_option5') }}" placeholder="Fifth option">
                            @error('quiz_10_option5')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="quiz-correct form-group">
                            <div>
                              <label id="abc" for="quiz_10_correct">Correct Answer</label>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quiz_10_correct"
                                id="quiz_10_correct" value="A"
                                {{ old('quiz_10_correct') == 'A' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_10_correct">A</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quiz_10_correct"
                                id="quiz_10_correct" value="B"
                                {{ old('quiz_10_correct') == 'B' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_10_correct">B</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quiz_10_correct"
                                id="quiz_10_correct" value="C"
                                {{ old('quiz_10_correct') == 'C' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_10_correct">C</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quiz_10_correct"
                                id="quiz_10_correct" value="D"
                                {{ old('quiz_10_correct') == 'D' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_10_correct">D</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quiz_10_correct"
                                id="quiz_10_correct" value="E"
                                {{ old('quiz_10_correct') == 'E' ? 'checked': '' }} >
                                <label class="form-check-label" for="quiz_10_correct">E</label>
                              </div>
                              @error('quiz_10_correct')
                                <div class="text-danger">{{ $message }}</div>
                              @enderror
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mb-2">Create</button>
                        <button type="reset" class="btn btn-primary mb-2">Reset</button>
                    </form>
            </div>
        </div>
@endsection
