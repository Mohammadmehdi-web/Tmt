<?php
if(isset($_POST['delete']))
{
   include '../db_con.php';
   $user_id =$_POST['user_id'];

   $del_que ="delete from add_slider_gallery where id =$user_id";
   mysqli_query($con,$del_que);

?>

<script>
    alert('Data deleted successfully!');
    window.location='slider_gallery_list.php';
</script>

<?php
}
else
{
    header('location:slider_gallery_list.php');
}
?>