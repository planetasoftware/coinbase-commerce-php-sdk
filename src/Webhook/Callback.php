
<?php
namespace PlanetaSoftware\Coinbase\Commerce\Callback;

/**
 * Description of Callback
 *
 * This Script handles incoming Webhooks from Coinbase Commerce
 * according to cryptocurrency payment
 *
 * @author sain <sain@planetasoftware.com>
 */


/**
 * Coinbase Commerce signature
 *
 * Securing webhooks
 * Every Coinbase Commerce webhook request includes an X-CC-Webhook-Signature header. This header
 * contains the SHA256 
 * HMAC signature of the raw request payload, computed using your webhook shared secret as the key. 
 * You can obtain your shared webhook secret from your settings page.
 *
 * @var string  
 */
 public $cc_signature = $_SERVER["HTTP_X_CC_WEBHOOK_SIGNATURE"];

 /**
 * Secret key
 * webhook shared secret key
 *
 * @var string 
 */
private $secret;

/**
 * Request
 * information from the request body
 *
 * @var JSON  
 */
public $request = file_get_contents("php://input");

/**
 * Data
 * $request to Array
 * 
 * @var Array  
 */
public $data;


webhook = new \PlanetaSoftware\Coinbase\Commerce\Model\Webhook();

$data = webhook->toArray($request);

webhook->setEventId($data['event']['id']);
webhook->setEventType($data['event']['type']);
webhook->setEventCreatedAt($data['event']['created_at']);
webhook->setChargeCode($data['event']['data']['code']);
webhook->setChargeName($data['event']['data']['name']);
webhook->setChargeDescription($data['event']['data']['description']);
webhook->setPaymentLocalAmount($data['event']['data']['payments']['0']['value']['local']['amount']);
webhook->setPaymentLocalCurrency($data['event']['data']['payments']['0']['value']['local']['currency']);
webhook->setPaymentCryptoAmount($data['event']['data']['payments']['0']['value']['crypto']['amount']);
webhook->setPaymentCryptoCurrency($data['event']['data']['payments']['0']['value']['crypto']['currency']);
webhook->setPaymentNetwork($data['event']['data']['payments']['0']['network']);
webhook->setPaymentTransactionId($data['event']['data']['payments']['0']['transaction_id']);
webhook->setOrderId($data['event']['data']['metadata']['order_id']);



if(webhook->validateWebhookSignature($cc_signature,$secret,$request)){

    if(webhook->getEventType == 'charge:confirmed'){

        $order_id = webhook->getOrderId();
    }
    elseif (webhook->getEventType() == 'charge:failed') {
    	// .. //
    }

}
