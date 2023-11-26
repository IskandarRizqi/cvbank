<?php



use App\Http\Controllers\FormalController;
use App\Http\Controllers\InformasiPribadiController;
use App\Http\Controllers\JudulController;
use App\Http\Controllers\NonformalController;
use App\Http\Controllers\PengalamanBankController;
use App\Http\Controllers\PengalamanController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\SosialLinkController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


Route::resource('judul', JudulController::class);
Route::resource('informasipribadi', InformasiPribadiController::class);
Route::resource('pengalamanumum', PengalamanController::class);
Route::resource('skill', SkillController::class);
Route::resource('formal', FormalController::class);
Route::resource('nonformal', NonformalController::class);
Route::resource('medsos', SosialLinkController::class);
Route::resource('pengalamanbank', PengalamanBankController::class);
Route::get('gambarprofil', function (Request $P) {
    return Storage::download($P->rf);
});


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

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/preview/index', function () {
    return view('admin.pages.preview.index');
});

Route::get('/template', function () {
    return view('admin.pages.preview.template');
});




Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/judul', [App\Http\Controllers\JudulController::class, 'index'])->name('judul');
Route::get('/medsos', [App\Http\Controllers\SosialLinkController::class, 'create'])->name('sosiallink');
Route::get('/skill', [App\Http\Controllers\SkillController::class, 'create'])->name('skill');
// Route::get('/indexskill', [App\Http\Controllers\SkillController::class, 'index'])->name('indexskill');
Route::get('/formal', [App\Http\Controllers\FormalController::class, 'create'])->name('formal');
Route::get('/nonformal', [App\Http\Controllers\NonformalController::class, 'create'])->name('nonformal');
Route::get('/pengalamanumum', [App\Http\Controllers\PengalamanController::class, 'create'])->name('pengalamanumum');
Route::get('/informasipribadi', [App\Http\Controllers\InformasiPribadiController::class, 'create'])->name('informasipribadi');
Route::get('/kabupaten/{idprov}', [App\Http\Controllers\InformasiPribadiController::class, 'getkabupaten']);
Route::get('/kecamatan/{idkec}', [App\Http\Controllers\InformasiPribadiController::class, 'getkecamatan']);
Route::get('/kelurahan/{idkel}', [App\Http\Controllers\InformasiPribadiController::class, 'getkelurahan']);
Route::get('/template', [App\Http\Controllers\TemplateController::class, 'index']);
Route::get('/pengalamanbank', [App\Http\Controllers\PengalamanBankController::class, 'create'])->name('pengalamanbank');
