<?php

namespace App\Http\Controllers\frontoffice;

use App\Constantes\Constante;
use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index() : View {
        $data = Constante::createData(
            "Le portail de l'intelligence artificielle et des startups IA | Les actualités récentes", 'contents', Content::orderBy('created_at', 'desc')->paginate(4),
            'pages.frontoffice.home', Constante::DEFAULT_NAVBAR
        );
        return \view(Constante::DEFAULT_PAGE, $data);
    }
}
