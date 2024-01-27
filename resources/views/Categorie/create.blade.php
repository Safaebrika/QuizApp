@extends('layouts.AdminBr')
<link rel="stylesheet" href="{{ asset('Css/Categories.css') }}">
@section('dashcontent')
    <div>

        <a href="{{ route('categories') }}" class="listCat">
            <span class="circle" aria-hidden="true">
                <span class="icon arrow"></span>
            </span>
            <span class="button-text"> Liste des categories </span>
        </a>

        <form action="{{ route('storeCategory') }}" method="post" enctype="multipart/form-data">
            <div class="from">
                <h1 class="text-center"> <span class="underlined underline-mask">Créer</span> <span
                        class="underlined underline-overflow"> Nouvelle </span> <span class="underlined underline-mask">
                        Catégorie </span> </h1>
                @csrf
                <label for="title" style="font-weight: bold; "> Nom de catégorie : </label>
                <input type="text" name="title" class="form-control" placeholder="titre de categorie">
                @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
                <label for="title" style="font-weight: bold; "> Description :</label>
                <input type="text" name="description" class="form-control" placeholder="Description da categorie">
                @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
                <div class="mb-3">
                    <label for="formFile" class="form-label" style="font-weight: bold; ">Logo </label>
                    <input class="form-control" type="file" id="formFile" name="image">
                    @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <button class="btn border full-rounded" type="submit">
                    Ajouter
                </button>



        </form>
    </div>
    </div>
@endsection
