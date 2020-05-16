<? php
// hostname atau ip server
$ servername = 'localhost' ;
// nama pengguna dan kata sandi
$ dbusername = 'root' ;
$ dbpassword = '' ;
$ link = mysqli_connect ( "$ servername" , "$ dbusername" , "$ dbpassword" )
atau mati ( "Tidak dapat terhubung ke server" );
jika ( $ tautan )
{
echo  "ok .... koneksi berhasil" ;
}
?>