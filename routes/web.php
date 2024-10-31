<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\ExperienciaController;
use App\Http\Controllers\InscripcionController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\AgendaController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Agenda de eventos pública
Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda');

//Experiencias públicas

Route::get('/experiencias', [ExperienciaController::class, 'show'])->name('experiencias.show');

//Auth acceso a los distintos dashboards según el rol

Route::get('/', function () {

    if (isset(Auth::user()->rol) && Auth::user()->rol == 'admin') {
        return redirect(route('admin.dashboard'));
    } elseif (isset(Auth::user()->rol) && Auth::user()->rol == 'asistente') {
        return redirect(route('asistente.eventos'));
    } else {
        return view('welcome');
    }
});



//Público
Route::get('/eventos/{id}', [EventoController::class, 'show'])->name('eventos.show');

//Asistente
Route::prefix('asistente')->middleware(['auth', 'verified', 'mdrol:asistente'])->group(function () {
    Route::get('/eventos', [EventoController::class, 'index'])->name('asistente.eventos');
    Route::get('/eventos/semana', [EventoController::class, 'showSemana'])->name('asistente.eventos.semana');
    Route::get('/eventos/mes', [EventoController::class, 'showMes'])->name('asistente.eventos.mes');
    Route::get('/eventos/filtrar', [EventoController::class, 'filtrarCategoria'])->name('asistente.eventos.filtrar');
    Route::post('/inscripcion', [InscripcionController::class, 'store'])->name('inscripcion.store');
    Route::get('/inscripciones', [InscripcionController::class, 'index2'])->name('inscripciones.index');
    Route::get('inscripciones/show/{user_id}', [InscripcionController::class, 'index'])->name('inscripciones.show');
    Route::get('/explora', function () {
        return view('asistente.explora');
    })->name('asistente.explora');
    Route::get('/experiencias', [ExperienciaController::class, 'index'])->name('asistente.experiencias');
});

Route::prefix('admin')->middleware(['auth', 'verified', 'mdrol:admin'])->group(function () {
    Route::get('/dashboard', [EventoController::class, 'indexAdmin'])->name('admin.dashboard');
    Route::get('/usuarios', [RegisteredUserController::class, 'show'])->name('admin.users');
    Route::get('/usuarios/delete/{id}', [ProfileController::class, 'destroyUser'])->name('admin.userDelete');
    Route::get('/usuarios/updateForm/{id}', [ProfileController::class, 'userUpdateForm'])->name('admin.userUpdateForm');
    Route::post('/usuarios/update', [ProfileController::class, 'userUpdate'])->name('admin.userUpdate');
    Route::get('/empresa/detalle/{id}', [EmpresaController::class, 'companyDetails'])->name('admin.companyDetails');
    Route::get('/usuarios/nuevo', [ProfileController::class, 'userCreateForm'])->name('admin.userCreateForm');
    Route::post('/usuarios/save', [ProfileController::class, 'storeUser'])->name('admin.storeUser');
    Route::get('/eventos', [EventoController::class, 'show'])->name('admin.events');
    Route::get('/eventos/nuevo', [EventoController::class, 'eventCretaeForm'])->name('admin.eventCreateForm');
    Route::post('/eventos/save', [EventoController::class, 'storeEvent'])->name('admin.storeEvent');
    Route::get('/eventos/detalle/{id}', [EventoController::class, 'eventDetails'])->name('admin.eventDetails');
    Route::get('/eventos/delete/{id}', [EventoController::class, 'destroyEvent'])->name('admin.eventDelete');
    Route::get('/eventos/updateForm/{id}', [EventoController::class, 'eventUpdateForm'])->name('admin.eventUpdateForm');
    Route::post('/eventos/update', [EventoController::class, 'eventUpdate'])->name('admin.eventUpdate');
    Route::get('/eventos/inscripciones/{id}', [EventoController::class, 'eventInscriptions'])->name('admin.eventInscriptions');
    Route::post('/eventos/cancelacion', [EventoController::class, 'eventCancelation'])->name('admin.eventCancelation');
    Route::post('/eventos/inscripciones/delete', [InscripcionController::class, 'inscriptionsDelete'])->name('admin.inscriptionsDelete');
    Route::get('/experiencias', [ExperienciaController::class, 'indexAdmin'])->name('admin.experiences');
    Route::get('/experiencias/delete/{id}', [ExperienciaController::class, 'experienceDelete'])->name('admin.experienceDelete');
    Route::get('/experiencias/nuevo', [ExperienciaController::class, 'experienceNewForm'])->name('admin.experienceNewForm');
    Route::post('/experiencias/save', [ExperienciaController::class, 'storeExperience'])->name('admin.storeExperience');
    Route::get('/empresa', [EmpresaController::class, 'index'])->name('admin.companies');
    Route::get('/empresa/nuevo', [EmpresaController::class, 'companyNewForm'])->name('admin.companyNewForm');
    Route::get('/empresa/Delete/{id}', [EmpresaController::class, 'companyDelete'])->name('admin.companyDelete');
    Route::post('/empresa/save', [EmpresaController::class, 'storeCompany'])->name('admin.storeCompany');
    Route::get('/inscripciones', [InscripcionController::class, 'index2'])->name('inscripciones.index');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profile/editUser', [ProfileController::class, 'editAdminUser'])->name('profile.editAdminUser');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
