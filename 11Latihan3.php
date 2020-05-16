<? php
$ konek = mysqli_connect ( "localhost" , "root" , "" ); // koneksi
mysqli_select_db ( $ konek , "lat_dbase" ); // mengaktifkan basis data
// membuat tabel
$ sql = "CREATE TABLE tbl_mhs
(
mhsID int BUKAN NULL AUTO_INCREMENT,
KUNCI UTAMA (mhsID),
FirstName varchar (15),
LastName varchar (15),
Usia int
) " ;
mysqli_query ( $ konek , $ sql );
// memasukan data
$ input = mysqli_query ( $ konek , "masukkan ke tbl_mhs (FirstName, LastName, Age)
nilai-nilai ('Anjar', 'Prabowo', 25) " );
if ( $ input ) {
echo  "Tabel dan input data berhasil dibuat" ;
}
?>