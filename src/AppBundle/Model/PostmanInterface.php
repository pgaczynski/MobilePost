<?php

namespace AppBundle\Model;

interface PostmanInterface
{
    public function setFirstName($firstName);
    public function getFirstName();
    public function setLastName($lastName);
    public function getLastName();
    public function setPhone($phone);
    public function getPhone();
    public function setEmail($email);
    public function getEmail();
    public function setCity($city);
    public function getCity();
}