<?php
/**
 * Created by PhpStorm.
 * User: jliang
 * Date: 2/21/2018
 * Time: 3:21 PM
 */

class Connection
{
    /**
     * @param $config
     * @return PDO
     */
    public static function make($config){//static will make method accessable globely without required an instance
        try {
            //return new PDO('mysql:host=192.168.1.110:3306;dbname=erpcorp_admin', 'jliang', '7zpm9528');

            return new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );

        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}