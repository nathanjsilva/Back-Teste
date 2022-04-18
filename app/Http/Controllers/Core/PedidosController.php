<?php

namespace App\Http\Controllers\Core;

use App\Http\Controllers\Controller;
use App\Models\Core\Pedidos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pedidos::all();
        return response()->json(['data'=> $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data  = [
            'nome_cliente' => $request->input('nome_cliente'),
            'documento_cliente' =>$request->input('documento_cliente'),
            'nome_sanduiche' => $request->input('nome_sanduiche'),
            'status_pedido' => $request->input('status_pedido'),
            'qtd_sanduiche' => intval($request->input('qtd_sanduiche')),
            'valor_sanduiche' => $request->input('valor_sanduiche'),
            'valor_total' => $request->input('valor_sanduiche') * intval($request->input('qtd_sanduiche')),
        ];
        
        Pedidos::create($data);

        return response()->json(['data' => $data]);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Pedidos::findOrFail($id);
        $arrayPedido = ['status_pedido' => $request->input('status_pedido')];

        $data->update($arrayPedido);

        return response()->json(["msg"=> "Status do pedido atualizado atualizado com sucesso", $data]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $data = Pedidos::findOrFail($id);

        $data->delete($id);

        return response()->json(["msg"=> "Pedido deletado com sucesso"]);
    }

}
