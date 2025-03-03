<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Chapter;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Event;
use App\Models\Course;
use App\Models\Test;
use App\Models\SelfStudyMaterial;
use App\Models\Question;
use App\Models\Answer;
use App\Models\UserAnswer;
use App\Models\TestResult;
use App\Models\Payment;
use App\Models\Vebinar;
use App\Models\Theme;
use App\Models\Message;
use App\Models\MessageAttachment;
use App\Models\Group;
use Illuminate\Support\Facades\Log;
use function GuzzleHttp\default_ca_bundle;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
class EducationController extends Controller
{
    //
    public function index() {
        return view("education.index");
    }

    public function showCourses(Request $request) 
    {
        $user = $request->user();
        $paysIds = Payment::where(['user_id' => $user->id])->where('status', '!=', 'failed')->pluck('course_id')->toArray();;
        Log::debug($paysIds);
        /* foreach ($pays as $pay) {

        } */
        /* $courses = Course::where(['user_id' => $user->id, 'type' => 'course'])->get(); */
        $courses = Course::whereIn('id', $paysIds)->get();
        //Сделать идентификатор доступности оплаты
        $availableCourses = Course::whereNotIn('id', $paysIds)->whereNotNull('price')->get();
        return view('education.courses', compact('courses', 'availableCourses'));
        
    }

    public function showCourse(Request $request, $course_id)
    {
        $user = $request->user();
        $course = Course::find($course_id);
        $chapters = Chapter::where(['course_id' => $course_id])->with('themes')->get();
        $themes = Theme::where(['course_id' => $course_id])->get();
        /* return $course; */
        return view('education.course', compact('course', 'themes', 'chapters'));
        
    }

    public function showCoursesByGroup (Request $request, $group)
    {
        $user = $request->user();
        $group = Group::where(['alias' => $group])->first();
        if (!$group)
            return view('errors.404');
        $groupName = $group->name;
        $courses = $group->courses()->get();
        return view('education.groups', compact('courses', 'groupName'));

    }

