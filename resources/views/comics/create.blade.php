@extends('layouts.app')

@section('content')

    <div class="container py-3">
        <h4>Inserisci un nuovo fumetto</h4>
    </div>

    <div class="container">
      <form action="{{ route('comics.store')}}" method="POST">

        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
          </div>

          <div class="mb-3">
            <label for="thumb" class="form-label">Copertina (url)</label>
            <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb') }}">
          </div>
    
          <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
          </div>

          <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">
          </div>
    
    
          <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="series" name="series" value="{{ old('series') }}">
          </div>
    
          <div class="mb-3">
            <label for="sale_date" class="form-label">Uscita</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date') }}">
          </div>
    
          <div class="mb-3">
            <label for="type" class="form-label">Tipologia</label>
            <select name="type" id="type">
                <option @selected(old('comic book')) value="comic book">Comic Book</option>
                <option @selected(old('graphic novel')) value="graphic novel">Graphic Novel</option>
            </select>
          </div>
    
          <a href="{{route('comics.index')}}" class="btn btn-primary mb-3" role="button">Indietro</a>
          <button type="submit" class="btn btn-primary mb-3">Salva</button>
      </form>

      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif

    </div>


@endsection