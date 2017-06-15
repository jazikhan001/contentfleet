function SearchForm() {
    $.ajax({
        type: 'POST',
        url: "ajax",
        data: {limit: 10,},
        success: function (response) {

            $('table tbody').append(response);
            $('#submit').addClass("disabled");
        }
    });
    return false;
}