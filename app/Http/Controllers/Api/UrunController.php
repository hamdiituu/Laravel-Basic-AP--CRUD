<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Urun;
class UrunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //get all
    {
        $urunler  = Urun::all();
   

        //return response->json( ['data' => $urunler], 200);
        return response()->json($urunler,200);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //create
    {
        $urun = new Urun();

        $urun ->UrunAdi = $request->UrunAdi;
        $urun ->Fiyat = $request->Fiyat;
        $urun ->Stok = $request->Stok;
        $urun ->Aciklama = $request->Aciklama;

        $urun->save();

        return response(["Message"=>"Ürün başarıyla eklendi"],201);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) //get urun
    {
        $urun = Urun::find($id);

        return response($urun,200);

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
        
        $urun = Urun::find($id);

        $urun ->UrunAdi = $request->UrunAdi;
        $urun ->Fiyat = $request->Fiyat;
        $urun ->Stok = $request->Stok;
        $urun ->Aciklama = $request->Aciklama;

        $urun->update();

        return response(["Message"=>"Ürün başarıyla güncellendi."],200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) //delete
    {
        Urun::destroy($id);
        return response(["Message"=>"Ürün başarıyla silindi."],200);
    }
}







