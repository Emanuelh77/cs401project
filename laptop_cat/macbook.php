<html>
        <head>
                <link rel="stylesheet" type="text/css" href="../style.css" media="screen"/>
        </head>
        <header>
                <div class="splitleft">
                        <title>TCET</title>
                        <img class="logo" src="../main_photos/TCET-logo.png" alt="TCET logo">
                </div>              
        </header>
        <body>

            <table>
                <tr>
                    <th>Overall Rating</th>
                    <th>Processing Power</th>
                    <th>Affordability</th>
                    <th>Battery Life</th>
                    <th>Design</th>
                </tr>
                <tr>
            <?php

                require '../include/dbaccess.php';
                $id = "macbook";
                $query = ("SELECT * FROM `Items` WHERE ItemName = '$id'");
                $result = mysqli_query($conn, $query);
                while($row = mysqli_fetch_assoc($result)){
                    $or = $row['OverallRating'];
                    $pp = $row['ProcessingPower'];
                    $af = $row['Affordability'];
                    $bl = $row['BatteryLife'];
                    $de = $row['Design'];
                }

                echo "<td>$or</td>";
                echo "<td>$pp</td>";
                echo "<td>$af</td>";
                echo "<td>$bl</td>";
                echo "<td>$de</td>";


            ?>
                </tr>
            </table>
        </body>
</html>