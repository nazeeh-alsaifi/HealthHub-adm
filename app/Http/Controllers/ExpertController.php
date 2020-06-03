<?php

namespace App\Http\Controllers;

use App\expert_alg\bayes;
use App\expert_alg\DecisionTree;
use Illuminate\Http\Request;

class ExpertController extends Controller
{
    private $bayes;
    private $id3;
    function __construct()
    {
        $this->bayes = new bayes(public_path('bayes_training.csv'));
        $this->id3 =  new DecisionTree(public_path('bayes_training.csv'), 0);
    }

    function userCreate()
    {
        return view('expert_system.create');
    }

    function predict()
    {
        $validated_data = request()->validate([
            'discrete_age' => ['required', 'numeric', 'min:0', 'not_in:0'],
            'chest_pain_type' => ['required', 'string'],
            'discrete_rest_blood' => ['required', 'numeric', 'min:0', 'not_in:0'],
            'blood_sugar' => ['required', 'string'],
            'rest_electro' => ['required', 'string'],
            'discrete_max_heart' => ['required', 'numeric', 'min:0', 'not_in:0'],
            'exercice_angina' => ['required', 'string'],
            'expert_algorithm' => ['required', 'string'],
        ]);
        $age = $validated_data['discrete_age'];
        if ($age < 35) {
            $validated_data['discrete_age'] = 'groupA1';
        } elseif ($age >= 35 && $age < 45) {
            $validated_data['discrete_age'] = 'groupA2';

        } elseif ($age >= 45 && $age < 55) {
            $validated_data['discrete_age'] = 'groupA3';

        } elseif ($age >= 55 && $age < 65) {
            $validated_data['discrete_age'] = 'groupA4';

        } elseif ($age >= 65) {
            $validated_data['discrete_age'] = 'groupA5';
        }

        $rest_blood = $validated_data['discrete_rest_blood'];
        if ($rest_blood < 110) {
            $validated_data['discrete_rest_blood'] = 'groupC1';

        } elseif ($rest_blood >= 110 && $rest_blood < 130) {
            $validated_data['discrete_rest_blood'] = 'groupC2';

        } elseif ($rest_blood >= 130 && $rest_blood < 150) {
            $validated_data['discrete_rest_blood'] = 'groupC3';

        } elseif ($rest_blood >= 150 && $rest_blood < 170) {
            $validated_data['discrete_rest_blood'] = 'groupC4';

        } elseif ($rest_blood >= 170 && $rest_blood < 190) {
            $validated_data['discrete_rest_blood'] = 'groupC5';
        } elseif ($rest_blood >= 190) {
            $validated_data['discrete_rest_blood'] = 'groupC6';
        }

        $max_heart = $validated_data['discrete_max_heart'];
        if ($max_heart < 100) {
            $validated_data['discrete_max_heart'] = 'groupF1';
        } elseif ($max_heart >= 100 && $max_heart < 120) {
            $validated_data['discrete_max_heart'] = 'groupF2';

        } elseif ($max_heart >= 120 && $max_heart < 140) {
            $validated_data['discrete_max_heart'] = 'groupF3';

        } elseif ($max_heart >= 140 && $max_heart < 160) {
            $validated_data['discrete_max_heart'] = 'groupF4';

        } elseif ($max_heart >= 160 && $max_heart < 180) {
            $validated_data['discrete_max_heart'] = 'groupF5';

        } elseif ($max_heart >= 180) {
            $validated_data['discrete_max_heart'] = 'groupF6';

        }
        $desired_alg = $validated_data['expert_algorithm'];
        unset($validated_data['expert_algorithm']);
        if ($desired_alg == 'bayes') {
            $result = $this->bayes->predictUsingArray($validated_data);
           // dd($result);
            return view('expert_system.create', ['result' => $result]);
        } else {
            $result = $this->id3->predictUsingArray($validated_data);

            return view('expert_system.create',['result' => $result]);
        }


    }
}
