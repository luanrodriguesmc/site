<?php namespace App\Http\Controllers;

use App\Noticia;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use App\Http\Requests\NoticiaRequest;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class NoticiaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return view('noticias.list', array(
            'noticias' => Noticia::orderBy('id', 'asc')->paginate(20)
        ));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('noticias.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(NoticiaRequest $request)
	{
        $request->merge(array('slug'    => Str::slug(($request->indexTitulo))));

        Noticia::create($request->all());
        return \Redirect::to('noticia');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        return view('noticias.show', array(
            'noticia'   => Noticia::findOrFail($id)
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
        return view('noticias.edit', array(
            'noticia'   => Noticia::findOrFail($id)
        ));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function update($id, NoticiaRequest $request)
    {
        $noticia = Noticia::findOrFail($id);
        $noticia->update($request->all());
        return \Redirect::to('noticia/'.$id);
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
