$(function() {

    $('#multiselect4-filter').multiselect({
        enableFiltering: true,
        enableCaseInsensitiveFiltering: true,
        maxHeight: 200
    });

    // Date picker
    $('.inline-datepicker').datepicker({
        todayHighlight: true
    });

});