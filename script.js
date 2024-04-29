function createData(form){
    $.ajax({
        url:"createData.php",
        data: {
            pNum: $(form.pNum).val(),
            firstname: $(form.firstname).val(),
            lastname: $(form.lastname).val(),
            age: $(form.age).val(),
            username: $(form.username).val(),
            password: $(form.password).val(),
        },
        success: function(response){
            $(form.pNum).val("");
            $(form.firstname).val("");
            $(form.lastname).val("");
            $(form.age).val("");
            $(form.username).val("");
            $(form.password).val("");
            alert("Account Created!");
            retrieveData();
        }
    });

    return false;
}