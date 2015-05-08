<?php namespace App\Http\Controllers;

use App\Slide;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use App\Http\Requests\SlideRequest;
use App\Http\Requests\ArquivoRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SlideController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return view('slides.list', array(
            'slides' => Slide::orderBy('ordem', 'asc')->paginate(20)
        ));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('slides.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(SlideRequest $request)
	{
        $file = \Request::file('arquivo');
        $ext = $file->getClientOriginalExtension();
        $newnome = md5(time().$file->getClientOriginalName());
        $file->move(storage_path().'/app/slide/', $newnome.".".$ext);

        $request->merge(array('imgUrl'    => $newnome));// grava o nome original do arquivo


        Slide::create($request->all());
        return \Redirect::to('slide');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        return view('slides.show', array(
            'slide'   => Slide::findOrFail($id)
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
        return view('slides.edit', array(
            'slide'   => Slide::findOrFail($id)
        ));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function update($id, SlideRequest $request)
    {
        $slide = Slide::findOrFail($id);
        $slide->update($request->all());
        return \Redirect::to('slide/'.$id);
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
