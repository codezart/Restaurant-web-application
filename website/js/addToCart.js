$(document).ready(function(){               //RUN FUNC WHEN PAGE LOADS
  var foodName='';
  var price='';
  var image='';
  var quantity='';
  $(document).on("click",".add-to-cart",function(){
       foodName = $(this).closest(".food__menu__inner").find(".foodName").text();
      console.log(foodName);
       price = $(this).closest(".food__menu__inner").find(".price").text().replace(" SR","");
      console.log(price);
       image = $(this).closest(".food__menu__inner").find(".image").attr('src');
       console.log(image);
       quantity =  $(this).closest(".cart-plus-minus").find(".quantity").val();
       console.log(quantity);
       var data ={
           image:image,
           foodName:foodName,
           price:price,
           quantity: quantity};

          //add to cart button work when i remove this
       $.ajax({
         url: "addToCartOperation.php",
         data: data,
         type: "POST",
         datatype: 'json'
       });
      $("#show_message").append(
                  $('<div class="alert alert-success alert-dismissible fade show" role="alert"></div>').append(
                    $('<h3</h3>').text("Your item has successfully been added to the cart! Would you like to view your cart & checkout?.."),
                    $('<button class="btn button food__btn view_Cart" ></button>').text("View Cart")));

    });

      $(document).on("click",".view_Cart", function(){
        window.location.href ="cart.php";
    });


  });
