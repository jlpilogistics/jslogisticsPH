<?php
namespace App\Services;
use Shippo;
class Shipping
{
    public function __construct()
    {
        // Grab this private key from
        // .env and setup the Shippo api
        Shippo::setApiKey(env('SHIPPO_PRIVATE'));
    }
    /**
     * Validate an address through Shippo service
     *
     * @param User $user
     * @return Shippo_Adress
     */
    public function validateAddress(User $user)
    {
        // Grab the shipping address from the User model
        $toAddress = $user->shippingAddress();
        // Pass a validate flag to Shippo
        $toAddress['validate'] = true;
        // Verify the address data
        return Shippo_Address::create($toAddress);
    }
    /**
     * Return the shipping data for a user
     *
     * @return array
     */
    public function shippingAddress()
    {
        return [
            'name' => $this->name,
            'company' => $this->company,
            'street1' => $this->street1,
            'city' => $this->city,
            'state' => $this->state,
            'zip' => $this->zip,
            'country' => $this->country,
            'phone' => $this->phone,
            'email' => $this->email,
        ];
    }
    /**
     * Create a Shippo shipping rates
     *
     * @param User $user
     * @param Product $product
     * @return Shippo_Shipment
     */
    public function rates(User $user, Product $product)
    {
        // Grab the shipping address from the User model
        $toAddress = $user->shippingAddress();
        // Pass the PURCHASE flag.
        $toAddress['object_purpose'] = 'PURCHASE';
        // Get the shipment object
        return Shippo_Shipment::create([
            'object_purpose'=> 'PURCHASE',
            'address_from'=> $this->fromAddress,
            'address_to'=> $toAddress,
            'parcel'=> $product->toArray(),
            'insurance_amount'=> '30',
            'insurance_currency'=> 'USD',
            'async'=> false
        ]);
    }

}