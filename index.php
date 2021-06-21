<?php include("php/conn.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Robot Control Website</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    
    <div class="ctrlP">
        Control Panel
    </div>

    <!-- Start Box  -->
    <form class="box" method="POST">

        <!-- Start Engine 1  -->
        <div id="EngineA">Engine 1</div>
        <div class="boxA">
            <div class="sliderA">
                <input id="inputA" name="inputA" type="range" min="0" max="180" value="90">
            </div>
            <div id="valueA">90</div>
        </div>
        <!-- End Engine 1  -->

        <!-- Start Engine 2  -->
        <div id="EngineB">Engine 2</div>
        <div class="boxB">
            <div class="sliderB">
                <input id="inputB" name="inputB" type="range" min="0" max="180" value="90">
            </div>
            <div id="valueB">90</div>
        </div>
        <!-- End Engine 2  -->

        <!-- Start Engine 3  -->
        <div id="EngineC">Engine 3</div>
        <div class="boxC">
            <div class="sliderC">
                <input id="inputC" name="inputC" type="range" min="0" max="180" value="90">
            </div>
            <div id="valueC">90</div>
        </div>
        <!-- End Engine 3  -->

        <!-- Start Engine 4  -->
        <div id="EngineD">Engine 4</div>
        <div class="boxD">
            <div class="sliderD">
                <input id="inputD" name="inputD" type="range" min="0" max="180" value="90">
            </div>
            <div id="valueD">90</div>
        </div>
        <!-- End Engine 4  -->

        <!-- Start Engine 5  -->
        <div id="EngineE">Engine 5</div>
        <div class="boxE">
            <div class="sliderE">
                <input id="inputE" name="inputE" type="range" min="0" max="180" value="90">
            </div>
            <div id="valueE">90</div>
        </div>
        <!-- End Engine 5  -->

        <!-- Start Engine 6  -->
        <div id="EngineF">Engine 6</div>
        <div class="boxF">
            <div class="sliderF">
                <input id="inputF" name="inputF" type="range" min="0" max="180" value="90">
            </div>
            <div id="valueF">90</div>
        </div>
        <!-- End Engine 6  -->

        <div class="boxG">
            <button type="submit" name="SAVE" class="btnS">
                SAVE
            </button>
            <button type="submit" name="START" class="btnS">
                START
            </button>
        </div>
    </form>
    <!-- End Box  -->

    <script src="js/main.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/plg.js"></script>
</body>

</html>