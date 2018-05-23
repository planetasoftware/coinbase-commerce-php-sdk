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
     * Create charge
     * 
     * @param \PlanetaSoftware\Coinbase\Commerce\Model\Charge $charge 
     * @return JSON
     */
    public function createCharge(\PlanetaSoftware\Coinbase\Commerce\Model\Charge $charge){

        $request = $this->webservice->createCharge($charge);

        $data = json_decode($request, true);

        //create price object

        $localMoney = new \PlanetaSoftware\Coinbase\Commerce\Model\Money();
        $ethereumMoney = new \PlanetaSoftware\Coinbase\Commerce\Model\Money();
        $bitcoinMoney = new \PlanetaSoftware\Coinbase\Commerce\Model\Money();
        $bitcoincashMoney = new \PlanetaSoftware\Coinbase\Commerce\Model\Money();
        $litecoinMoney = new \PlanetaSoftware\Coinbase\Commerce\Model\Money();

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

        $localMoney->SetAmount($data['data']['pricing']['local']['amount']);
        $localMoney->SetCurrency($data['data']['pricing']['local']['currency']);
        $chargeResource->setLocalPrice($localMoney);

        $ethereumMoney->SetAmount($data['data']['pricing']['ethereum']['amount']);
        $ethereumMoney->SetCurrency($data['data']['pricing']['ethereum']['currency']);
        $chargeResource->setEthereumPrice($ethereumMoney);

        $bitcoinMoney->SetAmount($data['data']['pricing']['bitcoin']['amount']);
        $bitcoinMoney->SetCurrency($data['data']['pricing']['bitcoin']['currency']);
        $chargeResource->setBitcoinPrice($bitcoinMoney);

        $bitcoincashMoney->SetAmount($data['data']['pricing']['bitcoincash']['amount']);
        $bitcoincashMoney->SetCurrency($data['data']['pricing']['bitcoincash']['currency']);
        $chargeResource->setBitcoincashPrice($bitcoincashMoney);

        $litecoinMoney->SetAmount($data['data']['pricing']['litecoin']['amount']);
        $litecoinMoney->SetCurrency($data['data']['pricing']['litecoin']['currency']);
        $chargeResource->setLitecoinPrice($litecoinMoney);

        $chargeResource->setEthereumAddress($data['data']['addresses']['ethereum']);
        $chargeResource->setBitcoinAddress($data['data']['addresses']['bitcoin']);
        $chargeResource->setBitcoincashAddress($data['data']['addresses']['bitcoincash']);
        $chargeResource->setLitecoinAddress($data['data']['addresses']['litecoin']);

        $chargeResource->setMetadata($data['data']['metadata']);


        return $chargeResource;
    }
	
}
