<!-- Js Files -->
<script src="{{ asset('assets/frontend/js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/vendor/jquery.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/plugins.js') }}"></script>
<script src="{{ asset('assets/frontend/js/main.js') }}"></script>
<script src="{{ asset('sweetalert/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script>
    // (function () {
    //     const deadline = '2025 `-12-12 16:10';
    //
    //     function pad(num, size) {
    //         const s = "0" + num;
    //         return s.substr(s.length - size);
    //     }
    //
    //     function getTimeRemaining(endtime) {
    //         const t = Date.parse(endtime) - Date.parse(new Date()),
    //             seconds = Math.floor((t / 1000) % 60),
    //             minutes = Math.floor((t / 1000 / 60) % 60),
    //             hours = Math.floor((t / (1000 * 60 * 60)) % 24),
    //             days = Math.floor(t / (1000 * 60 * 60 * 24));
    //
    //         return {
    //             'total': t,
    //             'days': days,
    //             'hours': hours,
    //             'minutes': minutes,
    //             'seconds': seconds
    //         };
    //     }
    //
    //     function clock(id, endtime) {
    //         const days = document.getElementById(id + '-days'),
    //             hours = document.getElementById(id + '-hours'),
    //             minutes = document.getElementById(id + '-minutes'),
    //             seconds = document.getElementById(id + '-seconds');
    //
    //         const timeinterval = setInterval(function () {
    //             const t = getTimeRemaining(endtime);
    //
    //             if (t.total <= 0) {
    //                 clearInterval(timeinterval);
    //             } else {
    //                 days.innerHTML = pad(t.days, 2);
    //                 hours.innerHTML = pad(t.hours, 2);
    //                 minutes.innerHTML = pad(t.minutes, 2);
    //                 seconds.innerHTML = pad(t.seconds, 2);
    //             }
    //         }, 1000);
    //     }
    //     clock('js-clock', deadline);
    // })();
</script>