    public function showEvent(Request $request, $course_id, $id)
    {
        $user = $request->user();
        /* Log::debug($user->permissions()->get()); */
        $event = Event::find($id);
        if ($event->status != 'inProgress') {

            /* $permissions = $user->permissions()->get();
            $permissions = $permissions->pluck('slug')->toArray();
            if (!in_array('view-events', $permissions)) {
                return view('errors.accessError', ['error_title' => 'Материалы пока не доступны', 'error_message' => 'У вас нет доступа к этой странице.']);
            } */
            if (!$user->hasAnyAccess(['content.viewEvents'])) {
                return view('errors.accessError', ['error_title' => 'Материалы пока не доступны', 'error_message' => 'У вас нет доступа к этой странице.']);
            }
            else  {
                switch ($event->type) {
                    case 'selfStudyMaterial':
                        $selfStudyMaterial = SelfStudyMaterial::where(['event_id' => $id])->first();

                        $allTests = Event::where(['type' => 'test'])->where('id', '<', $id)->where('course_id', $event->course_id)

                        ->whereDate('start_date', '<', $event->start_date)
                        ->orderBy('id','asc')->get();
                        foreach ($allTests as $eventTest) {
                            $testFinded = Test::where(['event_id' => $eventTest->id])->first();
                            /* Log::info($testFinded); */
                            $testPassed = TestResult::where(['test_id' => $testFinded->id, 'user_id' => $user->id, 'passed' => 1])->first();
                            /* Log::info($testPassed); */
                            if (!$testPassed)
                                return redirect()->route('education.showTest', ['id' => $testFinded->id, 'course_id' => $course_id]);
                        }
                        return redirect()->route('education.showSelfStudyMaterial', ['id' => $selfStudyMaterial->id, 'course_id' => $course_id]);
                        /* return view('education.events.lection', compact('event')); */
                    case 'test':

                        $allTests = Event::where(['type' => 'test'])->where('id', '<', $id)->where('course_id', $event->course_id)

                        ->whereDate('start_date', '<', $event->start_date)
                        ->orderBy('id','asc')->get();
                        foreach ($allTests as $eventTest) {
                            $testFinded = Test::where(['event_id' => $eventTest->id])->first();
                            $testPassed = TestResult::where(['test_id' => $testFinded->id, 'user_id' => $user->id, 'passed' => 1])->first();
                            /* Log::info($testPassed); */
                            if (!$testPassed)
                                return redirect()->route('education.showTest', ['id' => $testFinded->id, 'course_id' => $course_id]);
                        }        
                        $test = Test::where(['event_id' => $id])->first();
                        return redirect()->route('education.showTest', ['id' => $test->id, 'course_id' => $course_id]);
                    case 'vebinar':
                        $vebinar = Vebinar::where(['event_id' => $id])->first();
                        return redirect()->route('education.showVebinar', ['id' => $vebinar->id, 'course_id' => $course_id]);
                        /* return view('errors.accessError', ['error_title' => 'Вебинар еще не начался', 'error_message' => 'Вебинар начнется 29 Ноября в 19:30 по МСК']); */
                    case 'record':
                        $selfStudyMaterial = SelfStudyMaterial::where(['event_id' => $id])->first();
                        return redirect()->route('education.showSelfStudyMaterial', ['id' => $selfStudyMaterial->id, 'course_id' => $course_id]);
                    default:
                        return view('education.events.selfStudyMaterial', compact('event'));
                    
                
                }
            }
        }
        switch ($event->type) {
            case 'selfStudyMaterial':
                $selfStudyMaterial = SelfStudyMaterial::where(['event_id' => $id])->first();

                $allTests = Event::where(['type' => 'test'])->where('id', '<', $id)->where('course_id', $event->course_id)

                ->whereDate('start_date', '<', $event->start_date)
                ->orderBy('id','asc')->get();
                
                foreach ($allTests as $eventTest) {
                    $testFinded = Test::where(['event_id' => $eventTest->id])->first();
                    /* Log::info($testFinded); */
                    $testPassed = TestResult::where(['test_id' => $testFinded->id, 'user_id' => $user->id, 'passed' => 1])->first();
                    /* Log::info($testPassed); */
                    if (!$testPassed)
                        return redirect()->route('education.showTest', ['id' => $testFinded->id, 'course_id' => $course_id]);
                }
                return redirect()->route('education.showSelfStudyMaterial', ['id' => $selfStudyMaterial->id, 'course_id' => $course_id]);
                /* return view('education.events.lection', compact('event')); */
            case 'test':

                $allTests = Event::where(['type' => 'test'])->where('id', '<', $id)->where('course_id', $event->course_id)

                ->whereDate('start_date', '<', $event->start_date)
                ->orderBy('id','asc')->get();
                foreach ($allTests as $eventTest) {
                    $testFinded = Test::where(['event_id' => $eventTest->id])->first();
                    $testPassed = TestResult::where(['test_id' => $testFinded->id, 'user_id' => $user->id, 'passed' => 1])->first();
                    /* Log::info($testPassed); */
                    if (!$testPassed)
                        return redirect()->route('education.showTest', ['id' => $testFinded->id, 'course_id' => $course_id]);
                }        
                $test = Test::where(['event_id' => $id])->first();
                return redirect()->route('education.showTest', ['id' => $test->id, 'course_id' => $course_id]);
            case 'vebinar':
                $vebinar = Vebinar::where(['event_id' => $id])->first();
                return redirect()->route('education.showVebinar', ['id' => $vebinar->id, 'course_id' => $course_id]);
                /* return view('errors.accessError', ['error_title' => 'Вебинар еще не начался', 'error_message' => 'Вебинар начнется 29 Ноября в 19:30 по МСК']); */
            case 'record':
                $selfStudyMaterial = SelfStudyMaterial::where(['event_id' => $id])->first();
                return redirect()->route('education.showSelfStudyMaterial', ['id' => $selfStudyMaterial->id, 'course_id' => $course_id]);
            default:
                return view('education.events.selfStudyMaterial', compact('event'));
            
        
        }
    }
    

