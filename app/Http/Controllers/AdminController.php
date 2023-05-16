<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Pesan;
use App\Models\Book;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function indexUsers(){
        $data = User::get();
        return view('dashboard.user', compact('data'));
    }
    
    public function pesans(){
        $pesan = Pesan::all();
        return view('dashboard.pesan', compact('pesan'));
    }

    public function book(){
        $book = Book::get();
        return view('dashboard.book', compact('book'));
    }

    public function add(Request $request){
        $request->validate([
            'title' => 'required',
            'writer' => 'required',  
            'publisher' => 'required',
            'category' => 'required',
            'synopsis' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
        ]);
        $input = $request->all();
        if($image = $request->file('image')) {
            $destinationPath = 'image/';
            $coverImage = date('YmdHis').'.'. $image->getCLientOriginalExtension();
            $image->move($destinationPath, $coverImage);
            $input['image'] = "$coverImage";
        }

        Book::create($input);
        return redirect('/book')->with('success', 'Berhasil membuat !');
    }

        // $image = time() .'.'.$request->image->extension();
        // $request->image->move(public_path('images'), $image);


    public function destroy($id){
        User::where('id', $id)->delete();
        Pesan::where('id', $id)->delete();
        return redirect()->back()->with('successDelete', 'Berhasil Menghapus!');
    }

    public function editUsers($id)
    {
        $user= User::where('id', $id)->first();
        return view('dashboard.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'address' => 'required',
        ]);
        User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'address' => $request->address,

        ]);
        return redirect('/users');
    }
}
