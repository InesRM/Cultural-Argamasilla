<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//RUTA CREACIÓN DE TOKEN:
Route::post('/tokens/create', function (Request $request) {
    if (!Auth::attempt($request->only('email', 'password'))) {
        return response()->json([
            'message' => 'Unauthorized'
        ], 401);
    }

    return response()->json([
        'token' => $request->user()->createToken($request->email, ['*'], now()->addWeek())->plainTextToken,
        'message' => 'Success'
    ]);
});

//EVENTOS
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/agencult/evento', [ApiController::class, 'index_eventos']);
    Route::get('/agencult/evento/{id}', [ApiController::class, 'info_evento']);
    Route::get('/categorias/{id}', [ApiController::class, 'evento_por_categoria']);
    Route::get('/agencult/asistente/{id}', [ApiController::class, 'info_asistente']);
    Route::get('/agencult/asistente/{id}/inscripciones', [ApiController::class, 'inscripciones_asistente']);
    Route::get('/agencult/asistente/{id}/inscripcion/{idEvento}', [ApiController::class, 'info_evento_asistente']);
    Route::get('/agencult/experiencias', [ApiController::class, 'index_experiencias']);
    Route::put('/agencult/evento', [ApiController::class, 'crear_evento']);
    Route::delete('/agencult/evento/{id}', [ApiController::class, 'borrar_evento']);
});
