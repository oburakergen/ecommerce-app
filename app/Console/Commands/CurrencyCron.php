<?php

namespace App\Console\Commands;

use App\Models\Setting\Currency;
use Illuminate\Console\Command;

class CurrencyCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:currency';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Added all of the currency';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        if(Currency::all()->count() != 0 ) {
            $JSON = json_decode(file_get_contents('https://api.genelpara.com/embed/doviz.json'), true);

            foreach ($JSON as $key => $item) {
                Currency::where(['iso' => $key])->update(
                    ['price' =>  number_format((float) $item['alis'],4)],
                );
            }
        };

        return 0;
    }
}
