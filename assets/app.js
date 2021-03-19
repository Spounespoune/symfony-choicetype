/*$('#user_movie').select2({
    closeOnSelect: false,
    ajax: {
        url: '/movie',
        multiple: true,
        dataType: 'json',
        results: function (data) {
            return {
                results: $.map(data, function (item) {
                    return {
                        text: item,
                    }
                })
            };
        },
        placeholder : 'Select movie' ,
        minimumInputLength : 1 ,
    }

});*/

const selector = $('#user_movie');
const fisrtOption = $('#user_movie option:eq(0)');

selector.one('click', function(e) {
    // Text to let user know data is being loaded for long requests.
    fisrtOption.text('Data is being loaded...');
    $.ajax({
        type: 'POST',
        url: '/movie',
        data: {},
        dataType: 'json',
        success: function(returnedData) {
            console.log(returnedData);
            fisrtOption.text('');
            selector.select2({ data: returnedData });
            selector.select2('open');
        }
    });
    // Blur the select to register the text change of the option.
    $(this).blur();
});

