<?php

namespace App\Http\Controllers;

use App\Models\Episodio;
use App\Http\Controllers\BaseController;

class EpisodiosController extends BaseController
{
    public function __construct()
    {
        $this->classe = Episodio::class;
    }

    public function buscaPorEpisodios(int $serie_id)
    {
        return Episodio::where('serie_id', $serie_id)->paginate();
    }
}
