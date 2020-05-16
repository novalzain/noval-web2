<? php
$ con = mysqli_connect ( "localhost" , "root" , "" );
if (! $ con )
{
die ( 'Tidak dapat terhubung:' . mysql_error ());
}
mysqli_select_db ( $ con , "lat_dbase" );
$ sql = "INSERT INTO tbl_mhs (FirstName, LastName, Age) VALUES
('$ _POST [nama depan]', '$ _ POST [nama belakang]', '$ _ POST [umur]') " ;
if (! mysqli_query ( $ con , $ sql ))
{
die ( 'Error:' . mysql_error ());
}
gema  "1 catatan ditambahkan" ;
mysqli_close ( $ con )
?>