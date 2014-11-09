<?php

    class DealsTableSeeder extends DatabaseSeeder {

        public function run(){
            $deal = new Deal;
            $deal->manufacturerid = 1;
            $deal->advertiserid = 1;
            $deal->modelid = 1;
            $deal->manufacturername = 'Audi';
            $deal->modelname = 'A1';
            $deal->derivativename = '1.6TDi S Line 3dr';
            $deal->profile = '6+23';
            $deal->initialrental = 6;
            $deal->contractLength = 24;
            $deal->mileage = 10000;
            $deal->maintenance = 0;
            $deal->personal = 0;
            $deal->leadtime = 60;
            $deal->dealprice = 19900;
            $deal->dealurl = 'www.johnbroker.co.uk/Audi/A1/tdi_s_line/';
            $deal->dealDescription = "The best Audi A1 deal available. Audi's smallest car, but still quite good";
            $deal->views = 0;
            $deal->save();

            $deal = new Deal;
            $deal->manufacturerid = 1;
            $deal->advertiserid = 1;
            $deal->modelid = 2;
            $deal->manufacturername = 'Audi';
            $deal->modelname = 'A3';
            $deal->derivativename = '2.0TDi S Line Sportback 5dr';
            $deal->profile = '6+23';
            $deal->initialrental = 6;
            $deal->contractLength = 24;
            $deal->mileage = 10000;
            $deal->maintenance = 1;
            $deal->personal = 0;
            $deal->leadtime = 40;
            $deal->dealprice = 26900;
            $deal->dealurl = 'www.johnbroker.co.uk/Audi/A3/tdi_s_line/';
            $deal->dealDescription = "The best Audi A3 deal available. Audi's best small car, like a Golf but better";
            $deal->views = 0;
            $deal->save();

            $deal = new Deal;
            $deal->manufacturerid = 2;
            $deal->advertiserid = 1;
            $deal->modelid = 3;
            $deal->manufacturername = 'BMW';
            $deal->modelname = '1 Series';
            $deal->derivativename = '123d M Sport Coupe 2dr';
            $deal->profile = '6+35';
            $deal->initialrental = 6;
            $deal->contractLength = 36;
            $deal->mileage = 10000;
            $deal->maintenance = 1;
            $deal->personal = 0;
            $deal->leadtime = 45;
            $deal->dealprice = 34900;
            $deal->dealurl = 'www.johnbroker.co.uk/BMW/1_Series/123d/';
            $deal->dealDescription = "The best BMW 123d deal available. In M Sport guise they are really cool";
            $deal->views = 0;
            $deal->save();

            $deal = new Deal;
            $deal->manufacturerid = 1;
            $deal->advertiserid = 2;
            $deal->modelid = 1;
            $deal->manufacturername = 'Audi';
            $deal->modelname = 'A1';
            $deal->derivativename = '1.6TDi SE 3dr';
            $deal->profile = '3+23';
            $deal->initialrental = 3;
            $deal->contractLength = 24;
            $deal->mileage = 10000;
            $deal->maintenance = 1;
            $deal->personal = 0;
            $deal->leadtime = 60;
            $deal->dealprice = 21500;
            $deal->dealurl = 'www.leaseprofiles.co.uk/Audi/A1/tdi_se/';
            $deal->dealDescription = "The best Audi A1 deal available. Audi's smallest car, but still quite good";
            $deal->views = 0;
            $deal->save();

            $deal = new Deal;
            $deal->manufacturerid = 3;
            $deal->advertiserid = 2;
            $deal->modelid = 5;
            $deal->manufacturername = 'Mercedes';
            $deal->modelname = 'E Class';
            $deal->derivativename = 'E250CDi Sport Auto Cabriolet 2dr';
            $deal->profile = '6+23';
            $deal->initialrental = 6;
            $deal->contractLength = 24;
            $deal->mileage = 10000;
            $deal->maintenance = 0;
            $deal->personal = 0;
            $deal->leadtime = 60;
            $deal->dealprice = 34900;
            $deal->dealurl = 'www.leaseprofiles.co.uk/Mercedes/E_Class/E250/sport/';
            $deal->dealDescription = "A Mercedes convertible for £349! How cheap is that?";
            $deal->views = 0;
            $deal->save();

            $deal = new Deal;
            $deal->manufacturerid = 3;
            $deal->advertiserid = 2;
            $deal->modelid = 4;
            $deal->manufacturername = 'Mercedes';
            $deal->modelname = 'C Class';
            $deal->derivativename = 'C250CDi Sport Auto Saloon 4dr';
            $deal->profile = '6+23';
            $deal->initialrental = 6;
            $deal->contractLength = 24;
            $deal->mileage = 10000;
            $deal->maintenance = 0;
            $deal->personal = 0;
            $deal->leadtime = 60;
            $deal->dealprice = 26900;
            $deal->dealurl = 'www.leaseprofiles.co.uk/Mercedes/C_Class/C250/sport/';
            $deal->dealDescription = "The best C class. Sport model comes with AMG styling and nicer alloy wheels";
            $deal->views = 0;
            $deal->save();


        }
    }

?>