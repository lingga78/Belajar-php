<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String PHP</title>
</head>
<body>
    <h1>Berlatih String PHP</h1>
    <?php   
        /* 
            SOAL NO 1
            Tunjukan dengan menggunakan echo berapa panjang dari string yang diberikan berikut! 
            Tunjukkan juga jumlah kata di dalam kalimat tersebut! 

            Contoh: 
            $string = "PHP is never old";
            Output:
            Panjang string: 16, 
            Jumlah kata: 4 
        */
        
        echo "<h3> Soal Contoh</h3>";
        // --------------------------------------- //
        // ini contoh
        $string = "PHP is never old";
        echo "Panjang string: ". strlen($string);
        echo "<br>";
        echo "Jumlah kata: " . str_word_count($string); 
        // --------------------------------------- //

        
        echo "<h3> Soal No 1</h3>";

        $first_sentence = "Hello PHP!" ; // Panjang string 10, jumlah kata: 2
        echo "Panjang string: ". strlen($first_sentence);
        echo " Jumlah kata: " . str_word_count($first_sentence);
        echo " Dari kata Hello PHP";
        echo "<br>";
        $second_sentence = "I'm ready for the challenges"; // Panjang string: 28,  jumlah kata: 5
        echo "Panjang string: ". strlen($second_sentence);
        echo " Jumlah kata: " . str_word_count($second_sentence);
        echo " Dari kata I'm ready for the challenges";


        echo "<h3> Soal No 2</h3>";
        /* 
            SOAL NO 2
            Mengambil kata pada string dan karakter-karakter yang ada di dalamnya. 
            
            
        */
        $string2 = "I love PHP";
        
        echo "<label>String: </label> \"$string2\" <br>";
        echo "Kata pertama: " . substr($string2, 0, 1) . "<br>" ; 
        // Lanjutkan di bawah ini
        echo "Kata kedua: " . substr($string2, 1, 6) ;
        echo "<br> Kata Ketiga: " . substr($string2, 6, 10) . "<br>";
        echo "<h3> Soal No 3 </h3>";
        /*
            SOAL NO 3
            Mengubah karakter atau kata yang ada di dalam sebuah string.
        */
        $string3 = "PHP is old but Good!";
        echo "String: \"$string3\" <br>";
        echo str_replace("Good", "awesome", "PHP is old but Good!") ;
        // OUTPUT : "PHP is old but awesome"

    ?>
</body>
</html>
