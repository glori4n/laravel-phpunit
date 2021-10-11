<?php

namespace App;

class OrderRequest
{
    /**
     * @var array
     */
    private $code;
    private $sessionID;
    private $date;
    private $email;
    private $b2bB2c;
    private $itemValue;
    private $totalValue;
    private $numberOfInstallments;
    private $ip;
    private $isGift;
    private $giftMessage;
    private $observation;
    private $status;
    private $origin;
    private $channelID;
    private $reservationDate;
    private $country;
    private $nationality;
    private $product;
    private $customSla;
    private $bankAuthentication;
    private $subAcquirer;
    private $list;
    private $purchaseInformation;
    private $socialNetwork;
    private $billing;
    private $shipping;
    private $payments;
    private $items;
    private $passengers;
    private $connections;
    private $hotels;


    /**
     * Construct the order with the items from the payload.
     *
     * @param array $payload
     */
    public function __construct($payload = [])
    {
        $this->code = $payload["code"];
        $this->sessionID = $payload["sessionID"];
        $this->date = $payload["date"];
        $this->email = $payload["email"];
        $this->b2bB2c = $payload["b2bB2c"];
        $this->itemValue = $payload["itemValue"];
        $this->totalValue = $payload["totalValue"];
        $this->numberOfInstallments = $payload["numberOfInstallments"];
        $this->ip = $payload["ip"];
        $this->isGift = $payload["isGift"];
        $this->giftMessage = $payload["giftMessage"];
        $this->observation = $payload["observation"];
        $this->status = $payload["status"];
        $this->origin = $payload["origin"];
        $this->channelID = $payload["channelID"];
        $this->reservationDate = $payload["reservationDate"];
        $this->country = $payload["country"];
        $this->nationality = $payload["nationality"];
        $this->product = $payload["product"];
        $this->customSla = $payload["customSla"];
        $this->bankAuthentication = $payload["bankAuthentication"];
        $this->subAcquirer = $payload["subAcquirer"];
        $this->list = $payload["list"];
        $this->purchaseInformation = $payload["purchaseInformation"];
        $this->socialNetwork = $payload["socialNetwork"];
        $this->billing = $payload["billing"];
        $this->shipping = $payload["shipping"];
        $this->payments = $payload["payments"];
        $this->items = $payload["items"];
        $this->passengers = $payload["passengers"];
        $this->connections = $payload["connections"];
        $this->hotels = $payload["hotels"];
    }

    public function getCode()
    {
        return $this->code;
    }

    public function getsessionID()
    {
        return $this->sessionID;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getb2bB2c()
    {
        return $this->b2bB2c;
    }

    public function getItemValue()
    {
        return $this->itemValue;
    }

    public function getTotalValue()
    {
        return $this->totalValue;
    }

    public function getNumberOfInstallments()
    {
        return $this->numberOfInstallments;
    }

    public function getIp()
    {
        return $this->ip;
    }

    public function getIsGift()
    {
        return $this->isGift;
    }

    public function getGiftMessage()
    {
        return $this->giftMessage;
    }

    public function getObservation()
    {
        return $this->observation;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getOrigin()
    {
        return $this->origin;
    }

    public function getChannelID()
    {
        return $this->channelID;
    }

    public function getReservationDate()
    {
        return $this->reservationDate;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function getNationality()
    {
        return $this->nationality;
    }

    public function getProduct()
    {
        return $this->product;
    }

    public function getCustomSla()
    {
        return $this->customSla;
    }

    public function getBankAuthentication()
    {
        return $this->bankAuthentication;
    }

    public function getSubAcquirer()
    {
        return $this->subAcquirer;
    }

    public function getList()
    {
        return $this->list;
    }

    public function getPurchaseInformation()
    {
        return $this->purchaseInformation;
    }

    public function getSocialNetwork()
    {
        return $this->socialNetwork;
    }

    public function getBilling()
    {
        return $this->billing;
    }

    public function getShipping()
    {
        return $this->shipping;
    }

    public function getPayments()
    {
        return $this->payments;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function getPassengers()
    {
        return $this->passengers;
    }

    public function getConnections()
    {
        return $this->connections;
    }

    public function getHotels()
    {
        return $this->hotels;
    }
}