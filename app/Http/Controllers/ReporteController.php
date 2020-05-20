<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class ReporteController extends Controller
{
    //
    public function reportOne()
    {
        return view('reports.reporte1');
    }

    public function reportTwo()
    {
        return view('reports.reporte2');
    }

    public function reportThree()
    {
        return view('reports.reporte3');
    }

    public function reportFourth()
    {
        return view('reports.reporte4');
    }

    public function reportOneGetData($fechini, $fechfin)
    {
        $sourceOne = new \DateTime($fechini);
        $formatDateOne = $sourceOne->format('d/m/yy');
        $sourceTwo = new \DateTime($fechfin);
        $formatDateTwo = $sourceTwo->format('d/m/yy');

        return response()->json(DB::select("SELECT * FROM REPORT_NOMINA('$formatDateOne','$formatDateTwo')"));

    }

    public function reportTwoGetData($fecha)
    {
        $date = new \DateTime($fecha);
        $formatdate = $date->format('d/m/yy');
        return response()->json(DB::select("SELECT * FROM dbo.conce_duplicado('$formatdate')"));
    }

    public function reportThreeGetData($mes)
    {
        return response()->json(DB::select("select * from PROG_CUMPLE('$mes')"));
    }

    public function reportFourthGetData($fechini, $fechfin)
    {
        $sourceOne = new \DateTime($fechini);
        $formatDateOne = $sourceOne->format('d/m/yy');
        $sourceTwo = new \DateTime($fechfin);
        $formatDateTwo = $sourceTwo->format('d/m/yy');

        return response()->json(DB::select("SELECT * FROM SOLI_PERMI_APROBADOS('$formatDateOne','$formatDateTwo')"));

    }

}
