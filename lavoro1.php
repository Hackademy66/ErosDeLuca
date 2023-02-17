<?php






// ES:1 - Dato un array di numeri, scrivere un programma che mi permetta di avere la media SOLO dei numeri pari contenuti all’interno dell’array
// $array = [1, 2, 3, 4, 5, 6];

// for($i = 0; $i < 6 ; $i++){
//     if($array[$i] % 2 == 0){
//         echo $array[$i];
//     }
// }

// ES:2 - Dato un array di utenti con nome, cognome e genere, 
// per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” 
// a seconda del genere.

// $array = [
//          [
//         "name" => "mario",
//         "surname" => "valluppa",
//         "genere" => "maschio"
//          ], 
    
//          [
//         "name" => "chiara",
//         "surname" => "di moria",
//         "genere" => "femmina"
//         ], 
    
//         [
//         "name" => "giulio",
//         "surname" => "aricrostene",
//         "genere" => "maschio"
//         ], 
    
//         [
//         "name" => "gina",
//         "surname" => "fastidia",
//         "genere" => "femmina"
//         ], 
    
//     ];
//     foreach($array as $utente){
//         if($utente["genere"] == "maschio"){
//         echo ("Buongiorno Sig. " . $utente["name"] . " " . $utente["surname"] . "\n");
//     }else if($utente["genere"] == "femmina") {
//     echo ("Buongiorno Sig.nora " . $utente["name"] . " " . $utente["surname"] . "\n");
//     } 
//     }
   
// ES:3 - Scrivere un programma che stampi in console tutti i numeri da uno a cento. 
// Se il numero è multiplo di 3, stampare “PHP” al posto del numero; se multiplo di 5 deve stampare “JAVASCRIPT”; 
//se multiplo di 3 e 5 (15) deve stampare “HACKADEMY66".

// for($i = 0; $i <= 100; $i++){
// if($i % 15 == 0){
//     echo "PHP \n";
// }else if($i % 5 == 0 ){
//     echo "JAVASCRIPT \n";
// }else if($i % 3){
//    echo "HACKADEMY66 \n";
// }else{echo $i . "\n";}
// }


// SWitch 

// for($i = 0; $i <= 100; $i++){
//     switch($i){
//         case $i % 15 == 0 : 
//             echo "HACKADEMY66 \n";
//             break;
//             case $i % 5 == 0 : 
//                 echo "JAVASCRIPT \n";
//                 break;
//                 case $i % 3 == 0 : 
//                     echo "PHP \n";
//                     break;
//                 default : echo $i . "\n";
//     }
// }

?>