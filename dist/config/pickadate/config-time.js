$(document).ready(function() {
    $('.time').pickatime({
       format: 'H:i',
       interval: 15,
       min: '07:00',
       max: '22:00',
       clear: 'Сброс'
    })
});