<?php
/**
 * Created by PhpStorm.
 * User: Patryk
 * Date: 02.06.2016
 * Time: 08:41
 */

namespace AppBundle\Handler;


interface PostmanTaskFormHandlerInterface
{
    public function post(array $parameters);
}