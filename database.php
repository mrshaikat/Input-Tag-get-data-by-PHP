<?php
    $connection = new mysqli('localhost','root','','product');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form to server send data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

  if(isset( $_POST['submit'] )){
    $p_name = $_POST['p_name'];
    $p_price = $_POST['p_price'];
    $p_quantity = $_POST['p_quantity'];

   if( empty($p_name) || empty($p_price) || empty($p_quantity) ){

    echo "Fild Must Not be empty";

   }else{
    $sql = "INSERT INTO product_list(product_items, product_price, product_totalPrice) values('$p_name','$p_price','$p_quantity')";

    $connection -> query($sql);

    echo "Data inserted";

   }


    
    
  }





?>






    
    <div class="add-product">

        <h2>
            Add Product 
        </h2>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >

        <table>
            <tr>
                <td>
                  Product Name  
                </td>
                <td>
                    <input type="text" name="p_name" id="">
                </td>
            </tr>


            <tr>
                <td>
                  Product Price  
                </td>
                <td>
                    <input type="text" name="p_price" id="">
                </td>
            </tr>

            <tr>
                <td>
                  Product Quantity  
                </td>
                <td>
                    <input type="text" name="p_quantity" id="">
                </td>
            </tr>

            <tr>
               
                <td>
                    <input type="submit" name="submit" value="Add Product" id="">
                </td>
            </tr>
        </table>
    
    
    </form>


    </div>


</body>
</html>