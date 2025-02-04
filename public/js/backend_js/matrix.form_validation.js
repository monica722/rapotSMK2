$(document).ready(function () {

    $("#current_pwd").keyup(function () {
        var current_pwd = $("#current_pwd").val();
        $.ajax({
            type: 'get',
            url: '/admin/check-pwd',
            data: {
                current_pwd: current_pwd
            },
            success: function (resp) {
                // alert(resp);
                if (resp == "false") {
                    $("#chkPwd").html("<font color='red'>Password Salah</font>");
                } else if (resp == "true") {
                    $("#chkPwd").html("<font color='green'>Password Benar</font>");
                }
            },
            error: function () {
                alert("Error");
            }
        });
    });

    $('input[type=checkbox],input[type=radio],input[type=file]').uniform();

    $('select').select2();

    // Form Validation
    $("#basic_validate").validate({
        rules: {
            required: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            date: {
                required: true,
                date: true
            },
            url: {
                required: true,
                url: true
            }
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight: function (element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });

    // Add Category
    $("#add_category").validate({
        rules: {
            category_name: {
                required: true
            },
            description: {
                required: true,
            },
            url: {
                required: true,
            }
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight: function (element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });

    // Tambah Produk
    $("#add_product").validate({
        rules: {
            category_id: {
                required: true
            },
            product_name: {
                required: true,
            },
            product_code: {
                required: true,
            },
            product_color: {
                required: true,
            },
            price: {
                required: true,
                number: true,
            },
            image: {
                required: true,
            },
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight: function (element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });

    // Edit Category
    $("#edit_category").validate({
        rules: {
            category_name: {
                required: true
            },
            description: {
                required: true,
            },
            url: {
                required: true,
            }
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight: function (element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });


    // Edit Produk
    $("#edit_product").validate({
        rules: {
            category_id: {
                required: true
            },
            product_name: {
                required: true,
            },
            product_code: {
                required: true,
            },
            product_color: {
                required: true,
            },
            price: {
                required: true,
                number: true,
            }
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight: function (element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });

    $("#number_validate").validate({
        rules: {
            min: {
                required: true,
                min: 10
            },
            max: {
                required: true,
                max: 24
            },
            number: {
                required: true,
                number: true
            }
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight: function (element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });

    $("#password_validate").validate({
        rules: {
            current_pwd: {
                required: true,
                minlength: 6,
                maxlength: 20
            },
            pwd: {
                required: true,
                minlength: 6,
                maxlength: 20
            },
            pwd2: {
                required: true,
                minlength: 6,
                maxlength: 20,
                equalTo: "#pwd"
            }
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight: function (element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });

    // $(".delCat").click(function () {
    //     if (confirm('Apakah Anda Yakin Ingin Menghapus Kategori ini?')) {
    //         return true;
    //     }
    //     return false;
    // });

    // $(".delProduct").click(function () {
    //     if (confirm('Apakah Anda Yakin Ingin Menghapus Kategori ini?')) {
    //         return true;
    //     }
    //     return false;
    // });

    $(".deleteRecord").click(function () {
        var id = $(this).attr('rel');
        var deleteFunction = $(this).attr('rel1');
        swal({
            title: "Apakah Anda Yakin?",
            text: "Data Ini Akan Hilang Selamanya!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Saya Yakin!',
            cancelButtonText: 'Tidak, Batalkan!',
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            buttonsStyling: false,
            reverseButtons: true
        }, function () {
            window.location.href = "/admin/" + deleteFunction + "/" + id;
        })
        return false;
    });

    $(document).ready(function () {
        var maxField = 10; //Input fields increment limitation
        var addButton = $('.add_button'); //Add button selector
        var wrapper = $('.field_wrapper'); //Input field wrapper
        var fieldHTML = '<div class="control-group"><label class="control-label"></label><div class="field_wrapper"><div style="margin-top: 5px;"><input type="text" name="sku[]" id="sku" placeholder="SKU" style="width: 120px; margin-right:3px;"/><input type="text" name="size[]" id="size" placeholder="Ukuran" style="width: 120px; margin-right:3px; "/><input type="text" name="price[]" id="price" placeholder="Harga" style="width: 120px; margin-right:3px;"/><input type="text" name="stock[]" id="stock" placeholder="Stok" style="width: 120px; margin-right:3px;"/><a href="javascript:void(0);" class="remove_button">Hapus</a></div></div></div>'; //New input field html 
        var x = 1; //Initial field counter is 1

        //Once add button is clicked
        $(addButton).click(function () {
            //Check maximum number of input fields
            if (x < maxField) {
                x++; //Increment field counter
                $(wrapper).append(fieldHTML); //Add field html
            }
        });

        //Once remove button is clicked
        $(wrapper).on('click', '.remove_button', function (e) {
            e.preventDefault();
            $(this).parent('div').remove(); //Remove field html
            x--; //Decrement field counter
        });
    });
});
