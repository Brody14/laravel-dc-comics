@extends('layouts.app')

@section('content')

    <div class="container py-5">
      <div class="row">
        <div class="col-auto ms-auto">
          <a href="{{ route('comics.create') }}" class="btn btn-primary btn-sm">Aggiungi Comic</a>
        </div>
      </div>
    </div>
    
    <div class="container py-3">

        <table class="table">
            <thead>
              <tr>
                <th scope="col">Titolo</th>
                <th scope="col">Copertina</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Serie</th>
                <th scope="col">Uscita</th>
                <th scope="col">Tipologia</th>
                <th scope="col">More</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                      <td> <a href="{{ route('comics.show', $comic)}}"> {{$comic->title}} </a> </td>
                      <td> <img class="thumb" src="{{$comic->thumb}}" alt=""> </td>
                      <td> {{ substr($comic->description, 0, 150) . '...'}} </td>
                      <td> {{$comic->price}} &dollar; </td>
                      <td> {{$comic->series}} </td>
                      <td> {{$comic->sale_date}} </td>
                      <td> {{$comic->type}} </td>
                      <td> 
                        <div class="d-flex gap-2 align-items-center">
                          <a href="{{ route('comics.edit', $comic)}}"> <i class="fa-solid fa-pencil"></i> </a>
                          <form action="{{route('comics.destroy', $comic)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">
                              <i class="fa-regular fa-trash-can"></i>
                            </button>
                          </form>
                        </div>
                      </td>
                    </tr>
                    
                @endforeach
              
            </tbody>
          </table>


    </div>

    <div class="container text-center">
        <a href="{{route('home')}}" class="btn btn-primary mb-3" role="button">Indietro</a>
     </div>
    
@endsection
 

