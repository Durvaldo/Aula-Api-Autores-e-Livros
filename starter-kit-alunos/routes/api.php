<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Author;
use App\Models\Book;

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
