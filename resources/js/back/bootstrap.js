// window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');
    window.moment = require('moment');
    //require('bootstrap');
} catch (e) {}

$.ajaxSetup({ headers: { 'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content') }});

window.dti18nJson = {
    "sEmptyTable":     "데이터가 없습니다.",
    "sInfo":           "_START_ - _END_ / _TOTAL_",
    "sInfoEmpty":      "0 - 0 / 0",
    "sInfoFiltered":   "(총 _MAX_ 개)",
    "sInfoPostFix":    "",
    "sInfoThousands":  ",",
    "sLengthMenu":     "페이지당 줄수 _MENU_",
    "sLoadingRecords": "읽는중...",
    "sProcessing":     "처리중...",
    "sSearch":         "검색:",
    "sZeroRecords":    "검색 결과가 없습니다",
    "oPaginate": {
        "sFirst":    "처음",
        "sLast":     "마지막",
        "sNext":     "다음",
        "sPrevious": "이전"
    },
    "oAria": {
        "sSortAscending":  ": 오름차순 정렬",
        "sSortDescending": ": 내림차순 정렬"
    }
};

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

// window.axios = require('axios');

// window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });
