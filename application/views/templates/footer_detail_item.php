<!-- Scripts -->
<script src="scripts/jquery-3.4.1.min.js"></script>
<script src="scripts/chosen.min.js"></script>
<script src="scripts/slick.min.js"></script>
<script src="scripts/rangeslider.min.js"></script>
<script src="scripts/magnific-popup.min.js"></script>
<script src="scripts/jquery-ui.min.js"></script>
<script src="scripts/mmenu.js"></script>
<script src="scripts/tooltips.min.js"></script>
<script src="scripts/color_switcher.js"></script>
<script src="scripts/jquery_custom.js"></script>

<!-- Date Range Picker - docs: http://www.daterangepicker.com/ -->
<script src="scripts/moment.min.js"></script>
<script src="scripts/daterangepicker.js"></script>

<script>
  $(function() {

    var start = moment().subtract(0, 'days');
    var end = moment().add(3, 'days');

    function cb(start, end) {
      $('#booking-date-search').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }
    cb(start, end);
    $('#booking-date-search').daterangepicker({
      "opens": "right",
      "autoUpdateInput": true,
      "alwaysShowCalendars": true,
      startDate: start,
      endDate: end
    }, cb);

    cb(start, end);

  });

  // Calendar animation and visual settings
  $('#booking-date-search').on('show.daterangepicker', function(ev, picker) {
    $('.daterangepicker').addClass('calendar-visible calendar-animated bordered-style');
    $('.daterangepicker').removeClass('calendar-hidden');
  });
  $('#booking-date-search').on('hide.daterangepicker', function(ev, picker) {
    $('.daterangepicker').removeClass('calendar-visible');
    $('.daterangepicker').addClass('calendar-hidden');
  });

  $(window).on('load', function() {
    $('#booking-date-search').val('');
  });
</script>
<script>
  $(".utf_opening_day.utf_js_demo_hours .utf_chosen_select").each(function() {
    $(this).append('' +
      '<option></option>' +
      '<option>08:00 WIB</option>' +
      '<option>09:00 WIB</option>' +
      '<option>10:00 WIB</option>' +
      '<option>11:00 WIB</option>' +
      '<option>12:00 WIB</option>' +
      '<option>13:00 WIB</option>' +
      '<option>14:00 WIB</option>' +
      '<option>15:00 WIB</option>' +
      '<option>16:00 WIB</option>');
  });
</script>

</body>

</html>