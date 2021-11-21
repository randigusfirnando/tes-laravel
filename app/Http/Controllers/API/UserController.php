<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function store(Request $request)
    {

            $validator = Validator::make($request->all(), [
                'user' => ['required','array'],
            ]);

            if ($validator->fails()){
                return response()->json($validator->errors(),
                Response::HTTP_UNPROCESSABLE_ENTITY);
            }

            try {

            foreach ($request->user as $value) {
                User::create([
                    'user' => $value,
                ]);
            }

            return response()->json('No Content',Response::HTTP_NO_CONTENT);

        } catch (QueryException $e) {

            return response()->json([
                'message' => $e->errorInfo
            ]);
        }
    }
}
