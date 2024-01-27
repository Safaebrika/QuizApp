<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie::all();
        return view('Categorie.index ', compact('categories'));
    }
    public function Homecategoris(){
        $categories = Categorie::all();
        return view('AfterLogin',compact('categories'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Categorie.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:30|',
            'description' => 'required|max:100',
        ]);
        // Categorie::create($request->all());
        $categorie = new Categorie ;
        $categorie->title = $request->title ;
        $categorie->description = $request->description ;
        $imagePath = $request->file('image')->store('public/images');
        $imagePath = str_replace('public/', '', $imagePath);
        $categorie->image = $imagePath;
        $categorie->save();
        return redirect(route('categories'))->with('created','Categorie créé avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */

    public function edit(Categorie $categorie ,$id)
    {

        $categorie = Categorie::find($id);
            // return $categorie;
        return view('Categorie.edit', compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorie $categorie ,$id)
    {


        $categorie = Categorie::find($id);
        $categorie->title = $request->title ;
        $categorie->description = $request->description ;
        $imagePath = $request->file('image')->store('public/images');
        $imagePath = str_replace('public/', '', $imagePath);
        $categorie->image = $imagePath;        $categorie->save();
        return redirect(route('categories'))->with('updated','mise à jour réussie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $categorie = Categorie::find($id);

        $categorie->delete();
        return redirect(route('categories'))->with('deleted','supprimé avec succès');
    }
}
