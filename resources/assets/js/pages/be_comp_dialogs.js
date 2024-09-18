class PageDialogs {
    /*
     * Delete Functionality
    */
    static Delete() {
        $(document).on('click', '.delete-record', function (event) {
            event.preventDefault();
            let url = $(this).data('action');
            let name = $(this).data('name');
            let message = `Are you sure you want to delete user (${name})?`;
            let buttonText = 'Delete';

            Swal.fire({
                title: 'Are you sure?',
                text: message,
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#28a745',
                cancelButtonColor: '#dc3545',
                confirmButtonText: `Yes, ${buttonText} it !`,
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'DELETE',
                        url: url,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                            'Content-Type': 'application/json',
                        },
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function (response) {
                            if (response.success) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Deleted!',
                                    text: response.message,
                                    timer: 1500,
                                    showConfirmButton: false
                                });
                                setTimeout(function(){
                                    location.reload();
                                }, 1000);
                            }
                        },
                        error: function (response) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Something went wrong!',
                            });
                        }
                    });
                }
            })
        });
    }

    /*
     * Store Functionality
    */
    static Store() {
        $(document).on('submit', '.form-store', function (event) {
            event.preventDefault();
            let url = $(this).attr('action');
            let formData = new FormData(this);
            $('.is-invalid').removeClass('is-invalid');
            $('.invalid-feedback').text('').hide();

            $.ajax({
                type: 'POST',
                url: url,
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function () {
                    $('#loader').show();
                },
                success: function (response) {
                    if (response.success) {
                        $.notify({
                            message: response.message
                        }, {
                            type: 'success',
                            delay: 0,
                            allow_dismiss: true,
                            // offset: { y: 50, x: 20 },
                            placement: {
                                from: "top",
                                align: "right"
                            }
                        });

                        setTimeout(function(){
                            window.location = response.redirect_url;
                        }, 1000);
                    }
                },
                error: function (response) {
                    if (response.status === 422) {
                        let errors = response.responseJSON.errors;
                        $.each(errors, function (field, messages) {
                            $('[name="' + field + '"]').addClass('is-invalid');
                            $('[name="' + field + '"]').next('.invalid-feedback').text(messages[0]).show();
                        });
                    } else {
                        $.notify({
                            message: 'Something went wrong!'
                        }, {
                            type: 'danger',
                            delay: 0,
                            allow_dismiss: true,
                            placement: {
                                from: "top",
                                align: "right"
                            }
                        });
                    }
                },
                complete: function () {
                    $('#loader').hide();
                }
            });
        });
    }


    /*
     * Init functionality for confirmation dialogs
     */
    static init() {
        this.Delete();
        this.Store();
    }
}

// Initialize when the page loads
Dashmix.onLoad(() => PageDialogs.init());
