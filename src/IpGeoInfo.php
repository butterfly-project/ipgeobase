<?php

namespace Butterfly\Component\IpGeobase;

/**
 * @author Marat Fakhertdinov <marat.fakhertdinov@gmail.com>
 */
class IpGeoInfo
{
    /**
     * @var bool
     */
    protected $isEmpty;

    /**
     * @var string
     */
    protected $ip;

    /**
     * @var string
     */
    protected $range;

    /**
     * @var string
     */
    protected $countryCode;

    /**
     * @var string
     */
    protected $district;

    /**
     * @var string
     */
    protected $region;

    /**
     * @var string
     */
    protected $city;

    /**
     * @var string
     */
    protected $lat;

    /**
     * @var string
     */
    protected $lng;

    /**
     * @param bool $isEmpty
     * @param string $ip
     * @param string $range
     * @param string $countryCode
     * @param string $district
     * @param string $region
     * @param string $city
     * @param string $lat
     * @param string $lng
     */
    public function __construct(
        $isEmpty,
        $ip = null,
        $range = null,
        $countryCode = null,
        $district = null,
        $region = null,
        $city = null,
        $lat = null,
        $lng = null)
    {
        $this->isEmpty     = $isEmpty;
        $this->ip          = $ip;
        $this->range       = $range;
        $this->countryCode = $countryCode;
        $this->district    = $district;
        $this->region      = $region;
        $this->city        = $city;
        $this->lat         = $lat;
        $this->lng         = $lng;
    }

    /**
     * @return boolean
     */
    public function isEmpty()
    {
        return $this->isEmpty;
    }

    /**
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @return string
     */
    public function getRange()
    {
        return $this->range;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @return string
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * @return string
     */
    public function getLng()
    {
        return $this->lng;
    }
}
