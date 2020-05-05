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

    $('.file-upload').file_upload();



/*    $(document).ready(function(){
        $('#file-input').on('change', function(){ //on file input change
            if (window.File &amp;&amp; window.FileReader &amp;&amp; window.FileList &amp;&amp; window.Blob) //check File API supported browser
            {

                var data = $(this)[0].files; //this file data

                $.each(data, function(index, file){ //loop though each file
                    if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                        var fRead = new FileReader(); //new filereader
                        fRead.onload = (function(file){ //trigger function on successful read
                            return function(e) {
                                var img = $('<img/>').addClass('thumb').attr('src', e.target.result); //create image element
                                $('#thumb-output').append(img); //append image to output element
                            };
                        })(file);
                        fRead.readAsDataURL(file); //URL representing the file's data.
                    }
                });

            }else{
                alert("Your browser doesn't support File API!"); //if File API is absent
            }
        });
    });*/

    $(function(){
        $("button[type='submit']").click(function(){
            var $fileUpload = $("input[type='file']");
            if (parseInt($fileUpload.get(0).files.length)>5){
                alert("You can only upload a maximum of 5 files");
            }
        });
    });
</script>
