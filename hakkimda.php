<?php

//include
//require doysa çağırmak için kullanılıar require fatal error verriken
//include sadece warning verir ve çalışmaya devam eder
//aralarındaki yegane fark budur




// @include'b.php';
// echo 'cagri';



// require 'a.php';
// echo ' ' . 'cagri';


// include('a.php'); farklı bir kullanımı

// include_once 'a.php';
// include_once 'a.php';
// include_once 'a.php';
 
//  echo 'test';

$title = 'Hakkimda - Cagri KOC';

require 'header.php';



?>


Hakkımda Sayfası


<?php

require 'footer.php';

?>