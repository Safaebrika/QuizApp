<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Models\Question;

use Illuminate\Http\Request;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();
        $options = Option::all();
        // return $options;
        return view('option.index ', compact('options','questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $questions = Question::all();
        return view('option.create',compact('questions'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $option = new Option ;
        $option->option = $request->option ;
        $option->score = $request->score ;
        $option->is_correct = $request->has('is_correct'); // true si la case est cochée, false sinon
        $option->question_id = $request->input('question');
        $option->save();
        return redirect(route('options'))->with('created','option créé avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function show(Option $option)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function edit(Option $option ,$id)
    {
     $option=Option::find($id)->with('question')->first();
      $questions=Question::all();
       return view('option.edit',compact('option','questions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Option $option)
    {
        $option = Option::find($request->id)->first() ;
        // return $option ;
        $option->option = $request->option ;
        $option->question_id = $request->input('question');
        $option->score = $request->score ;
        $option->is_correct = $request->has('is_correct'); // true si la case est cochée, false sinon
        $option->save();
        return redirect(route('options'))->with('updated','mise à jour réussie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {

       $option = Option::find($id);

       $option->delete();
       return redirect(route('options'))->with('deleted','supprimé avec succès');
    }
}
