<?php 
    $colleges = [
        "KIST",
        "St. Xavier's",
        "Ace",
        "NCCS",
        "Islington",
        "KCM",
        "Global College",
        "Chelsea",
        "Trinity",
        "Medhavi", 
        "Southwestern",
        "Premier",
        "LBEF",
        "Padma Kanya",
        "Uniglobe"
    ];

    echo "\n****** College Finder ********\n";
    $collegeName = readline("\nEnter a college name in Kathmandu metro: ");

    $flag = false;
    foreach($colleges as $college) {
        if($college == $collegeName) {
            $flag = true;
            break;
        }
    }

    if($flag) {
        echo "College Found! College is in Kathmandu Metro!\n";
    } else {
        echo "College not Found! The College is not in Kathmandu Metro!\n";
    }
?>