<?php
/**
 * Created by PhpStorm.
 * User: Patryk
 * Date: 02.06.2016
 * Time: 08:37
 */

namespace AppBundle\Model;

use AppBundle\Entity\ParcelOrder;
use AppBundle\Entity\Postman;

Interface PostmanTaskInterface
{
    public function setDone($done);
    public function getDone();
    public function setPostman(Postman $postman = null);
    public function getPostman();
    public function setParcelOrder(ParcelOrder $parcelOrder = null);
    public function getParcelOrder();
}