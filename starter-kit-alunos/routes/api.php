<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*
 * 🎯 TAREFA: Implementar as rotas abaixo
 * 
 * Você precisa:
 * 1. Importar os Controllers: AuthorController e BookController
 * 2. Definir as rotas resource para authors e books
 * 3. Adicionar rota especial para livros de um autor
 * 
 * Exemplo de implementação:
 * 
 * use App\Http\Controllers\AuthorController;
 * use App\Http\Controllers\BookController;
 * 
 * // Rotas de autores
 * Route::apiResource('authors', AuthorController::class);
 * 
 * // Rotas de livros  
 * Route::apiResource('books', BookController::class);
 * 
 * // Rota adicional: livros de um autor específico
 * Route::get('authors/{author}/books', [AuthorController::class, 'books']);
 */

// TODO: Implementar suas rotas aqui

/*
 * 📋 Rotas esperadas após implementação:
 * 
 * Autores:
 * GET    /api/authors          - Listar autores (index)
 * POST   /api/authors          - Criar autor (store) 
 * GET    /api/authors/{id}     - Buscar autor (show)
 * PUT    /api/authors/{id}     - Atualizar autor (update)
 * DELETE /api/authors/{id}     - Excluir autor (destroy)
 * GET    /api/authors/{id}/books - Livros do autor (books)
 * 
 * Livros:
 * GET    /api/books            - Listar livros (index)
 * POST   /api/books            - Criar livro (store)
 * GET    /api/books/{id}       - Buscar livro (show) 
 * PUT    /api/books/{id}       - Atualizar livro (update)
 * DELETE /api/books/{id}       - Excluir livro (destroy)
 */