    public function showVebinar(Request $request, $course_id, $id)
    {
        $user = $request->user();
        $vebinar = Vebinar::find($id);
        return view('education.events.vebinar', compact('vebinar', 'course_id'));
    
    }

    public function showTest(Request $request, $course_id, $id)
    {
        $today = date("Y-m-d");
        $user = $request->user();
        //Находим этот тест
        $test = Test::find($id);
        //Получаем из представления записи за сегодня
        $testResultsTodayArray = $user->getAllTestTries($today, $test->id)->toArray();
        $testResutsToday = !empty($testResultsTodayArray) ? $testResultsTodayArray[0] : null;
        //Получаем из представления записи за всё время
        $testResutsAll = $user->getAllTestTries()->toArray();

        $testResultEloquent = TestResult::where('user_id', $user->id)->where('test_id', $id)->orderBy('created_at', 'desc');
        
        //Получаем из таблицы общее количество попыток
        $triesCount = $testResultEloquent->count();
        
        //Получаем из таблицы последний результат
        $lastResult = $testResultEloquent->first();

        $isCompleted = false;
        $whyBlocked = '';
        $isBlocked = false;

        if ($testResutsToday && $testResutsToday->passed === 1) {
            /* $whyBlocked = 'Вы прошли тест';
            $isBlocked = true; */
            $isCompleted = true;
        }
        else if ($testResutsToday && $testResutsToday->record_count >= 5) {
            $whyBlocked = 'Слишком много попыток. Прохождение теста заблокировано до завтра.';
            $isBlocked = true;
        }

        return view('education.events.tests.testPreview', compact('test', 'course_id', 'testResutsToday', 'testResutsAll', 'lastResult', 'triesCount', 'isBlocked', 'isCompleted', 'whyBlocked'));
    }

    public function startTest(Request $request, $course_id, $id)
    {
        $user = $request->user();
        /* $questions = 
        DB::table('questions')->where('test_id', $id)
        ->join('answers', 'answers.question_id', '=', 'questions.id')->get(); */
        $questions = Question::with('answers')->where(['test_id' => $id])->get();
        
        /* $test = Test::find($id); */
        return view('education.events.tests.question', compact('questions'));
    }

    public function submitTest(Request $request, $course_id, $id) 
    {
        // Получаем текущего пользователя и тест
        $user = $request->user(); // Используем авторизованного пользователя
        $test = Test::findOrFail($id); // Проверяем, что тест существует
        
        // Логируем тело запроса для отладки
        $body = $request->all();
        
        // Проверяем, что ответы переданы
        if (!isset($body['answers']) || empty($body['answers'])) {
            return response()->json(['message' => 'No answers provided'], 400);
        }
        $score = 0;
        $maxScore = 0;
        // Проходим по каждому ответу
        foreach ($body['answers'] as $questionId => $answerId) {
            $questionScore = $this->getQuestionMaxScore($questionId);
            $maxScore += $questionScore;
            // Проверяем, является ли ответ массивом (чекбоксы)
            if (is_array($answerId)) {
                foreach ($answerId as $singleAnswerId) {
                    $userAnswer = $this->saveAnswer($user->id, $test->id, $singleAnswerId);
                    $score += $userAnswer->score;
                }
            } else {
                /* foreach ($answerId as $singleAnswerId) {
                    $userAnswer = $this->saveAnswer($user->id, $test->id, $singleAnswerId);
                    $score += $userAnswer->score;
                } */
                // Сохраняем одиночный ответ (радио-кнопки)
                $answer = Answer::find($answerId);
                $userAnswer = $this->saveAnswer($user->id, $test->id, $answer->id, $answerId);
                $score += $userAnswer->score;
            }
        }

        $passed = $maxScore > 0 && ($score / $maxScore) >= 0.6 ? 1 : 0;
        /* if (var_dump(($score)/($maxScore)) >= 0.6) {
            $passed = 1;
        } */
        Log::debug($maxScore > 0 && ($score / $maxScore) >= 0.6 ? 1 : 0);
        Log::debug($passed);
        // Вычисляем процент правильных ответов
        /* $score = round($score / $maxScore * 100); */

        $testResult =  TestResult::create([
            'user_id' => $user->id,
            'test_id' => $test->id,
            'score' => $score,
            'max_score' => $maxScore,
            'passed' => $passed,
        ]);
        
        return view('education.events.tests.result', compact('testResult', 'passed', 'course_id'));
        /* return response()->json(['message' => 'Answers submitted successfully. Score: ' . $score . ' ' . $TestResult]); */
    }

