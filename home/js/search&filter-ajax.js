$(document).ready(function () {
    $('.searchInput').keyup(function(){
        // $('.loader').show();
        var action = 'action';
        var text = $(this).val();
        var Operating_System = get_selected_filter("Operating_System");
        var category = get_selected_filter("categoryFilter")
        var price = $('.price_filter:checked').val();
        $.ajax({
            url:'../includes/search&filter.inc.php',
            method:'POST',
            data:{action:action,text:text,category:category,Operating_System:Operating_System,price:price},
            success:function(response){
                $(".parent-product").html(response);
                // $('.loader').hide();
            }
        })
    });

      
    $('.checkboxClick').click(function(){
        // $('.loader').show();
        var action = 'action';
        var Operating_System = get_selected_filter("Operating_System");
        var category = get_selected_filter("categoryFilter")
        var text = $('.searchInput').val();
        var price =$('.price_filter:checked').val();
        $.ajax({
            url:'../includes/search&filter.inc.php',
            method:'POST',
            data:{action:action,text:text,category:category,Operating_System:Operating_System,price:price},
            success:function(response){
                $(".parent-product").html(response);
                // $('.loader').hide();
            }
        })
    });
    $('.price_filter').click(function() {
        $('.price_filter:checked').not(this).prop('checked', false);
     });
    

    function get_selected_filter(text){
        var filter_data=[];
        $('.'+text+':checked').each(function () {
            const name =$(this).val();
            filter_data.push(name);   
        });
        return filter_data;
    }

});
