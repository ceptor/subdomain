<ul class="course">

    <?php

    include('core.php');

    global $settings;

    if (!isset ($settings)) $settings = array();

    if (is_file('settings.pml')) {
        $fContent = unserialize(readSetingsFromFile('settings.pml'));
        if (!is_array($fContent)) $fContent = array();
        $settings = array_merge($settings, $fContent);
    }

    $servername = $settings['servername'];
    $username = $settings['username'];
    $password = decodeDBPassword($settings['password']);
    $dbname = $settings['dbname'];


    /*$servername = "localhost";
    $username = "root";
    $password = encodeDBPassword("");
    $dbname = "futedu";



    $settings['servername'] = $servername;
    $settings['username'] = $username;
    $settings['password'] = $password;
    $settings['dbname'] = $dbname;


    if(@saveSettings2File('settings.pml', serialize($settings))){
        echo 'file write successful - aaaaaaaaaaaaaaaaaaaaaa';
    } else {
        echo 'error writing file - bbbbbbbbbbbbbbbbbbbbbb';
    }*/


    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM  `test` LIMIT 0 , 30";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc())
        {
            print"<li>";
            /*echo "<img src='../img/math_course.jpg'>";
            echo '<span class="course_name">Proin lacinia turpis ut ornare efficitur</span>';
            echo '<span class="course_desc">Sed ante enim, lobortis eu est non, lobortis luctus risus. Fusce dictum lobortis quam</span>';*/


            echo '<img src="'.$row["img_path"].'">';
            echo '<span class="course_name">'.$row["name"].'</span>';
            echo '<span class="course_desc">'.$row["desc"].'</span>';


            print"</li>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>

    <!--Template-->

    <!--<li>
        <img src="../img/math_course.jpg">
        <span class="course_name">Proin lacinia turpis ut ornare efficitur</span>
        <span class="course_desc">Sed ante enim, lobortis eu est non, lobortis luctus risus. Fusce dictum lobortis quam</span>
    </li>-->

</ul>

