<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function catalog()
    {
        return view('catalog');
    }
    public function create()
    {
        return view('listing');
    }
    public function listing(Request $request)
    {
        //insert
        $image = $request->file('image')
        $new_name = $image->getOriginalClientName();
        $image->move(public_path('storage/images'),$new_name)

        Listing::create([
            'namabarang' => $request->namabarang,
            'kategori' => $request->kategori,
            'price' => $request->price,
            'qty' => $request->qty,
            'image' => $new_name,
        ])

        return redirect('/')->width('success','Data Success');
    }
}
