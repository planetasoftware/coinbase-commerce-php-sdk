<?php
namespace PlanetaSoftware\Coinbase\Commerce\Model;

/**
 * Description of Charge Resource
 *
 * This Model class represents the input data used identify the charge resource information
 * according to cryptocurrency object
 *
 * @author sain <sain@planetasoftware.com>
 */
class ChargeResource extends \PlanetaSoftware\Coinbase\Commerce\Model\Charge {

	/**
     * Code
     * Charge user-friendly primary key
     *
     * @var string 
     */
    public $code;

    /**
     * Created at
     * Charge creation time
     *
     * @var string 
     */
    public $created_at;

    /**
     * Expires at
     * Charge expiration time
     *
     * @var string 
     */
    public $expires_at;

    /**
     * Hosted_url
     * Hosted charge URL
     *
     * @var string 
     */
    public $hosted_url;

    /**
     * Ethereum price
     * Price in ethereum currency
     *
     * @var \PlanetaSoftware\Coinbase\Commerce\Model\Money 
     */
    public $ethereum_price;

    /**
     * Bitcoin price
     * Price in bitcoin currency
     *
     * @var \PlanetaSoftware\Coinbase\Commerce\Model\Money 
     */
    public $bitcoin_price;

    /**
     * Bitcoincash price
     * Price in bitcoincash currency
     *
     * @var \PlanetaSoftware\Coinbase\Commerce\Model\Money 
     */
    public $bitcoincash_price;

    /**
     * Litecoin price
     * Price in litcoin currency
     *
     * @var \PlanetaSoftware\Coinbase\Commerce\Model\Money 
     */
    public $litecoin_price;

    /**
     * Ethereum address
     * Ethereum wallet address
     *
     * @var string
     */
    public $ethereum_address;

    /**
     * Bitcoin address
     * Bitcoin wallet address
     *
     * @var string
     */
    public $bitcoin_address;

    /**
     * Bitcoincash address
     * Bitcoincash wallet address
     *
     * @var string
     */
    public $bitcoincash_address;

    /**
     * Litecoin address
     * Litecoin wallet address
     *
     * @var string
     */
    public $litecoin_address;

    /**
     * Charge payment
     * Charge payment information
     *
     * @var \PlanetaSoftware\Coinbase\Commerce\Model\Payments 
     */
    public $payments;

    /**
     * Get code
     * 
     * @return string
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * Get created at
     * 
     * @return string
     */
    public function getCreatedAt() {
        return $this->created_at;
    }

    /**
     * Get expires at
     * 
     * @return string
     */
    public function getExpiresAt() {
        return $this->expires_at;
    }

    /**
     * Get hosted_url
     * 
     * @return string
     */
    public function getHostedUrl() {
        return $this->hosted_url;
    }

    /**
     * Get ethereum price
     * 
     * @return \PlanetaSoftware\Coinbase\Commerce\Model\Money
     */
    public function getEthereumPrice() {
        return $this->ethereum_price;
    }

    /**
     * Get bitcoin price
     * 
     * @return \PlanetaSoftware\Coinbase\Commerce\Model\Money
     */
    public function getBitcoinPrice() {
        return $this->bitcoin_price;
    }

    /**
     * Get bitcoincash price
     * 
     * @return \PlanetaSoftware\Coinbase\Commerce\Model\Money
     */
    public function getBitcoincashPrice() {
        return $this->bitcoincash_price;
    }

    /**
     * Get litecoin price
     * 
     * @return \PlanetaSoftware\Coinbase\Commerce\Model\Money
     */
    public function getLitecoinPrice() {
        return $this->litecoin_price;
    }

    /**
     * Get ethereum address
     * 
     * @return string
     */
    public function getEthereumAddress() {
        return $this->ethereum_address;
    }

    /**
     * Get bitcoin address
     * 
     * @return string
     */
    public function getBitcoinAddress() {
        return $this->bitcoin_address;
    }

