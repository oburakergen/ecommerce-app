<?php

namespace App\Console\Commands;

use App\Models\Setting\Currency;
use App\Models\Setting\Language;
use App\Models\Site\Navbar;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class SetupSite extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'setup:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Setup site settings by Laraplay';

    private $navbar =array (
        array(
        "name" => "home",
        "slug" => "/",
        "lang" => "navbar.home",
        "queue" => 1,
        "isMobile" => "1",
        "active" => "1"
        ),array(
        "name" => "about",
        "slug" => "about",
        "lang" => "navbar.about",
        "queue" => 2,
        "isMobile" => "1",
        "active" => "1"
    ), array(
        "name" => "service",
        "slug" => "service",
        "lang" => "navbar.service",
        "queue" => 3,
        "isMobile" => "1",
        "active" => "1"
        ), array(
        "name" => "product",
        "slug" => "product",
        "lang" => "navbar.product",
        "queue" => 4,
        "isMobile" => "1",
        "active" => "1"
        ), array(
        "name" => "blog",
        "slug" => "blog",
        "lang" => "navbar.blog",
        "queue" => 4,
        "isMobile" => "1",
        "active" => "1"
        ), array(
        "name" => "contact",
        "slug" => "contact",
        "lang" => "navbar.contact",
        "queue" => 5,
        "isMobile" => "1",
        "active" => "1"
        ));

    private $lang =array (
        array(
            "name" => "Türkçe",
            "icon" => "tr-TR",
            "iso" => "tr_TR",
            "code" => "tr",
            "active" => "1"
        ),
        array(
            "name" => "English",
            "icon" => "en-US",
            "iso" => "en_US",
            "code" => "en",
            "active" => "1"
        )
    );

    private $currency =array (
        array(
            "name" => "Türk Lirası",
            "icon" => "₺",
            "iso" => "TRY",
            "active" => "1"
        ),
        array(
            "name" => "Dollar",
            "icon" => "$",
            "iso" => "USD",
            "active" => "1"
        ),
        array(
            "name" => "Euro",
            "icon" => "€",
            "iso" => "EUR",
            "active" => "0"
        ),
        array(
            "name" => "Pound",
            "icon" => "£",
            "iso" => "GBP",
            "active" => "0"
        )
    );
    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        echo "Site Yüklemesi Başlıyor\n";

        try {
            DB::connection()->getPdo();
            echo "Veritabanı başarı ile bağlandı " . DB::connection()->getDatabaseName();

            Artisan::call('migrate:refresh');

            foreach ($this->navbar as $navbars) {
                Navbar::firstOrCreate($navbars);
            }

            foreach ($this->lang as $lang) {
                Language::firstOrCreate($lang);
            }

            foreach ($this->currency as $currency) {
                Currency::firstOrCreate($currency);
            }

            Artisan::call('get:currency');
        } catch (\Exception $e) {
            die("Veritabanı bağlantısı hatalı lütfen laraplay ekibi ile iletişime geçiniz." );
        }

        return 0;
    }
}
