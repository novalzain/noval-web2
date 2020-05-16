<? php
$ konek = mysqli_connect ( "localhost" , "root" , "" );
$ dbname = "lat_dbase" ;
$ cek = mysqli_query ( $ konek , "CREATE DATABASE $ dbname" ) atau mati ( "Tidak Dapat Membuat Basis Data: $ dbname" );
if ( $ cek ) {
echo  "Database $ dbname berhasil dibuat" ;
}
?>