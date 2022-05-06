<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function listarSeries()
    {
        $series = [
            'Punicher',
            'Lost',
            'Greys Anathomy'
        ];

        $html = '<ul>';

        foreach( $series as $serie){
            $html .= "<li> $serie </li>";
        };

        $html .= '</ul>';

        echo $html;
    }
}
