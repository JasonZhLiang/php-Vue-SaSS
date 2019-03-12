<?php
/**
 * Created by PhpStorm.
 * User: jliang
 * Date: 2/21/2018
 * Time: 4:42 PM
 */

return[
    'database'=>[
        'name'=> 'erpcorp_admin',
        'connection'=>'mysql:host=192.168.1.110:3306' ,
        'username'=>'jliang',
        'password' =>'7zpm9528',
        'options'=>[
            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
            //PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING
        ]
    ]
];
