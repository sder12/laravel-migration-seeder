<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeederCsv extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trainData = $this->getCsvData(__DIR__ . '/trains.csv');
        foreach ($trainData as $key => $train) {
            // nell'indice 0 trovo l'intestazione della tabella, quindi non la includo
            if ($key !== 0) {

                $newTrain = new Train();

                $newTrain->company = $train[0];
                $newTrain->departure_station = $train[1];
                $newTrain->arrival_station =  $train[2];
                $newTrain->departure_day =  $train[3];
                // $newTrain->departure_time =  '';
                $newTrain->arrival_day = $train[4];
                // $newTrain->arrival_time = '';
                $newTrain->code_train =  $train[5];
                $newTrain->wagon_number =  $train[6];
                $newTrain->is_on_time =  $train[7];
                $newTrain->got_canceled =  $train[8];

                $newTrain->save();
            }
        }
        //
    }

    public function getCsvData(string $path)
    {
        $data = [];
        $file_stream = fopen($path, 'r');
        if ($file_stream === false) {
            exit('Can not open file');
        }
        while (($row = fgetcsv($file_stream)) !== false) {
            $data[] = $row;
        }
        fclose($file_stream);
        return $data;
    }
}
