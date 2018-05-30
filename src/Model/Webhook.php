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
class Webhook extends \PlanetaSoftware\Coinbase\Commerce\Model\ChargeResource {

    /**
     * Id
     * Event UUID
     *
     * @var string 
     */
    public $id;

    /**
     * Type
     * Event type (charge:created, charge:confirmed, charge:failed)
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
     * Validate webhook signature
     * 
     * @param string $cc_signature, string $secret, JSON $request
     * @return boolean
     */
    public function validateWebhookSignature($cc_signature,$secret,$request) {
        if ($cc_signature != hash_hmac('SHA256', $request , $secret)){

            return false;
        }

        return true;
    }


    /**
     * Create a webhook object
     * 
     * @param JSON $request
     * @return \PlanetaSoftware\Coinbase\Commerce\Model\Webhook
     */
    public static function createFromRequest($request) {

        if($request){

            $data = json_decode($request, true);

            $webhook = new \PlanetaSoftware\Coinbase\Commerce\Model\Webhook;

            $webhook->setEventId($data['event']['id']);
            $webhook->setEventType($data['event']['type']);
            $webhook->setEventCreatedAt($data['event']['created_at']);
            $webhook->buildChargeResource($data);
            
            return $webhook;
        }
        else {
             throw new \Exception("Message: Request is empty!");
        }
    }   
}