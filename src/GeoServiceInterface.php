<?php


namespace Hillel\GeoInterface;


interface GeoServiceInterface
{
    public function parse($ip);
    public function continentCode();
    public function countryCode();
}
