@extends('layouts.AdminBr')
<link rel="stylesheet" href="{{asset('Css/QuestionCreate.css')}}">
@section('dashcontent')
    <div>
        <a href="{{ route('options') }}" class="listCat">
            <span class="circle" aria-hidden="true">
                <span class="icon arrow"></span>
            </span>
            <span class="button-text"> Tous Les Option </span>
        </a>

            <form action="{{ route('updateoption', ['id' => $option->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <h1 class="text-center"> <span class="underlined underline-mask">Modifier</span> <span
                    class="underlined underline-overflow"> une </span> <span class="underlined underline-mask">
                    Option </span> </h1>

             <label for="category">Question :</label>
             <select name="question" id="question" class="form-control select">
                @foreach ($questions as $question)

                    <option value="{{ $question->id }}">{{ $question->question }}</option>
                @endforeach
            </select>

            <label for="Option" style="font-weight: bold; "> Option : </label>
            <input type="text" name="option" class="form-control" value="{{$option->option}}">
            <label for="score" style="font-weight: bold; "> Note de l'option : </label>
            <input type="number" name="score" class="form-control" value="{{$option->score}}">
            <label for="is-correct" style="font-weight: bold; "> Option Correcte : </label>
            <input type="radio" name="is_correct" id="is_correct" value="{{$option->is_correct}}">
            <button class="btn border full-rounded" type="submit">
                Modifier
            </button>            </div>
            </form>
    </div>
@endsection
