<? php
// Ini adalah komentar dalam satu baris

/ * Jika yang ini, komentar
dalam banyak baris, yang baru
akan selesai setelah diakhiri
dengan * /
?>

< html >
< head >
< title > Test Penyisipan PHP Pada HTML </ title >
</ head >
< tubuh >
Kapal Asing, Silakan identifikasikan diri Anda! < Br >
<? php
// Berikut ini adalah variabel inisiasi
$ namad = "Jean" ;
$ namat = "Luc" ;
$ namab = "Piccard" ;
$ nilai1 = 25 ;
$ nilai2 = 50 ;
$ hasil = $ nilai1 * nilai2;
$ a = 2 ;
$ b = 3 ;
$ hsl = pow ( $ a , $ b );
?>
< b > Ini adalah kapal Federasi Planet USS Enterprise. < Br >
<? php
echo "Saya $ namab, $ namad $ namat $ namab, kapten kapal. </br> </br>" ;
echo  "$ nilai1 x $ nilai2 = $ hasil <br>;
gema " $ a ^ $ b = $ hsl ";
?>
</body>
</html>