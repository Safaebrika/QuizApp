<?php

namespace App\Http\Controllers;
use App\Models\Question;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();
        $categories = Categorie::all();
        return view('question.index ', compact('questions','categories'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('question.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $question = new Question;
        $question->question = $request->question ;
        // $question->category_id = $request->input('category');
        $question->category_id = $request->input('category');
        $question->save();
        return redirect(route('questions'))->with('created','questions créé avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show(Questions $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question, $id)
    {
        $question = Question::find($id)->with('category')->first();
        $categories = Categorie::all();

        return view('question.edit', compact('question', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        $question = Question::find($request->id)->first() ;
        // return $question;
        $question->question = $request->question ;
        $question->category_id = $request->input('category');
        $question->save();
        return redirect(route('questions'))->with('updated','mise à jour réussie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $question = Question::find($id);

        $question->delete();
        return redirect(route('questions'))->with('deleted','supprimé avec succès');
    }
}
