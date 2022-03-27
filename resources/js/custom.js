// $(".fakeLoader").fakeLoader({
//     timeToHide: 3000,
//     zIndex: "9999999",
//     spinner: "spinner7",
//     bgColor: "#f5f5f5",
// });
const config = {
    SETTING_URL: '/setting',
};

$(document).ready(function() {
    $('.currencies ul  > li').on('click', (e)=> {
        e.preventDefault();

        const text = ((e.target || {}).textContent || '').split('/').filter(Boolean).shift().trim();

        axios.post((config.SETTING_URL + '/currency'), {
            currency: text
        }).then((response) => {
            console.log(response);
        });
    });



    $('.languages ul > li').on('click', (e)=> {
        e.preventDefault();

        const text = ($((e.target || '')).attr('data-code') || '').trim();

        axios.post((config.SETTING_URL + '/language'), {
            language: text
        }).then(() => {
            window.location.reload();
        });
    });
});


$(window).load(function() {
    axios.get((config.SETTING_URL + '/list')).then((response) => {
        const $data = (response || {}).data || {};

        $('.languages span:first').text(($data.language || {}).name || 'Türkçe');
        $('.currencies span:first').text((($data.currency || {}).iso || 'TRY') + '/' + ($data.currency || {}).icon || '₺');
    });
});
