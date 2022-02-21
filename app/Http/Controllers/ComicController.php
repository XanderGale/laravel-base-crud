<?php

namespace App\Http\Controllers;
use App\Comic;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Mail\Message as MailMessage;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comics = Comic::all();

        $data = [
            'comics' => $comics,
        ];

        return view('comics.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Prendo i dati dal form in pagina
        $form_data = $request->all();

        // Dichiaro i dati dal form
        $new_comic = new Comic();
        $new_comic->title = $form_data['title'];
        $new_comic->description = $form_data['description'];
        $new_comic->thumb = $form_data['thumb'];
        $new_comic->price = $form_data['price'];
        $new_comic->series = $form_data['series'];
        $new_comic->sale_date = $form_data['sale_date'];
        $new_comic->type = $form_data['type'];

        // Validazione dati dal form
        $validated = $request->validate($this->validationRules());

        // Salvo dati nel form se validati
        $new_comic->save();

        // Indirizzo l'utente al relativo articolo caricato
        return redirect()->route('comics.show', ['comic' => $new_comic->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $comic = Comic::findOrFail($id);

        $data = [
            'comic' => $comic,
        ];

        return view('comics.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $comic = Comic::findOrFail($id);

        $data = [
            'comic' => $comic,
        ];

        return view('comics.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Prendo i dati dal form in pagina
        $form_data = $request->all();

        // Prendo i dati del relativo model da fare update
        $comic_to_update = Comic::findOrFail($id);
        
        // Validazione dati dal form
        $validated = $request->validate($this->validationRules());
        

        // Faccio l'update dei dati presi dal form
        $comic_to_update->update($form_data);

        // Indirizzo l'utente al relativo articolo updatato
        return redirect()->route('comics.show', ['comic' => $comic_to_update->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Prendo i dati del relativo model da cancellare
        $comic_to_delete = Comic::findOrFail($id);

        // Dichiaro l'azione delete
        $comic_to_delete->delete();

        // Ritorno all'index
        return redirect()->route('comics.index');
    }

    // Metodo di validazione unico per il form
    protected function validationRules() {
        return [
            'title' => 'required|max:50',
            'description' => 'nullable|min:50|max:60000',
            'thumb' => 'required|active_url|max:500',
            'series' => 'required|max:100',
            'price' => 'numeric',
            'sale_date' => 'date',
            'type' => 'required|max:50',
        ];
    }
}
