$(function (){
    $('.sortable').sortable({
        stop:function ()
        {
            var ids = '';
            $('.sortable div').each(function (){
                id = $(this).attr('id');
                if (ids == ''){
                    ids = id;
                }
                else {
                    ids = ids + ',' + id;
                }
            })
            $.ajax({
                url: 'save_order.php',
                data: 'ids='+ids,
                type: 'post',
                success: function (){
                    $('#success_message').fadeIn().html("Your list has been saved successfully.");
                    setTimeout(function (){
                        $('#success_message').fadeOut('slow');
                                         }, 2000);
                }
            })
        }
    });
});