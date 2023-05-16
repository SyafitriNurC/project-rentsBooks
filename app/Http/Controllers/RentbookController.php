<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use App\Models\Book;
use Illuminate\Http\Request;

class RentbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function storePesan(Request $request){
        $request->validate([
            'name' => 'required', 
            'pesan' => 'required'
        ]);
        Pesan::create($request->all());return redirect('/');

    }

    public function pesan(){
        $pesan = Pesan::get();
        return view('dashboard.pesan', compact('pesan'));
    }

    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rentbook  $rentbook
     * @return \Illuminate\Http\Response
     */
    public function show(Rentbook $rentbook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rentbook  $rentbook
     * @return \Illuminate\Http\Response
     */
    public function editBooks($id)
    {
        $book= Book::where('id', $id)->first();
        return view('dashboard.editbook', compact('book'));
    }

    public function update(Request $request, $id)
    {
         $request->validate([
            'title' => 'required',
            'writer' => 'required',
            'publisher' => 'required',
            'category' => 'required',
            'synopsis' => 'required',
            'image' => 'required',
        ]);

        Book::where('id', $id)->update([
            'title' => $request->title,
            'writer' => $request->writer,
            'publisher' => $request->publisher,
            'category' => $request->category,
            'synopsis' => $request->synopsis,
            'image' => $request->image,

        ]);
        return redirect('/book');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rentbook  $rentbook
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Book::where('id', $id)->delete();
        return redirect()->back();
    }
}
