<?php

require_once __DIR__ . '/rest/services/ReservationService.class.php';

$payload = $_REQUEST;



$reservation_service = new ReservationService();
$reservation = $reservation_service->add_reservation($payload);
echo json_encode($reservation);