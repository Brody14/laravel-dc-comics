<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ComicController extends Controller
{
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    public function show(Comic $comic)
    {

        return view('comics.show', compact('comic'));
    }

    public function create()
    {
        return view('comics.create');
    }

    public function store(Request $request)
    {
        //dd('inviato');

        //VALIDAZIONE
        $data = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|string',
            'thumb' => 'required|max:255|url',
            'price' => 'required|decimal:2',
            'series' => 'required|max:255',
            'sale_date' => 'required|date',
            'type' => [
                'required',
                Rule::in(['comic book', 'graphic novel'])
            ]
        ]);


        $new_comic = new Comic();

        $new_comic->title = $data['title'];
        $new_comic->thumb = $data['thumb'];
        $new_comic->description = $data['description'];
        $new_comic->price = $data['price'];
        $new_comic->series = $data['series'];
        $new_comic->sale_date = $data['sale_date'];
        $new_comic->type = $data['type'];
        $new_comic->save();

        return to_route('comics.show', $new_comic);
    }

    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    public function update(Request $request, Comic $comic)
    {
        //dd('salvato');
        //$data = $request->all();

        //VALIDAZIONE
        $data = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|string',
            'thumb' => 'required|max:255|url',
            'price' => 'required|decimal:2',
            'series' => 'required|max:255',
            'sale_date' => 'required|date',
            'type' => [
                'required',
                Rule::in(['comic book', 'graphic novel'])
            ]
        ]);

        $comic->title = $data['title'];
        $comic->thumb = $data['thumb'];
        $comic->description = $data['description'];
        $comic->price = $data['price'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];
        $comic->save();

        return to_route('comics.show', $comic);
    }

    public function destroy(Comic $comic)
    {

        // dd('eliminato');
        $comic->delete();
        return to_route('comics.index');
    }
}
