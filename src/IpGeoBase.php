<?php

namespace Butterfly\Component\IpGeobase;

use IPGeoBase as IPGeoBaseLibrary;

/**
 * @author Marat Fakhertdinov <marat.fakhertdinov@gmail.com>
 */
class IpGeoBase
{
    /**
     * @var IPGeoBaseLibrary
     */
    protected $ipGeobaseLibrary;

    /**
     * @param IPGeoBaseLibrary $ipGeobase
     */
    public function __construct(IPGeoBaseLibrary $ipGeobase)
    {
        $this->ipGeobaseLibrary = $ipGeobase;
    }

    /**
     * @param string $ip
     * @return IpGeoInfo
     */
    public function getInfo($ip)
    {
        $record = $this->ipGeobaseLibrary->getRecord($ip);

        if (false === $record) {
            return new IpGeoInfo(true);
        }

        return new IpGeoInfo(
            false,
            $ip,
            $record['range'],
            $record['cc'],
            $record['district'],
            $record['region'],
            $record['city'],
            $record['lat'],
            $record['lng']
        );
    }
}
