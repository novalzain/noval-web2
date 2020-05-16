<? php
$ con = mysqli_connect ( "localhost" , "root" , "" );
if (! $ con )
{
die ( 'Tidak dapat terhubung:' . mysqli_error ());
}
mysqli_select_db ( $ con , "lat_dbase" );
mysqli_query ( $ con , "INSERT INTO tbl_mhs (FirstName, LastName, Age)
NILAI ('Karina', 'Suwandi', '29') " );
mysqli_query ( $ con , "INSERT INTO tbl_mhs (FirstName, LastName, Age)
VALUES ('Glenn', 'Gandari', '32') " );
mysqli_close ( $ con );
?>