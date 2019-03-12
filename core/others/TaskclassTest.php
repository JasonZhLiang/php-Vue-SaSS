<?php
/**
 * Created by PhpStorm.
 * User: jliang
 * Date: 2/12/2018
 * Time: 3:55 PM
 */


class TaskclassTest extends PHPUnit_Framework_TestCase
{
    /**
     *
     */
    public function test(){
        $this->call('GET','/');
        $this->assertResponseOk();}
}
