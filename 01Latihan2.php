<? php
$ A = 123 ; // variabel global
 Tes fungsi () {
global  $ A ; // variabel lokal
echo "Nilai A dalam fungsi = $ A \ n" ;
}
Tes ();
echo "Nilai A luar fungsi = $ A \ n" ;
?>