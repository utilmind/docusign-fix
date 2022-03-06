<?php

namespace Example\Services\Examples\eSignature;

use DocuSign\eSign\Client\ApiException;
use DocuSign\eSign\Model\Envelope;

class EnvelopeInfoService
{
    /**
     * Do the work of the example
     * 1. Get the envelope's data
     *
     * @param  $args array
     * @param $clientService
     * @return Envelope
     */
    # ***DS.snippet.0.start
    public static function envelopeInfo(array $args, $clientService): Envelope
    {
        # 1. call API method
        # Exceptions will be caught by the calling function
        $envelope_api = $clientService->getEnvelopeApi();
        try {
            $envelopeId = $envelope_api->getEnvelope($args['account_id'], $args['envelope_id']);
        } catch (ApiException $e) {
            $clientService->showErrorTemplate($e);
            exit;
        }

        return $envelopeId;
    }
    # ***DS.snippet.0.end
}