    /**
     * Метод для сохранения ответа
     */
    protected function saveAnswer($userId, $testId, $answerId, $textAnswer = null)
    {
        // Допустим, у ответа может быть привязан балл, поэтому получаем ответ из базы
        $answer = Answer::find($answerId);
        if (!$answer) {
            Log::warning("Answer with ID {$answerId} not found.");
            return;
        }

        // Сохраняем ответ пользователя
        $userAnswer = UserAnswer::create([
            'user_id' => $userId,
            'test_id' => $testId,
            'answer_id' => $answerId,
            'score' => $answer->score ?? 0, // Пример получения баллов
            'textAnswer' => $textAnswer // Используйте для текстовых вопросов, если они есть
        ]);
        return $userAnswer;
    }

    protected function getQuestionMaxScore($questionId)
    {
        // Допустим, у ответа может быть привязан балл, поэтому получаем ответ из базы
        /* $answer = Question::find($questionId); */
        $question = Question::with('answers')->where(['id' => $questionId])->first();
        if (!$question) {
            Log::warning("Question with ID {$question} not found.");
            return;
        }
        $score = 0;
        foreach ($question->answers as $answer) {
            $score += $answer->score;
        }

        // Сохраняем ответ пользователя
        
        return $score;
    }

    public function showSelfStudyMaterial(Request $request, $course_id, $id)
    {
        $user = $request->user();
        $selfStudyMaterial = SelfStudyMaterial::find($id);
        Log::debug($id);
        return view('education.events.selfStudyMaterial', compact('selfStudyMaterial'));
    }

    public function showQuestion(Request $request, $test_id, $question_id)
    {
        $user = $request->user();
        $test = Test::find($test_id);
        $question = Question::find($question_id);
        $answers = Answer::where(['question_id' => $question_id])->get();
        return view('education.events.tests.question', compact(['question', 'answers']));
    }

    public function showAskQuestion(Request $request, $course_id, $theme_id = null) 
    {
        if ($theme_id)
        {
            $theme = Theme::find($theme_id);
            $messages = Message::where(['user_id' => $request->user()->id, 'theme_id' => $theme_id])->get();
            $themes = Theme::where(['course_id' => $course_id])->get();
            return view('education.askQuestion', compact(['theme', 'messages', 'themes', 'course_id', 'theme_id']));

        }
        else 
        {
            $theme = null;
            $messages = [];
            $themes = Theme::where(['course_id' => $course_id])->get();
            return view('education.askQuestion', compact(['theme', 'themes', 'messages', 'course_id', 'theme_id']));
        }
    }

    
    public function askQuestion(Request $request, $course_id, $theme_id) 
    {

        $content = $request->all();
        $newMessage = Message::create(['user_id' => $request->user()->id, 'theme_id' => $theme_id, 'text'=>$content['text'], 'isAnonymous' =>  $request->has('isAnonymous') ? 1 : 0]);
        $user = $request->user();

        $validator = Validator::make($content, [
            'file' => 'nullable|file|max:10240',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $filePath = null;
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('message_attachments/user_' . $user->id . '/message_' . $newMessage->id, 'public');
            $fileMimeType = $request->file('file')->getClientMimeType();
            $newMessageAttachment = MessageAttachment::create(['file' => $filePath, 'message_id' => $newMessage->id, 'type' => $fileMimeType]);
        }
        return redirect()->back();
    }

    public function registerCourse (Request $request, $course_id) 
    {
        $course = Course::find($course_id);
        return view('education.courseRegistration', compact('course_id', 'course'));

    }
}
