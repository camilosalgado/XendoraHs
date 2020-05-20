<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.app');
});

/*
    Route::get('/report1', 'ReporteController@reportOne')->name('reporte1');
	Route::get('/report2', 'ReporteController@reportTwo')->name('reporte2');
	Route::get('/report3', 'ReporteController@reportThree')->name('reporte3');
	Route::get('/report4', 'ReporteController@reportFourth')->name('reporte4');

	Route::get('/report1getdata/{fecini}/fin/{fecfin}', 'ReporteController@reportOneGetData');
	Route::get('/report2getdata/{fec}', 'ReporteController@reportTwoGetData');
	Route::get('/report3getdata/{mes}', 'ReporteController@reportThreeGetData');
    Route::get('/report4getdata/{fecini}/fin/{fecfin}', 'ReporteController@reportFourthGetData');

*/




/*Route::get('/g', function () {
    return response()->json(DB::select("SELECT * FROM dbo.conce_duplicado('30/04/2020')"));
    return response()->json(DB::select("SELECT * FROM REPORT_NOMINA('16/04/2020','30/04/2020')"));
    return response()->json(DB::select("select * from PROG_CUMPLE(9)"));
    return response()->json(DB::select("SELECT * FROM SOLI_PERMI_APROBADOS('01/05/2020','15/05/2020')"));
})->name('test');*/
