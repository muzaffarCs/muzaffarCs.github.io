<?php
include "connection.php";
if($_POST){
$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$cat_id = $_POST['cat_id'];
mysqli_query($conn,"insert into ikproduct (id,product_name,product_price,cat_id) value('','$product_name','$product_price','$cat_id')");
}
?>

<form action="" method="POST">
<ul class="wrapper">
    <li>
      <label for="">Category Name</label>
      <select name="cat_id" id="">
        <option value="">Select Category</option>
        <?php
            $category = mysqli_query($conn,"select * from ikcategory");
            while($rows = mysqli_fetch_assoc($category))
            {
                echo '<option value="'.$rows['id'].'">'.$rows['category_name'].' ('.$rows['category_code'].')</option>';
            }
        ?>
      </select>
    </li>
    <li>
      <label for="">Prodect Name</label>
      <input type="text" placeholder="Enter Your Prodect Name" name="product_name">
    </li>

    <li> <label for="">Prodect Price</label>
        <input type="text" placeholder="Enter Your Prodect Name" name="product_price">
    </li>
        <button type="submit">save</button>
    </li>
</ul></form>


<style>
    *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;

}  form{
    background: yield;
}            
.wrapper{
    background-color: aqua;
    list-style: none;
    margin: 50px;
    padding: 30px;
}
.wrapper li{
    display: flex;
    padding: 6px 0;
    justify-content: flex-end;
}
.wrapper li label{
    flex: 1;}
@media screen and (min-width:300px) AND (max-width:499px){
    .wrapper li{
        flex-direction: column;
    }
    .wrapper li input{
        flex: 3;
    }
}
@media screen and (min-width:500px){
    .wrapper li input{
        flex: 4;
    }
}
@media screen and (min-width:777px){
    .wrapper li input{
        flex: 5;
    }
}
@media screen and (min-width:992px){
    .wrapper li input{
        flex: 6;
    }
}
    @media screen and (min-width:1200px){
    .wrapper li input{
        flex: 8;
    }
} 
</style>
