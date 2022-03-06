<?php
declare(strict_types=1);

/**
 * RoomTemplatesApi.
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\Rooms
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign Rooms PHP Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocuSign Rooms API - v2
 *
 * An API for an integrator to access the features of DocuSign Rooms
 *
 * OpenAPI spec version: v2
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.21-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\Rooms\Api\RoomTemplatesApi;


/**
 * GetRoomTemplatesOptions Class Doc Comment
 *
 * @category Class
 * @package  DocuSign\Rooms
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign Rooms PHP Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetRoomTemplatesOptions
{
    /**
      * $office_id Get all room templates you have access to for this office. Response includes Company and Region level templates. If onlyAssignable is true, and no officeId is provided, user's default office is assumed.
      * @var ?int
      */
    protected ?int $office_id = null;

    /**
     * Gets office_id
     *
     * @return ?int
     */
    public function getOfficeId(): ?int
    {
        return $this->office_id;
    }

    /**
     * Sets office_id
     * @param ?int $office_id Get all room templates you have access to for this office. Response includes Company and Region level templates. If onlyAssignable is true, and no officeId is provided, user's default office is assumed.
     *
     * @return self
     */
    public function setOfficeId(?int $office_id): self
    {
        $this->office_id = $office_id;
        return $this;
    }
    /**
      * $only_assignable Get list of templates you have access to. Default value false.
      * @var ?bool
      */
    protected ?bool $only_assignable = null;

    /**
     * Gets only_assignable
     *
     * @return ?bool
     */
    public function getOnlyAssignable(): ?bool
    {
        return $this->only_assignable;
    }

    /**
     * Sets only_assignable
     * @param ?bool $only_assignable Get list of templates you have access to. Default value false.
     *
     * @return self
     */
    public function setOnlyAssignable(?bool $only_assignable): self
    {
        $this->only_assignable = $only_assignable;
        return $this;
    }
    /**
      * $only_enabled When set to true, only returns room templates that are not disabled.
      * @var ?bool
      */
    protected ?bool $only_enabled = null;

    /**
     * Gets only_enabled
     *
     * @return ?bool
     */
    public function getOnlyEnabled(): ?bool
    {
        return $this->only_enabled;
    }

    /**
     * Sets only_enabled
     * @param ?bool $only_enabled When set to true, only returns room templates that are not disabled.
     *
     * @return self
     */
    public function setOnlyEnabled(?bool $only_enabled): self
    {
        $this->only_enabled = $only_enabled;
        return $this;
    }
    /**
      * $count Number of room templates to return. Defaults to the maximum which is 100.
      * @var ?int
      */
    protected ?int $count = null;

    /**
     * Gets count
     *
     * @return ?int
     */
    public function getCount(): ?int
    {
        return $this->count;
    }

    /**
     * Sets count
     * @param ?int $count Number of room templates to return. Defaults to the maximum which is 100.
     *
     * @return self
     */
    public function setCount(?int $count): self
    {
        $this->count = $count;
        return $this;
    }
    /**
      * $start_position Position of the first item in the total results. Defaults to 0.
      * @var ?int
      */
    protected ?int $start_position = null;

    /**
     * Gets start_position
     *
     * @return ?int
     */
    public function getStartPosition(): ?int
    {
        return $this->start_position;
    }

    /**
     * Sets start_position
     * @param ?int $start_position Position of the first item in the total results. Defaults to 0.
     *
     * @return self
     */
    public function setStartPosition(?int $start_position): self
    {
        $this->start_position = $start_position;
        return $this;
    }
}



namespace DocuSign\Rooms\Api;

use DocuSign\Rooms\Client\ApiClient;
use DocuSign\Rooms\Client\ApiException;
use DocuSign\Rooms\Configuration;
use DocuSign\Rooms\ObjectSerializer;

