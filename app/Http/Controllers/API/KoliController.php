<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Models\Koli;
use Exception;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class KoliController extends Controller
{
    public function index(Request $request)
    {
        $koli = Koli::whereIn('user', $request->user)->get();

        return response()->json($koli, Response::HTTP_OK);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user' => ['required','email'],
            'koli' => ['required','string'],
            'item' => ['required','array'],
        ]);

        if ($validator->fails()){
            return response()->json($validator->errors(),
            Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {

            $arr_tojson = json_encode($request->item);

        // foreach ($request->item as $value) {
            Koli::create([
                'user' => $request->user,
                'koli' => $request->koli,
                'item' => $arr_tojson,
            ]);
        // }

        return response()->json('No Content',Response::HTTP_NO_CONTENT);

        } catch (QueryException $e) {

            return response()->json([
                'message' => $e->errorInfo
            ]);
        }
    }

    public function update(Request $request)
    {

        // $koli = Koli::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'user' => ['required','email'],
            'koli' => ['required','string'],
            'item' => ['required','array'],
        ]);

        if ($validator->fails()){
            return response()->json($validator->errors(),
            Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $koli = Koli::where('user', $request->user)->get('id');

        // return $koli;
        try {

            $arr_tojson = json_encode($request->item);

            // $data = Koli::where('id', $kolo->id)->get();
            // $koli::update([
            //     'user' => $request->user,
            //     'koli' => $request->koli,
            //     'item' => $arr_tojson,
            // ]);

            foreach ($koli as $value) {

                Koli::where('id', $value->id)
                ->update([
                        'user' => $request->user,
                        'koli' => $request->koli,
                        'item' => $arr_tojson,
                ]);
            }

            return response()->json('No Content',Response::HTTP_NO_CONTENT);

        } catch (QueryException $e) {

            return response()->json([
                'message' => $e->errorInfo
            ]);
        }
    }

    public function destroy()
    {

    }


}
