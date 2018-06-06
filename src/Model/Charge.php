<?php
namespace PlanetaSoftware\Coinbase\Commerce\Model;

/**
 * Description of Charge
 *
 * This Model class represents the input data used identify the charge information
 * according to cryptocurrency payment
 *
 * @author sain <sain@planetasoftware.com>
 */
class Charge {

	/**
     * Name
     * Charge name
     *
     * @var string 
     */
    public $name;

    /**
     * Description
     * Charge description (maximum is 200 characters)
     *
     * @var string 
     */
    public $description;

    /**
     * Pricing Type
     * Charge pricing type: no_price or fixed_price
     *
     * @var string 
     */
    public $pricing_type;

    /**
     * Local price
     * Price in local fiat currency
     *
     * @var \PlanetaSoftware\Coinbase\Commerce\Model\Money 
     */
    public $local_price;

    /**
     * Redirect url
     * Redirect URL
     *
     * @var string 
     */
    public $redirect_url;

    /**
     * Metadata
     * Metadata associated with the charge
     *
     * @var array 
     */
    public $metadata;

    /**
     * Timeline
     * Every charge object has a timeline of status updates
     *
     * @var array 
     */
    public $timeline = [];
    

    /**
     * Data
     * Raw JSON
     *
     * @var JSON 
     */
    public $data;

    /**
     * Get name
     * 
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Get description
     * 
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Get pricing type
     * 
     * @return string
     */
    public function getPricingType() {
        return $this->pricing_type;
    }

    /**
     * Get local price
     * 
     * @return \PlanetaSoftware\Coinbase\Commerce\Model\Money
     */
    public function getLocalPrice() {
        return $this->local_price;
    }

    /**
     * Get redirect url
     * 
     * @return string
     */
    public function getRedirectUrl() {
        return $this->redirect_url;
    }

    /**
     * Get metadata
     * 
     * @return array
     */
    public function getMetadata() {
        return $this->metadata;
    }

    /**
     * Get timeline
     * 
     * @return array 
     */
    public function getTimeline() {
        return $this->timeline;
    }

    /**
     * Raw data
     * 
     * @return JSON
     */
    public function getRaw() {
    	return $this->data;
    }


    /**
     * Set name
     *
     * @param string $name
     * @return $this
     */
    public function setName(string $name){
        $this->name = $name;
        return $this;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription(string $description){
        $this->description = $description;
        return $this;
    }

    /**
     * Set pricing type
     *
     * @param string $pricing_type
     * @return $this
     */
    public function setPricingType(string $pricing_type){
        $this->pricing_type = $pricing_type;
        return $this;
    }

    /**
     * Set local price
     *
     * @param \PlanetaSoftware\Coinbase\Commerce\Model\Money $local_price
     * @return $this
     */
    public function setLocalPrice(\PlanetaSoftware\Coinbase\Commerce\Model\Money $local_price){
        $this->local_price = $local_price;
        return $this;
    }

    /**
     * Set redirect url
     *
     * @param string $redirect_url
     * @return $this
     */
    public function setRedirectUrl(string $redirect_url){
        $this->redirect_url = $redirect_url;
        return $this;
    }

    /**
     * Set metadata
     *
     * @param array $metadata
     * @return $this
     */
    public function setMetadata($metadata){
        $this->metadata = $metadata;
        return $this;
    }

    /**
     * Set timeline
     *
     * @param array $timeline
     * @return $this
     */
    public function setTimeline($timeline){
        $this->timeline = $timeline;


        return $this;
    }

    /**
     * Set data
     *
     * @param JSON $data
     * @return $this
     */
    public function setRaw($data){
        $this->data = $data;
        return $this;
    }

}