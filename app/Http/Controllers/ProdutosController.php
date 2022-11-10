<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProdutosModel;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produto = ProdutosModel::all();
        return view('produto', compact('produto'));
    }

    // Função de consulta (teste)
    
    public function consultaAll() {

    }

    public function consulta() {
       $produto = ProdutoModel::where('produto','xbox series s')->get();
    
       return view('produto', compact('produto'));
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
        $produto = new ProdutoModel();

        $produto -> produto = $request -> txProduto;
        $produto -> valor = $request -> txValor;
        
        $produto -> save();

        return redirect("/produto");
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto = ProdutoModel::find($id);
        $title = "Editar produto - {$produto->produto}";
        return view ('', compact('title', 'produto'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProdutoModel::where('idProduto',$id)->delete();
        return redirect("/produto");
    }
}