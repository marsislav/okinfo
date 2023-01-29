<?php include('includes/header.php');?>
<p>Текущ период: <?php tekusht_period();?></p>
<?php
$query= "SELECT rabotni_dni FROM informacia_za_meseca";
$select_rabotni_dni_query=mysqli_query($connection, $query);
while($row=mysqli_fetch_assoc($select_rabotni_dni_query)) {
 $rabotni_dni= $row['rabotni_dni'];
}
?>
Работни дни: <input type="number" value="<?php echo $rabotni_dni?>" name="rabotni_dni">
<input type="submit" value="Запис" name="zapis">

<a href="add_client.php">Добавяне на клиент</a>


<?php
if (isset($_POST['search'])) {


$search=$_POST['search_field'];

}

?>
<form action="" method="post">
    <input type="text" name="search_field" value="">
    <input type="submit" value="Търси" name="search">
</form>

//spisak - imena , egn, redakcia, danni za meseca , iztrivane

<table class="table">
    <tr>
        <th>№</th>
        <th>Имена</th>
        <th>ЕГН</th>
        <th>Булстат</th>
        <th>Данни за месеца</th>
        <th>Изтриване</th>
    </tr>
</table>
<?php include('includes/footer.php');?>