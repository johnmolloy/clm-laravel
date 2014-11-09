<?php

    class DerivativesTableSeeder extends DatabaseSeeder {

        public function run(){
            $derivative = new Derivative;
            $manufacturer->manufacturername = 'Audi';
            $manufacturer->description = 'Audi Description - Vorsprung Durch Tecnik';
            $manufacturer->website = 'www.audi.co.uk';
            $manufacturer->contactno = '0800699888';
            $manufacturer->recoveryno = '0800699999';
            $manufacturer->logopath = 'audi.jpg';
            $manufacturer->mainMenuInclude = 1;
            $manufacturer->save();

            $manufacturer = new Manufacturer;
            $manufacturer->manufacturername = 'BMW';
            $manufacturer->description = 'BMW Description';
            $manufacturer->website = 'www.bmw.co.uk';
            $manufacturer->contactno = '03705050160';
            $manufacturer->recoveryno = '0800777111';
            $manufacturer->logopath = 'bmw.jpg';
            $manufacturer->mainMenuInclude = 1;
            $manufacturer->save();

            $manufacturer = new Manufacturer;
            $manufacturer->manufacturername = 'Mercedes';
            $manufacturer->description = 'Mercedes Description';
            $manufacturer->website = 'www.mercedes-benz.co.uk';
            $manufacturer->contactno = '080097777777';
            $manufacturer->recoveryno = '080017777777';
            $manufacturer->logopath = 'mercedes.jpg';
            $manufacturer->mainMenuInclude = 1;
            $manufacturer->save();

        }
    }

?>