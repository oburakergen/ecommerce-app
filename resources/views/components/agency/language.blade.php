<div class="languages">
    <span>
        @php
            $lang = json_decode(Cookie::get('language'));

            if(gettype($lang) == 'object') {
                echo $lang->name;
            }
        @endphp
    </span>
    <ul>
        @foreach($language as $key=>$languages)
            <li data-code="{{$languages->code}}">{{ $languages->name }}</li>
        @endforeach
    </ul>
</div>
