<?php
require_once ('../../vendor/autoload.php');

/**
 * Description of WebhookHandle
 *
 * This Script handles incoming Webhook notifications from Coinbase Commerce
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
$cc_signature = $_SERVER["HTTP_X_CC_WEBHOOK_SIGNATURE"];

/**
 * Request
 * information from the request body
 *
 * @var JSON  
 */
$request = file_get_contents("php://input");

/**
 * Secret key
 * webhook shared secret key
 *
 * @var string 
 */
$secret = 'your secret key';

try {

	$webhook = \PlanetaSoftware\Coinbase\Commerce\Model\Webhook::createFromRequest($request);

	if($webhook->validateWebhookSignature($cc_signature,$secret,$request)){

    	if($webhook->getEventType() == 'charge:confirmed'){
        	echo 'success: '.$order_id = $webhook->getOrderId();
    	}
	    elseif ($webhook->getEventType() == 'charge:failed') {
	    	echo 'failed: '.$order_id = $webhook->getOrderId();
	    }
	}  
}
catch(\Exception $e) {
  echo $e->getMessage();
}