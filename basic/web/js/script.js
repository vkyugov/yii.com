$('#btn_test').on('click', function(){
    $.ajax({
        url: 'index.php?r=test/test',
        data: {test: '123'},
        type: 'POST',
        success: function(res){
            console.log(res);
        },
        error: function(){
            alert('Error!');
        }
    });
});