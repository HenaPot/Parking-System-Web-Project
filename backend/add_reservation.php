<?php

require_once __DIR__ . '/rest/services/ReservationService.class.php';

$payload = $_REQUEST;

if ($payload['datetime'] == NULL || $payload['status'] == NULL || $payload['pricing_id'] == NULL || $payload['phone_number'] == NULL || $payload['profile_email'] == NULL || $payload['parking_lot_id'] == NULL || $payload['garage_id'] == NULL || $payload['slot_id'] == NULL) {
    header('HTTP/1.1 500 Bad Request');
    die(json_encode(['error' => 'Required fields are missing. Please check the documentation for more info.']));
}

$reservation_service = new ReservationService();
$reservation = $reservation_service->add_reservation($payload);
echo json_encode($reservation);