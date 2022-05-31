<?php

namespace App\Http\Controllers;

use App\Models\JobOffer;
use App\Models\UserOffer;
use Illuminate\Http\Request;

class JobOfferController extends Controller
{
    public function __construct()
    {
        $this->middleware(
            'auth:api',
        );
    }
    //OBTIENE TODOS LOS REGISTRO DE TIPO DE OFERTA LABORAL
    public function index()
    {
        $jobsOffers = JobOffer::all();
        return $jobsOffers;
    }

    //MUESTRA LA OFERTA
    public function show($id)
    {
        $offer = JobOffer::find($id);
        return $offer;
    }

    //GUARDAR OFERTAS LABORALES
    public function store(Request $request)
    {
        $offer = new JobOffer;
        $offer->name = $request->name;
        $offer->status = $request->status;
        $offer->save();

        $user_id = $request->user_id;
        foreach ($user_id as $id) {
            $user_offer = new UserOffer;
            $user_offer->user_id = $id;
            $user_offer->offer_id = $offer->id;
            $user_offer->save();
        }
    }
}
