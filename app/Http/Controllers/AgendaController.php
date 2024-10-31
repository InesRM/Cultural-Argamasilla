<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Evento;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


//Buscador de eventos para todos los usuarios sin tener que estar identificados
//No necesitamos los eventos a los que se ha inscrito el usuario
//Buscador por semanas, meses o categoria.

//Solo necesitamos los eventos programados una vista para cualquier usuario


namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Categoria;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index(Request $request)
    {
        // Obtenemos las categorías para usarlas en el filtro de la vista
        $categorias = Categoria::all();

        // Comprobamos si la request lleva categoría para filtrar los eventos
        $categoriaFiltro = $request->input('categoria');

        // Comprobamos si la request lleva filtro por semana o mes
        $filtroTiempo = $request->input('tiempo');

        // Construimos la consulta base
        $eventos = Evento::with('categoria')
            ->where('fecha', '>=', now())
            ->where('estado', 'creado')
            ->orderBy('fecha', 'asc');

        // Aplicamos filtros si existen
        if ($categoriaFiltro) {
            $eventos->where('categoria_id', $categoriaFiltro);
        }

        if ($filtroTiempo === 'semana') {
            $eventos->whereBetween('fecha', [now()->startOfWeek(), now()->endOfWeek()]);
        } elseif ($filtroTiempo === 'mes') {
            $eventos->whereYear('fecha', now()->year)
                ->whereMonth('fecha', now()->month);
        }

        // Paginamos los resultados
        $eventos = $eventos->paginate(8);

        return view('agenda', compact('eventos', 'categorias', 'filtroTiempo', 'categoriaFiltro'));
    }
}
