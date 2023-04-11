<?php
    header('Access-Control-Allow-Origin: *');
    $fruits = array(
        array(
            "name" => "APPLE",
            "scientificname" => "Malus domestica",
            "characteristics" => "fruitiness, acidity, sweetness, juiciness, crispness, hardness, toughness, mealiness, vegetativeness, and astringency",
            "originated" => "central Asia east of the Caspian Sea",
            "harvestseason" => "September",
            "benefits" => array("benefits_1" => "Could be good for your heart.", "benefits_2" => "They're rich in fiber and antioxidants", "benefits_3" => "lower risk of heart disease, and cancer.", "benefits_4" => "Could help fight asthma"),
            "image" => "https://media.istockphoto.com/id/184276818/photo/red-apple.jpg?s=170667a&w=0&k=20&c=QDuN_TDSFCW2m-np7xPWPslXyrhwtIYP9Wq6W3NysPc="
        ),
    
        array(
            "name" => "PEAR",
            "scientificname" => "Pyrus",
            "characteristics" => "sweet, juicy fruit that is narrow near its stalk, and wider and rounded at the bottom.",
            "originated" => "China and Asia Minor until the Middle East.",
            "harvestseason" => "from late August to early October.",
            "benefits" => array("benefits_1" => "good source of fiber", "benefits_2" => "pears are also high in vitamins C and K", "benefits_3" => "Have anti-inflammatory properties", "benefits_4" => "May offer anticancer effects."),
            "image" => "https://static.libertyprim.com/files/familles/poire-large.jpg?1569271830"
        ),
        array(
            "name" => "CHERRIES",
            "scientificname" => "Prunus avium",
            "characteristics" => "The fruit is a fleshy drupe (stone fruit) that is generally heart-shaped to nearly globular.",
            "originated" => "Asia Minor in the fertile areas between the Black and Caspian seas and were likely brought to Europe by birds.",
            "harvestseason" => "May to July.",
            "benefits" => array("benefits_1" => "low in calories and chock full of fiber", "benefits_2" => "You'll get vitamins C, A, and K.", "benefits_3" => "the essential nutrient choline", "benefits_4" => "May benefit heart health"),
            "image" => "https://cdn.britannica.com/60/174560-050-5A33606F/cherries-Cluster.jpg"
        ),
        array(
            "name" => "ALMOND",
            "scientificname" => "Prunus amygdalus",
            "characteristics" => "almond is a stone fruit (drupe) and consists of three layers.",
            "originated" => "Western and Central Asia",
            "harvestseason" => "between February and April",
            "benefits" => array("benefits_1" => "Lower Blood Pressure", "benefits_2" => "protection against heart disease", "benefits_3" => "Essential Vitamins, Minerals, and Fiber.", "benefits_4" => "Almonds are rich in valuable nutrients for your body"),
            "image" => "https://www.herbazest.com/imgs/7/d/8/57664/almond.jpg"
        ),
        array(
            "name" => "WATERMELON",
            "scientificname" => "Benincasa hispida",
            "characteristics" => "Winter melons are large fruits, averaging 15 to 80 centimeters in length, and have a bulbous, round to oblong shape with blunt, curved ends.",
            "originated" => "parts of Southern Asia",
            "harvestseason" => "May to September",
            "benefits" => array("benefits_1" => "It helps improve digestion", "benefits_2" => "lower cholesterol", "benefits_3" => "lower your ability to absorb fat", "benefits_4" => "Improves energy levels."),
            "image" => "https://www.gardeningknowhow.com/wp-content/uploads/2021/05/whole-and-slices-watermelon.jpg"
        ),
    );

    echo json_encode(array("fruits" => $fruits));
    
?>