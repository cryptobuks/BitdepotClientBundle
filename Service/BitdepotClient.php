<?php

namespace Dizda\BitdepotClientBundle\Service;

use Dizda\BitdepotClientBundle\Client\WSSEClient;

/**
 * Class BitdepotClient
 *
 * @author Jonathan Dizdarevic <dizda@dizda.fr>
 */
class BitdepotClient
{
    /**
     * @var WSSEClient
     */
    private $client;

    /**
     * @param string $amountExpected
     *
     * @return array
     */
    public function createDeposit($amountExpected)
    {
        $response = $this->client->post('deposits.json', [
            'type'            => 1,
            'amount_expected' => $amountExpected
        ]);

        return $response;
    }

    /**
     * @param WSSEClient $wsseClient
     */
    public function setWSSEClient(WSSEClient $wsseClient)
    {
        $this->client = $wsseClient;
    }
}