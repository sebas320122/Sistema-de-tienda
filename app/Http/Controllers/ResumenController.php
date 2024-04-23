<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tickes;
use App\Models\Reabastecimientos;

class ResumenController extends Controller
{
    public function showResumen(){
        // Obtener ventas del dia actual
        $ventasHoy = DB::table('tickets')
        ->where(DB::raw('DATE(created_at)'), '=', DB::raw('CURDATE()'))
        ->latest()
        ->get();
        //Obtener total actual
        $ventasHoyTotal = 0;
        foreach ($ventasHoy as $ventaHoy){
            $ventasHoyTotal += $ventaHoy->Total;
        }

        // Obtener gastos del dia actual
        $gastosHoy = DB::table('reabastecimientos')
        ->where('Estado','<>','Anotada')
        ->where(DB::raw('DATE(created_at)'), '=', DB::raw('CURDATE()'))
        ->latest()
        ->get();
        //Obtener total actual
        $gastosHoyTotal = 0;
        foreach ($gastosHoy as $gastoHoy){
            $gastosHoyTotal += $gastoHoy->Costo;
        }

        // Calcular ganancias del dia actual
        $gananciasHoy= ($ventasHoyTotal) - ($gastosHoyTotal);

        return view('tabla_resumen/resumen', 
        [
            'ventasHoy' => $ventasHoy,
            'ventasHoyTotal' => $ventasHoyTotal,
            'gastosHoy' => $gastosHoy,
            'gastosHoyTotal' => $gastosHoyTotal,
            'gananciasHoy' => $gananciasHoy
        ]);
    }

    public function showResumenSemana(){
        // Obtener ventas del dia actual
        $ventasSemana = DB::table('tickets')
        ->where(DB::raw('DATE(created_at)'), '>=', DB::raw('CURDATE() - INTERVAL 7 DAY'))
        ->where(DB::raw('DATE(created_at)'), '<', DB::raw('CURDATE()'))
        ->latest()
        ->get();
        //Obtener total actual
        $ventasSemanaTotal = 0;
        foreach ($ventasSemana as $ventaSemana){
            $ventasSemanaTotal += $ventaSemana->Total;
        }

        // Obtener gastos del dia actual
        $gastosSemana = DB::table('reabastecimientos')
        ->where('Estado','<>','Anotada')
        ->where(DB::raw('DATE(created_at)'), '>=', DB::raw('CURDATE() - INTERVAL 7 DAY'))
        ->where(DB::raw('DATE(created_at)'), '<', DB::raw('CURDATE()'))
        ->latest()
        ->get();
        //Obtener total actual
        $gastosSemanaTotal = 0;
        foreach ($gastosSemana as $gastoSemana){
            $gastosSemanaTotal += $gastoSemana->Costo;
        }

        // Calcular ganancias del dia actual
        $gananciasSemana= ($ventasSemanaTotal) - ($gastosSemanaTotal);

        return view('tabla_resumen/resumen_semana', 
        [
            'ventasSemana' => $ventasSemana,
            'ventasSemanaTotal' => $ventasSemanaTotal,
            'gastosSemana' => $gastosSemana,
            'gastosSemanaTotal' => $gastosSemanaTotal,
            'gananciasSemana' => $gananciasSemana
        ]);
    }
}
