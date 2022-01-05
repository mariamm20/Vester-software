$(document).ready(function(){

    $('#search-input').keyup(function(){
        search_table($(this).val());
    });
    function search_table(value){
        $("#search-table tr").each(function(){
            var found = false;
            $(this).each(function(){
                if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >=0 ){
                    found= true;
                }
            });
            if(found == true){
                $(this).show();
            }else{
                $("#search-table tr:first").show();
                $(this).hide();
            }
        });
    }
});
