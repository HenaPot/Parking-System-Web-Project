<?php

require_once __DIR__ . '/../services/ProfileService.class.php';

Flight::group('/profiles', function(){

    Flight::route('GET /profile', function () {
        $body = Flight::request()->query;

        if($body['name'] == NULL) {
            Flight::halt(500, "Required parameters are missing!");
        }

        $profile_service = new ProfileService();
        $profile = $profile_service->get_profile_by_id($body['name']);
        Flight::json($profile, 200);
    });

    Flight::route('POST /add', function() {
        $payload = Flight::request()->data->getData();
        //$payload['timestamp'] = date('Y-m-d H:i:s');

        if($payload['name'] == NULL || $payload['email'] == NULL || $payload['mobile'] == NULL || $payload['password'] == NULL) {
            Flight::halt(500, "Required parameters are missing!");
        }

        $profile_service = new ProfileService();
        $profile = $profile_service->add_profile($payload);

        Flight::json(['data' => $profile, 'message' => "You have successfully added the profile"]);
        
    });

});