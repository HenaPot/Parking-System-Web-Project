<?php
require_once dirname(__FILE__) . "/../config.php";
require_once __DIR__ . '/BaseDao.class.php';

class ReservationDao extends BaseDao
{
    public function __construct()
    {
        parent::__construct("reservation");
    }

    public function createReservation($reservation)
    {
        return $this->add($reservation);
    }

    public function updateReservation($id, $reservation)
    {
        $this->update($id, $reservation);
    }

    public function deleteReservation($id)
    {
        // Assuming id is the primary key of the reservation table
        $this->execute("DELETE FROM reservation WHERE id = :id", ["id" => $id]);
    }

    public function getReservationById($id)
    {
        return $this->get_by_id($id);
    }

    public function getReservationsByUser($profile_email)
    {
        return $this->query("SELECT * FROM reservation WHERE profile_email = :profile_email", ["profile_email" => $profile_email]);
    }

    public function getReservationsByStatus($status)
    {
        return $this->query("SELECT * FROM reservation WHERE status = :status", ["status" => $status]);
    }

    public function getReservationsByDateRange($start_date, $end_date)
    {
        return $this->query("SELECT * FROM reservation WHERE datetime BETWEEN :start_date AND :end_date", ["start_date" => $start_date, "end_date" => $end_date]);
    }

    public function getAllReservations()
    {
        return $this->get_all();
    }
}
?>
