<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    protected $model;
    public function __construct(Produtos $produtos)
    {
        $this->model = $produtos;
    } 

    public function getById(string $id)
    {
        $produtos = $this->model->with('categoria')->find($id);
        if(!$produtos) {
            return response('Produto não localizado');
        }
        try {
            return response($produtos);
        } catch(\Throwable $th) {
            throw $th;
        }
    }
    /**
     * Imprime todos os produtos
     */
    public function index()
    {
        return response($this->model->all());
    }

    /**
     * Salva um produto
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
     * Atualiza um produto
     */
    public function update(Request $request, string $id)
    {
        $produtos = $this->model->find($id);
        if(!$produtos) {
            return response('Produto não localizado');
        }
        try {
            $dados = $request->all();
            $produtos->fill($dados)->save();
            return response($dados);
        } catch(\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Deleta um produto
     */
    public function destroy(string $id)
    {
        $produtos = $this->model->find($id);
        if(!$produtos){
            return response('Produto não localizado');
        }
        try {
            $produtos->delete();
            return response('Produto deletado');
        } catch(\Throwable $th){
            throw $th;
        }
    }
}
