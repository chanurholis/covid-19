<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Charts\covidChart;

class covidController extends Controller
{
    public function index()
    {
        $suspects = collect(Http::get('https://api.kawalcorona.com/indonesia/provinsi')->json());
        $indonesia = collect(Http::get('https://api.kawalcorona.com/indonesia')->json());

        $suspectsData = $suspects->flatten(1);
        $positif = $indonesia->pluck('positif');
        $sembuh = $indonesia->pluck('sembuh');
        $meninggal = $indonesia->pluck('meninggal');

        // foreach ($positif as $item) {
        //     $dataPositif = $item;
        // }

        foreach ($sembuh as $item) {
            $dataSembuh = $item;
        }

        foreach ($meninggal as $item) {
            $dataMeningal = $item;
        }

        $labels = $suspectsData->pluck('Provinsi');
        $data   = $suspectsData->pluck('Kasus_Posi');
        $colors  = $labels->map(function ($item) {
            return '#' . substr(md5(mt_rand()), 0, 6);
        });

        $chart = new covidChart;
        $chart->labels($labels);
        $chart->dataset('Data kasus positif di Indonesia :', 'line', $data)->backgroundColor($colors);

        return view('layouts.main', [
            'chart' => $chart,
            'positif' => $positif,
            'sembuh' => $dataSembuh,
            'meninggal' => $dataMeningal
        ]);
    }
}
