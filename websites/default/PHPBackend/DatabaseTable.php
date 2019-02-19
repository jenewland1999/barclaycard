<?php
//reusable database functions
namespace PHPBackend;

class DatabaseTable {
    private $table;
    private $pdo;
    private $primaryKey;
    private $entityClass;
    private $entityConstructor;


    public function __construct($pdo, $table, $primaryKey, $entityClass = 'stdclass', $entityConstructor = []) {
        $this->pdo = $pdo;
        $this->table = $table;
        $this->primaryKey = $primaryKey;
        $this->entityClass = $entityClass;
        $this->entityConstructor = $entityConstructor;
    }

    public function find($field, $value) {
        $find = $this->pdo->prepare('SELECT * FROM ' . $this->table . ' WHERE ' . $field . ' = :value');
        $find->setFetchMode(\PDO::FETCH_CLASS, $this->entityClass, $this->entityConstructor);
        $criteria = [
            'value' => $value
        ];
        $find->execute($criteria);

        return $find->fetchAll();
    }

    public function findLimit() {
        $findAll = $this->pdo->prepare('SELECT * FROM ' . $this->table . ' LIMIT 10');
        $findAll->setFetchMode(\PDO::FETCH_CLASS, $this->entityClass, $this->entityConstructor);
        $findAll->execute();

        return $findLimit->fetchAll();
    }

    public function findAll() {
        $findAll = $this->pdo->prepare('SELECT * FROM ' . $this->table);
        $findAll->setFetchMode(\PDO::FETCH_CLASS, $this->entityClass, $this->entityConstructor);
        $findAll->execute();

        return $findAll->fetchAll();
    }

    public function insert($criteria) {
        $keys = array_keys($criteria);
        $string = implode(', ', $keys);
        $stringColon = implode(', :', $keys);

        $query = 'INSERT INTO ' . $this->table . ' (' . $string . ') VALUES (:' . $stringColon . ')';
        $stmt = $this->pdo->prepare($query);
        $stmt->execute($criteria);
    }

    public function update($criteria) {
        $query = 'UPDATE ' . $this->table . ' SET ';
        $parameters = [];
        foreach ($criteria as $key => $value) {
             $parameters[] = $key . ' = :' .$key;
        }

        $query .= implode(', ', $parameters);
        $query .= ' WHERE ' . $this->primaryKey . ' = :primaryKey';

        $criteria['primaryKey'] = $criteria[$this->primaryKey];

        $stmt = $this->pdo->prepare($query);
        $stmt->execute($criteria);
    }

    public function delete($value) {
        $stmt = $this->pdo->prepare('DELETE FROM ' . $this->table . ' WHERE ' . $this->primaryKey . ' = :value');
        $criteria = [
            'value' => $value
        ];
        $stmt->execute($criteria);
    }

    public function save($criteria){
        try {
            $this->insert($criteria);
        }
        catch (\Exception $e) {
            $this->update($criteria);
        }
    }


}
