<?php
require_once dirname(__FILE__) . "/../config.php";
require_once __DIR__ . '/BaseDao.class.php';

class ProfileDao extends BaseDao
{
    public function __construct()
    {
        parent::__construct("profile");
    }

    public function createProfile($profile)
    {
        return $this->add($profile);
    }

    public function updateProfile($id, $profile)
    {
        $this->update($id, $profile);
    }

    public function deleteProfile($id)
    {
        // Assuming id is the primary key of the reservation table
        $this->execute("DELETE FROM reservation WHERE id = :id", ["id" => $id]);
    }

    public function getProfileById($id)
    {
        return $this->get_by_id($id);
    }

    public function getAllProfiles()
    {
        return $this->get_all();
    }
}
?>
