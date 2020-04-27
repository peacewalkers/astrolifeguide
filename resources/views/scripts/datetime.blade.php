<script>
    $('.datepicker').pickadate({
        formatSubmit: 'yyyy/mm/dd',
        selectMonths: 12,
        selectYears: 180
    });
    // Data Picker Initialization
    $('.datepicker').pickadate();

    $(document).ready(function() {
        $('.mdb-select').materialSelect();
    });

    $('#input_starttime').pickatime({
// 12 or 24 hour
        twelvehour: true,
    });

    $('#tobone').pickatime({
// 12 or 24 hour
        twelvehour: true,
    });

    $('#tobtwo').pickatime({
// 12 or 24 hour
        twelvehour: true,
    });

    $('#tobthree').pickatime({
// 12 or 24 hour
        twelvehour: true,
    });

    function changeFunc() {
        var selectBox = document.getElementById("reftype");
        var selectedValue = selectBox.options[selectBox.selectedIndex].value;
        if (selectedValue=="WOM"){
            $('#refdetails').show();
        }
        else {
            $('#refdetails').hide();
        }
    }
</script>