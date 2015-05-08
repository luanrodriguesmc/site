<?php namespace App\Http\Controllers;

use App\Cliente;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use App\Http\Requests\ClienteRequest;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class ClienteController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return view('clientes.list', array(
            'clientes' => Cliente::orderBy('id', 'asc')->paginate(20)
        ));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('clientes.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ClienteRequest $request)
	{
        $file = \Request::file('arquivo');
        $ext = $file->getClientOriginalExtension();
        $newnome = md5(time().$file->getClientOriginalName());
        $file->move(public_path().'/assets/img/', $newnome.".".$ext);

        $request->merge(array('imgUrl'    => $newnome.'.'.$ext));// grava o nome original do arquivo


        Cliente::create($request->all());
        return \Redirect::to('cliente');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        return view('clientes.show', array(
            'cliente'   => Cliente::findOrFail($id)
        ));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return view('clientes.edit', array(
            'cliente'   => Cliente::findOrFail($id)
        ));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function update($id, ClienteRequest $request)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->update($request->all());
        return \Redirect::to('cliente/'.$id);
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $cliente = Cliente::find($id);
        $cliente->delete();
        return \Redirect::to('cliente');
	}

}
