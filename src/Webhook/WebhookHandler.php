<?php
namespace PlanetaSoftware\Coinbase\Commerce\Webhook;

/**
 * Description of WebhookHandle
 *
 * This model class handles incoming Webhook notifications from Coinbase Commerce
 * according to cryptocurrency payment events
 *
 * @author sain <sain@planetasoftware.com>
 */
Class WebhookHandler  {

	/**
     * @var EVENT_TYPE_CREATED
     */
    const EVENT_TYPE_CREATED = 'charge:created';

    /**
     * @var EVENT_TYPE_CONFIRMED
     */
    const EVENT_TYPE_CONFIRMED = 'charge:confirmed';

    /**
     * @var EVENT_TYPE_FAILED
     */
    const EVENT_TYPE_FAILED = 'charge:failed';

	/**
     * Manager
     * Manager Coinbase Commerce data objects
     *
     * @var \PlanetaSoftware\Coinbase\Commerce\Manager
     */    
    private $manager;

    /**
	 * Secret key
	 * webhook shared secret key
	 *
	 * @var string 
	 */  
    private $secret;

    /**
     * Type
     * Event type (charge:created, charge:confirmed, charge:failed)
     *
     * @var string 
     */
    private $type;

    /**
     * Charge code
     * Charge user-friendly primary key
     *
     * @var string 
     */
    private $chargeCode;


    /**
     * Constructor
     * 
     * @param string $client
     * @param string $secret
     */    
    public function __construct( String $apiKey, String $secret) {
        
        $client = new \PlanetaSoftware\Coinbase\Commerce\Client($apiKey);

        $this->manager = new \PlanetaSoftware\Coinbase\Commerce\Manager($client);
        
        $this->secret = $secret;
        $this->validateRequest();
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
     * Get charge
     * 
     * @return \PlanetaSoftware\Coinbase\Commerce\Model\ChargeResource
     */
    public function getCharge(){

        return $this->manager->showCharge($this->chargeCode);
    }
    
    /**
     * Validate webhook request
     * 
     * @return boolean
     */
    private function validateRequest(){
        
        $request = file_get_contents("php://input");

        // This header contains the SHA256 HMAC signature of the raw request payload
        $cc_signagure = isset($_SERVER["HTTP_X_CC_WEBHOOK_SIGNATURE"]) ? $_SERVER["HTTP_X_CC_WEBHOOK_SIGNATURE"] : '';        
        
        if(!$this->validateWebhookSignature($cc_signagure, $request)){
             throw new \Exception("Request could not be validated");
        }
        
        $data = json_decode($request, true);
        $this->type = $data['event']['type'];
        $this->chargeCode = $data['event']['data']['code'];
        
        return true;
    }
    
    /**
     * Validate webhook signature
     * 
     * @param string $cc_signature, string $secret, JSON $request
     * @return boolean
     */
    private function validateWebhookSignature(String $cc_signature, String $request) { 
        
        if ($cc_signature != hash_hmac('SHA256', $request , $this->secret)){
            return false;
        }

        return true;
    }
}