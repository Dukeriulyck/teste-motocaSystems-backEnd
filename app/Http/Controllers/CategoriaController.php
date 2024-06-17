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
     * Imprime todas as categorias.
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
     * Salva uma categoria
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
     * Atualiza uma categoria
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
     * Deleta uma categoria
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
