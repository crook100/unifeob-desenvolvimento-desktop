<?php

namespace App\Http\Controllers;

use App\Models\ProductOne;
use App\Models\ProductHistoric;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = ProductOne::all();
        return view("products.index", compact("products"));
    }

    public function historic($id)
    {
        $product = ProductOne::find($id);
        $historic = $product->historic;
        return view("products.historic", compact("product", "historic"));
    }

    public function create()
    {
        return view("products.create");
    }

    public function store(Request $request)
    {
        $product = new ProductOne($request->only([
            "name", "description", "quantity"
        ]));

        if($product->save())
        {
            toast("Produto criado com sucesso!", "success");
            $product->historic()->create(["operation" => ProductHistoric::OPERATION_ADD, "quantity" => $product->quantity]);
        }else{
            toast("Houve um erro ao criar o produto!", "error");
        }
        return redirect("/products");
    }

    public function delete($id)
    {
        $product = ProductOne::find($id);

        if($product->delete())
        {
            toast("Produto deletado com sucesso!", "success");
        }else{
            toast("Houve um erro ao deletar o produto!", "error");
        }
        return redirect("/products");
    }

    public function edit(Request $request, $id)
    {
        $product = ProductOne::find($id);
        $new_quantity = $request->post("quantity");

        $diff = $new_quantity - $product->quantity;
        if($diff != 0)
        {
            if($product->setQuantity($new_quantity))
            {
                $product->historic()->create([
                    "operation" => ($diff < 0 ? ProductHistoric::OPERATION_SUB : ProductHistoric::OPERATION_ADD),
                    "quantity" => abs($diff)
                ]);
                toast("Produto editado com sucesso!", "success");
            }else{
                toast("Houve um erro ao editar o produto!", "error");
            }    
        }
        return redirect("/products");
    }
}
