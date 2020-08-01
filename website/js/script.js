$(document).ready(function(){               //RUN FUNC WHEN PAGE LOADS


  $("#categoryHolder").load("displayCategories.php"); //display all categories
  $("#nav-tabContent").load("displayFoodItems.php"); //display all food items

  //......................FOR THE CART PAGE......................................
  $(".Mycart").load("displayCart.php",function(responseTxt, statusTxt, xhr){
    if(statusTxt == "success")
      console.log("success");
  }); //display cart items
  //......................FOR THE CART PAGE......................................

  //......................FOR THE CHECKOUT PAGE......................................

  $(".orderSummary").load("displayOrderSummary.php",function(responseTxt, statusTxt, xhr){
    if(statusTxt == "success")
      console.log("success");
  });

  //......................FOR THE CHECKOUT PAGE......................................

  $(document).on("click",".order_btn",function() {
        var foodName = $(this).closest('.food__list__details').find(".food_Name").text();
        var price = $(this).closest('.food__list__details').next().find(".price").text().replace("SR","");

    });


    $(document).on("click",".searchForFoodButton",function() {
        var inputname = $(this).prev().val();
        console.log(inputname);
          $('.loadedFoodItem').load("searchFoodItem.php",{'foodName':inputname});
      });

    $(document).on("click",".removebutton",function() {
        $('.loadedFoodItem').empty();

      });

    $(document).on("click","#order");



});
