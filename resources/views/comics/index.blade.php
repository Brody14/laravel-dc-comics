@extends('layouts.app')

@section('content')
    
    <div class="container py-5">

        <table class="table">
            <thead>
              <tr>
                <th scope="col">Titolo</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Copertina</th>
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
                    <td> {{$comic->title}} </td>
                    <td> {{ substr($comic->description, 0, 150) . '...'}} </td>
                    <td> <img class="thumb" src="{{$comic->thumb}}" alt=""> </td>
                    <td> {{$comic->price}} &dollar; </td>
                    <td> {{$comic->series}} </td>
                    <td> {{$comic->sale_date}} </td>
                    <td> {{$comic->type}} </td>
                    <td class="text-center"> <a href="{{ route('comics.show', $comic)}}">--></a> </td>
                    </tr>
                    
                @endforeach
              
            </tbody>
          </table>


    </div>

    <div class="container text-center">
        <a href="{{route('home')}}" class="btn btn-primary mb-3" role="button">Indietro</a>
     </div>
    
@endsection
 

