<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class QuestionController extends Controller
{
    public function index()
    {
       
        $query_object = DB::table('questions')
        -> orderby('created_at','desc')
        -> get();
        dd($query_object);
        return 'This is the list of questions';
    }
    public function show()
    {
        $query_object = DB::table('questions')
        -> where('id', 1)
        -> get();
        // dd($query_object);
        $query_object2 = DB::table('answers')
        -> where('question_id', 1)
        -> orderby('created_at','asc')
        -> get();
        dd($query_object2);
        return 'This is a detail of a question';

    }
    public function index2()
    {
        $query_object = DB::table('questions')//FROM `questions`
        // -> limit(10)
        // -> orderby('updated_at')
        -> get() // SELECT *
        ; 
        //$query_object -> where('user_id', 1); // WHERE `user_id` = 1
        //$query_object -> orderby('created_at'); //ORDER BY `created_by`
        dd($query_object);

    }
}