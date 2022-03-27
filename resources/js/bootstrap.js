window._ = require('lodash');
import $ from 'jquery';
import './lap';
const Slideout = require('./lib/slideout-min');

window.$ = $;
window.jQuery = $;
window.Slideout = Slideout;

try {
    require('./lib/fakeLoader.min');
    require('bootstrap');
    require('./lib/owl.carousel.min')

    require('./lib/greensock')
    require('./lib/layerslider.transitions')
    require('./lib/layerslider.kreaturamedia.jquery')
    require('./lib/paraxify')
    require('./lib/jquery.infinitescroll.min')
    require('./lib/jquery.filterizr-min')
    require('./lib/swiper.min')
    require('./lib/TimeCircles-min')
    require('./lib/jquery-ui-min')
} catch (e) {}
window.axios = require('axios');

window.axios.defaults.headers.common = {
    'X-Requested-With': 'XMLHttpRequest',
    'X-CSRF-TOKEN' : document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
};


