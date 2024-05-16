<?php

require_once __DIR__ . '/../dao/ReservationDao.class.php';

class ReservationService {
    private $reservation_dao;
    public function __construct() {
        $this->reservation_dao = new ReservationDao();
    }
    public function add_reservation($payload) {
        return $this->reservation_dao->createReservation($payload);
    }

   
}
