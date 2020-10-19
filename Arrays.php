<?php
    /*
    ==================   ARRAYS  ====================
    My name is Iyanuoluwa Makinde learning arrays 
    */


    //  *************** Numeric Arrays  ***************
    echo "<h1>Numeric Arrays</h1>";
    // $name1 = "Lola";
    // $name2 = "Funmbi";
    // $name3= "Shola";
    // $name4 = "Whizzy";


    //array declaration
    $Usernames = array("Lola", "Funmbi", "Shola", "Whizzy", "Ife");

    echo "The 1st item in our array is: ".$Usernames[0]."<br/>";
    echo "The 2nd item in our array is: ".$Usernames[1]."<br/>";
    echo "The 3rd item in our array is: ".$Usernames[2]."<br/>";
    echo "The 4th item in our array is: ".$Usernames[3]."<br/>";
    echo "The 5th item in our array is: ".$Usernames[4]."<br/>";


    // // How to change the value of a numeric array.
     $Usernames[3] = "Kiki";
    echo $Usernames[4];


    //  *************** Associative Arrays  ***************
    echo "<h1>Associative Arrays</h1>";

    $password = array(
                        "$Usernames[0]" => "Lol123",
                        "$Usernames[1]" => "Nmi54.9",
                        "$Usernames[2]" => "shol89",
                        "$Usernames[3]" => "@zzygit"
                    );

    echo "$Usernames[2]'s password is <strong>".$password["$Usernames[2]"]."</strong>";




    //  *************** Multi-dimensional Arrays  ***************
    echo "<h1>Multi-dimensional Arrays</h1>";

    $Classmates = array(
                            //Names
                            "Names"    =>  array("Salako", "Samuel", "Hikmat"),
                            //Age
                            "Age"      =>  array("23", "25", "26"),
                            //Interest
                            "Interest"     =>  array("Art-works", "Outdoor-sports", "Engineering")
    );



    // echo $Classmates["Age"][1];

    // Attendance
    echo "$Usernames[3] is the friend of <strong>".($Classmates["Names"][2])."</strong><br/>";
    echo "$Usernames[3] is the friend of <strong>".($Classmates["Names"][2]) "and they are both"($Classmates["age"][2]) "and love"($Classmates["Names"][1])"</strong><br/>";
    

?> 