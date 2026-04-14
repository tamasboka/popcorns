<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Mail\StoreMailRequest;
use App\Http\Resources\Mail\MailCollection;
use App\Models\Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->user()->tokenCan('user')) {
            $mails = Mail::where('receiver_id', $request->user()->id);
            return (new MailCollection($mails))
                ->response()
                ->setStatusCode(200);
        }
        return response()->json([
            'message' => 'Unauthorized'
        ], 401);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMailRequest $request)
    {
        if ($request->user()->tokenCan('user')) {

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
