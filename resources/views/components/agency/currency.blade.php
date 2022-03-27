<div class="currencies">
    <span>    @php
            $lang = json_decode(Cookie::get('currency'));

            if(gettype($lang) == 'object') {
                echo $lang->iso.'/'.$lang->icon;
            }
        @endphp</span>
    <ul>
        @foreach($currency as $key=> $currencies)
            <li>{{ $currencies->iso. ' / '. $currencies->icon }}</li>
        @endforeach
    </ul>
</div><!--currencies-->
