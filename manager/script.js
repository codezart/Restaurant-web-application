/*******************************Offers page****************************************/

  //Populating food items select in New-Order page
  $('select[name="category"]').on("change",function(){
    var category_id = $(this).val();
    $('select[name="food-item"] optgroup').load("get_food_items.php",{"category_id":category_id});
});

//Populating food item price in New-Order page
$('select[name="food-item"]').on("change",function(){
    var food_item_id = $(this).val();
    $('input[name="old-price"]').load("get_food_item_price.php",{"food_item_id":food_item_id},function(responseText){
        $(this).val(responseText + " SR");
    });
});


/*******************************Reports page****************************************/
$('button[name="get_report"]').on("click",function(){
    event.preventDefault();
    
    var report_type = $('select[name="report_type"]').val();
    var start_date = $('input[name="start_date"]').val();
    var end_date = $('input[name="end_date"]').val();

    $('table tbody').load("get_report.php",{"report_type":report_type, "start_date":start_date, "end_date":end_date});
});

/*******************************Users page (trick) ****************************************/
var isBlocked = false;
$(document).on("click","button[name=block_user]", function(){
    
    if(isBlocked){
        $(this).html("Block");
        isBlocked = false;
    } else{
        $(this).html("Unblock");
        isBlocked = true;
    }
    
});