/**
 * RoomTemplatesApi Class Doc Comment
 *
 * @category Class
 * @package  DocuSign\Rooms
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign Rooms PHP Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RoomTemplatesApi
{
    /**
     * API Client
     *
     * @var ApiClient instance of the ApiClient
     */
    protected ApiClient $apiClient;

    /**
     * Constructor
     *
     * @param ApiClient|null $apiClient The api client to use
     *
     * @return void
     */
    public function __construct(ApiClient $apiClient = null)
    {
        $this->apiClient = $apiClient ?? new ApiClient();
    }

    /**
     * Get API client
     *
     * @return ApiClient get the API client
     */
    public function getApiClient(): ApiClient
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param ApiClient $apiClient set the API client
     *
     * @return self
     */
    public function setApiClient(ApiClient $apiClient): self
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
    * Update $resourcePath with $
    *
    * @param string $resourcePath the resource path to use
    * @param string $baseName the base name param
    * @param string $paramName the parameter name
    *
    * @return string
    */
    public function updateResourcePath(string $resourcePath, string $baseName, string $paramName): string
    {
        return str_replace(
            "{" . $baseName . "}",
            $this->apiClient->getSerializer()->toPathValue($paramName),
            $resourcePath
        );
    }


    /**
     * Operation getRoomTemplates
     *
     * Returns all room templates that the active user has access to
     *
     * @param ?string $account_id (Required) The globally unique identifier (GUID) for the account.
     * @param  \DocuSign\Rooms\Api\RoomTemplatesApi\GetRoomTemplatesOptions  $options for modifying the behavior of the function. (optional)
     *
     * @throws ApiException on non-2xx response
     * @return \DocuSign\Rooms\Model\RoomTemplatesSummaryList
     */
    public function getRoomTemplates($account_id, \DocuSign\Rooms\Api\RoomTemplatesApi\GetRoomTemplatesOptions $options = null)
    {
        list($response) = $this->getRoomTemplatesWithHttpInfo($account_id, $options);
        return $response;
    }

    /**
     * Operation getRoomTemplatesWithHttpInfo
     *
     * Returns all room templates that the active user has access to
     *
     * @param ?string $account_id (Required) The globally unique identifier (GUID) for the account.
     * @param  \DocuSign\Rooms\Api\RoomTemplatesApi\GetRoomTemplatesOptions  $options for modifying the behavior of the function. (optional)
     *
     * @throws ApiException on non-2xx response
     * @return array of \DocuSign\Rooms\Model\RoomTemplatesSummaryList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getRoomTemplatesWithHttpInfo($account_id, \DocuSign\Rooms\Api\RoomTemplatesApi\GetRoomTemplatesOptions $options = null): array
    {
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling getRoomTemplates');
        }
        // parse inputs
        $resourcePath = "/v2/accounts/{accountId}/room_templates";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['text/plain', 'application/json', 'text/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json-patch+json', 'application/json', 'text/json', 'application/_*+json']);

        if ($options != null)
        {
            // query params
            if ($options->getOfficeId() != 'null') {
                $queryParams['officeId'] = $this->apiClient->getSerializer()->toQueryValue($options->getOfficeId());
            }
            if ($options->getOnlyAssignable() != 'null') {
                $queryParams['onlyAssignable'] = $this->apiClient->getSerializer()->toQueryValue($options->getOnlyAssignable());
            }
            if ($options->getOnlyEnabled() != 'null') {
                $queryParams['onlyEnabled'] = $this->apiClient->getSerializer()->toQueryValue($options->getOnlyEnabled());
            }
            if ($options->getCount() != 'null') {
                $queryParams['count'] = $this->apiClient->getSerializer()->toQueryValue($options->getCount());
            }
            if ($options->getStartPosition() != 'null') {
                $queryParams['startPosition'] = $this->apiClient->getSerializer()->toQueryValue($options->getStartPosition());
            }
        }

        // path params
        if ($account_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "accountId", $account_id);
        }

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\DocuSign\Rooms\Model\RoomTemplatesSummaryList',
                '/v2/accounts/{accountId}/room_templates'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\Rooms\Model\RoomTemplatesSummaryList', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\Rooms\Model\RoomTemplatesSummaryList', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\Rooms\Model\ApiError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\Rooms\Model\ApiError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}