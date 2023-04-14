@extends('layouts.app')

@section('content')

    <div class="container py-5">
        <div class="row align-items-center">
            
            <div class="col-6 text-center">
                <img class="show_thumb" src="{{$comic->thumb}}" alt="">
            </div>
            <div class="col-6 show_text">
                <h3>{{$comic->title}}</h3>
                <p>{{$comic->description}}</p>
                <ul class="p-0">
                    <li>
                        <strong> Prezzo: </strong>
                         {{$comic->price}} &dollar;
                    </li>
                    <li>
                        <strong> Serie: </strong> 
                        {{$comic->series}}
                    </li>
                    <li>
                        <strong> Data di uscita: </strong> 
                         {{$comic->sale_date}}
                    </li>
                    <li>
                        <strong> Tipologia:  </strong> 
                        {{$comic->type}}
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container text-center">
       <a href="{{route('comics.index')}}" class="btn btn-primary mb-3" role="button">Indietro</a>
    </div>
    
@endsection