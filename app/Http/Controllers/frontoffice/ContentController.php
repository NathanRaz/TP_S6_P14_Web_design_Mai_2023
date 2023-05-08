<?php

namespace App\Http\Controllers\frontoffice;

use App\Constantes\Constante;
use App\Http\Controllers\Controller;
use App\Models\Content;
use \Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ContentController extends Controller
{
	public function index() : View {
		
		$data = Constante::createData (
			"Toutes les actualités", 'contents', Content::paginate(6), 'pages.frontoffice.contents.index',
			Constante::DEFAULT_NAVBAR
		);
		return View(Constante::DEFAULT_PAGE, $data);
		
	}
	
	public function show(string $slug, Content $content) : RedirectResponse | View {
		
		$expectedSlug = $content->getSlug ();
		
		if ( $slug !== $expectedSlug) {
			return to_route ('frontoffice.contents.show', ['slug' => $expectedSlug, 'contents' => $content]);
		}
		
		$data = Constante::createData (
			$content->title, 'content', $content, 'pages.frontoffice.contents.show',
			Constante::DEFAULT_NAVBAR
		);
		
		return View(Constante::DEFAULT_PAGE, $data);
	}
}
