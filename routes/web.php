<?php

use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'PageController@Admin')->name ('Admin');
Route::resource('JefaturaDePersonal/form_001_1','F1_1Controller',['as' => 'JefaturaDePersonal']);
Route::resource('JefaturaDePersonal/form_001_3','F1_3Controller',['as' => 'JefaturaDePersonal']);
Route::resource('JefaturaDePersonal/form_001_4','F1_4Controller',['as' => 'JefaturaDePersonal']);
Route::resource('JefaturaDePersonal/form_001_5','F1_5Controller',['as' => 'JefaturaDePersonal']);
Route::resource('JefaturaDePersonal/form_001_6','F1_6Controller',['as' => 'JefaturaDePersonal']);
Route::resource('JefaturaDePersonal/form_001_7','F1_7Controller',['as' => 'JefaturaDePersonal']);
Route::resource('JefaturaDePersonal/form_001_8','F1_8Controller',['as' => 'JefaturaDePersonal']);
Route::resource('JefaturaDePersonal/form_001_11','F1_11Controller',['as' => 'JefaturaDePersonal']);
Route::resource('JefaturaDePersonal/form_001_12','F1_12Controller',['as' => 'JefaturaDePersonal']);
Route::resource('JefaturaDePersonal/form_001_13','F1_13Controller',['as' => 'JefaturaDePersonal']);
Route::resource('JefaturaDePersonal/form_001_14','F1_14Controller',['as' => 'JefaturaDePersonal']);
Route::resource('JefaturaDePersonal/form_001_15','F1_15Controller',['as' => 'JefaturaDePersonal']);
Route::resource('titulos/form_002_1','F2_1Controller',['as' => 'titulos']);
Route::resource('titulos/form_002_2','F2_2Controller',['as' => 'titulos']);
Route::resource('titulos/form_002_3','F2_3Controller',['as' => 'titulos']);
Route::resource('DataCenter/form_003_1','F3_1Controller',['as' => 'DataCenter']);
Route::resource('DataCenter/form_003_2','F3_2Controller',['as' => 'DataCenter']);
Route::resource('DataCenter/form_003_3','F3_3Controller',['as' => 'DataCenter']);
Route::resource('DataCenter/form_003_4','F3_4Controller',['as' => 'DataCenter']);
Route::resource('DataCenter/form_003_5','F3_5Controller',['as' => 'DataCenter']);
Route::resource('BienestarUniversitario/form_004_1','F4_1Controller',['as' => 'BienestarUniversitario']);
Route::resource('BienestarUniversitario/form_004_2','F4_2Controller',['as' => 'BienestarUniversitario']);
Route::get('/f4_2XLS','F4_2Controller@exportar');
Route::resource('BienestarUniversitario/form_004_3','F4_3Controller',['as' => 'BienestarUniversitario']);
Route::resource('BienestarUniversitario/form_004_5','F4_5Controller',['as' => 'BienestarUniversitario']);
Route::resource('BienestarUniversitario/form_004_6','F4_6Controller',['as' => 'BienestarUniversitario']);
Route::resource('BienestarUniversitario/form_004_7','F4_7Controller',['as' => 'BienestarUniversitario']);
Route::resource('BienestarUniversitario/form_004_9','F4_9Controller',['as' => 'BienestarUniversitario']);
Route::resource('BienestarUniversitario/form_004_10','F4_10Controller',['as' => 'BienestarUniversitario']);
Route::resource('BienestarUniversitario/form_004_14','F4_14Controller',['as' => 'BienestarUniversitario']);
Route::resource('BienestarUniversitario/form_004_17','F4_17Controller',['as' => 'BienestarUniversitario']);
Route::resource('Bibliotecas/form_005_1','F5_1Controller',['as' => 'Bibliotecas']);
Route::resource('Bibliotecas/form_005_2','F5_2Controller',['as' => 'Bibliotecas']);
Route::resource('Bibliotecas/form_005_3','F5_3Controller',['as' => 'Bibliotecas']);
Route::resource('Bibliotecas/form_005_4','F5_4Controller',['as' => 'Bibliotecas']);
Route::resource('Bibliotecas/form_005_5','F5_5Controller',['as' => 'Bibliotecas']);
Route::resource('Bibliotecas/form_005_6','F5_6Controller',['as' => 'Bibliotecas']);
Route::resource('Bibliotecas/form_005_7','F5_7Controller',['as' => 'Bibliotecas']);
Route::resource('Bibliotecas/form_005_8','F5_8Controller',['as' => 'Bibliotecas']);
Route::resource('Bibliotecas/form_005_9','F5_9Controller',['as' => 'Bibliotecas']);
Route::resource('Bibliotecas/form_005_10','F5_10Controller',['as' => 'Bibliotecas']);
Route::resource('Bibliotecas/form_005_11','F5_11Controller',['as' => 'Bibliotecas']);
Route::resource('Bibliotecas/form_005_12','F5_12Controller',['as' => 'Bibliotecas']);
Route::resource('Bibliotecas/form_005_13','F5_13Controller',['as' => 'Bibliotecas']);
Route::resource('Bibliotecas/form_005_14','F5_14Controller',['as' => 'Bibliotecas']);
Route::resource('Bibliotecas/form_005_15','F5_15Controller',['as' => 'Bibliotecas']);
Route::resource('Bibliotecas/form_005_16','F5_16Controller',['as' => 'Bibliotecas']);
Route::resource('Bibliotecas/form_005_17','F5_17Controller',['as' => 'Bibliotecas']);
Route::resource('Bibliotecas/form_005_18','F5_18Controller',['as' => 'Bibliotecas']);
Route::resource('Bibliotecas/form_005_19','F5_19Controller',['as' => 'Bibliotecas']);
Route::resource('Bibliotecas/form_005_20','F5_20Controller',['as' => 'Bibliotecas']);
Route::resource('Bibliotecas/form_005_21','F5_21Controller',['as' => 'Bibliotecas']);
Route::resource('Bibliotecas/form_005_22','F5_22Controller',['as' => 'Bibliotecas']);
Route::resource('Bibliotecas/form_005_23','F5_23Controller',['as' => 'Bibliotecas']);
Route::resource('Postgrado/form_006_1','F6_1Controller',['as' => 'Postgrado']);
Route::resource('Postgrado/form_006_2','F6_2Controller',['as' => 'Postgrado']);
Route::resource('Postgrado/form_006_3','F6_3Controller',['as' => 'Postgrado']);
Route::resource('Postgrado/form_006_4','F6_4Controller',['as' => 'Postgrado']);
Route::resource('Inscripciones/form_007_1','F7_1Controller',['as' => 'Inscripciones']);
Route::resource('Inscripciones/form_007_2','F7_2Controller',['as' => 'Inscripciones']);
Route::resource('Inscripciones/form_007_3','F7_3Controller',['as' => 'Inscripciones']);
Route::resource('Inscripciones/form_007_4','F7_4Controller',['as' => 'Inscripciones']);
Route::resource('Inscripciones/form_007_5','F7_5Controller',['as' => 'Inscripciones']);
Route::resource('Inscripciones/form_007_6','F7_6Controller',['as' => 'Inscripciones']);
Route::resource('DireccionDeInvestigacion/form_008_1','F8_1Controller',['as' => 'DireccionDeInvestigacion']);
Route::resource('DireccionDeInvestigacion/form_008_2','F8_2Controller',['as' => 'DireccionDeInvestigacion']);
Route::resource('DireccionDeInvestigacion/form_008_3','F8_3Controller',['as' => 'DireccionDeInvestigacion']);
Route::resource('DireccionDeInvestigacion/form_008_4','F8_4Controller',['as' => 'DireccionDeInvestigacion']);
Route::resource('DireccionDeInvestigacion/form_008_5','F8_5Controller',['as' => 'DireccionDeInvestigacion']);
Route::resource('DireccionDeInvestigacion/form_008_6','F8_6Controller',['as' => 'DireccionDeInvestigacion']);
Route::resource('DireccionDeInvestigacion/form_008_7','F8_7Controller',['as' => 'DireccionDeInvestigacion']);
Route::resource('DireccionDeInvestigacion/form_008_8','F8_8Controller',['as' => 'DireccionDeInvestigacion']);
Route::resource('Infraestructura/form_009_1','F9_1Controller',['as' => 'Infraestructura']);
Route::resource('Infraestructura/form_009_2','F9_2Controller',['as' => 'Infraestructura']);
Route::resource('Infraestructura/form_009_3','F9_3Controller',['as' => 'Infraestructura']);
Route::resource('Infraestructura/form_009_4','F9_4Controller',['as' => 'Infraestructura']);
Route::resource('Infraestructura/form_009_5','F9_5Controller',['as' => 'Infraestructura']);
Route::resource('DAF/form_010_1','F10_1Controller',['as' => 'DAF']);
Route::resource('DAF/form_010_2','F10_2Controller',['as' => 'DAF']);
Route::resource('DAF/form_010_3','F10_3Controller',['as' => 'DAF']);
Route::resource('DAF/form_010_4','F10_4Controller',['as' => 'DAF']);
Route::resource('DAF/form_010_5','F10_5Controller',['as' => 'DAF']);
Route::resource('DAF/form_010_6','F10_6Controller',['as' => 'DAF']);
Route::resource('DAF/form_010_7','F10_7Controller',['as' => 'DAF']);
Route::resource('DAF/form_010_8','F10_8Controller',['as' => 'DAF']);
Route::resource('DAF/form_010_9','F10_9Controller',['as' => 'DAF']);
Route::resource('DAF/form_010_10','F10_10Controller',['as' => 'DAF']);
Route::resource('MuseoUniversitario/form_011_1','F11_1Controller',['as' => 'MuseoUniversitario']);
Route::resource('MuseoUniversitario/form_011_2','F11_2Controller',['as' => 'MuseoUniversitario']);
Route::resource('Extension/form_012_1','F12_1Controller',['as' => 'Extension']);
Route::resource('Extension/form_012_2','F12_2Controller',['as' => 'Extension']);
Route::resource('Extension/form_012_3','F12_3Controller',['as' => 'Extension']);
Route::resource('Extension/form_012_4','F12_4Controller',['as' => 'Extension']);
Route::resource('Extension/form_012_5','F12_5Controller',['as' => 'Extension']);
Route::resource('Extension/form_012_6','F12_6Controller',['as' => 'Extension']);
Route::resource('Extension/form_012_7','F12_7Controller',['as' => 'Extension']);
Route::resource('Decanaturas/form_013_1','F13_1Controller',['as' => 'Decanaturas']);
Route::resource('Decanaturas/form_013_2','F13_2Controller',['as' => 'Decanaturas']);
Route::resource('Decanaturas/form_013_3','F13_3Controller',['as' => 'Decanaturas']);
Route::resource('EvaluacionAcreditacion/form_015_1','F15_1Controller',['as' => 'EvaluacionAcreditacion']);
Route::resource('EvaluacionAcreditacion/form_015_2','F15_2Controller',['as' => 'EvaluacionAcreditacion']);
Route::resource('EvaluacionAcreditacion/form_015_3','F15_3Controller',['as' => 'EvaluacionAcreditacion']);
Route::resource('DireccionRelaciones/form_017_1','F17_1Controller',['as' => 'DireccionRelaciones']);
Route::resource('DireccionRelaciones/form_017_2','F17_2Controller',['as' => 'DireccionRelaciones']);
Route::resource('DireccionRelaciones/form_017_3','F17_3Controller',['as' => 'DireccionRelaciones']);
Route::resource('DireccionRelaciones/form_017_4','F17_4Controller',['as' => 'DireccionRelaciones']);
Route::resource('DireccionRelaciones/form_017_5','F17_5Controller',['as' => 'DireccionRelaciones']);
Route::resource('ImprentaUniversitaria/form_018_1','F18_1Controller',['as' => 'ImprentaUniversitaria']);
Route::resource('ImprentaUniversitaria/form_018_2','F18_2Controller',['as' => 'ImprentaUniversitaria']);
Route::resource('ImprentaUniversitaria/form_018_3','F18_3Controller',['as' => 'ImprentaUniversitaria']);
Route::resource('ImprentaUniversitaria/form_018_4','F18_4Controller',['as' => 'ImprentaUniversitaria']);
Route::resource('ImprentaUniversitaria/form_018_5','F18_5Controller',['as' => 'ImprentaUniversitaria']);
