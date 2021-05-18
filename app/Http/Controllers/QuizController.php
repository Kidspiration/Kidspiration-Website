<?php

namespace App\Http\Controllers;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class QuizController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
        $this->middleware('auth')->only('CreateQuiz','StoreQuiz','UpdateQuiz','edit','destroy');
    }

    public function quiz()
    {
        $quizzes = Quiz::all();
        return view ('admin.quiz-admin', ['quizzes' => $quizzes]);
    }

    public function CreateQuiz()
    {
        return view ('admin.create-quiz');
    }

    public function StoreQuiz(Request $request)
    {
        $validateData = $request->validate
        ([
            'grade' => 'required',
            'name' => 'required',
            'quiz_1' => 'required',
            'quiz_1_option1' => 'required',
            'quiz_1_option2' => 'required',
            'quiz_1_option3' => 'required',
            'quiz_1_option4' => '',
            'quiz_1_option5' => '',
            'quiz_1_correct' => 'required',
            'quiz_2' => 'required',
            'quiz_2_option1' => 'required',
            'quiz_2_option2' => 'required',
            'quiz_2_option3' => 'required',
            'quiz_2_option4' => '',
            'quiz_2_option5' => '',
            'quiz_2_correct' => 'required',
            'quiz_3' => 'required',
            'quiz_3_option1' => 'required',
            'quiz_3_option2' => 'required',
            'quiz_3_option3' => 'required',
            'quiz_3_option4' => '',
            'quiz_3_option5' => '',
            'quiz_3_correct' => 'required',
            'quiz_4' => '',
            'quiz_4_option1' => '',
            'quiz_4_option2' => '',
            'quiz_4_option3' => '',
            'quiz_4_option4' => '',
            'quiz_4_option5' => '',
            'quiz_4_correct' => '',
            'quiz_5' => '',
            'quiz_5_option1' => '',
            'quiz_5_option2' => '',
            'quiz_5_option3' => '',
            'quiz_5_option4' => '',
            'quiz_5_option5' => '',
            'quiz_5_correct' => '',
            'quiz_6' => '',
            'quiz_6_option1' => '',
            'quiz_6_option2' => '',
            'quiz_6_option3' => '',
            'quiz_6_option4' => '',
            'quiz_6_option5' => '',
            'quiz_6_correct' => '',
            'quiz_7' => '',
            'quiz_7_option1' => '',
            'quiz_7_option2' => '',
            'quiz_7_option3' => '',
            'quiz_7_option4' => '',
            'quiz_7_option5' => '',
            'quiz_7_correct' => '',
            'quiz_8' => '',
            'quiz_8_option1' => '',
            'quiz_8_option2' => '',
            'quiz_8_option3' => '',
            'quiz_8_option4' => '',
            'quiz_8_option5' => '',
            'quiz_8_correct' => '',
            'quiz_9' => '',
            'quiz_9_option1' => '',
            'quiz_9_option2' => '',
            'quiz_9_option3' => '',
            'quiz_9_option4' => '',
            'quiz_9_option5' => '',
            'quiz_9_correct' => '',
            'quiz_10' => '',
            'quiz_10_option1' => '',
            'quiz_10_option2' => '',
            'quiz_10_option3' => '',
            'quiz_10_option4' => '',
            'quiz_10_option5' => '',
            'quiz_10_correct' => '',
        ]);

        Quiz::create($validateData);

        return redirect()->route('courses.quiz')
        ->with('message',"{$validateData['name']} added successfully ");
    }

    public function UpdateQuiz(Request $request, $id)
    {
        // $validateData = $request->validate
        DB::table('quizzes')->where('id', $id)->update
        ([
            'grade' => $request->grade,
            'name' => $request->name,
            'quiz_1' => $request->quiz_1,
            'quiz_1_option1' => $request->quiz_1_option1,
            'quiz_1_option2' => $request->quiz_1_option2,
            'quiz_1_option3' => $request->quiz_1_option3,
            'quiz_1_option4' => $request->quiz_1_option4,
            'quiz_1_option5' => $request->quiz_1_option5,
            'quiz_1_correct' => $request->quiz_1_correct,
            'quiz_2' => $request->quiz_2,
            'quiz_2_option1' => $request->quiz_2_option1,
            'quiz_2_option2' => $request->quiz_2_option2,
            'quiz_2_option3' => $request->quiz_2_option3,
            'quiz_2_option4' => $request->quiz_2_option4,
            'quiz_2_option5' => $request->quiz_2_option5,
            'quiz_2_correct' => $request->quiz_2_correct,
            'quiz_3' => $request->quiz_3,
            'quiz_3_option1' => $request->quiz_3_option1,
            'quiz_3_option2' => $request->quiz_3_option2,
            'quiz_3_option3' => $request->quiz_3_option3,
            'quiz_3_option4' => $request->quiz_3_option4,
            'quiz_3_option5' => $request->quiz_3_option5,
            'quiz_3_correct' => $request->quiz_3_correct,
            'quiz_4' => $request->quiz_4,
            'quiz_4_option1' => $request->quiz_4_option1,
            'quiz_4_option2' => $request->quiz_4_option2,
            'quiz_4_option3' => $request->quiz_4_option3,
            'quiz_4_option4' => $request->quiz_4_option4,
            'quiz_4_option5' => $request->quiz_4_option5,
            'quiz_4_correct' => $request->quiz_4_correct,
            'quiz_5' => $request->quiz_5,
            'quiz_5_option1' => $request->quiz_5_option1,
            'quiz_5_option2' => $request->quiz_5_option2,
            'quiz_5_option3' => $request->quiz_5_option3,
            'quiz_5_option4' => $request->quiz_5_option4,
            'quiz_5_option5' => $request->quiz_5_option5,
            'quiz_5_correct' => $request->quiz_5_correct,
            'quiz_6' => $request->quiz_6,
            'quiz_6_option1' => $request->quiz_6_option1,
            'quiz_6_option2' => $request->quiz_6_option2,
            'quiz_6_option3' => $request->quiz_6_option3,
            'quiz_6_option4' => $request->quiz_6_option4,
            'quiz_6_option5' => $request->quiz_6_option5,
            'quiz_6_correct' => $request->quiz_6_correct,
            'quiz_7' => $request->quiz_7,
            'quiz_7_option1' => $request->quiz_7_option1,
            'quiz_7_option2' => $request->quiz_7_option2,
            'quiz_7_option3' => $request->quiz_7_option3,
            'quiz_7_option4' => $request->quiz_7_option4,
            'quiz_7_option5' => $request->quiz_7_option5,
            'quiz_7_correct' => $request->quiz_7_correct,
            'quiz_8' => $request->quiz_8,
            'quiz_8_option1' => $request->quiz_8_option1,
            'quiz_8_option2' => $request->quiz_8_option2,
            'quiz_8_option3' => $request->quiz_8_option3,
            'quiz_8_option4' => $request->quiz_8_option4,
            'quiz_8_option5' => $request->quiz_8_option5,
            'quiz_8_correct' => $request->quiz_8_correct,
            'quiz_9' => $request->quiz_9,
            'quiz_9_option1' => $request->quiz_9_option1,
            'quiz_9_option2' => $request->quiz_9_option2,
            'quiz_9_option3' => $request->quiz_9_option3,
            'quiz_9_option4' => $request->quiz_9_option4,
            'quiz_9_option5' => $request->quiz_9_option5,
            'quiz_9_correct' => $request->quiz_9_correct,
            'quiz_10' => $request->quiz_10,
            'quiz_10_option1' => $request->quiz_10_option1,
            'quiz_10_option2' => $request->quiz_10_option2,
            'quiz_10_option3' => $request->quiz_10_option3,
            'quiz_10_option4' => $request->quiz_10_option4,
            'quiz_10_option5' => $request->quiz_10_option5,
            'quiz_10_correct' => $request->quiz_10_correct,
            // 'grade' => 'required',
            // 'name' => 'required',
            // 'quiz_1' => 'required',
            // 'quiz_1_option1' => 'required',
            // 'quiz_1_option2' => 'required',
            // 'quiz_1_option3' => 'required',
            // 'quiz_1_option4' => '',
            // 'quiz_1_option5' => '',
            // 'quiz_1_correct' => 'required',
            // 'quiz_2' => 'required',
            // 'quiz_2_option1' => 'required',
            // 'quiz_2_option2' => 'required',
            // 'quiz_2_option3' => 'required',
            // 'quiz_2_option4' => '',
            // 'quiz_2_option5' => '',
            // 'quiz_2_correct' => 'required',
            // 'quiz_3' => 'required',
            // 'quiz_3_option1' => 'required',
            // 'quiz_3_option2' => 'required',
            // 'quiz_3_option3' => 'required',
            // 'quiz_3_option4' => '',
            // 'quiz_3_option5' => '',
            // 'quiz_3_correct' => 'required',
            // 'quiz_4' => '',
            // 'quiz_4_option1' => '',
            // 'quiz_4_option2' => '',
            // 'quiz_4_option3' => '',
            // 'quiz_4_option4' => '',
            // 'quiz_4_option5' => '',
            // 'quiz_4_correct' => '',
            // 'quiz_5' => '',
            // 'quiz_5_option1' => '',
            // 'quiz_5_option2' => '',
            // 'quiz_5_option3' => '',
            // 'quiz_5_option4' => '',
            // 'quiz_5_option5' => '',
            // 'quiz_5_correct' => '',
            // 'quiz_6' => '',
            // 'quiz_6_option1' => '',
            // 'quiz_6_option2' => '',
            // 'quiz_6_option3' => '',
            // 'quiz_6_option4' => '',
            // 'quiz_6_option5' => '',
            // 'quiz_6_correct' => '',
            // 'quiz_7' => '',
            // 'quiz_7_option1' => '',
            // 'quiz_7_option2' => '',
            // 'quiz_7_option3' => '',
            // 'quiz_7_option4' => '',
            // 'quiz_7_option5' => '',
            // 'quiz_7_correct' => '',
            // 'quiz_8' => '',
            // 'quiz_8_option1' => '',
            // 'quiz_8_option2' => '',
            // 'quiz_8_option3' => '',
            // 'quiz_8_option4' => '',
            // 'quiz_8_option5' => '',
            // 'quiz_8_correct' => '',
            // 'quiz_9' => '',
            // 'quiz_9_option1' => '',
            // 'quiz_9_option2' => '',
            // 'quiz_9_option3' => '',
            // 'quiz_9_option4' => '',
            // 'quiz_9_option5' => '',
            // 'quiz_9_correct' => '',
            // 'quiz_10' => '',
            // 'quiz_10_option1' => '',
            // 'quiz_10_option2' => '',
            // 'quiz_10_option3' => '',
            // 'quiz_10_option4' => '',
            // 'quiz_10_option5' => '',
            // 'quiz_10_correct' => '',
        ]);



        // Quiz::where('id', $request->id)->update($validateData);
        // $quiz->update($validateData);
        // return redirect()->route('courses.quiz');
        return redirect()->route('quizzes.showAdmin', ['quiz' => $id])
            ->with('message', "{$request->name} updated successfully");
        // dump($id);
    }

    public function Check(Request $request, $id)
    {
        $score = 0;

        // $answer1 =  Quiz::where('id', $id)->first('quiz_1_correct');
        // $answer2 =  Quiz::where('id', $id)->first('quiz_2_correct');
        // $answer3 =  Quiz::where('id', $id)->first('quiz_3_correct');

        $answer1 = DB::table('quizzes')
            ->where('id', $id)
            ->value('quiz_1_correct');

        $answer2 = DB::table('quizzes')
            ->where('id', $id)
            ->value('quiz_2_correct');

        $answer3 = DB::table('quizzes')
            ->where('id', $id)
            ->value('quiz_3_correct');

        if ($request->quiz_1_answer == $answer1)
        {
            $score += 10;
        }

        if ($request->quiz_2_answer == $answer2)
        {
            $score += 10;
        }

        if ($request->quiz_3_answer == $answer3)
        {
            $score += 10;
        }

        // dump ($score);
        // dump ($answer1);
        // dump ($answer2);
        // dump ($answer3);
        return view ('admin.result',['score' => $score]);
        // return redirect()->route('quizzes.result',['quiz' => $id]);
    }

    // public function Result(Quiz $quiz)
    // {
    //     return view ('admin.result',['quiz' => $quiz, 'nilai' => $score]);
    // }

    public function showAdmin(Quiz $quiz)
    {
        // $result = Mahasiswa::findOrFail($mahasiswa);
        return view('admin.show-quiz-admin',['quiz'=>$quiz]);
    }

    public function edit(Quiz $quiz)
    {
        return view('admin.edit-quiz',['quiz' => $quiz]);
    }

    public function destroy($id)
    {
        $quiz = DB::table('quizzes')->where('id',$id)->delete();
        return redirect()->route('courses.quiz')
            ->with('message',"Quiz deleted successfully ");
    }

    // public function destroy(Quiz $quiz)
    // {
    //     $quiz->delete();
    //     return redirect()->route('courses.quiz')
    //         ->with('message',"$quiz->name deleted successfully ");
    // }
}
