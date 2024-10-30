<?php

namespace App\Controllers;

use App\Models\Skin;

class SkinController
{
    //funcio index
    public function index()
    {
        //obtenim totes les pelis
        $skins = Skin::getAll();

        //pasem les pelis a la vista
        return view('skins/index', ['skins' => $skins]);
    }

    //funcio per anar a la vista create
    public function create()
    {
        return view('skins/create');
    }

    //funcio per guardar les dades i tornar a la vista principal
    public function store($data)
    {
        //cridem funcio create del model
        Skin::create($data);
        //retornar a la vista principal
        header('location: /skinindex');
        exit;
    }

   //funcio per a la vista edit
    public function edit($id)
    {
        //si no ens passen la id fem redirect
        if ($id === null) {
            header('location: /skinindex');
            exit;
        }

        //busquem la peli
        $skin = Skin::find($id);

        //si no ens passen cap peli mostrar 404
        if (!$skin) {
            require '../../resources/views/errors/404.blade.php';
            return;
        }

        //retornem la vista i li passem la peli indicada
        return view('skins/edit', ['skin' => $skin]);
    }

    //funcio update per a modificar la peli a la base de dades
    public function update($id, $data)
    {
        //modifiquem
        Skin::update($id, $data);

        //retonem a la pàgina principal
        header('location: /skinindex');
        exit;
    }

    //funcio per anar a la vista delete
    public function delete($id)
    {
        //si no ens passen la id fem redirect
        if ($id === null) {
            header('location: /skinindex');
            exit;
        }

        //busquem la peli
        $skin = Skin::find($id);
        //retornem la vista en la peli
        return view('skins/delete', ['skin' => $skin]);

    }

    //funcio per eliminar la peli de la base de dades
    public function destroy($id)
    {
        //utilizem la funcio delete del model
        Skin::delete($id);

        //retornar a la vista
        header('location: /skinindex');
    }

    //funcio per a la vista show
    public function show($id)
    {
        //si no ens passen la id fem redirect
        if ($id === null) {
            header('location: /');
            exit;
        }

        //busquem la peli
        $skin = Skin::find($id);

        //si no ens passen cap peli mostrar 404
        if (!$skin) {
            require '../../resources/views/errors/404.blade.php';
            return;
        }

        //retornem la vista i li passem la peli indicada
        return view('skins/show', ['skin' => $skin]);
    }


}