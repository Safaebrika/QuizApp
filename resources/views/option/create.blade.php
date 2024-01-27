@extends('layouts.AdminBr')
<link rel="stylesheet" href="{{asset('Css/OptionCreate.css')}}">
@section('dashcontent')
    <div>
        <a href="{{ route('options') }}" class="listCat">
            <span class="circle" aria-hidden="true">
                <span class="icon arrow"></span>
            </span>
            <span class="button-text"> Tous Les les options de question Numero ... </span>
        </a>

            <form action="{{ route('storeoption') }}" method="post">
                <div class="from">
                    @csrf
                    <h1 class="text-center"> <span class="underlined underline-mask">Ajouter</span> <span
                        class="underlined underline-overflow"> Nouvelle </span> <span class="underlined underline-mask">
                        Option </span> </h1>

                 <label for="category">Question :</label>
                 <select name="question" id="question" class="form-control select">
                    <option value="0">---select----</option>
                    @foreach ($questions as $question)

                        <option value="{{ $question->id }}">{{ $question->question }}</option>
                    @endforeach
                </select>

                <label for="Option" style="font-weight: bold; "> Option : </label>
                <input type="text" name="option" class="form-control" placeholder="Option..?">
                <label for="score" style="font-weight: bold; "> Note de l'option : </label>
                <input type="number" name="score" class="form-control">
                <label for="is-correct" style="font-weight: bold; "> Option Correcte : </label>
                <input type="radio" name="is_correct" id="is_correct">
                <button class="btn border full-rounded" type="submit">
                    Ajouter
                </button>            </div>
            </form>
    </div>
@endsection
