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
        $this->middleware('auth')->only('create','store','update','edit','destroy');
    }

    public function quiz()
    {
        $quizzes = Quiz::all()->sortBy('grade');
        return view ('admin.quiz-admin', ['quizzes' => $quizzes]);
    }

    public function create()
    {
        return view ('admin.create-quiz');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate
        ([
            'grade' => 'required',
            'name' => 'required',
            'quiz_1' => 'required',
            'quiz_1_option1' => 'required',
            'quiz_1_option2' => '',
            'quiz_1_option3' => '',
            'quiz_1_option4' => '',
            'quiz_1_option5' => '',
            'quiz_1_correct' => 'required',
            'quiz_2' => '',
            'quiz_2_option1' => '',
            'quiz_2_option2' => '',
            'quiz_2_option3' => '',
            'quiz_2_option4' => '',
            'quiz_2_option5' => '',
            'quiz_2_correct' => '',
            'quiz_3' => '',
            'quiz_3_option1' => '',
            'quiz_3_option2' => '',
            'quiz_3_option3' => '',
            'quiz_3_option4' => '',
            'quiz_3_option5' => '',
            'quiz_3_correct' => '',
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

        // Quiz::create($validateData);

        $quiz = new Quiz();
        $quiz->grade = $validateData['grade'];
        $quiz->name = $validateData['name'];

        if ($request['image_1'] != NULL)
            $quiz->image_1 = $validateData['image_1']->store('img','public');

        if ($request['image_2'] != NULL)
            $quiz->image_2 = $validateData['image_2']->store('img','public');

        if ($request['image_3'] != NULL)
            $quiz->image_3 = $validateData['image_3']->store('img','public');

        if ($request['image_4'] != NULL)
            $quiz->image_4 = $validateData['image_4']->store('img','public');

        if ($request['image_5'] != NULL)
            $quiz->image_5 = $validateData['image_5']->store('img','public');

        if ($request['image_6'] != NULL)
            $quiz->image_6 = $validateData['image_6']->store('img','public');

        if ($request['image_7'] != NULL)
            $quiz->image_7 = $validateData['image_7']->store('img','public');

        if ($request['image_8'] != NULL)
            $quiz->image_8 = $validateData['image_8']->store('img','public');

        if ($request['image_9'] != NULL)
            $quiz->image_9 = $validateData['image_9']->store('img','public');

        if ($request['image_10'] != NULL)
            $quiz->image_10 = $validateData['image_10']->store('img','public');

        $quiz->quiz_1 = $validateData['quiz_1'];
        $quiz->quiz_1_option1 = $validateData['quiz_1_option1'];
        $quiz->quiz_1_option2 = $validateData['quiz_1_option2'];
        $quiz->quiz_1_option3 = $validateData['quiz_1_option3'];
        $quiz->quiz_1_option4 = $validateData['quiz_1_option4'];
        $quiz->quiz_1_option5 = $validateData['quiz_1_option5'];
        $quiz->quiz_1_correct = $validateData['quiz_1_correct'];
        $quiz->quiz_2 = $validateData['quiz_2'];
        $quiz->quiz_2_option1 = $validateData['quiz_2_option1'];
        $quiz->quiz_2_option2 = $validateData['quiz_2_option2'];
        $quiz->quiz_2_option3 = $validateData['quiz_2_option3'];
        $quiz->quiz_2_option4 = $validateData['quiz_2_option4'];
        $quiz->quiz_2_option5 = $validateData['quiz_2_option5'];
        $quiz->quiz_2_correct = $validateData['quiz_2_correct'];
        $quiz->quiz_3 = $validateData['quiz_3'];
        $quiz->quiz_3_option1 = $validateData['quiz_3_option1'];
        $quiz->quiz_3_option2 = $validateData['quiz_3_option2'];
        $quiz->quiz_3_option3 = $validateData['quiz_3_option3'];
        $quiz->quiz_3_option4 = $validateData['quiz_3_option4'];
        $quiz->quiz_3_option5 = $validateData['quiz_3_option5'];
        $quiz->quiz_3_correct = $validateData['quiz_3_correct'];
        $quiz->quiz_4 = $validateData['quiz_4'];
        $quiz->quiz_4_option1 = $validateData['quiz_4_option1'];
        $quiz->quiz_4_option2 = $validateData['quiz_4_option2'];
        $quiz->quiz_4_option3 = $validateData['quiz_4_option3'];
        $quiz->quiz_4_option4 = $validateData['quiz_4_option4'];
        $quiz->quiz_4_option5 = $validateData['quiz_4_option5'];
        $quiz->quiz_4_correct = $validateData['quiz_4_correct'];
        $quiz->quiz_5 = $validateData['quiz_5'];
        $quiz->quiz_5_option1 = $validateData['quiz_5_option1'];
        $quiz->quiz_5_option2 = $validateData['quiz_5_option2'];
        $quiz->quiz_5_option3 = $validateData['quiz_5_option3'];
        $quiz->quiz_5_option4 = $validateData['quiz_5_option4'];
        $quiz->quiz_5_option5 = $validateData['quiz_5_option5'];
        $quiz->quiz_5_correct = $validateData['quiz_5_correct'];
        $quiz->quiz_6 = $validateData['quiz_6'];
        $quiz->quiz_6_option1 = $validateData['quiz_6_option1'];
        $quiz->quiz_6_option2 = $validateData['quiz_6_option2'];
        $quiz->quiz_6_option3 = $validateData['quiz_6_option3'];
        $quiz->quiz_6_option4 = $validateData['quiz_6_option4'];
        $quiz->quiz_6_option5 = $validateData['quiz_6_option5'];
        $quiz->quiz_6_correct = $validateData['quiz_6_correct'];
        $quiz->quiz_7 = $validateData['quiz_7'];
        $quiz->quiz_7_option1 = $validateData['quiz_7_option1'];
        $quiz->quiz_7_option2 = $validateData['quiz_7_option2'];
        $quiz->quiz_7_option3 = $validateData['quiz_7_option3'];
        $quiz->quiz_7_option4 = $validateData['quiz_7_option4'];
        $quiz->quiz_7_option5 = $validateData['quiz_7_option5'];
        $quiz->quiz_7_correct = $validateData['quiz_7_correct'];
        $quiz->quiz_8 = $validateData['quiz_8'];
        $quiz->quiz_8_option1 = $validateData['quiz_8_option1'];
        $quiz->quiz_8_option2 = $validateData['quiz_8_option2'];
        $quiz->quiz_8_option3 = $validateData['quiz_8_option3'];
        $quiz->quiz_8_option4 = $validateData['quiz_8_option4'];
        $quiz->quiz_8_option5 = $validateData['quiz_8_option5'];
        $quiz->quiz_8_correct = $validateData['quiz_8_correct'];
        $quiz->quiz_9 = $validateData['quiz_9'];
        $quiz->quiz_9_option1 = $validateData['quiz_9_option1'];
        $quiz->quiz_9_option2 = $validateData['quiz_9_option2'];
        $quiz->quiz_9_option3 = $validateData['quiz_9_option3'];
        $quiz->quiz_9_option4 = $validateData['quiz_9_option4'];
        $quiz->quiz_9_option5 = $validateData['quiz_9_option5'];
        $quiz->quiz_9_correct = $validateData['quiz_9_correct'];
        $quiz->quiz_10 = $validateData['quiz_10'];
        $quiz->quiz_10_option1 = $validateData['quiz_10_option1'];
        $quiz->quiz_10_option2 = $validateData['quiz_10_option2'];
        $quiz->quiz_10_option3 = $validateData['quiz_10_option3'];
        $quiz->quiz_10_option4 = $validateData['quiz_10_option4'];
        $quiz->quiz_10_option5 = $validateData['quiz_10_option5'];
        $quiz->quiz_10_correct = $validateData['quiz_10_correct'];
        $quiz->save();

        return redirect()->route('courses.quiz')
        ->with('message',"{$validateData['name']} added successfully ");
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate
        ([
            'image_1' => 'file|image|max:5000',
            'image_2' => 'file|image|max:5000',
            'image_3' => 'file|image|max:5000',
            'image_4' => 'file|image|max:5000',
            'image_5' => 'file|image|max:5000',
            'image_6' => 'file|image|max:5000',
            'image_7' => 'file|image|max:5000',
            'image_8' => 'file|image|max:5000',
            'image_9' => 'file|image|max:5000',
            'image_10' => 'file|image|max:5000',
        ]);

        if ($request['image_1'] != NULL)
            $request->image_1 = $validateData['image_1']->store('img','public');

        if ($request['image_2'] != NULL)
            $request->image_2 = $validateData['image_2']->store('img','public');

        if ($request['image_3'] != NULL)
            $request->image_3 = $validateData['image_3']->store('img','public');

        if ($request['image_4'] != NULL)
            $request->image_4 = $validateData['image_4']->store('img','public');

        if ($request['image_5'] != NULL)
            $request->image_5 = $validateData['image_5']->store('img','public');

        if ($request['image_6'] != NULL)
            $request->image_6 = $validateData['image_6']->store('img','public');

        if ($request['image_7'] != NULL)
            $request->image_7 = $validateData['image_7']->store('img','public');

        if ($request['image_8'] != NULL)
            $request->image_8 = $validateData['image_8']->store('img','public');

        if ($request['image_9'] != NULL)
            $request->image_9 = $validateData['image_9']->store('img','public');

        if ($request['image_10'] != NULL)
            $request->image_10 = $validateData['image_10']->store('img','public');

        DB::table('quizzes')->where('id', $id)->update
        ([
            'grade' => $request->grade,
            'name' => $request->name,
            'writer' => $request->writer,
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
            'image_1' => $request->image_1,
            'image_2' => $request->image_2,
            'image_3' => $request->image_3,
            'image_4' => $request->image_4,
            'image_5' => $request->image_5,
            'image_6' => $request->image_6,
            'image_7' => $request->image_7,
            'image_8' => $request->image_8,
            'image_9' => $request->image_9,
            'image_10' => $request->image_10,
            'updated_at' => DB::raw('now()'),
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
    }

    public function check(Request $request, $id)
    {
        $score = 0;

        // foreach below is broken and always fails

        // foreach ($request as $quiz)
        // {
        //     $answer[$quiz] = DB::table('quizzes')
        //     ->where('id', $id)
        //     ->value('quiz_'.[$quiz].'_correct');

        //     if ($request->quiz_[$quiz]_answer == $answer[$quiz])
        //     {
        //         $score += 10;
        //     }
        // }

        $answer1 = DB::table('quizzes')
            ->where('id', $id)
            ->value('quiz_1_correct');

        $answer2 = DB::table('quizzes')
            ->where('id', $id)
            ->value('quiz_2_correct');

        $answer3 = DB::table('quizzes')
            ->where('id', $id)
            ->value('quiz_3_correct');

        $answer4 = DB::table('quizzes')
            ->where('id', $id)
            ->value('quiz_4_correct');

        $answer5 = DB::table('quizzes')
            ->where('id', $id)
            ->value('quiz_5_correct');

        $answer6 = DB::table('quizzes')
            ->where('id', $id)
            ->value('quiz_6_correct');

        $answer7 = DB::table('quizzes')
            ->where('id', $id)
            ->value('quiz_7_correct');

        $answer8 = DB::table('quizzes')
            ->where('id', $id)
            ->value('quiz_8_correct');

        $answer9 = DB::table('quizzes')
            ->where('id', $id)
            ->value('quiz_9_correct');

        $answer10 = DB::table('quizzes')
            ->where('id', $id)
            ->value('quiz_10_correct');

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

        if ($request->quiz_4_answer == $answer4)
        {
            $score += 10;
        }

        if ($request->quiz_5_answer == $answer5)
        {
            $score += 10;
        }

        if ($request->quiz_6_answer == $answer6)
        {
            $score += 10;
        }

        if ($request->quiz_7_answer == $answer7)
        {
            $score += 10;
        }

        if ($request->quiz_8_answer == $answer8)
        {
            $score += 10;
        }

        if ($request->quiz_9_answer == $answer9)
        {
            $score += 10;
        }

        if ($request->quiz_10_answer == $answer10)
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

    public function show(Quiz $quiz)
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
