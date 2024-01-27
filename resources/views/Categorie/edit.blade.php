@extends('layouts.AdminBr')
@section('dashcontent')
    <link rel="stylesheet" href="{{ asset('Css/CategorieEdit.css') }}">

    <div>

        <a href="{{ route('categories') }}" class="listCat">
            <span class="circle" aria-hidden="true">
                <span class="icon arrow"></span>
            </span>
            <span class="button-text"> Liste des categories </span>
        </a>
        <div class="from">

            <form action="{{ route('updateCategory', ['id' => $categorie->id]) }}" method="post"
                enctype="multipart/form-data">
                <h1 class="text-center"> <span class="underlined underline-mask">Modifier</span> une <span
                        class="underlined underline-overflow"> catégorie</span> </h1>

                @method('put')
                @csrf
                <label for="title" style="font-weight: bold;  "> Nom de catégorie : </label>
                <input type="text" name="title" class="form-control" placeholder="titre de categorie"
                    value='{{ $categorie->title }}'>
                    @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label for="title" style="font-weight: bold; "> Description :</label>
                <input type="text" name="description" class="form-control" value='{{ $categorie->description }}'
                    placeholder="Description da categorie">
                    @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <div class="mb-3">
                    <label for="formFile" class="form-label" style="font-weight: bold; ">Logo </label>
                    <input class="form-control" type="file" id="formFile" value='{{ $categorie->image }}'
                        name="image">
                </div>
                @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
                <button class="btn border full-rounded" type="submit">
                    Ajouter
                </button>
            </form>

        </div>
    </div>
@endsection
