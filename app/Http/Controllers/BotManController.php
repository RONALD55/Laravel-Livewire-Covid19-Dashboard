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
                       1. To View Covid-19 symptoms<br>
                       2. Covid-19 Centers in Zimbabwe<br>
                       3. Covid-19 Prevention Tips<br>
                       4. Covid-19 Vaccination Program In Zimbabwe<br>

                       <h4>Press # to quit </h4>', function(Answer $answer) {

            $response = $answer->getText();
                if($response==1){
					$this->say('
                            <h4>Covid-19 Symptoms</h4>
                            Below are the symptoms for Covid 19<br>
                            1.Fever<br>
							2.Cough <br>
							3.Tiredness<br>
                             <br>Early symptoms of COVID-19 may include a loss of taste or smell<br>
							 <br>Other symptoms can include<br>
                            4.Shortness of breath<br>
							5.Difficulty in Breathing<br>
							6.Muscle aches <br>
							7.Chills,<br>
							8.Sore throat and Runny nose <br>
							9.Headache<br>
							10. Chest pain<br>
							11.Pink eye (conjunctivitis)<br>
							12.Nausea,Vomiting,Diarrhea,Rash<br>
                           
                            <br>
                            <h4>Press "#" to quit or "hello" to start again</h4>
                            <h4>Press "menu" to view options</h4>
                            ');

                    
                }
                else if($response==2){
                    $this->say("Option 2 Selected<br><br>
                        <a class='btn btn-outline-warning' role='button' href='https://www.cimas.co.zw/storage/app/media/downloads/CIMAS_MEDLABS_COVID_TESTING_CENTRES.pdf' target='_blank' download='https://www.cimas.co.zw/storage/app/media/downloads/CIMAS_MEDLABS_COVID_TESTING_CENTRES.pdf'>Click here to download the document</a>
						<h4>Press '#' to quit or 'hello' to start again</h4>
                        <h4>Press 'menu' to view options</h4>");
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
                        <a class='btn btn-outline-warning' role='button' href='http://www.mohcc.gov.zw/index.php?option=com_phocadownload&view=category&download=514:approved-common-questions-on-covid-19-vaccines-and-vaccination-in-zim-pdf&id=18:operational-support-and-logistics&Itemid=660' target='_blank' download='http://www.mohcc.gov.zw/index.php?option=com_phocadownload&view=category&download=514:approved-common-questions-on-covid-19-vaccines-and-vaccination-in-zim-pdf&id=18:operational-support-and-logistics&Itemid=660'>Click here to download the document</a>
                      <h4>Press '#' to quit or 'hello' to start again</h4>
                        <h4>Press 'menu' to view options</h4>");
                }else{
                    $this->say("Invalid option entered! Press <b>'menu'</b> to go back");
                }
            });

                }







}
