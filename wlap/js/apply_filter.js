$(document).ready(function(){
    $('#filter_btn').click(function(){
        const week = $('#week').val();
        const subject = $('#subject').val();

        $.ajax({
            type:'post',
            url:'weekly_table.php',
            data:{
                'week':week,
                'subject':subject
            },
            beforeSend:function(){
                $('#table').html(
                  '<div class="text-center"><div class="spinner-border" role="status"><span class="sr-only">Loading...</span></div></div>'  
                );
            },
            success:function(data){
                $('#table').html(data);
            }
        });
    });

    $('#print_btn').click(function(){
        var week = $('#week').val();
        var subject = $('#subject').val();
        var iframe = $('#report-frame');
        $.ajax({
            type:'post',
            url:'set_week_sub.php',
            data:{
                'week':week,
                'subject':subject
            },
            success:function(){
                //alert('wew');
                iframe.attr('src', iframe.data('src'));
            }
        });
    }); 

});