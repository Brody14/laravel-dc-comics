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
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
            @error('title')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="thumb" class="form-label">Copertina (url)</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{ old('thumb') }}">
            @error('thumb')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
    
          <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
            @error('description')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price') }}">
            @error('price')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
    
    
          <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" value="{{ old('series') }}">
            @error('series')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
    
          <div class="mb-3">
            <label for="sale-date" class="form-label">Uscita</label>
            <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale-date" name="sale_date" value="{{ old('sale_date') }}">
            @error('sale_date')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
    
          <div class="mb-3">
            <label for="type" class="form-label">Tipologia</label>
            <select name="type" id="type"  class="@error('type') is-invalid @enderror">
                <option selected value="">Seleziona una tipologia</option>
                <option @selected(old('comic book')) value="comic book">Comic Book</option>
                <option @selected(old('graphic novel')) value="graphic novel">Graphic Novel</option>
            </select>
            @error('type')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
    
          <a href="{{route('comics.index')}}" class="btn btn-primary mb-3" role="button">Indietro</a>
          <button type="submit" class="btn btn-primary mb-3">Salva</button>
      </form>

      {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif --}}

    </div>


@endsection