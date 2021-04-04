<?php

namespace App\Http\Livewire\Nicole;

use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Carbon\Carbon;

class Dashboard extends Component
{


    public $period;
    public $country='Algeria';



    public function mount(){
        $this->end_date=Carbon::now();
        $this->start_date=Carbon::now()->firstOfMonth();



    }

    public function hydrate(){

    }

    public function calculate_period($period){

        if($period=='daily'){
            return [
                'start_date'=>Carbon::today()->subDays(1)->toIso8601ZuluString(),
                'end_date'=>Carbon::today()->toIso8601ZuluString()
            ];
        }

        elseif($period=='weekly'){
            return [
                'start_date'=>Carbon::today()->subDays(7)->toIso8601ZuluString(),
                'end_date'=>Carbon::today()->toIso8601ZuluString()
            ];
        }

       elseif($period=='bi-weekly'){
            return [
                'start_date'=>Carbon::today()->subWeeks(2)->toIso8601ZuluString(),
                'end_date'=>Carbon::today()->toIso8601ZuluString()
            ];
        }

       elseif($period=='monthly'){
           return [
               'start_date'=>Carbon::today()->subMonth()->toIso8601ZuluString(),
               'end_date'=>Carbon::today()->toIso8601ZuluString()
           ];

       }

        else if($period=='yearly'){
            return [
                'start_date'=>Carbon::today()->subYear()->toIso8601ZuluString(),
                'end_date'=>Carbon::today()->toIso8601ZuluString()
            ];
        }
        else if($period=='all'){
            return [
                'start_date'=>Carbon::today()->subDays(7)->toIso8601ZuluString(),
                'end_date'=>Carbon::today()->toIso8601ZuluString()
            ];


        }

    }

    public function allCases()
    {
        $start_date = $this->calculate_period('monthly')['start_date'];
        $end_date = $this->calculate_period('monthly')['end_date'];

        $country =$this->country;
        $base = 'https://api.covid19api.com/country/'.$country.'/status/confirmed/live?from='.$start_date.'&to='.$end_date;
        $response = Http::get($base);
        $decode =  json_decode($response->getBody());
        $collect  = collect($decode);

        $dates_formatted=$collect->pluck('Date')->map(function ($date) {
        return Carbon::parse($date)->format('Y-m-d ');
         });

        $this->dispatchBrowserEvent('all_cases_updated', ['data_all'=>$collect,'dates_all' => $dates_formatted,'cases_all'=>$collect->pluck('Cases')]);
        return [
            'data_all'=>$collect,
            'dates_all'=>$dates_formatted,
            'cases_all'=>$collect->pluck('Cases')
        ];


    }

    public function dailyCases($period)
    {
        $country =$this->country;
        $base = 'https://api.covid19api.com/total/dayone/country/'.$country.'/status/confirmed';
        $response = Http::get($base);
        return $response;
        $decode =  json_decode($response->getBody());
        $collect  = collect($decode);
        return $collect->sum('Cases');
    }

    public function weeklyCases()
    {
        $today = Carbon::today()->subDays(7);

        //Date format
    }
    /*

    Returns all live cases by case type for a country.
    These records are pulled every
    10 minutes and are ungrouped.*/

    public function liveCasesDeaths()
    {
        $country =$this->country;
        //https://api.covid19api.com/live/country/south-africa/status/confirmed

        $base = 'https://api.covid19api.com/live/country/'.$country.'/status/confirmed';
        $response = Http::get($base);
        $decode =  json_decode($response->getBody());
        $collect  = collect($decode);
        $deaths = $collect->pluck('Deaths');
        return $deaths->last();
    }


    public function liveCasesConfirmed()
    {
        $country =$this->country;
        //https://api.covid19api.com/live/country/south-africa/status/confirmed

        $base = 'https://api.covid19api.com/live/country/'.$country.'/status/confirmed';
        $response = Http::get($base);
        $decode =  json_decode($response->getBody());
        $collect  = collect($decode);
        $confirmed = $collect->pluck('Confirmed');
        return $confirmed->last();
    }

    public function liveCasesRecovered()
    {
        $country =$this->country;
        //https://api.covid19api.com/live/country/south-africa/status/confirmed

        $base = 'https://api.covid19api.com/live/country/'.$country.'/status/confirmed';
        $response = Http::get($base);
        $decode =  json_decode($response->getBody());
        $collect  = collect($decode);
        $recovered = $collect->pluck('Recovered');
        return $recovered->last();
    }

    public function newCases()
    {
        $country =$this->country;
        //https://api.covid19api.com/live/country/south-africa/status/confirmed

        $base = 'https://api.covid19api.com/live/country/'.$country.'/status/confirmed';
        $response = Http::get($base);
        $decode =  json_decode($response->getBody());
        $collect  = collect($decode);
        $confirmedCur = $collect->pluck('Confirmed');
        $confirmedPre = $collect->pluck('Confirmed');
        $pop = $confirmedPre->pop();

        return $confirmedCur->last() - $confirmedPre->last();

    }

    public function render()
    {
        return view('livewire.nicole.dashboard',[
                'new_cases'=>$this->newCases(),
            'active_cases'=>$this->liveCasesConfirmed(),
             'deaths'=>$this->liveCasesDeaths(),
             'recoveries'=>$this->liveCasesRecovered(),
            'all_cases'=>$this->allCases(),


        ]);
    }
}
