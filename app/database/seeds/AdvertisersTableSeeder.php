<?php

    class AdvertisersTableSeeder extends DatabaseSeeder {

        public function run(){
            $advertiser = new Advertiser;
            $advertiser->advertisername = 'JohnBroker';
            $advertiser->secret = Hash::make('password');
            $advertiser->description = 'John broker, a new broker by John Molloy';
            $advertiser->website = 'www.johnbroker.co.uk';
            $advertiser->contactno = '07739337621';
            $advertiser->advertisertype = 'broker';
            $advertiser->accounttype = 'free';
            $advertiser->save();

            $advertiser = new Advertiser;
            $advertiser->advertisername = 'leaseprofiles';
            $advertiser->secret = Hash::make('password');
            $advertiser->description = 'Vehicle Leasing and Contract Hire Specialists Based in Maidstone Kent';
            $advertiser->website = 'www.leaseprofiles.co.uk';
            $advertiser->contactno = '01622725140';
            $advertiser->advertisertype = 'broker';
            $advertiser->accounttype = 'free';
            $advertiser->save();

        }
    }

?>