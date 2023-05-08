<?php

namespace App\Constantes;

class Constante
{
    const DEFAULT_PAGE = "templates.view";

    const DEFAULT_NAVBAR = "templates.navbar";

    public static function createData(string $title = '', string $objectString = '', Object $object = null, string $page = '', string $navbar = null, string $sidebar = null) {
        $data = [
            'title' => $title,
            'page' => $page,
            $objectString => $object,
            'navbar' => $navbar,
            'sidebar' => $sidebar
        ];

        return $data;
    }

}
