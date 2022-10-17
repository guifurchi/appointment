function get_cep(cep){
    console.log("cep");
    cep_resp = ""
    return new Promise(function (resolve, reject) {
        $.ajax({
            type: 'POST',
            headers: { "X-CSRFToken": csrftoken },
            url: "/users/cep/",
            data: {
                "cep":cep,
            },
            success: function (response) {
                resolve(response);
            },
            error: function (response) {
                reject(response)
            }
        });
    });
}