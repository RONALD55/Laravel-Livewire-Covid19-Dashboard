<?php
namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Attachments\Image;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Outgoing\Question;
use Illuminate\Http\Request;
use App\Conversations\CovidQuestionsConversation;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Attachments\File;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;
use Illuminate\Support\Str;
class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public $name;
    public function handle()
    {
        $botman = app('botman');

        $botman->hears('{message}', function($botman, $message) {
            if (Str::lower($message)=='hello') {
                $this->greeting($botman);

            }else if (Str::lower($message)=='menu') {
                $this->menu($botman);
            }
        });



        $botman->hears('#', function(BotMan $bot) {
            $bot->reply('Thank you for using our Application see you next time!Bye<br>
                <h4>Press "hello" to start a conversation with Nicole</h4>
                <h4>Press "menu" to view options</h4>
                ');
        })->stopsConversation();

        $botman->hears('image', function (BotMan $bot) {
            // Create attachment
            $attachment = new Image('https://botman.io/img/logo.png');

            // Build message object
            $message = OutgoingMessage::create('This is my text')
                ->withAttachment($attachment);

            // Reply message object
            $bot->reply($message);
        });



        $botman->listen();
    }

    /**
     * Place your BotMan logic here.
     */

    public function greeting($botman){
        $botman->ask('Hello! What is your Name?', function(Answer $answer) {
            $this->name = $answer->getText();
            $this->say("Hi {$this->name}, Nice to meet. Type <b>'menu'</b> to get user options");
        });

    }

    public function menu($botman){
        $botman->ask('<h4>Menu Options</h4>
                       1. to check covid-19 symptoms<br>
                       2. Covid-19 Centers in Zimbabwe<br>
                       3. Covid-19 Prevention Tips<br>
                       4. Covid-19 Vaccination Program In Zimbabwe<br>

                       <h4>Press # to quit </h4>', function(Answer $answer) {

            $response = $answer->getText();
                if($response==1){


                    $questions=[
                        'Have you been in contact with a covid19 positive person',
                        'Do you have Fever or chills',
                        'Do you have a dry cough',
                        'Do you have a sore throat',
                        'Do you have shortness of breath or difficulty breathing',
                        'Do you have a loss of taste or smell',
                        'Do you have muscle or body aches',
                        'Do you have fatigue',
                        'Do you have headache',
                        'Do you have congestion or runny nose',
                        'Do you have nausea or are you vomiting',
                        'Do you have diarrhea',
                    ];


                    for($i=0;$i<12;$i++){
                        $question_no = 'question '.$i;
                        $question= Question::create($questions[$i])
                            ->fallback('Unable to get response for this question')
                            ->callbackId($question_no)
                            ->addButtons([
                                Button::create('yes')->value('yes'),
                                Button::create('no')->value('no'),
                            ]);

                        $this->ask($question, function (Answer $answer) {
                            // Detect if button was clicked:
                            if ($answer->isInteractiveMessageReply()) {
                                $selectedValue = $answer->getValue(); // will be either 'yes' or 'no'
                                $selectedText = $answer->getText(); // will be either 'Of course' or 'Hell no!'
                            }
                        });


                    }
                }
                else if($response==2){
                    $this->say('Case 2 Selected');
                }

                else if($response==3){
                    $this->say('
                            <h4>Tips for prevention of Covid-19</h4>
                            Follow the guidelines to help protect yourself
                            from contracting and transmitting SARS-CoV-2.<br>
                            1. Wash your hands frequently and carefully<br>
                            2. Avoid touching your face<br>
                            3. Stop shaking hands and hugging people — for now<br>
                            4. Don’t share personal items <br>
                            5. Cover your mouth and nose when you cough and sneeze<br>
                            6. Clean and disinfect surfaces <br>
                            7. Take physical (social) distancing seriously <br>
                            8. Do not gather in groups <br>
                            9. Avoid eating or drinking in public places <br>
                            10. Wash fresh groceries <br>
                            11. Wear a (homemade) mask <br>
                            12. Self-quarantine if sick <br>
                            <br>
                            <h4>Press "#" to quit or "hello" to start again</h4>
                            <h4>Press "menu" to view options</h4>
                            ');
                }

                else if($response==4){
                    $this->say("Option 4 Selected<br><br>
                        <a href='http://www.mohcc.gov.zw/index.php?option=com_phocadownload&view=category&download=514:approved-common-questions-on-covid-19-vaccines-and-vaccination-in-zim-pdf&id=18:operational-support-and-logistics&Itemid=660'>Click here to download the document</a>
                      <h4>Press '#' to quit or 'hello' to start again</h4>
                        <h4>Press 'menu' to view options</h4>");
                }else{
                    $this->say("Invalid option entered! Press <b>'menu'</b> to go back");
                }
            });

                }







}
