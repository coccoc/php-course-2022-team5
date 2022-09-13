<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ReservationController extends Controller
{
    public function getByUserId(Request $request) : JsonResponse {
        $reservation = [];
        try {
            $userId = $request->userId;
            $reservation = Reservation::query()->where('booking_user_id', '=', $userId)->get();
        } catch (Exception $e) {
            logs($e);
        } finally {
            return response()->json($reservation);
        }
    }

    public function create(Request $request) : JsonResponse
    {
        $success = [];
        try {
            $userId = $request->userId;
            $ticketIds = $request->ticketIds;

            foreach ($ticketIds as $ticketId) {
                $newReservation = Reservation::query()->newModelInstance([
                    'ticket_id' => $ticketId,
                    'booking_user_id' => $userId
                ]);

                if ($newReservation->save()) {
                    $success[] = $newReservation;
                }
            }
        } catch (Exception $e) {
            dd($e);
            logs($e);
        } finally {
            return response()->json($success);
        }
    }

    public function delete(Request $request) : JsonResponse
    {
        $success = [];
        try {
            $userId = $request->userId;
            $ticketIds = $request->ticketIds;

            $success = Reservation::query()
                ->where('booking_user_id', '=', $userId)
                ->whereIn('ticket_id', $ticketIds)
                ->delete();
        } catch (Exception $e) {
            logs($e);
        } finally {
            return response()->json($success);
        }
    }
}
