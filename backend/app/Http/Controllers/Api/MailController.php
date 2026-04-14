<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Mail\StoreMailRequest;
use App\Http\Resources\Mail\MailCollection;
use App\Http\Resources\Mail\MailResource;
use App\Models\Mail;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->user()->tokenCan('user')) {
            $mails = Mail::with('sender')
                ->where('receiver_id', $request->user()->id)
                ->get();
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
            if ($request->sender_id != $request->user()->id) {
                return response()->json([
                    'message' => 'Unauthorized'
                ], 401);
            }
            $validated = $request->validated();
            $mail = Mail::create($validated);
            return (new MailResource($mail))
                ->response()
                ->setStatusCode(201);
        }
        return response()->json([
            'message' => 'Unauthorized'
        ], 401);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, Request $request)
    {
        if ($request->user()->tokenCan('user')) {
            try {
                $mail = Mail::with('sender')->findOrFail($id);
            } catch (ModelNotFoundException $e) {
                return response()->json([
                    'message' => 'Mail not found'
                ], 404);
            }
            return (new MailResource($mail))
                ->response()
                ->setStatusCode(200);
        }
        return response()->json([
            'message' => 'Unauthorized'
        ], 401);
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
    public function destroy(string $id, Request $request)
    {
        if ($request->user()->tokenCan('user')) {
            try {
                $mail = Mail::findOrFail($id);
            } catch (ModelNotFoundException $e) {
                return response()->json([
                    'message' => 'Mail not found'
                ], 404);
            }
            if ($mail->sender_id !== $request->user()->id) {
                return response()->json([
                    'message' => 'Unauthorized'
                ], 401);
            }
            $mail->delete();
            return response()->json([], 204);
        }
        return response()->json([
            'message' => 'Unauthorized'
        ], 401);
    }

    public function count(Request $request)
    {
        if ($request->user()->tokenCan('user')) {
            $count = Mail::where('receiver_id', $request->user()->id)
                ->where('is_read', 0)
                ->count();
            return response()->json([
                'count' => $count
            ]);
        }
        return response()->json([
            'message' => 'Unauthorized'
        ], 401);
    }
}
