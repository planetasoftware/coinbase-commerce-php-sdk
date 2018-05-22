<?php
namespace PlanetaSoftware\Coinbase\Commerce\Model;

/**
 * Description of Webhook
 *
 * This Model class represents the input data used to identify the charge information event
 * according to cryptocurrency payment.
 * List of all available webhook events: charge:created / charge:confirmed / charge:failed
 *
 * @author sain <sain@planetasoftware.com>
 */
class Webhook {

    /**
     * Id
     * Event UUID
     *
     * @var string 
     */
    public $id;

    /**
     * Type
     * Event type
     *
     * @var string 
     */
    public $type;

	/**
     * Creation at
     * Event creation time
     *
     * @var string 
     */
    public $created_at;

    /**
     * Code
     * Charge user-friendly primary key
     *
     * @var string 
     */
    public $code;

    /**
     * Name
     * Charge name
     *
     * @var string 
     */
    public $name;

    /**
     * Description
     * Charge description
     *
     * @var string 
     */
    public $description;

    /**
     * Payment local amount
     * Payment value in local fiat currency
     *
     * @var string 
     */
    public $paymentLocalAmount;

    /**
     * Payment local currency
     * System of money that refers Payment local amount (USD)
     *
     * @var string 
     */
    public $paymentLocalCurrency;

    /**
     * Payment crypto amount
     * Payment value in cryptocurrency
     *
     * @var string 
     */
    public $paymentCryptoAmount;

    /**
     * Payment crypto currency
     * System of cryptocurrency that refers Payment crypto amount (BTC, BCH, ETH, LTC)
     *
     * @var string 
     */
    public $paymentCryptoCurrency;

    /**
     * Payment network
     * Payment network (bitcoin, bitcoincash, ethereum, litecoin)
     *
     * @var string 
     */
    public $paymentNetwork;

    /**
     * Payment transaction id
     * Blockchaing transaction id
     *
     * @var string 
     */
    public $paymentTransactionId;

    /**
     * Order id
     * Custom business variable to set order id
     *
     * @var string 
     */
    public $orderId;


    /**
     * Get event id
     * 
     * @return string
     */
    public function getEventId() {
        return $this->id;
    }

    /**
     * Get event type
     * 
     * @return string
     */
    public function getEventType() {
        return $this->type;
    }

    /**
     * Get event created at
     * 
     * @return string
     */
    public function getEventCreatedAt() {
        return $this->created_at;
    }

    /**
     * Get charge code
     * 
     * @return string
     */
    public function getChargeCode() {
        return $this->code;
    }

    /**
     * Get charge name
     * 
     * @return string
     */
    public function getChargeName() {
        return $this->name;
    }

    /**
     * Get charge description
     * 
     * @return string
     */
    public function getChargeDescription() {
        return $this->description;
    }

    /**
     * Get payment local amount
     * 
     * @return string
     */
    public function getPaymentLocalAmount() {
        return $this->paymentLocalAmount;
    }

    /**
     * Get payment local currency
     * 
     * @return string
     */
    public function getPaymentLocalCurrency() {
        return $this->paymentLocalCurrency;
    }

    /**
     * Get payment crypto amount
     * 
     * @return string
     */
    public function getPaymentCryptoAmount() {
        return $this->paymentCryptoAmount;
    }

    /**
     * Get payment crypto currency
     * 
     * @return string
     */
    public function getPaymentCryptoCurrency() {
        return $this->paymentCryptoCurrency;
    }

    /**
     * Get payment network
     * 
     * @return string
     */
    public function getPaymentNetwork() {
        return $this->paymentNetwork;
    }

    /**
     * Get payment transaction id
     * 
     * @return string
     */
    public function getPaymentTransactionId() {
        return $this->paymentTransactionId;
    }

    /**
     * Get Order Id
     * 
     * @return string
     */
    public function getOrderId() {
        return $this->orderId;
    }


    /**
     * Set event id
     *
     * @param string $id
     * @return $this
     */
    public function setEventId(string $id){
        $this->id = $id;
        return $this;
    }

    /**
     * Set event type
     *
     * @param string $type
     * @return $this
     */
    public function setEventType(string $type){
        $this->type = $type;
        return $this;
    }

    /**
     * Set event created at
     *
     * @param string $created_at
     * @return $this
     */
    public function setEventCreatedAt(string $created_at){
        $this->created_at = $created_at;
        return $this;
    }

    /**
     * Set charge code
     *
     * @param string $code
     * @return $this
     */
    public function setChargeCode(string $code){
        $this->code = $code;
        return $this;
    }

    /**
     * Set charge name
     *
     * @param string $name
     * @return $this
     */
    public function setChargeName(string $name){
        $this->name = $name;
        return $this;
    }

    /**
     * Set charge description
     *
     * @param string $description
     * @return $this
     */
    public function setChargeDescription(string $description){
        $this->description = $description;
        return $this;
    }

    /**
     * Set payment local amount
     *
     * @param string $paymentLocalAmount
     * @return $this
     */
    public function setPaymentLocalAmount(string $paymentLocalAmount){
        $this->paymentLocalAmount = $paymentLocalAmount;
        return $this;
    }

    /**
     * Set payment local currency
     *
     * @param string $paymentLocalCurrency
     * @return $this
     */
    public function setPaymentLocalCurrency(string $paymentLocalCurrency){
        $this->paymentLocalCurrency = $paymentLocalCurrency;
        return $this;
    }

    /**
     * Set payment crypto amount
     *
     * @param string $paymentCryptoAmount
     * @return $this
     */
    public function setPaymentCryptoAmount(string $paymentCryptoAmount){
        $this->paymentCryptoAmount = $paymentCryptoAmount;
        return $this;
    }

    /**
     * Set payment crypto currency
     *
     * @param string $paymentCryptoCurrency
     * @return $this
     */
    public function setPaymentCryptoCurrency(string $paymentCryptoCurrency){
        $this->paymentCryptoCurrency = $paymentCryptoCurrency;
        return $this;
    }

    /**
     * Set payment network
     *
     * @param string $paymentNetwork
     * @return $this
     */
    public function setPaymentNetwork(string $paymentNetwork){
        $this->paymentNetwork = $paymentNetwork;
        return $this;
    }

    /**
     * Set payment transaction id
     *
     * @param string $paymentTransactionId
     * @return $this
     */
    public function setPaymentTransactionId(string $paymentTransactionId){
        $this->paymentTransactionId = $paymentTransactionId;
        return $this;
    }

    /**
     * Set Order Id
     *
     * @param string $orderId
     * @return $this
     */
    public function setOrderId(string $orderId){
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * Validate webhook signature
     * 
     * @param string $cc_signature, string $secret, JSON $request
     * @return boolean
     */
    public function validateWebhookSignature($cc_signature,$secret,$request) {
        if ($cc_signature != hash_hmac('SHA256', $request , $secret)){

            return true;
        }

        return false;
    }

    /**
     * Convert event information to Array
     * 
     * @param JSON $request
     * @return array
     */
    public function toArray($request) {
        
        return json_decode($request, true);
    }
   
}

