<?php

require_once __DIR__ . '/../services/ReservationService.class.php';

Flight::group('/reservations', function(){

    Flight::route('POST /add', function() {
        $payload = Flight::request()->data->getData();
        $payload['timestamp'] = date('Y-m-d H:i:s');

        if($payload['select_parking'] == NULL || $payload['name'] == NULL || $payload['phone_number'] == NULL || $payload['select_pricing'] == NULL || $payload['timestamp'] == NULL) {
            Flight::halt(500, "Required parameters are missing!");
        }

        $reservation_service = new ReservationService();
        $reservation = $reservation_service->add_reservation($payload);

        Flight::json(['data' => $reservation, 'message' => "You have successfully added the reservation"]);
        
    });

});