<?php

namespace App\Http\Controllers\expert_system;

use App\Http\Controllers\Controller;
use bayes;
use Illuminate\Http\Request;
class ExpertController extends Controller
{
    function __construct()
    {
        $training_dir = 'id3_training.csv';
        $testing_dir = 'new testing.csv';
        $target = 'value';

        $model = new bayes($training_dir,$testing_dir,$target);

    }
}
