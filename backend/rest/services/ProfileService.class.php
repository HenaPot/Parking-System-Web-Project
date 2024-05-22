<?php

require_once __DIR__ . '/../dao/ProfileDao.class.php';

class ProfileService {
    private $profile_dao;
    public function __construct() {
        $this->profile_dao = new ProfileDao();
    }
    public function add_profile($payload) {
        return $this->profile_dao->createProfile($payload);
    }

    public function get_profile_by_id($id){
        $this->profile_dao->getProfileById($id);
    }

    public function delete_profile($id) {
        $this->profile_dao->deleteProfile($id);
    }

    public function edit_profile($id, $profile) {
        $this->profile_dao-> updateProfile($id, $profile);
    }

}