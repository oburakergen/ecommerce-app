<?php

namespace App\Http\Controllers\Agency;

use App\Http\Controllers\Controller;
use App\Http\Resources\CurrencyResource;
use App\Http\Resources\LanguageResource;
use App\Models\Setting\Currency;
use App\Models\Setting\Language;
use App\Models\Setting\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class SiteSettingController extends Controller
{
    private function setLanguage(string $language): LanguageResource
    {
        $data = new LanguageResource(Language::where([
            'code' => $language,
            'active' => '1'
        ])->firstOr(function () {
            return Language::where('active','1')->first();
        }));

        Cookie::queue('language', json_encode($data), 3600);

        return $data;
    }

   public function language(Request $request): LanguageResource
   {
       $value = json_decode(Cookie::get('language'));

       if($request->has('language')) {
           $data= $this->setLanguage($request->input('language'));
       } else if($value != null) {
           $data = $this->setLanguage($value->code);
       } else {
           $data= $this->setLanguage(app()->getLocale());
       }

       return $data;
   }

   private function setCurrency(string $currency): CurrencyResource
   {
       $data = new CurrencyResource(Currency::where([
           'iso' => $currency,
           'active' => '1'
       ])->firstOr(function () {
           return Currency::where('active','1')->first();
       }));

       Cookie::queue('currency', json_encode($data), 3600);

       return $data;
   }

   public function currency(Request $request): CurrencyResource
   {
       $value = json_decode(Cookie::get('currency'));

       if($request->has('currency')) {
           $data= $this->setCurrency($request->input('currency'));
       } else if($value != null) {
           $data = $this->setCurrency($value->iso);
       } else {
           $data = $this->setCurrency('TRY');
       }

       return $data;
   }

   public function getSettings(Request $request)
   {
       $contactSetting = Site::where('name','contact.information')->first();
       return array(
           'language' => $this->language($request),
           'currency'=> $this->currency($request),
           'contactSetting' => $contactSetting
       );
   }
}
