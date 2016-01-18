<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Product;
use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;

class ProductsController extends Controller
{

    private $productsModel;

    public function __construct(Product $productsModel)
    {
        $this->productsModel = $productsModel;
    }

    public function index()
    {
        $products = $this->productsModel->all();

        return view('products.index', compact('products'));
    }

    public function create()
    {
        return "Criando Products";
    }

    public function edit()
    {
        return "Editando Products";
    }

    public function update()
    {
        return "Atualizando Products";
    }

    public  function destroy()
    {
        return "Deletando Products";
    }
}
