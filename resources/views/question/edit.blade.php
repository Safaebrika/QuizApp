@extends('layouts.AdminBr')
<link rel="stylesheet" href="{{asset('Css/QuestionCreate.css')}}">
@section('dashcontent')
    <div>
        <a href="{{ route('questions') }}" class="listCat">
            <span class="circle" aria-hidden="true">
                <span class="icon arrow"></span>
            </span>
            <span class="button-text"> Tous Les Questions </span>
        </a>

            <form action="{{ route('updatequestion', ['id' => $question->id]) }}" method="post" enctype="multipart/form-data">
                @method('put')
                <div class="from">
                    <h1 class="text-center"> <span class="underlined underline-mask">Modifier</span> <span
                        class="underlined underline-overflow"> une </span> <span class="underlined underline-mask">
                        Question </span> </h1>
                 @csrf
                <label for="question" style="font-weight: bold; "> Question : </label>
                <input type="text" name="question" value="{{$question->question}}" class="form-control" placeholder="question..?">
                <label for="category">Catégorie :</label>
                <select name="category" id="category" class="form-control select">
                    {{-- <option value="0">---select----</option> --}}
                    @foreach ($categories as $category)

                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
                <button class="btn border full-rounded" type="submit">
                    Ajouter
                </button>            </div>
            </form>
    </div>
@endsection
