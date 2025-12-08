$('#sub').click(function(e) {
    e.preventDefault();

    let form = $('.contact-form')[0];
    let formData = new FormData(form);
    let url = form.action;
    let token = $('input[name="_token"]').val();

    $.ajax({
        url: url,
        method: "POST",
        data: formData,
        contentType: false,
        processData: false,
        headers: {
            'X-CSRF-TOKEN': token
        },
        success: function(response) {
            if (response.success) {
                window.location.href = response.redirect;
            }
        },
        error: function(xhr) {
            let errors = xhr.responseJSON.errors;
            console.log(errors);
        }
    });
});
