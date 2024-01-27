@extends('layouts.AdminBr')
<link rel="stylesheet" href="{{ asset('Css/CategoriesList.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@section('dashcontent')
    <div>
        {{-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div> --}}
        <h1> <span class="underlined underline-overflow">Tous</span> <span class="underlined underline-mask">nous</span> <span
                class="underlined underline-overflow"> Categories</span> </h1>
                @if(session('created'))
                <div class="alert alert-info">
                    {{ session('created') }}
                </div>

                @elseif(session('updated'))
                <div class="alert alert-success">
                    {{ session('updated') }}
                </div>

            @elseif(session('deleted'))
            <div class="alert alert-danger">
                {{ session('deleted') }}
            </div>
        @endif
        <a href="{{ route('CreateCategory') }}" class="CatCreate">
            <span class="circle" aria-hidden="true">
                <span class="icon arrow"></span>
            </span>
            <span class="button-text"> Créer une Categorie </span>
        </a>

        <table class=" table table-hover ">
            <thead>
                <tr class="header">
                    <th>id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Logo </th>
                    <th>Modifier/Supprimer </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $categorie)
                    <tr>
                        <td> {{ $categorie->id }}</td>
                        <td>{{ $categorie->title }}</td>
                        <td>{{ $categorie->description }}</td>
                        <td>
                            <img src="{{ 'storage/' . $categorie->image }}" alt="Logo de la catégorie" width="60">
                        </td>
                        <td class="d-flex">
                            <form action="{{ route('editCategory', $categorie->id) }}" method="get">

                                @csrf
                                <button class="buttonEdit">

                                    <span class="buttonEdit__text">Modifier</span>
                                    <span class="buttonEdit__icon">
                                        <svg class="svg" height="512" viewBox="0 0 512 512" width="512"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <title></title>
                                            <path
                                                d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"
                                                style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px">
                                            </path>

                                        </svg>

                                    </span>
                                </button>
                            </form>

                            <form action="{{ route('deleteCategory', $categorie->id) }}" method="post">
                                @method('delete')
                                @csrf
                                <button class="button" type="submit">
                                    <span class="button__text">Supprimer</span>
                                    <span class="button__icon">
                                        <svg class="svg" height="512" viewBox="0 0 512 512" width="512"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <title></title>
                                            <path
                                                d="M112,112l20,320c.95,18.49,14.4,32,32,32H348c17.67,0,30.87-13.51,32-32l20-320"
                                                style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px">
                                            </path>
                                            <line
                                                style="stroke:#fff;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px"
                                                x1="80" x2="432" y1="112" y2="112"></line>
                                            <path d="M192,112V72h0a23.93,23.93,0,0,1,24-24h80a23.93,23.93,0,0,1,24,24h0v40"
                                                style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px">
                                            </path>
                                            <line
                                                style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"
                                                x1="256" x2="256" y1="176" y2="400"></line>
                                            <line
                                                style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"
                                                x1="184" x2="192" y1="176" y2="400"></line>
                                            <line
                                                style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"
                                                x1="328" x2="320" y1="176" y2="400"></line>
                                        </svg>
                                    </span>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
@endsection