    /**
     * Get Bitcoincash address
     * 
     * @return string
     */
    public function getBitcoincashAddress() {
        return $this->bitcoincash_address;
    }

    /**
     * Get litecoin address
     * 
     * @return string
     */
    public function getLitecoinAddress() {
        return $this->litecoin_address;
    }

    /**
     * Get payments
     * 
     * @return \PlanetaSoftware\Coinbase\Commerce\Model\Payments
     */
    public function getPayments() {
        return $this->payments;
    }


    /**
     * Set code
     *
     * @param string $code
     * @return $this
     */
    public function setCode(string $code){
        $this->code = $code;
        return $this;
    }

    /**
     * Set created at
     *
     * @param string $created_at
     * @return $this
     */
    public function setCreatedAt(string $created_at){
        $this->created_at = $created_at;
        return $this;
    }

    /**
     * Set expires at
     *
     * @param string $cexpires_at
     * @return $this
     */
    public function setExpiresAt(string $expires_at){
        $this->expires_at = $expires_at;
        return $this;
    }

    /**
     * Set hosted url
     *
     * @param string $hosted_url
     * @return $this
     */
    public function setHostedUrl(string $hosted_url){
        $this->hosted_url = $hosted_url;
        return $this;
    }

    /**
     * Set ethereum price
     *
     * @param \PlanetaSoftware\Coinbase\Commerce\Model\Money $ethereum_price
     * @return $this
     */
    public function setEthereumPrice(\PlanetaSoftware\Coinbase\Commerce\Model\Money $ethereum_price){
        $this->ethereum_price = $ethereum_price;
        return $this;
    }

    /**
     * Set bitcoin price
     *
     * @param \PlanetaSoftware\Coinbase\Commerce\Model\Money $bitcoin_price
     * @return $this
     */
    public function setBitcoinPrice(\PlanetaSoftware\Coinbase\Commerce\Model\Money $bitcoin_price){
        $this->bitcoin_price = $bitcoin_price;
        return $this;
    }

    /**
     * Set bitcoincash price
     *
     * @param \PlanetaSoftware\Coinbase\Commerce\Model\Money $bitcoincash_price
     * @return $this
     */
    public function setBitcoincashPrice(\PlanetaSoftware\Coinbase\Commerce\Model\Money $bitcoincash_price){
        $this->bitcoincash_price = $bitcoincash_price;
        return $this;
    }

    /**
     * Set litecoin price
     *
     * @param \PlanetaSoftware\Coinbase\Commerce\Model\Money $ethereum_price
     * @return $this
     */
    public function setLitecoinPrice(\PlanetaSoftware\Coinbase\Commerce\Model\Money $litecoin_price){
        $this->litecoin_price = $litecoin_price;
        return $this;
    }

    /**
     * Set ethereum address
     *
     * @param string $ethereum_address
     * @return $this
     */
    public function setEthereumAddress(string $ethereum_address){
        $this->ethereum_address = $ethereum_address;
        return $this;
    }

    /**
     * Set bitcoin address
     *
     * @param string $bitcoin_address
     * @return $this
     */
    public function setBitcoinAddress(string $bitcoin_address){
        $this->bitcoin_address = $bitcoin_address;
        return $this;
    }

    /**
     * Set bitcoincash address
     *
     * @param string $bitcoincash_address
     * @return $this
     */
    public function setBitcoincashAddress(string $bitcoincash_address){
        $this->bitcoincash_address = $bitcoincash_address;
        return $this;
    }

    /**
     * Set litecoin address
     *
     * @param string $litecoin_address
     * @return $this
     */
    public function setLitecoinAddress(string $litecoin_address){
        $this->litecoin_address = $litecoin_address;
        return $this;
    }

    /**
     * Set charge payment
     *
     * @param \PlanetaSoftware\Coinbase\Commerce\Model\Payment $payments
     * @return $this
     */
    public function setPayments(\PlanetaSoftware\Coinbase\Commerce\Model\Payments $payments){
        $this->payments = $payments;
        return $this;
    }

}

