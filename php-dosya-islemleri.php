<?php

//dosya oluşturma
//touch()

// touch('text.txt' , time() - 840000000000000);


/*

Kipler;
r - okumak için aç
r+ - okumak ve yazmak için aç
w - yazmak için aç (dosya yok ise oluşturulur varsa üstüne yazar)
w+ - okumak ve yazmak için aç
a - yazmak için aç
a+ - okumak ve yazmak için aç


*/





/*

 fopen() - dosyayı açmamızı sağlar
 fclose() - dosyayı kapatmamızı sağlar
 fwrite() - dosyaya birşeyler yazmamızı sağlar
 fread() - tüm içeriği okur
 fgets() - satır satır okur
 feof () - dosyanın sonuna gelinip gelinmediğini döndürür
filesize() - dosya karakter sayısını verir
*/

$icerik ='Bu bir örnektir' . rand(0,1000) . "\n";

$dosya = fopen('test.txt','a+');
    //  fwrite ($dosya,$icerik);
   
//    echo  fread($dosya,filesize('test.txt'));
   


    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // echo fgets($dosya);
    // while(!feof($dosya)){
    //     echo fgets($dosya) . '<br>';
    // }
    //bu fonksiyonla hepsi yazılabilir.



    //1 föndürdüğü için dosyanın sonuna gelinmiştir

    fclose($dosya);
        //$degerler = file('test.txt');
        //print_r($degerler);
        //dosya içindeki değerelri array şeklinde yazdırır

       // $icerik = file_get_contents('https://www.ankarasacekimmerkezi.com/');

        //echo $icerik;


        




    // unlink('test.txt'); -> siler





?>