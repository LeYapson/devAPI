@extends('layouts/front')

@section('content')

    <div class="container">

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(session()->has('animal'))
                <p>Animal enregistré sous : {{ session('animal') }}</p>
        @endif



        <form action="{{route('animals.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label for="birthday">Date de naissance</label>
                <input type="date" name="birthday" id="birthday" class="form-control  @error('birthday') is-invalid @enderror" value="{{ old('name') }}">

                @error('birthday')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Nom</label>
                <input class="form-control @error('name') is-invalid @enderror" type="text" id="name" name="name">
                @error('name')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="color" class="form-label">Couleur</label>
                <input class="form-control @error('color') is-invalid @enderror" type="text" id="color" name="color">
                @error('color')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <div>
                <input type="submit" class="btn btn-primary" value="Ajouter !">
            </div>

        </form>

    </div>

@endsection
