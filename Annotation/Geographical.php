<?php

namespace Vich\GeographicalBundle\Annotation;

use Vich\GeographicalBundle\Annotation\AnnotationInterface;

/**
 * Geographical.
 * 
 * @author Dustin Dobervich <ddobervich@gmail.com>
 */
class Geographical implements AnnotationInterface
{
    const ON_CREATE = 'create';
    const ON_UPDATE = 'update';
    
    /**
     * @var string $on
     */
    private $on = 'create';
    
    /**
     * @var string $lat
     */
    private $lat = 'latitude';
    
    /**
     * @var string $lng
     */
    private $lng = 'longitude';
    
    /**
     * Gets the "on" option.
     * 
     * @return string The "on" option
     */
    public function getOn()
    {
        return $this->on;
    }
    
    /**
     * Sets the "on" option.
     * 
     * @param string $value The "on" option
     */
    public function setOn($value)
    {
        $this->on = $value;
    }
    
    /**
     * Gets the "lat" option.
     * 
     * @return string The "lat" option
     */
    public function getLat()
    {
        return $this->lat;
    }
    
    /**
     * Sets the "lat" option.
     * 
     * @param type $value The "lat" option
     */
    public function setLat($value)
    {
        $this->lat = $value;
    }
    
    /**
     * Gets the "lng" option.
     * 
     * @return string The "lng" option
     */
    public function getLng()
    {
        return $this->lng;
    }
    
    /**
     * Sets the "lng" option.
     * 
     * @param type $value The "lng" option
     */
    public function setLng($value)
    {
        $this->lng = $value;
    }
}
