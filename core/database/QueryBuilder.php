<?php
/**
 * Created by PhpStorm.
 * User: jliang
 * Date: 2/21/2018
 * Time: 3:34 PM
 */

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo=$pdo;
    }

    public function selectAll($table){

        $statement = $this->pdo->prepare("select * from $table");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table,$parameters)
    {
        $sql= sprintf(
            'insert into %s(%s) value (%s)',
            $table,
            implode(',',array_keys($parameters)),
            ':'.implode(',:',array_keys($parameters))

//            array_map(function($param){
//                return ":{$param}";
//            },array_);
        );
        try{
            $statement = $this->pdo->prepare($sql);
            //$statement->bindParam(':name','joe');
            $statement->execute($parameters);
        }catch(Exception $e){
            die($e->getMessage());
        }


    }
}