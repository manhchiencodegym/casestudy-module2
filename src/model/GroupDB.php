<?php

namespace Model;

class GroupDB
{
    protected $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function getAll()
    {
        $sql = "SELECT * FROM group_s";
        $stmt = $this->database->query($sql);
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item) {
            $group = new Group($item['name']);
            array_push($arr, $group);
        }
        return $arr;
    }

    public function create($group)
    {
        $sql = "INSERT INTO group_s (name) VALUES (:name)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':name', $group->getName());
        return $stmt->execute();
    }

    public function get($name)
    {
        $sql = "SELECT * FROM group_s WHERE name = :name";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->execute();
        $row = $stmt->fetch();
        $group = new Group($row['name']);
        return $group;
    }

    public function update($group)
    {
        $sql = "UPDATE `group_s` SET name= :name WHERE name = :name";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':name', $group->getName());
        return $stmt->exectue();
    }


}