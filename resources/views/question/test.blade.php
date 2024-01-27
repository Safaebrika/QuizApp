@extends('layouts.AdminBr')
<link rel="stylesheet" href="{{ asset('Css/Questions.css') }}">
@section('dashcontent')
    <div>
        <h1>
            <span class="underlined underline-mask">Tous</span>
            <span class="underlined underline-overflow">les</span>
            <span class="underlined underline-mask"> Questions
            </span>
        </h1>
        <a href="{{ route('Createquestion') }}" class="CatCreate">
            <span class="circle" aria-hidden="true">
                <span class="icon arrow"></span>
            </span>
            <span class="button-text"> Ajouter une Question </span>
        </a>
        <table class="table table-striped table-hover ">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Question</th>
                    <th> Categorie </th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($questions as $question)
                    <tr>
                        <td>{{ $question->id }}</td>
                        <td>{{ $question->question }}</td>
                        <td>{{ $question->category->title }}</td>

                        <td class="d-flex">
                            <form action="{{ route('editquestion', $question->id) }}" method="get">
                                @csrf
                                <button class="buttonEdit">
                                    <span class="buttonEdit__text">Modifier</span>
                                    <!-- ... -->
                                </button>
                            </form>
                            <form action="{{ route('deletequestion', $question->id) }}" method="post">
                                @method('delete')
                                @csrf
                                <button class="button" type="submit">
                                    <span class="button__text">Supprimer</span>
                                    <!-- ... -->
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
