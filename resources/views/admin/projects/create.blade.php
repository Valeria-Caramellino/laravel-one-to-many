@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-4">
    <div class="row justify-content-between">
        <h1>Crea un nuovo post</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route("admin.project.store") }}" method="POST" class="needs-validation">
            @csrf

            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" value="{{ old("title") }}" class="form-control mb-4 @error('title') is-invalid @enderror">
            @error("title")
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
            <label for="content">Contenuto</label>
            <textarea name="content" id="content" cols="30" rows="10" class="form-control mb-4 @error('content') is-invalid @enderror">{{ old("content") }}</textarea>
            @error("content")
                <div class="invalid-feedback">{{$message}}</div>
            @enderror

            <label for="type_id">Type</label>
            <select class="form-control md-4" name="type_id" id="type_id">
                <option value="" selected disabled>Selezione il type</option>
                @foreach($types as $type)
                    <option value="{{$type->id}}">{{$type->name}}</option>
                @endforeach

                
            </select>

            <label for="image">URL Immagine</label>
            <input type="text" name="image" id="image" value="{{ old("image") }}" class="form-control mb-4 @error('image') is-invalid @enderror">
            @error("image")
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
            <input type="submit" class="btn btn-primary form-control mb-4" value="Crea post">
        
        </form>
    </div>
</div>

@endsection