$("input_year_of_birth").change(function () {
    if($(this).val() == "0") $(this).addClass("empty");
    else $(this).removeClass("empty")
});
$("#choice").change();