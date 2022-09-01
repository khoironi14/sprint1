<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Provinces;
use Illuminate\Database\QueryException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class RajaongkirController extends Controller
{

    public function getProvinces(Request $request)
    {
        try {
            $provinces=Provinces::find($request->id);
            if($provinces){


            $response=[
                'message'=>'Data Provinces',
                'data'=>$provinces

            ];
        }else{
            $response=[
                'message'=>'Data Provinces Not Ready',
                'data'=>$provinces

            ];

        }
            return response()->json($response, Response::HTTP_OK);
        } catch (QueryException $e) {
            return response()->json(['message'=>'Failed'. $e->errorInfo]);
        }
    }

    public function getCity(Request $request){

        try {
            $city=City::find($request->id);
            if($city){
                $response=[
                    'message'=>'Data City Available',
                    'data'=>$city

                ];
            }else{

                $response=[
                    'message'=>'Data City Not Available',
                    'data'=>$city

                ];
            }
            return response()->json($response, Response::HTTP_OK);
        } catch (QueryException $e) {
            return response()->json(['message'=>'Failed'. $e->errorInfo]);
        }





    }


}
