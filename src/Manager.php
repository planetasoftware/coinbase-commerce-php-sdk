<?php
namespace PlanetaSoftware\Coinbase\Commerce;

/**
 * Description of Manager
 *
 * This class manages the Coinbase Commerce data objects
 *
 * @author sain <sain@planetasoftware.com>
 */
class Manager {

	/**
     * Webservice
     * Manager Coinbase Commerce API
     *
     * @var \PlanetaSoftware\Coinbase\Commerce\Client 
     */
	private $webservice;
	
	/**
     * Constructor
     * 
     * @param \PlanetaSoftware\Coinbase\Commerce\Client $client
     */
	public function __construct( \PlanetaSoftware\Coinbase\Commerce\Client $client) {
		
		$this->webservice = $client;
	}

	/**
     * Show a charge
     * 
     * @param string $charge_code 
     * @return \PlanetaSoftware\Coinbase\Commerce\Model\ChargeResource
     */
    public function showCharge(String $charge_code){

    	$request = $this->webservice->showCharge($charge_code);
    	
    	$data = json_decode($request, true);

        return $this->buildChargeResource($data);
    }

	/**
     * Create charge
     * 
     * @param \PlanetaSoftware\Coinbase\Commerce\Model\Charge $charge 
     * @return \PlanetaSoftware\Coinbase\Commerce\Model\ChargeResource
     */
    public function createCharge(\PlanetaSoftware\Coinbase\Commerce\Model\Charge $charge){

        $request = $this->webservice->createCharge($charge);			

        $data = json_decode($request, true);

        return $this->buildChargeResource($data);
        
    }

    /**
     * Build charge resource
     * 
     * @param JSON $data 
     * @return \PlanetaSoftware\Coinbase\Commerce\Model\ChargeResource
     */
    public function buildChargeResource($data) {

    	//create price object

        $localMoney = new \PlanetaSoftware\Coinbase\Commerce\Model\Money();
        $ethereumMoney = new \PlanetaSoftware\Coinbase\Commerce\Model\Money();
        $bitcoinMoney = new \PlanetaSoftware\Coinbase\Commerce\Model\Money();
        $bitcoincashMoney = new \PlanetaSoftware\Coinbase\Commerce\Model\Money();
        $litecoinMoney = new \PlanetaSoftware\Coinbase\Commerce\Model\Money();

        //create payment object
        $chargePayment = new \PlanetaSoftware\Coinbase\Commerce\Model\Payments();

        //create charge resource object

        $chargeResource = new \PlanetaSoftware\Coinbase\Commerce\Model\ChargeResource;

        $chargeResource->setCode($data['data']['code']);
        $chargeResource->setCreatedAt($data['data']['created_at']);
        $chargeResource->setExpiresAt($data['data']['expires_at']);
        $chargeResource->setHostedUrl($data['data']['hosted_url']);

        $chargeResource->setRedirectUrl($data['data']['redirect_url']);        
        $chargeResource->setName($data['data']['name']);
        $chargeResource->setDescription($data['data']['description']);
        $chargeResource->setPricingType($data['data']['pricing_type']);

        if(isset($data['data']['pricing']['local'])) {
	        $localMoney->SetAmount($data['data']['pricing']['local']['amount']);
	        $localMoney->SetCurrency($data['data']['pricing']['local']['currency']);
	        $chargeResource->setLocalPrice($localMoney);
    	}
        if(isset($data['data']['pricing']['ethereum'])) {
        	$ethereumMoney->SetAmount($data['data']['pricing']['ethereum']['amount']);
        	$ethereumMoney->SetCurrency($data['data']['pricing']['ethereum']['currency']);
        	$chargeResource->setEthereumPrice($ethereumMoney);
    	}
        if(isset($data['data']['pricing']['bitcoin'])) {
        	$bitcoinMoney->SetAmount($data['data']['pricing']['bitcoin']['amount']);
        	$bitcoinMoney->SetCurrency($data['data']['pricing']['bitcoin']['currency']);
        	$chargeResource->setBitcoinPrice($bitcoinMoney);
        }
        if(isset($data['data']['pricing']['bitcoincash'])) {
        	$bitcoincashMoney->SetAmount($data['data']['pricing']['bitcoincash']['amount']);
        	$bitcoincashMoney->SetCurrency($data['data']['pricing']['bitcoincash']['currency']);
        	$chargeResource->setBitcoincashPrice($bitcoincashMoney);
        }
        if(isset($data['data']['pricing']['litecoin'])) {
        	$litecoinMoney->SetAmount($data['data']['pricing']['litecoin']['amount']);
        	$litecoinMoney->SetCurrency($data['data']['pricing']['litecoin']['currency']);
        	$chargeResource->setLitecoinPrice($litecoinMoney);
        }        

        if(isset($data['data']['addresses']['ethereum']))
        	$chargeResource->setEthereumAddress($data['data']['addresses']['ethereum']);
        if(isset($data['data']['addresses']['bitcoin']))
        	$chargeResource->setBitcoinAddress($data['data']['addresses']['bitcoin']);
        if(isset($data['data']['addresses']['bitcoincash']))
        	$chargeResource->setBitcoincashAddress($data['data']['addresses']['bitcoincash']);        
        if(isset($data['data']['addresses']['litecoin']))
        	$chargeResource->setLitecoinAddress($data['data']['addresses']['litecoin']);

        if(!empty($data['data']['payments'])) {

        	//create price object

        	$value_local = new \PlanetaSoftware\Coinbase\Commerce\Model\Money();
        	$value_local->SetAmount($data['data']['payments']['0']['value']['local']['amount']);
	        $value_local->SetCurrency($data['data']['payments']['0']['value']['local']['currency']);
	        $chargePayment->setLocalValue($value_local);

	        $value_crypto = new \PlanetaSoftware\Coinbase\Commerce\Model\Money();
        	$value_crypto->SetAmount($data['data']['payments']['0']['value']['crypto']['amount']);
	        $value_crypto->SetCurrency($data['data']['payments']['0']['value']['crypto']['currency']);
	        $chargePayment->setCryptoValue($value_crypto);


        	$chargePayment->setNetwork($data['data']['payments']['0']['network']);
        	$chargePayment->setTransactionId($data['data']['payments']['0']['transaction_id']);
        	$chargePayment->setStatus($data['data']['payments']['0']['status']);


        	$chargeResource->setPayments($chargePayment);
        }

        $chargeResource->setMetadata($data['data']['metadata']);

        $chargeResource->setRaw(json_encode($data));


        return $chargeResource;

    }
	
}
