<?php

namespace App\Http\Controllers;
use App\Volume;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $volumi = Volume::all();
        return view('comics.index', compact('volumi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $data = $request->all();
        $request->validate([
            "title"=>"required|string|200|unique:volumes",
            "description" => 'required',
            "thumb" => 'nullable|url',
            "price" => 'required|numeric',
            "series" => 'required|min:1|max:50|',
            "sale_date" => 'required|date',
        ]);

        
        $newComic = new Volume();
        $newComic->title = $data['title'];
        $newComic->description = $data['description'];
        $newComic->thumb = $data['thumb'];
        $newComic->price = $data['price'];
        $newComic->series = $data['series'];
        $newComic->sale_date = $data['sale_date'];
        $newComic->save();
        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Volume $comic)
    {
       // $volumi = Volume::find($title); ritorna: Undefined variable: title 
            return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Volume $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Volume $comic)
    {   
        $data = $request->all();
        
        $request->validate([
            "title"=>"required|string|200|unique:volumes",
            "description" => 'required',
            "thumb" => 'nullable|url',
            "price" => 'required|numeric',
            "series" => 'required|min:1|max:50|',
            "sale_date" => 'required|date',
        ]);
        
        $comic->title = $data['title'];
        $comic->description = $data['description'];
        if(!empty($data['thumb'])){
            $comic->thumb = $data['thumb'];
        };
        $comic->price = $data['price'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];

        $comic->save();

        return redirect()->route('comics.index', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Volume $comic)
    {
        $comic->delete();
        
        return redirect()->route('comics.index');
    }
}
