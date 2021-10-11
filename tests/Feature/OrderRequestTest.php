<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\OrderRequest;

class OrderRequestTest extends TestCase
{
    /**
     * This test will assert the payload elements.
     *
     * @return void
     */
    public function testInitiateClass()
    {
        // Fake Payload.
        $payload = [
            'code' => "AXMS12",
            'sessionID' => "12031",
            'date' => date("Y-m-d H:i:s"),
            'email' => "lucas@something.com",
            'b2bB2c' => "ABCssak",
            'itemValue' => 1.1,
            'totalValue' => 1.1,
            'numberOfInstallments' => 1,
            'ip' => "127.0.0.1",
            'isGift' => true,
            'giftMessage' => "Hello World!",
            'observation' => "I Love PHP",
            'status' => 1,
            'origin' => "WEBSITE",
            'channelID' => "ANDROID",
            'reservationDate' => date("Y-m-d H:i:s"),
            'country' => "BRAZIL",
            'nationality' => "BRAZILIAN",
            'product' => 1,
            'customSla' => 1,
            'bankAuthentication' => "FraudCheck",
            'subAcquirer' => "Clearsales",
            'list' => "OBJETO LIST",
            'purchaseInformation' => "OBJETO purchaseInformation",
            'socialNetwork' => "OBJETO socialNetwork",
            'billing' => "OBJETO billing",
            'shipping' => "OBJETO shipping",
            'payments' => "ARRAY DE payments",
            'items' => "ARRAY DE item",
            'passengers' => "ARRAY DE passenger",
            'connections' => "ARRAY DE connection",
            'hotels' => "ARRAY DE hotel"
        ];

        /* Método antigo
        $payloadObj = (object)$payload;
        $orderRequest = new OrderRequest(
            $payloadObj->code,
            $payloadObj->sessionID,
            $payloadObj->date,
            $payloadObj->email,
            $payloadObj->b2bB2c,
            $payloadObj->itemValue,
            $payloadObj->totalValue,
            $payloadObj->numberOfInstallments,
            $payloadObj->ip,
            $payloadObj->isGift,
            $payloadObj->giftMessage,
            $payloadObj->observation,
            $payloadObj->status,
            $payloadObj->origin,
            $payloadObj->channelID,
            $payloadObj->reservationDate,
            $payloadObj->country,
            $payloadObj->nationality,
            $payloadObj->product,
            $payloadObj->customSla,
            $payloadObj->bankAuthentication,
            $payloadObj->subAcquirer,
            $payloadObj->list,
            $payloadObj->purchaseInformation,
            $payloadObj->socialNetwork,
            $payloadObj->billing,
            $payloadObj->shipping,
            $payloadObj->payments,
            $payloadObj->items,
            $payloadObj->passengers,
            $payloadObj->connections,
            $payloadObj->hotels
        );
        */


        $this->assertCount(32, $payload);
        $this->assertNotNull($payload);

        $orderRequest = new OrderRequest($payload);
        $this->assertEquals(
            $payload,
            [
                'code' => $orderRequest->getCode(),
                'sessionID' => $orderRequest->getsessionID(),
                'date' => $orderRequest->getDate(),
                'email' => $orderRequest->getEmail(),
                'b2bB2c' => $orderRequest->getb2bB2c(),
                'itemValue' => $orderRequest->getItemValue(),
                'totalValue' => $orderRequest->getTotalValue(),
                'numberOfInstallments' => $orderRequest->getNumberOfInstallments(),
                'ip' => $orderRequest->getIp(),
                'isGift' => $orderRequest->getIsGift(),
                'giftMessage' => $orderRequest->getGiftMessage(),
                'observation' => $orderRequest->getObservation(),
                'status' => $orderRequest->getStatus(),
                'origin' => $orderRequest->getOrigin(),
                'channelID' => $orderRequest->getChannelID(),
                'reservationDate' => $orderRequest->getReservationDate(),
                'country' => $orderRequest->getCountry(),
                'nationality' => $orderRequest->getNationality(),
                'product' => $orderRequest->getProduct(),
                'customSla' => $orderRequest->getCustomSla(),
                'bankAuthentication' => $orderRequest->getBankAuthentication(),
                'subAcquirer' => $orderRequest->getSubAcquirer(),
                'list' => $orderRequest->getList(),
                'purchaseInformation' => $orderRequest->getPurchaseInformation(),
                'socialNetwork' => $orderRequest->getSocialNetwork(),
                'billing' => $orderRequest->getBilling(),
                'shipping' => $orderRequest->getShipping(),
                'payments' => $orderRequest->getPayments(),
                'items' => $orderRequest->getItems(),
                'passengers' => $orderRequest->getPassengers(),
                'connections' => $orderRequest->getConnections(),
                'hotels' => $orderRequest->getHotels()
            ]
        );
    }
}
