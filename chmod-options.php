<?php

/*
    chmod() ayarları

    1. numara 0 ile başlar.
    2. numara dosya sahibinin izinleri
    3. numara kullanıcı gruplarının izinleri
    4. numara geri kalan herkesin


    1 - execute(işlem) izni
    2 - yazma izni
    4 - okuma izni


    toplamlarına göre işlem izni değişir mesela 
    
    7 verirsek bütün işlemleri yapabilir 

    7 = 1+2+4;



*/


chmod('test.txt', 0744)

?>