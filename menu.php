<?php
    session_start();
  
    // Create connection
    $connect = mysqli_connect("localhost", "root", "", "nachos-admin"); 
    
    if(isset($_POST["add_to_cart"]))
    {
      if(isset($_SESSION["shopping_cart"]))
      {
        $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
       $count = count($_SESSION["shopping_cart"]);
          $item_array = array (
            'item_id'     =>   $_POST["hidden_id"],
            'item_name'     =>   $_POST["hidden_name"],
            'item_price'    =>   $_POST["hidden_price"],
            'item_quantity'   =>   $_POST["quantity"]
          
          );
          $_SESSION["shopping_cart"][$count] = $item_array;
      }
      else
      {
        $item_array = array(
          'item_id'     => $_POST["hidden_id"],
          'item_name'     => $_POST["hidden_name"],
          'item_price'    => $_POST["hidden_price"],
          'item_quantity'   => $_POST["quantity"]
          
        );
        $_SESSION["shopping_cart"][0] = $item_array;
      }
    }
    
if (isset($_GET["action"]))
{
  if($_GET["action"] == "delete")
  {
    foreach($_SESSION["shopping_cart"] as $keys => $values)
    {
      if($values["item_id"] == $_GET["id"])
      {
        unset($_SESSION["shopping_cart"][$keys]);
        echo '<script>alert ("item removed")</script>';
      
      }
    }
  }
}

if(isset($_GET["action"])){
  if($_GET["action"] == "remove"){
    foreach($_SESSION["shopping_cart"] as $keys => $values)
    {
      unset($_SESSION["shopping_cart"][$keys]);
      echo '<script>alert ("items
       removed")</script>';
        echo '<script>window.location="index.php"</script>';
    }
  }
}



if(isset($_POST["submit"])){

        // Create connection
    
    
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $cp = $_POST['phonenumber'];

        $query = mysqli_query($connect, "INSERT INTO customers (lastname,firstname,email,phone) values ('$lastname','$firstname','$email',$cp);");
      

//     foreach($_SESSION["shopping_cart"] as $keys => $values)
//     {
//       unset($_SESSION["shopping_cart"][$keys]);
//       echo '<script>alert ("items
//        removed")</script>';
//         echo '<script>window.location="index.php"</script>';
   
// }

      }
?>