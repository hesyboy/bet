<?php

namespace App\Http\Livewire\Games;

use Livewire\Component;
// use Illuminate\Support\Arr;
// namespace App\Http\Livewire\Chart;
use Asantibanez\LivewireCharts\Models\LineChartModel;
use Carbon\Carbon;

class CrashGame extends Component
{

    public $range1,$range2;

    public $gameNumber;

    public $gameArray=[0,5];

    public $gameRate;

    public $gameTime;



    public function mount(){
        $this->gameNumber=0;
        $this->gameArray = "123";

    }


    public $gameCount=1;
    public $gameZarib=1.0;

public $data=[[0,0,0]];


    public function startGame(){

        $this->gameCount;
        $gameTime=3;
        $x=$this->updateZarib();
        $this->updateCount($x);




        // $this->gameNumber=$this->gameNumber+1;

        // $gameTime=2;
        // $startTime = 0;

        // for($i=0;$i<$gameTime;$i++){
        //     sleep(0.1);
        //     $startTime=$startTime+0.5;
        //     array_push($this->data,[$gameZarib,$startTime,'#fc8181']);

        // }

    }

    public function updateZarib(){
        $this->gameZarib=rand(1,9);
        return $this->gameZarib;
    }

    public function updateCount($item){
        $this->gameCount=$this->gameCount*$item;
        return $this->gameCount;
    }


    public $labels = [];

    public $colors = [];

    public function render()
    {
        $start_day = Carbon::now()->subDays(11);
        $starttime = Carbon::now();

        $random=rand(1,100);

        $LineChartModel =(new LineChartModel())->setTitle('Expenses by Type');

        foreach($this->data as $key=>$item){
                $LineChartModel->addPoint($item[0], $item[1], '#fc8181');

        }

        // foreach($this->data as $key=>$item){
        //     foreach($item as $key2=>$item2){
        //         $LineChartModel->addPoint($key, $item2, '#fc8181');
        //     }

        // }




        return view('livewire.games.crash-game', compact('LineChartModel'));

    }
}
