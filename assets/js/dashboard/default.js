$(function () {

    var url = 'http://localhost/habitissimo/';
    var category = '';
    var subcategory = '';
    var rate = '';
    descriptionFocus();

    function descriptionFocus(){
        $('#description').focus();
    } 
    
    // continue to step 2 btn handler
    $(document).on('click', '.continue-to-step-2', function (e) {
        $('#description').prop('required', true);
        var data = {
            'description': $('#description').val().trim(),
            'time': $('#time').val()
        };

        $.ajax({
            type: "POST",
            data: data,
            url: url+'dashboard/loadDetailsView',
            success: function (response) {

                $('.budget').empty().html(response);
                
                if (category !== '') getSubcategoriesBack(category, subcategory, rate, true);

            },
            error: function () {
                alert('Something went wrong!');
            }
        });
    });

    // details view - categories handler for subcategories
    $(document).on('change', '#category', function () {
        var id = $(this).val();
        getSubcategoriesBack(id);
    });

    function getSubcategoriesBack(category, subcategory, rate, back = false) {
        $.ajax({
            type: 'POST',
            data: {id: category},
            dataType: 'json',
            url: url+'subcategories/getSubcategories',
            success: function (subcategories) {

                var select = $('#subcategory');
                var options = select.prop('options');

                select.removeAttr('readonly');
                $('option', select).remove();

                $.each(subcategories, function (val, text) {
                    options[options.length] = new Option(text, val);
                });

                if (back) {
                    $('#category option[value=' + category + ']').prop('selected', true);
                    $('#subcategory option[value=' + subcategory + ']').prop('selected', true);
                    $('#rate option[value=' + rate + ']').prop('selected', true);
                }
            },
            error: function () {
                alert('Something went wrong!');
            }
        });
    }

    // back to step 1 btn handler
    $(document).on('click', '.back-to-step-1', function () {
        
        category = $('#category').val();
        subcategory = $('#subcategory').val();
        rate = $('#rate').val();
        var data = {
            'category': category,
            'subcategory': subcategory,
            'rate': rate
        };
        $.ajax({
            type: 'POST',
            data: data,
            url: url+'dashboard/backToStep1',
            success: function (response) {

                $('.budget').empty().html(response);
                descriptionFocus();
            },
            error: function () {
                alert('Something went wrong!');
            }
        });
    });


    // continue to step 3 btn handler
    $(document).on('click', '.continue-to-step-3', function (e) {

        e.preventDefault();
        category = $('#category').val();
        subcategory = $('#subcategory').val();
        rate = $('#rate').val();
        var data = {
            'category': category,
            'subcategory': subcategory,
            'rate': rate
        };

        $.ajax({
            type: "POST",
            data: data,
            url: url+'dashboard/loadDataView',
            success: function (response) {

                $('.budget').empty().html(response);

            },
            error: function () {
                alert('Something went wrong!');
            }
        });
    });

    // back to step 2 btn handler
    $(document).on('click', '.back-to-step-2', function () {
        
        name = $('#name').val().trim();
        email = $('#email').val().trim();
        phone = $('#phone').val().trim();
        
        var data = {
            name : name,
            email : email,
            phone : phone
        };    
        
        $.ajax({
            type: 'POST',
            data: data,
            url: url+'dashboard/backToStep2',
            success: function (response) {

                $('.budget').empty().html(response);
                getSubcategoriesBack(category, subcategory, rate, true);
            },
            error: function () {
                alert('Something went wrong!');
            }
        });
    });
    
    //finish btn handler
    $(document).on('click', '.finish', function(){

        $.ajax({
            type: 'POST',
            data: {
                name : $('#name').val().trim(),
                email : $('#email').val().trim(),
                phone : $('#phone').val().trim()
            },
            url: url+'dashboard/finishMail',
            success: function(response){
                $('.budget').empty().html(response);
                
            },
            error: function () {
                alert('Something went wrong!');
            }
        });
    });

});


