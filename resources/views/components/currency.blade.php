<div class="currencies">
    <span>USD/$</span>
    <ul>
        @foreach($currencies as $key=> $currency)
        <li>{{ $currency->iso. ' / '. $currency->icon }}</li>
        @endforeach
    </ul>
</div><!--currencies-->
