<?php

namespace App\Console\Commands;

use App\Models\City;
use App\Models\Provinces;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Mockery\Exception\InvalidOrderException;

class saveData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:saveData';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Save Data Provinces adn City From API';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    protected $API_KEY = '0df6d5bf733214af6c6644eb8717c92c';
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        try {
            $response=Http::withHeaders([
                'key'=>$this->API_KEY
            ])->get("https://api.rajaongkir.com/starter/province");
            $provinces = $response['rajaongkir']['results'];
            foreach($provinces as $row){
                $data[]=[
                    'id'=>$row['province_id'],
                    'name'=>$row['province']



                ];

            }
           $status= Provinces::insert($data);
           if($status){

            $responseCity=Http::withHeaders([
                'key'=>$this->API_KEY
            ])->get("https://api.rajaongkir.com/starter/city");
            $city=$responseCity['rajaongkir']['results'];
            foreach($city as $city){
                $insertCity[]=[
                    'id'=>$city['city_id'],
                    'province_id'=>$city['province_id'],
                    'name'=>$city['city_name']

                ];
            }
            City::insert($insertCity);
           }

        } catch (InvalidOrderException $e) {
            echo $e->errorInfo;


        }
    }

}
