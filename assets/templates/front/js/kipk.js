function chosen2(element, urlcontroller, mininput = 3, placeholder = "Pilih...") {
    $(element).select2({
        minimumInputLength: mininput,
        allowClear: true,
        placeholder: placeholder,
        ajax: {
            url: urlcontroller,
            dataType: "json",
            delay: 250,
            data: function (params) {
                return {
                    q: params.term,
                    page: params.page
                };
            },
            processResults: function (data) {
                return {
                    results: $.map(data, function (item) {
                        return {
                            id: item.value,
                            text: item.text
                        };
                    })
                };
            },
        }
    });
}
function chosen3(element, urlcontroller, mininput = 3) {
    $(element).select2({
        minimumInputLength: mininput,
        width: '100%',
        allowClear: true,
        placeholder: "Pilih...",
        ajax: {
            url: urlcontroller,
            dataType: "json",
            delay: 250,
            data: function (params) {
                return {
                    q: params.term,
                    page: params.page
                };
            },
            processResults: function (data) {
                return {
                    results: $.map(data, function (item) {
                        return {
                            id: item.IDString,
                            text: item.Text
                        };
                    })
                };
            },
        }
    });
}