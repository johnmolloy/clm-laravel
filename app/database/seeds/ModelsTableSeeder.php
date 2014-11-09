<?php

    class ModelsTableSeeder extends DatabaseSeeder {

        public function run(){
            $model = new Model;
            $model->modelname = 'A1';
            $model->manufacturerid = '1';
            $model->description = 'Audi A1 Description - Little polo';
            $model->website = 'www.audi.co.uk/A1';
            $model->picturepath = 'audi_a1.jpg';
            $model->save();

            $model = new Model;
            $model->modelname = 'A3';
            $model->manufacturerid = '1';
            $model->description = 'Audi A3 Description - nicer Golf';
            $model->website = 'www.audi.co.uk/A3';
            $model->picturepath = 'audi_a3.jpg';
            $model->save();

            $model = new Model;
            $model->modelname = '1 Series';
            $model->manufacturerid = '2';
            $model->description = 'BMW 1 Series Description - nice car. Drivers car';
            $model->website = 'www.bmw.co.uk/1_series';
            $model->picturepath = 'bmw_123d.jpg';
            $model->save();

            $model = new Model;
            $model->modelname = 'C Class';
            $model->manufacturerid = '3';
            $model->description = 'Mercedes C Class Description - nice in Sport trim. Not as an SE';
            $model->website = 'www.mercedes.co.uk/c_class';
            $model->picturepath = 'mercedes_c_class.jpg';
            $model->save();

            $model = new Model;
            $model->modelname = 'E Class';
            $model->manufacturerid = '3';
            $model->description = 'Mercedes E Class Description - nice in Sport trim. Not as an SE';
            $model->website = 'www.mercedes.co.uk/e_class';
            $model->picturepath = 'mercedes_e_class_cab.jpg';
            $model->save();
        }
    }

?>