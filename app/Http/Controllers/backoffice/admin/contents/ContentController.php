<?php

namespace App\Http\Controllers\backoffice\admin\contents;

use App\Constantes\Constante;
use App\Http\Controllers\Controller;
use App\Http\Requests\admin\ContentFormRequest;
use App\Models\Content;
use Illuminate\View\View;
use \Illuminate\Http\RedirectResponse;

class ContentController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index() : View
	{
		$data = Constante::createData(
			'Toutes les actualités', "contents", Content::orderBy('created_at', 'desc')->paginate(5), "pages.backoffice.admin.contents.index" , Constante::DEFAULT_NAVBAR
		);
		return view(Constante::DEFAULT_PAGE, $data);
	}
	
	/**
	 * Show the form for creating a new resource.
	 */
	public function create() : View
	{
		$contents = new Content();
		$data = Constante::createData(
			$contents->exists ? "Editer un contenu" : "Créer un contenu", "content", $contents, 'pages.backoffice.admin.contents.form' , Constante::DEFAULT_NAVBAR
		);
		return view(Constante::DEFAULT_PAGE, $data);
	}
	
	/**
	 * Store a newly created resource in storage.
	 */
	public function store(ContentFormRequest $request) : RedirectResponse {
		$data = $request->validated ();
		$image = $request->validated ('image');
		if ($image !== null && !$image->getError()) {
			$data['image'] = $image->store('images', 'public');
		}
		$content = Content::create($data);
		return to_route('backoffice.contents.index')->with('success', 'Le bien a bien été créé');
	}
	
	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit(Content $content) : View
	{
		$data = Constante::createData(
			$content->exists ? "Editer un bien" : "Créer un bien", "content", $content, 'pages.backoffice.admin.contents.form' , Constante::DEFAULT_NAVBAR
		);
		return view(Constante::DEFAULT_PAGE, $data);
	}
	
	/**
	 * Update the specified resource in storage.
	 */
	public function update(ContentFormRequest $request, Content $content) : RedirectResponse
	{
		$data = $request->validated ();
		$image = $request->validated ('image');
		if ($image !== null && !$image->getError()) {
			$data['image'] = $image->store('images', 'public');
		}
		$content->update($data);
		return to_route('backoffice.contents.index')->with('success', 'Le contenu a bien été modifié');
	}
	
	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(Content $content) : RedirectResponse
	{
		$content->delete($content->id);
		return to_route('backoffice.contents.index')->with('success', 'Le contenu a bien été supprimé');
	}
	
}
