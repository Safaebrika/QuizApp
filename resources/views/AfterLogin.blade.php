@extends('layouts.UserBr')
@section('content')

    <div class="container">

          <div class="row ">
         @foreach ($categories as $categorie)

            <div class="col-sm-4 ">
                <div class="card">
                    <div class="card-image-container">
                        <img src="{{ 'storage/' . $categorie->image}}" alt="img" width="150px" height="150px">
                     </div>
                    <h1 class="card-title">{{$categorie->title}}</h1 >
                    <p class="card-des"> {{$categorie->description}} </p>
                     <a href="#" class="butn "> Commencer </a>
                </div>

            </div>
        @endforeach
    </div>
    </div>
@endsection
