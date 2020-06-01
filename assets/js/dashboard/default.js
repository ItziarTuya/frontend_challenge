$(function () {

    var url = 'http://localhost/habitissimo/';
    var description = '';
    var category = '';
    var subcategory = '';
    var rate = '';
    var name = '';
    var email = '';
    var phone = '';

    // description error handler
    $(document).on('focusout', '#description', function (event) {
        description = $('#description').val();
        if (description === "") {
            showError('.description-error', '#description');
        } else {
            hideError('.description-error', '#description');
        }
    });

    // continue to step 2 btn handler
    $(document).on('click', '.continue-to-step-2', function (event) {
        description = $('#description').val();
        if (description === "") {
            event.preventDefault();
            showError('.description-error', '#description');
        } else {
            loadStep2();
        }
    });

    function loadStep2() {
        $.ajax({
            type: "POST",
            data: {
                description: description,
                time: $('#time').val()
            },
            url: url + 'dashboard/loadDetailsView',
            success: function (response) {

                $('.budget').empty().html(response);

                if (category !== '')
                    getSubcategoriesBack(category, subcategory, rate, true);
            },
            error: function () {
                alert('Something went wrong!');
            }
        });
    }

    // details view - categories handler for subcategories
    $(document).on('change', '#category', function (event) {
        hideError('.category-error', '#category');
        var id = $(this).val();
        getSubcategoriesBack(id);
    });

    function getSubcategoriesBack(category, subcategory, rate, back = false) {
        $.ajax({
            type: 'POST',
            data: {id: category},
            dataType: 'json',
            url: url + 'subcategories/getSubcategories',
            success: function (subcategories) {

                var select = $('#subcategory');
                var options = select.prop('options');

                select.removeAttr('readonly');
                $('option', select).remove();
                $(select).prepend("<option value='0'>Selecciona una subcategoría</option>");
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

    // subcategory error handler
    $(document).on('change', '#subcategory', function () {
        hideError('.subcategory-error', '#subcategory');
    });

    // back to step 1 btn handler
    $(document).on('click', '.back-to-step-1', function () {
        category = $('#category').val();
        subcategory = $('#subcategory').val();
        rate = $('#rate').val();

        $.ajax({
            type: 'POST',
            data: {
                category: category,
                subcategory: subcategory,
                rate: rate
            },
            url: url + 'dashboard/backToStep1',
            success: function (response) {
                $('.budget').empty().html(response);
            },
            error: function () {
                alert('Something went wrong!');
            }
        });
    });


    // continue to step 3 btn handler
    $(document).on('click', '.continue-to-step-3', function (event) {
        category = $('#category').val();
        subcategory = $('#subcategory').val();
        rate = $('#rate').val();

        if (category === '0') {
            showError('.category-error', '#category', 'Selecciona una opción');
            return false;
        } else if (subcategory === '0') {
            showError('.subcategory-error', '#subcategory', 'Selecciona una opción');
            return false;
        }

        $.ajax({
            type: "POST",
            data: {
                category: category,
                subcategory: subcategory,
                rate: rate
            },
            url: url + 'dashboard/loadDataView',
            success: function (response) {
                $('.budget').empty().html(response);
                if ($('input').lengh)
                    toggleInputError();
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

        $.ajax({
            type: 'POST',
            data: {
                name: name,
                email: email,
                phone: phone
            },
            url: url + 'dashboard/backToStep2',
            success: function (response) {

                $('.budget').empty().html(response);
                getSubcategoriesBack(category, subcategory, rate, true);
            },
            error: function () {
                alert('Something went wrong!');
            }
        });
    });

    // Data error handler
    function toggleInputError() {
        $(document).on('focusout', 'input', function () {
            id_name = '#' + $(this).prop('id');
            class_name = '.' + $(this).prop('id');
            input_val = $(id_name).val();
            if (input_val === '') {
                showError(class_name + '-error', id_name);
            } else {
                hideError(class_name + '-error', id_name);
            }
        });
    }

    //finish btn handler
    $(document).on('click', '.finish', function (event) {
        name = $('#name').val().trim();
        email = $('#email').val().trim();
        phone = $('#phone').val().trim();

        if (name === '') {
            showError('.name-error', '#name');
            return false;
        } else if (phone === '') {
            showError('.phone-error', '#phone');
            return false;
        } else {
            $.ajax({
                type: 'POST',
                data: {
                    name: name,
                    email: email,
                    phone: phone
                },
                url: url + 'dashboard/finishMail',
                success: function (response) {
                    $('.budget').empty().html(response);
                    if ($('.email-error').text())
                        $('#email').css('border', '1px solid #FF7300');
                    else{
                        createRequestAPI();
                    }    
                },
                error: function () {
                    alert('Something went wrong!');
                }
            });
        }
    });

    function showError(p, element, error = 'Completa este campo') {
        $(p).empty().append(error).css({'color': '#FF7300', 'font-style': 'italic'});
        $(element).css('border', '1px solid #FF7300');
    }

    function hideError(p, element) {
        $(p).empty();
        $(element).css('border', '');
    }

    function createRequestAPI() {
        var data = {
                    "title" : name,
                    "description" : description,
                    "category" : category,
                    "email" : email,
                    "phone" : phone,
                    "address" : ""
                };
                
        $.ajax({
            type : 'POST',
            data : JSON.stringify(data),
            dataType: 'json',
            url : 'http://localhost/habitissimo_api/budget/create', 
            success: function(response, status){
                console.log(response);
                console.log(status);
                alert(status);
            }
        });
    }



});


