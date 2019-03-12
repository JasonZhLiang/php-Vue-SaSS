<?php
/**
 * Created by PhpStorm.
 * User: jliang
 * Date: 2/12/2018
 * Time: 11:33 AM
 */

namespace jason\task;

interface TestRepositoryInterface
{
    public function getCompleted();

    public function getInProcess();
}