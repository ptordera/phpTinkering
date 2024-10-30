<?php

namespace App\Models;

use Core\App;

class Skin
{
    protected static $table = 'skins';

    //funcio per a que torne totes les pelis
    public static function getAll()
    {
        $db = App::get('database');
        $statement = $db->getConnection()->prepare('SELECT * FROM ' . self::$table);
        $statement->execute();
        return $statement->fetchAll();
    }

    //funcio per a buscar una peli
    public static function find($id)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('SELECT * FROM ' . self::$table . ' WHERE id = :id');
        $statement->execute(array('id' => $id));
        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    //funcio create
    public static function create($data)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('INSERT INTO '. static::$table . "(name, collection, price, floatcs) VALUES (:name, :collection, :price, :floatcs)");
        $statement->bindValue(':name', $data['name']);
        $statement->bindValue(':collection', $data['collection']);
        $statement->bindValue(':price', $data['price']);
        $statement->bindValue(':floatcs', $data['floatcs']);
        $statement->execute();
    }

    //funcio update
    public static function update($id, $data)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare("UPDATE ". static::$table . " SET name = :name, collection = :collection, price = :price, floatcs = :floatcs WHERE id = :id");
        $statement->bindValue(':id', $id);
        $statement->bindValue(':name', $data['name']);
        $statement->bindValue(':collection', $data['collection']);
        $statement->bindValue(':price', $data['price']);
        $statement->bindValue(':floatcs', $data['floatcs']);
        $statement->execute();
    }

    //funcio delete
    public static function delete($id)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('DELETE FROM '. static::$table . ' WHERE id = :id');
        $statement->bindValue(':id', $id);
        $statement->execute();
    }

}