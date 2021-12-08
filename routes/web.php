<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\TipoController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\RoleController;
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

/*Route::get('/', function () {
    return view('login');
});*/


route::auth();

Route::get('/', function () {
    return view("auth/login");
});




//Route::get('admin/cliente', [ClienteController::class, 'cliente']);


//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::get('admin/index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::get('admin/usuario/index', [App\Http\Controllers\UserController::class, 'index'])->name('admin.usuario.index');
Route::get('admin/usuario/registrousuario', [App\Http\Controllers\UserController::class, 'create'])->name('admin.usuario.create');
Route::post('admin/usuario/registrousuario', [App\Http\Controllers\UserController::class, 'store'])->name('admin.usuario.store');
Route::delete('admin/usuario/usuario/{users}', [App\Http\Controllers\UserController::class, 'destroy'])->name('admin.usuario.destroy');
Route::get('admin/usuario/{users}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('admin.usuario.edit');
Route::put('admin/usuario/index/{users}', [App\Http\Controllers\UserController::class, 'update'])->name('admin.usuario.update');
Route::get('admin/usuario/{users}/editrol', [App\Http\Controllers\UserController::class, 'editrol'])->name('admin.usuario.editrol');
Route::put('admin/usuario/editrol/{users}', [App\Http\Controllers\UserController::class, 'rolupdate'])->name('admin.usuario.rolupdate');
Route::get('admin/usuario/show/{users}', [App\Http\Controllers\UserController::class, 'show'])->name('admin.usuario.show');

Route::get('admin/proveedor/index', [App\Http\Controllers\ProveedorController::class, 'index'])->name('admin.proveedor.index');
Route::get('admin/proveedor/create', [App\Http\Controllers\ProveedorController::class, 'create'])->name('admin.proveedor.create');
Route::post('admin/proveedor/create', [App\Http\Controllers\ProveedorController::class, 'store'])->name('admin.proveedor.store');
Route::delete('admin/proveedor/proveedor/{proveedores}', [App\Http\Controllers\ProveedorController::class, 'destroy'])->name('admin.proveedor.destroy');
Route::get('admin/proveedor/{proveedores}/edit', [App\Http\Controllers\ProveedorController::class, 'edit'])->name('admin.proveedor.edit');
Route::put('admin/proveedor/index/{proveedores}', [App\Http\Controllers\ProveedorController::class, 'update'])->name('admin.proveedor.update');
Route::get('admin/proveedor/show/{proveedores}', [App\Http\Controllers\ProveedorController::class, 'show'])->name('admin.proveedor.show');

Route::get('admin/tipo/index', [App\Http\Controllers\TipoController::class, 'index'])->name('admin.tipo.index');
Route::get('admin/tipo/registrousuario', [App\Http\Controllers\TipoController::class, 'create'])->name('admin.tipo.create');
Route::post('admin/tipo/registrousuario', [App\Http\Controllers\TipoController::class, 'store'])->name('admin.tipo.store');
Route::delete('admin/tipo/tipo/{tipodeproducto}', [App\Http\Controllers\TipoController::class, 'destroy'])->name('admin.tipo.destroy');
Route::get('admin/tipo/{tipodeproducto}/edit', [App\Http\Controllers\TipoController::class, 'edit'])->name('admin.tipo.edit');
Route::put('admin/tipo/index/{tipodeproducto}', [App\Http\Controllers\TipoController::class, 'update'])->name('admin.tipo.update');


Route::resource('cliente', ClienteController::class)->names('admin.cliente');
Route::resource('compra', CompraController::class)->names('admin.compra');
Route::resource('producto', ProductoController::class)->names('admin.producto');
Route::resource('inventario', InventarioController::class)->names('admin.inventario');
Route::resource('ventas', VentaController::class)->names('admin.ventas');
Route::resource('reporte', ReporteController::class)->names('admin.reporte');
Route::resource('roles', RoleController::class)->names('admin.roles');

Route::get('admin/producto/Reporte', [App\Http\Controllers\ProductoController::class, 'imprimir'])->name('admin.producto.Reporte');
Route::get('admin/ventas/reporte', [App\Http\Controllers\VentaController::class, 'imprimir'])->name('admin.ventas.reporte');
Route::get('admin/cliente/Reporte', [App\Http\Controllers\ClienteController::class, 'imprimir'])->name('admin.cliente.Reporte');
Route::get('admin/inventario/Reporte', [App\Http\Controllers\InventarioController::class, 'imprimir'])->name('admin.inventario.Reporte');
Route::get('admin/compra/Reporte', [App\Http\Controllers\CompraController::class, 'imprimir'])->name('admin.compra.Reporte');