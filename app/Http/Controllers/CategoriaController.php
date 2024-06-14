<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    protected $model;
    public function __construct(Categorias $categorias)
    {
        $this->model = $categorias;
    }   
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response($this->model->all());
    }

    public function getById(string $id)
    {
        $categorias = $this->model->find($id);
        if(!$categorias) {
            return response('Categoria não localizada');
        }
        try {
            return response($categorias);
        } catch(\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $this->model->create($request->all());
            return response($request);
        } catch(\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //code
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $categorias = $this->model->find($id);
        if(!$categorias) {
            return response('Categorias não localizada');
        }
        try {
            $dados = $request->all();
            $categorias->fill($dados)->save();
            return response($dados);
        } catch(\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categorias = $this->model->find($id);
        if(!$categorias){
            return response('Categoria não localizada');
        }
        try {
            $categorias->delete();
            return response('Categoria deletada');
        } catch(\Throwable $th){
            throw $th;
        }
    }
}
