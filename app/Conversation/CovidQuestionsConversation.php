<?php
namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;

class CovidQuestionsConversation extends Conversation
{

public $questions=[
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


    public function question_1(){
        $question = Question::create($this->questions[0])
            ->fallback('Unable to create a new database')
            ->callbackId('create_database')
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

    public function question_2(){
        $question = Question::create($this->questions[1])
            ->fallback('Unable to create a new database')
            ->callbackId('create_database')
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
    public function question_3(){
        $question = Question::create($this->questions[2])
            ->fallback('Unable to create a new database')
            ->callbackId('create_database')
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
    public function question_4(){
        $question = Question::create($this->questions[3])
            ->fallback('Unable to create a new database')
            ->callbackId('create_database')
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
    public function question_5(){

    }
    public function question_6(){

    }
    public function question_7(){

    }
    public function question_8(){

    }

    public function question_9(){

    }
    public function question_10(){

    }

    public function question_11(){

    }

    public function run()
    {
        $this->question_1();
        $this->question_2();
        $this->question_3();
        $this->question_4();
    }
}
