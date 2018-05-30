<?php
namespace PlanetaSoftware\Coinbase\Commerce\Model;

/**
 * Description of Payments
 *
 * This Model class represents the input data used identify the payment information
 * according to the charge
 *
 * @author sain <sain@planetasoftware.com>
 */
class Payments {

	/**
     * Payment network
     * Payment network (bitcoin, bitcoincash, ethereum, litecoin)
     *
     * @var string 
     */
    public $network;

    /**
     * Payment transaction id
     * Blockchain transaction id
     *
     * @var string 
     */
    public $transaction_id;

    /**
     * Payment status
     * Payment status (NEW, CONFIRMED, FAILED)
     *
     * @var string 
     */
    public $status;

    /**
     * Payment local amount
     * Payment value in local fiat currency
     *
     * @var \PlanetaSoftware\Coinbase\Commerce\Model\Money 
     */
    public $value_local;

    /**
     * Payment crypto amount
     * Payment value in cryptocurrency
     *
     * @var \PlanetaSoftware\Coinbase\Commerce\Model\Money
     */
    public $value_crypto;

    /**
     * Get payment network
     * 
     * @return string
     */
    public function getNetwork() {
        return $this->network;
    }

    /**
     * Get payment transaction id
     * 
     * @return string
     */
    public function getTransactionId() {
        return $this->transaction_id;
    }

    /**
     * Get payment status
     * 
     * @return string
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * Get payment local value
     * 
     * @return \PlanetaSoftware\Coinbase\Commerce\Model\Money
     */
    public function getLocalValue() {
        return $this->value_local;
    }

    /**
     * Get payment crypto value
     * 
     * @return \PlanetaSoftware\Coinbase\Commerce\Model\Money
     */
    public function getCryptoValue() {
        return $this->value_crypto;
    }


    /**
     * Set payment network
     *
     * @param string $paymentNetwork
     * @return $this
     */
    public function setNetwork(string $network = null){
        $this->network = $network;
        return $this;
    }

    /**
     * Set payment transaction id
     *
     * @param string $TransactionId
     * @return $this
     */
    public function setTransactionId(string $transaction_id){
        $this->transaction_id = $transaction_id;
        return $this;
    }

    /**
     * Set payment status
     *
     * @param string $status
     * @return $this
     */
    public function setStatus(string $status){
        $this->status = $status;
        return $this;
    }

    /**
     * Set payment local value
     *
     * @param \PlanetaSoftware\Coinbase\Commerce\Model\Money $value_local
     * @return $this
     */
    public function setLocalValue(\PlanetaSoftware\Coinbase\Commerce\Model\Money $value_local){
        $this->value_local = $value_local;
        return $this;
    }

    /**
     * Set payment crypto value
     *
     * @param \PlanetaSoftware\Coinbase\Commerce\Model\Money $value_crypto
     * @return $this
     */
    public function setCryptoValue(\PlanetaSoftware\Coinbase\Commerce\Model\Money $value_crypto){
        $this->value_crypto = $value_crypto;
        return $this;
    }

}

