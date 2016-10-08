<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$cursos = Curso::orderBy('id', 'desc')->paginate(10);

		return view('cursos.index', compact('cursos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('cursos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$curso = new Curso();

		

		$curso->save();

		return redirect()->route('cursos.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$curso = Curso::findOrFail($id);

		return view('cursos.show', compact('curso'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$curso = Curso::findOrFail($id);

		return view('cursos.edit', compact('curso'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$curso = Curso::findOrFail($id);

		

		$curso->save();

		return redirect()->route('cursos.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$curso = Curso::findOrFail($id);
		$curso->delete();

		return redirect()->route('cursos.index')->with('message', 'Item deleted successfully.');
	}

}
