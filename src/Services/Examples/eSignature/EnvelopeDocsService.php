<?php

namespace Example\Services\Examples\eSignature;

use DocuSign\eSign\Client\ApiException;
use DocuSign\eSign\Model\EnvelopeDocumentsResult;

class EnvelopeDocsService
{
    /**
     * Do the work of the example
     * 1. Call the envelope documents list method
     *
     * @param  $args array
     * @param $clientService
     * @return EnvelopeDocumentsResult
     */
    # ***DS.snippet.0.start
    public static function envelopeDocs(array $args, $clientService): EnvelopeDocumentsResult
    {
        # 1. call API method
        # Exceptions will be caught by the calling function
        $envelope_api = $clientService->getEnvelopeApi();
        try {
            $listDocuments = $envelope_api->listDocuments($args['account_id'], $args['envelope_id']);
        } catch (ApiException $e) {
            $clientService->showErrorTemplate($e);
            exit;
        }

        return $listDocuments;
    }
    # ***DS.snippet.0.end
}
