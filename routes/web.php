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
*/

Route::get('clear-cache', function() {
    $exitCode = Artisan::call('optimize:clear');
    //$exitCode = Artisan::call('config:clear');
    //$exitCode = Artisan::call('cache:clear');
    //$exitCode = Artisan::call('config:cache');
    return 'DONE';
});

Route::get('/', [App\Http\Controllers\Web\WebController::class, 'index'])->name('index');
Route::get('enviar_mails', [App\Http\Controllers\Web\WebController::class, 'now'])->name('now');
Route::get('online/Plenaria', [App\Http\Controllers\Web\WebController::class, 'sala0'])->name('sala0');
Route::get('online/Business-and-IT-Automation', [App\Http\Controllers\Web\WebController::class, 'sala1'])->name('sala1');
Route::get('online/Hybrid-Cloud-and-Modernization', [App\Http\Controllers\Web\WebController::class, 'sala2'])->name('sala2');
Route::get('online/Zero-Trust-Security', [App\Http\Controllers\Web\WebController::class, 'sala3'])->name('sala3');
Route::get('online/Data-Fabric-and-AI', [App\Http\Controllers\Web\WebController::class, 'sala4'])->name('sala4');

Route::get('br', [App\Http\Controllers\Web\WebController::class, 'br'])->name('br');
Route::post('contacto', [App\Http\Controllers\Web\WebController::class, 'postContacto'])->name('contacto');
Route::get('gracias', [App\Http\Controllers\Web\WebController::class, 'gracias'])->name('gracias');
Route::get('security/es', [App\Http\Controllers\Web\WebController::class, 'video'])->name('video');
Route::get('security/br', [App\Http\Controllers\Web\WebController::class, 'video_br'])->name('video_br');
Route::get('br/cafedamanha', [App\Http\Controllers\Web\WebController::class, 'cafedamanha'])->name('cafedamanha');
Route::post('br/cafedamanha', [App\Http\Controllers\Web\WebController::class, 'postCafedamanha'])->name('cafedamanha');
Route::get('br/cafedamanha/video', [App\Http\Controllers\Web\WebController::class, 'cafedamanha_video'])->name('cafedamanha.video');
Route::get('letscreatewithibm/replay/{country}', [App\Http\Controllers\Web\WebController::class, 'replay'])->name('replay');
Route::post('replay', [App\Http\Controllers\Web\WebController::class, 'postReplay'])->name('replay');
Route::get('letscreatewithibm/replay_video/{country}', [App\Http\Controllers\Web\WebController::class, 'replay_video'])->name('replay.video');
Route::get('puntos/{country}', [App\Http\Controllers\Web\WebController::class, 'puntos'])->name('puntos');
Route::get('tabla-de-puntos/{country}', [App\Http\Controllers\Web\WebController::class, 'tabla_de_puntos'])->name('tablapuntos');
Route::get('faq', [App\Http\Controllers\Web\WebController::class, 'faq'])->name('faq');
Route::get('br/faq', [App\Http\Controllers\Web\WebController::class, 'faq_br'])->name('faq_br');
Route::get('bonustrack', [App\Http\Controllers\Web\WebController::class, 'bonustrack'])->name('bonustrack');

Route::get('letscreatewithibm/replay/apu', [App\Http\Controllers\Web\WebController::class, 'apu'])->name('apu');
Route::get('letscreatewithibm/replay/chi', [App\Http\Controllers\Web\WebController::class, 'chi'])->name('chi');
Route::get('letscreatewithibm/replay/col', [App\Http\Controllers\Web\WebController::class, 'col'])->name('col');
Route::get('letscreatewithibm/replay/mex', [App\Http\Controllers\Web\WebController::class, 'mex'])->name('mex');

/****** File Manager ******/

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::get("storage-link", function () {
    $targetFolder = storage_path("app/public");
    $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/storage';
    symlink($targetFolder, $linkFolder);
});