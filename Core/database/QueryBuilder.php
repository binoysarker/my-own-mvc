<?php
/**
 *
 */
class QueryBuilder
{
    protected $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public function selectAll($table, $class_name)
    {
        if (isset($class_name)) {
            // $class_name = "app\\Models\\{$class_name}";
            $statement = $this->pdo->prepare("select * from {$table}");
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_CLASS, $class_name);
        } else {
            $statement = $this->pdo->prepare("select * from {$table}");
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_OBJ);
        }
    }
    public function insert($table, $parameter)
    {
        $sql = sprintf(
            'insert into %s (%s) values(%s)',
            $table,
            implode(', ', array_keys($parameter)),
            ':' . implode(', :', array_keys($parameter))
        );

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameter);
        } catch (PDOException $e) {
            die('something wrong ' . $e->getMessage());
        }

    }
}
