<?php

namespace Example\Services\Examples\Rooms;

use DocuSign\Rooms\Client\ApiException;
use DocuSign\Rooms\Model\FieldData;

class ExportDataFromRoomService
{
    /**
     * 1. Get RoomFieldData for selected room
     *
     * @param  $args array
     * @param $clientService
     * @return FieldData
     */
    public static function exportDataFromRoom(array $args, $clientService): FieldData
    {
        $rooms_api = $clientService->getRoomsApi();
        try {
            $room_details = $rooms_api->getRoomFieldData($args['room_id'], $args["account_id"]);
        } catch (ApiException $e) {
            error_log($e);
            $clientService->showErrorTemplate($e);
            exit;
        }
        return $room_details;
    }

    /**
     * Get available Rooms
     *
     * @param $routerService
     * @param $clientService
     * @param $args
     * @param $eg
     * @return array
     */
    public static function getRooms($routerService, $clientService, $args, $eg): array
    {
        $minimum_buffer_min = 3;
        if ($routerService->ds_token_ok($minimum_buffer_min)) {
            return $clientService->getRooms($args);
        } else {
            $clientService->needToReAuth($eg);
        }
    }
}
