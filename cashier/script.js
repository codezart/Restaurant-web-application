$(document).ready(function(){

    /************************** New Order Page **********************************/

    //Populating food items select in New-Order page
    $('select[name="category"]').on("change",function(){
        var category_id = $(this).val();
        $('select[name="food-item"] optgroup').load("get_food_items.php",{"category_id":category_id});
    });

    //Populating food item price in New-Order page
    $('select[name="food-item"]').on("change",function(){
        var food_item_id = $(this).val();
        $('input[name="price"]').load("get_food_item_price.php",{"food_item_id":food_item_id},function(responseText){
            $(this).val(responseText + " SR");
        });
    });

    //Populating order summery
    $('button[name="add_to_order"').click(function(){
        var food_id = $('select[name="food-item"]').val();
        var food_name = $('select[name="food-item"] option:selected').text();
        var food_price = $('input[name="price"]').val();
        var food_quantity = $('input[name="quantity"]').val();
        $("table tbody").append('<tr><td class="food_id" style="display:none;">'+food_id+'</td><td class="food_name">'+food_name+'</td><td  class="food_price">'+food_price+'</td><td  class="food_quantity">'+food_quantity+'</td><td><button class="btn btn-danger remove" type="button">Remove</button></td>');
        addPrice(food_price,food_quantity);
    });
    //Remove item from order summery
    $(document).on("click",".remove",function(){
        if(confirm("Are you sure you want to remove the item?")){
            var food_price = $(this).closest("tr").find(".food_price").text();
            var food_quantity = $(this).closest("tr").find(".food_quantity").text();
            subtractPrice(food_price,food_quantity);
            $(this).closest("tr").remove();
        }
    });

    //Add the total price
    function addPrice(food_price, food_quantity){
        var totalPrice = food_price.replace("SR","") * food_quantity;
        var currentTotalPrice = $("#total_price").html();
        $("#total_price").html(Number(currentTotalPrice) + Number(totalPrice));
    }
    //Subtract the total price
    function subtractPrice(food_price, food_quantity){
        var totalPrice = food_price.replace("SR","") * food_quantity;
        var currentTotalPrice = $("#total_price").html();
        $("#total_price").html(Number(currentTotalPrice) - Number(totalPrice));
    }


    //Gathering order summery info
    $("#checkout").click(function(){
        var order_summery = {};

        $(".food_id").each(function(index){
            order_summery[index] = {}; //Initializing the multi-array
            var food_id = $(this).text();
            order_summery[index]["id"] = food_id;
        });
        $(".food_name").each(function(index){
            var food_name = $(this).text();
            order_summery[index]["name"] = food_name;
        });
        $(".food_price").each(function(index){
            var food_price = $(this).text().replace("SR","");
            order_summery[index]["price"] = food_price;
        });
        $(".food_quantity").each(function(index){
            var food_quantity = $(this).text();
            order_summery[index]["quantity"] = food_quantity;
        });

        $.ajax({
            type:'POST',
            url:'checkout.php',
            data: {order_summery:order_summery,total_price:$("#total_price").text()},
            success: function(message){
                window.location = "local_orders.php";
            },
            error: function(error){}
        });
    });
    
    /************************** New Order Page **********************************/

});