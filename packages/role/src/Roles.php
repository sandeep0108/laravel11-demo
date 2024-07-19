<?php

namespace Tops\Roles;

use Illuminate\Support\Facades\Http;

class Roles
{
    public function justDoIt() {
        $response = Http::get('https://dummyjson.com/products/1');
        return $response['title '] . ' -' . $response['description'];
    }

}
