<!DOCTYPE html>
<?php
    // Problem 1
	$miles_prob1 = isset($_POST['miles'])? $_POST['miles'] : 0;
	
	$feet_prob1 = $miles_prob1 * 5280;
	$inch_prob1 = $feet_prob1 * 12;
	$cm_prob1 = $inch_prob1 * 2.54;
	$km_prob1 = $cm_prob1/100000;

    //Problem 2
    $cm_prob2 = isset($_POST['cm'])? $_POST['cm'] : 0;
	$inch_prob2 = $cm_prob2 / 2.54;
	$feet_prob2 = (int)($inch_prob2 / 12);
	$rInch_prob2 = ($inch_prob2/12 - $feet_prob2) * 12;

    //Problem 3
    $pounds_prob3 = isset($_POST['pounds'])? $_POST['pounds'] : 0;
	$grams_prob3 = $pounds_prob3 * 454;

    //Problem 4
	$hours_prob4 = isset($_POST['hours'])? $_POST['hours'] : 0;
	$weeks_prob4 = (int) ($hours_prob4/(24 * 7));
	$days_prob4 = (int)(($hours_prob4/(24 * 7) - $weeks_prob4) * 7);
	$rHours_prob4 = ((($hours_prob4/(24 * 7) - $weeks_prob4) * 7) - $days_prob4) * 24;

    //Problem 5
    $seconds_prob5 = isset($_POST['seconds'])? $_POST['seconds'] : 0;
	$hours_prob5 = (int)($seconds_prob5/(60 * 60));
	$minutes_prob5 = (int)(($seconds_prob5/(60 * 60) - $hours_prob5) * 60);
	$rSeconds_prob5 = ((($seconds_prob5/(60 * 60) - $hours_prob5) * 60) - $minutes_prob5) * 60;

    //Problem 6
    $days_prob6 = isset($_POST['days'])? $_POST['days'] : 0;
	$years_prob6 = (int)($days_prob6 / 365);
	$temp_prob6 = $days_prob6 % 365;
	$months_prob6 = (int)($temp_prob6 / 30);
	$rDays_prob6 = $temp_prob6 % 30;

    //Problem 7
    $number_prob7 = isset($_POST['number'])? $_POST['number'] : 0;
	$double_prob7 = $number_prob7 * 2;
	$square_prob7 = $number_prob7 * $number_prob7;
	$half_prob7 = $number_prob7/2;

    //Problem 8
    //Calculation for first integer
	$number1_prob8 = isset($_POST['number1'])? $_POST['number1'] : 0;
	$double_prob8 = $number1_prob8 * 2;
	$square_prob8 = $number1_prob8 * $number1_prob8;
	$half_prob8 = $number1_prob8/2;
	$quarter_prob8 = $number1_prob8/4;

    //Problem 8
	//Calculation for second integer
	$number2_prob8 = isset($_POST['number2'])? $_POST['number2'] : 0;
	$double2_prob8 = $number2_prob8 * 2;
	$square2_prob8 = $number2_prob8 * $number2_prob8;
	$half2_prob8 = $number2_prob8/2;
	$quarter2_prob8 = $number2_prob8/4;

    //Problem 9
    $pint_prob9 = isset($_POST['pint'])? $_POST['pint'] : 0;
	$gills_prob9 = $pint_prob9 * 4;
	$quarts_prob9 = $pint_prob9 / 2;
	$gallon_prob9 = $pint_prob9 / 8;

    //Problem 10
    $radius_prob10 = isset($_POST['radius'])? $_POST['radius'] : 0;
	$diameter_prob10 = $radius_prob10 * 2;
	$circumference_prob10 = M_PI * $diameter_prob10;
	$area_prob10 = M_PI * ($radius_prob10 * $radius_prob10);

    //Problem 11
    $diameter_prob11 = isset($_POST['diameter'])? $_POST['diameter'] : 0;
	$radius_prob11 = $diameter_prob11 / 2;
	$surArea_prob11 = 4 * M_PI * ($radius_prob11 * $radius_prob11);
	$circumference_prob11 = M_PI * $diameter_prob11;
	$volume_prob11 = (4 * M_PI)/3 * ($radius_prob11 * $radius_prob11 * $radius_prob11);

    //Problem 12
    $base_prob12 = isset($_POST['base'])? $_POST['base'] : 0;
	$height_prob12 = isset($_POST['height'])? $_POST['height'] : 0;
	$triArea_prob12 = 1/2 * $base_prob12 * $height_prob12;

    //Problem 13
    $length_prob13 = isset($_POST['length'])? $_POST['length'] : 0;
	$width_prob13 = isset($_POST['width'])? $_POST['width'] : 0;
	$recArea_prob13 = $length_prob13 * $width_prob13;
	$perimeter_prob13 = 2 * ($length_prob13 + $width_prob13);

    //Problem 14
    $totalSalary_prob14 = isset($_POST['totalSalary'])? $_POST['totalSalary'] : 0;
	$daysWorked_prob14 = isset($_POST['daysWorked'])? $_POST['daysWorked'] : 1;
	$aveSalary_prob14 = $totalSalary_prob14 / $daysWorked_prob14;

    //Problem 15
    //Computation for first gasoline station
	$totalAmount1_prob15 = isset($_POST['totalAmount1'])? $_POST['totalAmount1'] : 0;
	$totalLiter1_prob15 = isset($_POST['totalLiter1'])? $_POST['totalLiter1'] : 1;
	$cost1_prob15 = $totalAmount1_prob15 / $totalLiter1_prob15;

    //Problem 15
	//Computations for second gasoline station
	$totalAmount2_prob15 = isset($_POST['totalAmount2'])? $_POST['totalAmount2'] : 0;
	$totalLiter2_prob15 = isset($_POST['totalLiter2'])? $_POST['totalLiter2'] : 1;
	$cost2_prob15 = $totalAmount2_prob15 / $totalLiter2_prob15;

    //Problem 16
    //Computation for First Grocery Store
	$totalPrice1_prob16 = isset($_POST['totalAmount1'])? $_POST['totalAmount1'] : 0;
	$totalAmount1_prob16 = isset($_POST['totalSoap1'])? $_POST['totalSoap1'] : 1;
	$price1_prob16 = $totalPrice1_prob16 / $totalAmount1_prob16;

    //Problem 16
	//Computation for Second Grocery Store
	$totalPrice2_prob16 = isset($_POST['totalAmount2'])? $_POST['totalAmount2'] : 0;
	$totalAmount2_prob16 = isset($_POST['totalSoap2'])? $_POST['totalSoap2'] : 1; 
	$price2_prob16 = $totalPrice2_prob16 / $totalAmount2_prob16;

    //Problem 16
	//Computation for Third Grocery Store
	$totalPrice3_prob16 = isset($_POST['totalAmount3'])? $_POST['totalAmount3'] : 0; 
	$totalAmount3_prob16 = isset($_POST['totalSoap3'])? $_POST['totalSoap3'] : 1;
	$price3_prob16 = $totalPrice3_prob16 / $totalAmount3_prob16;

    //Problem 17
    $movie_title_prob17 = isset($_POST['movie_title'])? $_POST['movie_title'] : "";
	$adult_ticketP_prob17 = isset($_POST['adult_ticket'])? $_POST['adult_ticket'] : 0;
	$child_ticketP_prob17 = isset($_POST['child_ticket'])? $_POST['child_ticket'] : 0;
	$total_adultT_prob17 = isset($_POST['total_adult'])? $_POST['total_adult'] : 0;
	$total_childT_prob17 = isset($_POST['total_child'])? $_POST['total_child'] : 0;
	$percentage_gross_prob17 = isset($_POST['percentage_gross'])? $_POST['percentage_gross'] : 0;
	$totalPrice_adult_prob17 = $adult_ticketP_prob17 * $total_adultT_prob17;
	$totalPrice_child_prob17 = $child_ticketP_prob17 * $total_childT_prob17;
	$totalPrice_prob17 = $totalPrice_adult_prob17 + $totalPrice_child_prob17;
	$donated_prob17 = $totalPrice_prob17 * ($percentage_gross_prob17/100);

    //Problem 18
    $m_val_prob18 = isset($_POST['m_val'])? $_POST['m_val'] : 0;
	$n_val_prob18 = isset($_POST['n_val'])? $_POST['n_val'] : 0;
	$a_prob18 = ($m_val_prob18 * $m_val_prob18) - ($n_val_prob18 * $n_val_prob18);
	$b_prob18 = 2 * $m_val_prob18 * $n_val_prob18;
	$c_prob18 = ($m_val_prob18 * $m_val_prob18) + ($n_val_prob18 * $n_val_prob18);

    //Problem 19
    $candidate1_name_prob19 = isset($_POST['candidate_one'])? $_POST['candidate_one'] : "";
	$candidate2_name_prob19 = isset($_POST['candidate_two'])? $_POST['candidate_two'] : "";
	$candidate3_name_prob19 = isset($_POST['candidate_three'])? $_POST['candidate_three'] : "";
	$candidate4_name_prob19 = isset($_POST['candidate_four'])? $_POST['candidate_four'] : "";
	$candidate5_name_prob19 = isset($_POST['candidate_five'])? $_POST['candidate_five'] : "";
	$votes1_prob19 = isset($_POST['votes_one'])? $_POST['votes_one'] : 1;
	$votes2_prob19 = isset($_POST['votes_two'])? $_POST['votes_two'] : 0;
	$votes3_prob19 = isset($_POST['votes_three'])? $_POST['votes_three'] : 0;
	$votes4_prob19 = isset($_POST['votes_four'])? $_POST['votes_four'] : 0;
	$votes5_prob19 = isset($_POST['votes_five'])? $_POST['votes_five'] : 0;
	$total_votes = $votes1_prob19 + $votes2_prob19 + $votes3_prob19 + $votes4_prob19 + $votes5_prob19;
	$pVotes1_prob19 = ($votes1_prob19/$total_votes) * 100;
	$pVotes2_prob19 = ($votes2_prob19/$total_votes) * 100;
	$pVotes3_prob19 = ($votes3_prob19/$total_votes) * 100;
	$pVotes4_prob19 = ($votes4_prob19/$total_votes) * 100;
	$pVotes5_prob19 = ($votes5_prob19/$total_votes) * 100;

    //Problem 20
    $numOranges_prob20 = isset($_POST['oranges'])? $_POST['oranges'] : 0;
    $numEggs_prob20 = isset($_POST['eggs'])? $_POST['eggs'] : 0;
    $numApples_prob20 = isset($_POST['apples'])? $_POST['apples'] : 0;
    $numWatermelons_prob20 = isset($_POST['watermelons'])? $_POST['watermelons'] : 0;
    $numBagels_prob20 = isset($_POST['bagel'])? $_POST['bagel'] : 0;
    $subtotal_orange_prob20 = ((int)($numOranges_prob20 / 10) * 2.99) + ($numOranges_prob20 % 10 * 0.50);
    $subtotal_eggs_prob20 = ((int)($numEggs_prob20 / 12) * 1.69) + ($numEggs_prob20 % 12 * 0.25);
    $subTotal_apples_prob20 = $numApples_prob20 * 1.00;
    $subTotal_watermelons_prob20 = ($numWatermelons_prob20 * 4.39);
    $subTotal_bagels_prob20 = ((int)($numBagels_prob20/6) * 3.50) + ($numBagels_prob20 % 6 * 0.95);
    $total_prob20 = $subTotal_apples_prob20 + $subTotal_bagels_prob20 + $subtotal_eggs_prob20 + $subtotal_orange_prob20 + $subTotal_watermelons_prob20;

    //Problem 21
    $water_consumed_prob21 = isset($_POST['water_consume'])? $_POST['water_consume'] : 0;
    $water_cost_prob21 = $water_consumed_prob21/100 * 0.021;
    $sewer_cost_prob21 = $water_consumed_prob21 * 0.001;
    $total_prob21 = $water_cost_prob21 + $sewer_cost_prob21;
    $service_charge_prob21 = $total_prob21 * 0.02;
    $total_prob21 = $total_prob21 + $service_charge_prob21;
?>

<html>
    <head>
        <meta charset ="UTF-8">
        <meta name="Carpio's and Jose's Case Study" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <title>Case Study</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    </head>

    <body>
        <div class="navbar">
            <h1><label for="home" class="home">MA+HIC</label></h1>
        </div>
        
        <input type="checkbox" id="check">
        <label for="check">
            <i class="fas fa-bars" id="btn"></i>
            <i class="fas fa-times" id="cancel"></i>
        </label>

        <input class="tabs" type="radio" name="sRadio" id="home" checked>
        <input class="tabs" type="radio" name="sRadio" id="problem1">
        <input class="tabs" type="radio" name="sRadio" id="problem2">
        <input class="tabs" type="radio" name="sRadio" id="problem3">
        <input class="tabs" type="radio" name="sRadio" id="problem4">
        <input class="tabs" type="radio" name="sRadio" id="problem5">
        <input class="tabs" type="radio" name="sRadio" id="problem6">
        <input class="tabs" type="radio" name="sRadio" id="problem7">
        <input class="tabs" type="radio" name="sRadio" id="problem8">
        <input class="tabs" type="radio" name="sRadio" id="problem9">
        <input class="tabs" type="radio" name="sRadio" id="problem10">
        <input class="tabs" type="radio" name="sRadio" id="problem11">
        <input class="tabs" type="radio" name="sRadio" id="problem12">
        <input class="tabs" type="radio" name="sRadio" id="problem13">
        <input class="tabs" type="radio" name="sRadio" id="problem14">
        <input class="tabs" type="radio" name="sRadio" id="problem15">
        <input class="tabs" type="radio" name="sRadio" id="problem16">
        <input class="tabs" type="radio" name="sRadio" id="problem17">
        <input class="tabs" type="radio" name="sRadio" id="problem18">
        <input class="tabs" type="radio" name="sRadio" id="problem19">
        <input class="tabs" type="radio" name="sRadio" id="problem20">
        <input class="tabs" type="radio" name="sRadio" id="problem21">

        <div class="sidebar">
            <header>Operations</header>
            <ul>
                <li><label for="problem1" class="problem1">Miles to Kilometer</label></li>
                <li><label for="problem2" class="problem2">Centimeter to Feet and Inches</label></li>
                <li><label for="problem3" class="problem3">Pounds to Grams</label></li>
                <li><label for="problem4" class="problem4">Hours to Weeks, Days, <br/> and Hours</label></li>
                <li><label for="problem5" class="problem5">Seconds to Hours, <br/> Minutes, and Seconds</label></li>
                <li><label for="problem6" class="problem6">Days to Years, Months, <br/> and Days</label></li>
                <li><label for="problem7" class="problem7">Integer to Double, <br/> Square, Half</label></li>
                <li><label for="problem8" class="problem8">2 Integers to Doubles, Squares, and Halves</label></li>
                <li><label for="problem9" class="problem9">Pint to Gills, Quarts, and Gallons</label></li>
                <li><label for="problem10" class="problem10">Diameter, Circumference, and Area <br/> of a Circle</label></li>
                <li><label for="problem11" class="problem11">4 Properties of a Sphere</label></li>
                <li><label for="problem12" class="problem12">Area of a Triangle</label></li>
                <li><label for="problem13" class="problem13">Area and Perimeter of Rectangle</label></li>
                <li><label for="problem14" class="problem14">Average Salary per Day</label></li>
                <li><label for="problem15" class="problem15">Gasoline Price per Liter</label></li>
                <li><label for="problem16" class="problem16">Soap Price per Piece</label></li>
                <li><label for="problem17" class="problem17">Gross Percentage <br/> Donated <br/> (Movie Tickets Sold)</label></li>
                <li><label for="problem18" class="problem18">Pythagorean Triple</label></li>
                <li><label for="problem19" class="problem19">Election: Vote Percentage Calculator</label></li>
                <li><label for="problem20" class="problem20">Grocery Reciept</label></li>
                <li><label for="problem21" class="problem21">Water and Sewer Bill</label></li>
            </ul>
            <div class="space"></div>
        </div>

        <section>
            <div class="content welcome">
                <h1>WELCOME!</h1>
                <h3>Choose what you want us to solve for today...</h3>
            </div>

            <div class="content problem-1">
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <table>
                        <tr> 
                            <th> <input type="number" name="miles" value="<?php echo $miles_prob1?>" step=".01" required> </th>
                                <td class="unit"> 
                                    miles &nbsp;
                                   </td>
                                   <td> 
                                       <input type= "submit" value="convert" id="btn1"/>
                                   </td>
                        </tr>
                        <tr>
                            <td class="unit" style="text-align:center;">
                            =
                            </td>
                        </tr>
                        <tr>
                            <td> <input type="text" name="km" value="<?php echo number_format($km_prob1, 2)?>" readonly> </td>
                                <td class="unit"> 
                                    km
                                </td>
                        </tr>
                    </table>
                </form>
            </div>

            <div class="content problem-2">
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <table>
                        <tr> 
                            <th> <input type="number" name="cm" value="<?php echo $cm_prob2 ?>" step=".01" required> </th>
                                <td class="unit"> 
                                    cm &nbsp;
                                </td>
                                <td> 
                                    <input type= "submit" value="convert"/>
                                </td>
                        </tr>
                        <tr>
                            <td class="unit" style="text-align:center;">
                            =
                            </td>
                        </tr>
                        <tr>
                            <td> <input type="text" name="feet" value="<?php echo number_format($feet_prob2, 2)?>" readonly> </td>
                                <td class="unit"> 
                                    ft
                                </td>
                                <td class="unit" style="text-align:center;"> and &nbsp; &nbsp; </td>
                            <td> <input type="text" name="inch" value="<?php echo number_format($rInch_prob2, 2)?>" readonly> </td>
                                <td class="unit"> 
                                    in
                                </td>
                        </tr>
                        
                    </table>
                </form>
            </div>

            <div class="content problem-3">
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <table>
                        <tr> 
                            <th> <input type="number" name="pounds" value="<?php echo $pounds_prob3 ?>" step=".01" required> </th>
                                <td class="unit"> 
                                    lb &nbsp;
                                </td>
                                <td> 
                                    <input type= "submit" value="convert" />
                                </td>
                        </tr>
                        <tr>
                            <td class="unit" style="text-align:center;">
                            =
                            </td>
                        </tr>
                        <tr>
                            <td> <input type="text" name="grams" value="<?php echo number_format($grams_prob3, 2)?>"readonly> </td>
                                <td class="unit"> 
                                    g
                                </td>
                        </tr>
                    </table>
                </form>
            </div>

            <div class="content problem-4">
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <table>
                        <tr> 
                            <th> <input type="number" name="hours" value="<?php echo $hours_prob4?>" required> </th>
                                <td class="unit"> 
                                    hr/s &nbsp;
                                </td>
                                <td> 
                                    <input type= "submit" value="convert" />
                                </td>
                        </tr>

                        <tr>
                            <td class="unit" style="text-align:center;">
                            =
                            </td>
                        </tr>

                        <tr>
                            <td> <input type="text" name="weeks" value="<?php echo $weeks_prob4?>" readonly> </td>
                                <td class="unit"> 
                                    week/s
                                </td>
                                <td class="unit" style="text-align:center;"> and &nbsp; &nbsp; </td>
                            <td> <input type="text" name="days" value="<?php echo $days_prob4?>" readonly> </td>
                                <td class="unit"> 
                                    day/s
                                </td>
                                <td class="unit" style="text-align:center;"> &nbsp; &nbsp; and &nbsp; &nbsp; </td>
                                <td> <input type="text" name="hours2" value="<?php echo $rHours_prob4?>" readonly> </td>
                                <td class="unit"> 
                                    hr/s
                                </td>
                        </tr>
                    </table>
                </form>
            </div>

            <div class="content problem-5">
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <table>
                        <tr> 
                            <th> <input type="number" name="seconds" value="<?php echo $seconds_prob5 ?>" required> </th>
                                <td class="unit"> 
                                    sec &nbsp;
                                </td>
                                <td> 
                                    <input type= "submit" value="convert" />
                                </td>
                        </tr>
                        <tr>
                            <td class="unit" style="text-align:center;">
                            =
                            </td>
                        </tr>
                        <tr>
                            <td> <input type="text" name="hours" value="<?php echo $hours_prob5 ?>"readonly> </td>
                                <td class="unit"> 
                                    hr/s
                                </td>
                                <td class="unit" style="text-align:center;"> and &nbsp; &nbsp; </td>
                            <td> <input type="text" name="minutes" value="<?php echo $minutes_prob5 ?>"readonly> </td>
                                <td class="unit"> 
                                    min/s
                                </td>
                                <td class="unit" style="text-align:center;"> &nbsp; &nbsp; and &nbsp; &nbsp; </td>
                                <td> <input type="text" name="seconds2" value="<?php echo floor($rSeconds_prob5) ?>"readonly> </td>
                                <td class="unit"> 
                                    sec
                                </td>
                        </tr>
                    </table>
                </form>
            </div>

            <div class="content problem-6">
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <table>
                        <tr> 
                            <th> <input type="number" name="days" value="<?php echo $days_prob6 ?>" required> </th>
                                <td class="unit"> 
                                    day/s &nbsp;
                                </td>
                                <td> 
                                    <input type= "submit" value="convert" />
                                </td>
                        </tr>
                        <tr>
                            <td class="unit" style="text-align:center;">
                            =
                            </td>
                        </tr>
                        <tr>
                            <td> <input type="text" name="years" value="<?php echo $years_prob6 ?>" readonly> </td>
                                <td class="unit"> 
                                    yr/s
                                </td>
                                <td class="unit" style="text-align:center;"> and &nbsp; &nbsp; </td>
                            <td> <input type="text" name="months" value="<?php echo $months_prob6 ?>" readonly> </td>
                                <td class="unit"> 
                                    mo/s
                                </td>
                                <td class="unit" style="text-align:center;"> &nbsp; &nbsp; and &nbsp; &nbsp; </td>
                                <td> <input type="text" name="days2" value="<?php echo $rDays_prob6 ?>" readonly> </td>
                                <td class="unit"> 
                                    day/s
                                </td>
                        </tr>
                    
                        
                    </table>
                </form>
            </div>

            <div class="content problem-7">
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <table>
                        <tr> 
                            <th> <input type="number" name="number" value="<?php echo $number_prob7?>" step=".01" required> </th>
                                <td> 
                                    <input type= "submit" stlye="width: 200px;" value="compute" />
                                </td>
                        </tr>
                        <tr>
                            <td class="unit" style="text-align: right;"> 
                                double &nbsp; &nbsp; = &nbsp; &nbsp;
                            </td>
                            <td> <input type="text" name="double" value="<?php echo $double_prob7 ?>" readonly> </td>
                        </tr>
                        <tr>
                            <td class="unit" style="text-align: right;"> 
                                square &nbsp; &nbsp; = &nbsp; &nbsp;
                            </td>
                            <td> <input type="text" name="square" value="<?php echo $square_prob7 ?>"readonly> </td>
                        </tr>
                        <tr>
                            <td class="unit" style="text-align: right;"> 
                                half &nbsp; &nbsp; = &nbsp; &nbsp;
                            </td>
                            <td> <input type="text" name="half" value="<?php echo $half_prob7 ?>"readonly> </td>
                        </tr>
                    </table>
                </form>
            </div>

            <div class="content problem-8">
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <table>
                        <tr>
                            <th></th> 
                            <th> <input type="number" name="number1" value="<?php echo $number1_prob8 ?>" step=".01" required> </th>
                            <th> <input type="number" name="number2" value="<?php echo $number2_prob8 ?>" step=".01" required> </th>
                                <td> 
                                    <input type= "submit" stlye="width: 200px;" value="compute" />
                                </td>
                        </tr>
                        <tr>
                            <td class="unit" style="text-align: right;"> 
                                half &nbsp; &nbsp; = &nbsp; &nbsp;
                            </td>
                            <td> <input type="text" name="half" value="<?php echo $half_prob8 ?>" readonly> </td>
                            <td> <input type="text" name="half2" value="<?php echo $half2_prob8 ?>" readonly> </td>
                        </tr>
                        <tr>
                            <td class="unit" style="text-align: right;"> 
                                quarter &nbsp; &nbsp; = &nbsp; &nbsp;
                            </td>
                            <td> <input type="text" name="quarter" value="<?php echo $quarter_prob8 ?>" readonly> </td>
                            <td> <input type="text" name="quarter2" value="<?php echo $quarter2_prob8 ?>" readonly> </td>
                        </tr>
                        <tr>
                            <td class="unit" style="text-align: right;"> 
                                double &nbsp; &nbsp; = &nbsp; &nbsp;
                            </td>
                            <td> <input type="text" name="double" value="<?php echo $double_prob8 ?>" readonly> </td>
                            <td> <input type="text" name="double2" value="<?php echo $double2_prob8 ?>" readonly> </td>
                        </tr>
                        <tr>
                            <td class="unit" style="text-align: right;"> 
                                square &nbsp; &nbsp; = &nbsp; &nbsp;
                            </td>
                            <td> <input type="text" name="square" value="<?php echo $square_prob8 ?>" readonly> </td>
                            <td> <input type="text" name="square2" value="<?php echo $square2_prob8 ?>" readonly> </td>
                        </tr>
                    </table>
                </form>
            </div>

            <div class="content problem-9">
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <table>
                        <tr> 
                            <th> <input type="number" name="pint" value="<?php echo $pint_prob9 ?>" step=".01" required> </th>
                                <td class="unit"> 
                                    pint &nbsp;
                                </td>
                                <td> 
                                    <input type= "submit" value="convert" />
                                </td>
                        </tr>
                        <tr>
                            <td class="unit" style="text-align:center;">
                            =
                            </td>
                        </tr>
                        <tr>
                            <td> <input type="text" name="gills" value="<?php echo $gills_prob9 ?>" readonly> </td>
                                <td class="unit"> 
                                    gills
                                </td>
                        </tr>
                        <tr>
                            <td> <input type="text" name="quarts" value="<?php echo $quarts_prob9 ?>" readonly> </td>
                                <td class="unit"> 
                                    quarts
                                </td>
                        </tr>
                        <tr>
                            <td> <input type="text" name="gallon" value="<?php echo $gallon_prob9 ?>" readonly> </td>
                                <td class="unit"> 
                                    gallon
                                </td>
                        </tr>
                    </table>
                </form>
            </div>

            <div class="content problem-10">
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <table>
                        <tr> 
                            <td class="unit" style="text-align: right;"> 
                                radius &nbsp; &nbsp; = &nbsp; &nbsp;
                            </td>
                            <td> <input type="number" name="radius" value="<?php echo $radius_prob10 ?>" step=".01" required> </td>
                                <td> 
                                    <input type= "submit" stlye="width: 200px;" value="compute" />
                                </td>
                        </tr>
                        <tr>
                            <td class="unit" style="text-align: right;"> 
                                diameter &nbsp; &nbsp; = &nbsp; &nbsp;
                            </td>
                            <td> <input type="text" name="diameter" value="<?php echo number_format($diameter_prob10, 2)?>" readonly> </td>
                        </tr>
                        <tr>
                            <td class="unit" style="text-align: right;"> 
                                circumference &nbsp; &nbsp; = &nbsp; &nbsp;
                            </td>
                            <td> <input type="text" name="circumference" value="<?php echo number_format($circumference_prob10, 2)?>" readonly> </td>
                        </tr>
                        <tr>
                            <td class="unit" style="text-align: right;"> 
                                area &nbsp; &nbsp; = &nbsp; &nbsp;
                            </td>
                            <td> <input type="text" name="area" value="<?php echo number_format($area_prob10, 2)?>" readonly> </td>
                        </tr>
                    </table>
                </form>
            </div>

            <div class="content problem-11">
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <table>
                        <tr> 
                            <td class="unit" style="text-align: right;"> 
                                diameter &nbsp; &nbsp; = &nbsp; &nbsp;
                            </td>
                            <td> <input type="number" name="diameter" value="<?php echo $diameter_prob11 ?>" step=".01" required> </td>
                                <td> 
                                    <input type= "submit" stlye="width: 200px;" value="compute" />
                                </td>
                        </tr>
                        <tr>
                            <td class="unit" style="text-align: right;"> 
                                radius &nbsp; &nbsp; = &nbsp; &nbsp;
                            </td>
                            <td> <input type="text" name="radius" value="<?php echo number_format($radius_prob11, 2) ?>" readonly> </td>
                        </tr>
                        <tr>
                            <td class="unit" style="text-align: right;"> 
                                surface area &nbsp; &nbsp; = &nbsp; &nbsp;
                            </td>
                            <td> <input type="text" name="surface area" value="<?php echo number_format($surArea_prob11, 2) ?>" readonly> </td>
                        </tr>
                        <tr>
                            <td class="unit" style="text-align: right;"> 
                                circumference &nbsp; &nbsp; = &nbsp; &nbsp;
                            </td>
                            <td> <input type="text" name="circumference" value="<?php echo number_format($circumference_prob11, 2) ?>" readonly> </td>
                        </tr>
                        <tr>
                            <td class="unit" style="text-align: right;"> 
                                volume &nbsp; &nbsp; = &nbsp; &nbsp;
                            </td>
                            <td> <input type="text" name="volume" value="<?php echo number_format($volume_prob11, 2) ?>" readonly> </td>
                        </tr>
                    </table>
                </form>
            </div>

            <div class="content problem-12">
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <table>
                        <tr> 
                            <td class="unit" style="text-align: right;"> 
                                base &nbsp; &nbsp; = &nbsp; &nbsp;
                            </td>
                            <td> <input type="number" name="base" value="<?php echo $base_prob12 ?>" step=".01" required> </td>
                            <td class="unit" style="text-align: right;"> 
                                &nbsp; &nbsp; height &nbsp; &nbsp; = &nbsp; &nbsp;
                            </td>
                            <td> <input type="number" name="height" value="<?php echo $height_prob12 ?>" step=".01" required> </td>
                                <td> 
                                    <input type= "submit" stlye="width: 200px;" value="compute" />
                                </td>
                        </tr>
                        <tr>
                            <td class="unit" style="text-align: right;"> 
                                area &nbsp; &nbsp; = &nbsp; &nbsp;
                            </td>
                            <td> <input type="text" name="area" value="<?php echo number_format($triArea_prob12, 2) ?>" readonly> </td>
                        </tr>
                    </table>
                </form>
            </div>

            <div class="content problem-13">
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <table>
                        <tr> 
                            <td class="unit" style="text-align: right;"> 
                                length &nbsp; &nbsp; = &nbsp; &nbsp;
                            </td>
                            <td> <input type="number" name="length" value="<?php echo $length_prob13 ?>" step=".01" required> </td>
                            <td class="unit" style="text-align: right;"> 
                                &nbsp; &nbsp; width &nbsp; &nbsp; = &nbsp; &nbsp;
                            </td>
                            <td> <input type="number" name="width" value="<?php echo $width_prob13 ?>" step=".01" required> </td>
                                <td> 
                                    <input type= "submit" stlye="width: 200px;" value="compute" />
                                </td>
                        </tr>
                        <tr>
                            <td class="unit" style="text-align: right;"> 
                                area &nbsp; &nbsp; = &nbsp; &nbsp;
                            </td>
                            <td> <input type="text" name="area" value="<?php echo number_format($recArea_prob13, 2) ?>" readonly> </td>
                        </tr>
                        <tr>
                            <td class="unit" style="text-align: right;"> 
                                perimeter &nbsp; &nbsp; = &nbsp; &nbsp;
                            </td>
                            <td> <input type="text" name="perimeter" value="<?php echo number_format($perimeter_prob13, 2) ?>" readonly> </td>
                        </tr>
                    </table>
                </form>
            </div>

            <div class="content problem-14">
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <table>
                        <tr> 
                            <td class="unit" style="text-align: right;"> 
                                total salary &nbsp; &nbsp; = &nbsp; &nbsp;
                            </td>
                            <td> <input type="number" name="totalSalary" value="<?php echo $totalSalary_prob14 ?>" step=".01" required> </td>
                        </tr>
                        <tr>
                            <td class="unit" style="text-align: right;"> 
                            no. of days worked &nbsp; &nbsp; = &nbsp; &nbsp;
                            </td>
                            <td> <input type="number" name="daysWorked" value="<?php echo $daysWorked_prob14 ?>" required> </td>
                                <td> 
                                    <input type= "submit" stlye="width: 200px;" value="compute" />
                                </td>
                        </tr>
                        <tr>
                            <td class="unit" style="text-align: right;"> 
                                ave salary per day &nbsp; &nbsp; = &nbsp; &nbsp;
                            </td>
                            <td> <input type="text" name="salary per day" value="<?php echo number_format($aveSalary_prob14, 2)?>" readonly> </td>
                        </tr>
                    </table>
                </form>
            </div>

            <div class="content problem-15">
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <table>
                        <tr>
                            <td class="unit" colspan="4">Gas Station 1</td>
                        </tr>
                        <tr> 
                            <td class="unit" style="text-align: right;"> 
                                total amount &nbsp; &nbsp; = &nbsp; &nbsp;
                            </td>
                            <td> <input type="number" name="totalAmount1" value="<?php echo $totalAmount1_prob15 ?>" step=".01" required> </td>
                            <td class="unit" style="text-align: right;"> 
                                &nbsp; &nbsp; total liter of gas &nbsp; &nbsp; = &nbsp; &nbsp;
                            </td>
                            <td> <input type="number" name="totalLiter1" value="<?php echo $totalLiter1_prob15 ?>" step=".01" required> </td>
                        <tr></tr>
                        <tr>
                            <td class="unit" colspan="4" style="padding-top: 25px;">Gas Station 2</td>
                        </tr>
                        <tr> 
                            <td class="unit" style="text-align: right;"> 
                                total amount &nbsp; &nbsp; = &nbsp; &nbsp;
                            </td>
                            <td> <input type="number" name="totalAmount2" value="<?php echo $totalAmount2_prob15 ?>" step=".01" required> </td>
                            <td class="unit" style="text-align: right;"> 
                                &nbsp; &nbsp; total liter of gas &nbsp; &nbsp; = &nbsp; &nbsp;
                            </td>
                            <td> <input type="number" name="totalLiter2" value="<?php echo $totalLiter2_prob15 ?>" step=".01" required> </td>
                                <td> 
                                    <input type= "submit" value="compute" />
                                </td>
                        </tr>
                        <tr>
                            <td colspan="5" style="padding-top: 30px;"><hr/></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="unit" style="padding-top: 30px;"> 
                                Gas Station 1
                            </td>
                            <td colspan="2" class="unit" style="padding-top: 30px;"> 
                                &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; Gas Station 2
                            </td>
                        </tr>
                        <tr>
                            <td class="unit" style="text-align: right;"> 
                                price per liter &nbsp; &nbsp; = &nbsp; &nbsp;
                            </td>
                            <td> <input type="text" name="price per liter1" value="<?php echo number_format($cost1_prob15, 2)?>" readonly> </td>
                            <td class="unit" style="text-align: right;"> 
                                price per liter &nbsp; &nbsp; = &nbsp; &nbsp;
                            </td>
                            <td> <input type="text" name="price per liter2" value="<?php echo number_format($cost2_prob15, 2)?>" readonly> </td>
                        </tr>
                    </table>
                </form>
            </div>

            <div class="content problem-16" style="margin-top: 100px;">
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <table>
                        <tr>
                            <td class="unit" colspan="4">Grocery 1</td>
                        </tr>
                        <tr> 
                            <td class="unit" style="text-align: right;"> 
                                total purchase &nbsp; &nbsp; = &nbsp; &nbsp;
                            </td>
                            <td> <input type="number" name="totalAmount1" value="<?php echo $totalPrice1_prob16 ?>" step=".01" required> </td>
                            <td class="unit" style="text-align: right;"> 
                                &nbsp; &nbsp; total number of soaps &nbsp; &nbsp; = &nbsp; &nbsp;
                            </td>
                            <td> <input type="number" name="totalSoap1" value="<?php echo $totalAmount1_prob16 ?>" required> </td>
                        <tr></tr>
                        <tr>
                            <td class="unit" colspan="4" style="padding-top: 10px;">Grocery 2</td>
                        </tr>
                        <tr> 
                            <td class="unit" style="text-align: right;"> 
                                total purchase &nbsp; &nbsp; = &nbsp; &nbsp;
                            </td>
                            <td> <input type="number" name="totalAmount2" value="<?php echo $totalPrice2_prob16 ?>" step=".01" required> </td>
                            <td class="unit" style="text-align: right;"> 
                                &nbsp; &nbsp; total number of soaps &nbsp; &nbsp; = &nbsp; &nbsp;
                            </td>
                            <td> <input type="number" name="totalSoap2" value="<?php echo $totalAmount2_prob16 ?>" required> </td>
                        <tr></tr>
                        <tr>
                            <td class="unit" colspan="4" style="padding-top: 10px;">Grocery 3</td>
                        </tr>
                        <tr> 
                            <td class="unit" style="text-align: right;"> 
                                total purchase &nbsp; &nbsp; = &nbsp; &nbsp;
                            </td>
                            <td> <input type="number" name="totalAmount3" value="<?php echo $totalPrice3_prob16 ?>" step=".01" required> </td>
                            <td class="unit" style="text-align: right;"> 
                                &nbsp; &nbsp; total number of soaps &nbsp; &nbsp; = &nbsp; &nbsp;
                            </td>
                            <td> <input type="number" name="totalSoap3" value="<?php echo $totalAmount3_prob16 ?>" required> </td>
                                <td> 
                                    <input type= "submit" value="compute" />
                                </td>
                        </tr>
                        <tr>
                            <td colspan="5" style="padding-top: 30px;"><hr/></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="unit" style="padding-top: 30px; text-align: left;"> 
                                &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; Grocery 1
                            </td>
                            <td class="unit" style="padding-top: 30px; text-align: left;"> 
                                &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; Grocery 2
                            </td>
                            <td colspan="2" class="unit" style="padding-top: 30px; text-align: center;"> 
                                Grocery 3
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="unit" style="text-align: left;"> 
                                price per soap = &nbsp; &nbsp;
                            </td>
                            <td class="unit" style="text-align: left;"> 
                                price per soap = &nbsp; &nbsp;
                            </td>
                            
                            <td colspan="2" class="unit" style="text-align: center;"> 
                                price per soap = &nbsp; &nbsp;
                            </td>
                        
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: left;"> <input type="text" name="price per soap1" value="<?php echo number_format($price1_prob16, 2)?>" readonly> </td>
                            <td style="text-align: left;"> <input type="text" name="price per soap2" value="<?php echo number_format($price2_prob16, 2)?>" readonly> </td>
                            <td colspan="2" style="text-align: center;"> <input type="text" name="price per soap3" value="<?php echo number_format($price3_prob16, 2)?>" readonly> </td>
                        </tr>
                    </table>
                </form>
            </div>

            <div class="content problem-17" style="margin-top: 100px; border: none;">
                <table>
                    <tr>
                        <td style="padding-right: 30px;">
                                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                                    <table style="padding: 40px; border: 5px solid; border-color: #03045E;">
                                        <tr> 
                                            <td class="unit" style="text-align: right;"> 
                                                Movie title </td>	
                                            <td class="unit">=</td>
                                            <td style="padding-left: 10px"> <input type="text" name="movie_title" value="<?php echo $movie_title_prob17 ?>" required> </td>
                                        </tr>
                                        <tr> 
                                            <td class="unit" style="text-align: right;"> 
                                                Adult ticket price </td>	
                                            <td class="unit">=</td>
                                            <td style="padding-left: 10px"> <input type="number" name="adult_ticket" value="<?php echo $adult_ticketP_prob17 ?>" step=".01" required> </td>
                                        </tr>
                                        <tr> 
                                            <td class="unit" style="text-align: right;"> 
                                                Child ticket price </td>	
                                            <td class="unit">=</td>
                                            <td style="padding-left: 10px"> <input type="number" name="child_ticket" value="<?php echo $child_ticketP_prob17 ?>" step=".01" required> </td>
                                        </tr>
                                        <tr> 
                                            <td class="unit" style="text-align: right;"> 
                                                Total adult ticket sold </td>	
                                            <td class="unit">=</td>
                                            <td style="padding-left: 10px"> <input type="number" name="total_adult" value="<?php echo $total_childT_prob17 ?>" required> </td>
                                        </tr>
                                        <tr> 
                                            <td class="unit" style="text-align: right;"> 
                                                Total child ticket sold </td>	
                                            <td class="unit">=</td>
                                            <td style="padding-left: 10px"> <input type="number" name="total_child" value="<?php echo $total_childT_prob17 ?>" required> </td>
                                        </tr>
                                        <tr> 
                                            <td class="unit" style="text-align: right;"> 
                                                % of the gross to be donated </td>	
                                            <td class="unit">=</td>
                                            <td style="padding-left: 10px"> <input type="number" name="percentage_gross" value="<?php echo $percentage_gross_prob17 ?>" step=".01" required> % </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" style="text-align: center; padding-top: 6px;"> 
                                                <input type= "submit" value="compute" />
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                        </td>
                        
                        <td>
                                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                                    <table style="padding: 40px; border: 5px solid; border-color: #03045E;">
                                        <tr> 
                                            <td class="unit" style="text-align: left;"> 
                                                Movie title
                                            </td>	
                                            <td class="unit">:</td>
                                            <td class="unit" style="padding-left: 10px">
                                                <?php echo $movie_title_prob17 ?> 
                                            </td>
                                        </tr>
                                        <tr> 
                                            <td class="unit" style="text-align: left;"> 
                                                Adult ticket price
                                            </td>	
                                            <td class="unit">:</td>
                                            <td class="unit" style="padding-left: 10px">
                                                <?php echo number_format($adult_ticketP_prob17, 2) ?>
                                            </td>
                                        </tr>
                                        <tr> 
                                            <td class="unit" style="text-align: left;"> 
                                                Child ticket price 
                                            </td>	
                                            <td class="unit">:</td>
                                            <td class="unit" style="padding-left: 10px">
                                                <?php echo number_format($child_ticketP_prob17, 2) ?>
                                            </td>
                                        </tr>
                                        <tr> 
                                            <td class="unit" style="text-align: left;"> 
                                                Total adult ticket sold 
                                            </td>	
                                            <td class="unit">:</td>
                                            <td class="unit" style="padding-left: 10px">
                                                <?php echo $total_adultT_prob17 ?>
                                            </td>
                                        </tr>
                                        <tr> 
                                            <td class="unit" style="text-align: left;"> 
                                                Total child ticket sold 
                                            </td>	
                                            <td class="unit">:</td>
                                            <td class="unit" style="padding-left: 10px">
                                                <?php echo $total_childT_prob17 ?>
                                            </td>
                                        </tr>
                                        <tr> 
                                            <td class="unit" style="text-align: left;"> 
                                                % of the gross to be donated 
                                            </td>	
                                            <td class="unit">:</td>
                                            <td class="unit" style="padding-left: 10px">
                                                <?php echo number_format($percentage_gross_prob17, 2) ?> % 
                                            </td>
                                        </tr>
                                        <tr> 
                                            <td class="unit" style="text-align: left;"> 
                                                Total amount to be donated 
                                            </td>	
                                            <td class="unit">:</td>
                                            <td class="unit" style="padding-left: 10px">
                                                <?php echo number_format($donated_prob17, 2) ?>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="content problem-18">
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <table>
                        <tr> 
                            <td class="unit" style="text-align: right;"> 
                                m = &nbsp; &nbsp;
                            </td>
                            <td> <input type="number" name="m_val" value="<?php echo $m_val_prob18 ?>" required> </td>
                            <td class="unit" style="text-align: right;"> 
                                &nbsp; &nbsp; n = &nbsp; &nbsp;
                            </td>
                            <td> <input type="number" name="n_val" value="<?php echo $n_val_prob18	?>" required> </td>
                                <td> 
                                    <input type= "submit" value="compute" />
                                </td>
                        </tr>
                        <tr>
                            <td class="unit" style="text-align: right;"> 
                                a = &nbsp; &nbsp;
                            </td>
                            <td> <input type="text" name="a_val" value="<?php echo $a_prob18 ?>" readonly> </td>
                        </tr>
                        <tr>
                            <td class="unit" style="text-align: right;"> 
                                b = &nbsp; &nbsp;
                            </td>
                            <td> <input type="text" name="b_val" value="<?php echo $b_prob18 ?>" readonly> </td>
                        </tr>
                        <tr>
                            <td class="unit" style="text-align: right;"> 
                                c = &nbsp; &nbsp;
                            </td>
                            <td> <input type="text" name="c_val" value="<?php echo $c_prob18 ?>" readonly> </td>
                        </tr>
                    </table>
                </form>
            </div>

            <div class="content problem-19" style="margin-top: 100px; border: none;">
                <table>
                    <tr>
                        <td style="padding-right: 30px;">
                            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                                <table style="padding: 40px; border: 5px solid; border-color: #03045E;">
                                    <tr> 
                                    <td>&nbsp;</td>
                                        <td colspan="2"class="unit" style="text-align: center; padding-bottom: 10px;"> 
                                            &nbsp; &nbsp; &nbsp; &nbsp;Candidates
                                        </td>
                                        <td class="unit" style="text-align: center; padding-bottom: 10px;"> 
                                            Votes
                                        </td>
                                    </tr>
                                    <tr> 
                                        <td class="unit" style="text-align: right;"> 
                                            #1
                                        </td>
                                        <td>&nbsp;</td>
                                        <td> <input type="text" name="candidate_one" value="<?php echo $candidate1_name_prob19 ?>" required> </td> 
                                        <td> <input type="number" name="votes_one" value="<?php echo $votes1_prob19 ?>" required> </td>
                                    </tr>
                                    <tr> 
                                        <td class="unit" style="text-align: right;"> 
                                            #2
                                        </td>
                                        <td>&nbsp;</td>
                                        <td> <input type="text" name="candidate_two" value="<?php echo $candidate2_name_prob19 ?>" required> </td>
                                        <td> <input type="number" name="votes_two" value="<?php echo $votes2_prob19 ?>" required> </td>
                                    </tr>
                                    <tr> 
                                        <td class="unit" style="text-align: right;"> 
                                            #3
                                        </td>
                                        <td>&nbsp;</td>
                                        <td> <input type="text" name="candidate_three" value="<?php echo $candidate3_name_prob19 ?>" required> </td>
                                        <td> <input type="number" name="votes_three" value="<?php echo $votes3_prob19 ?>" required> </td>
                                    </tr>
                                    <tr> 
                                        <td class="unit" style="text-align: right;"> 
                                            #4
                                        </td>
                                        <td>&nbsp;</td>
                                        <td> <input type="text" name="candidate_four" value="<?php echo $candidate4_name_prob19?>" required> </td>
                                        <td> <input type="number" name="votes_four" value="<?php echo $votes4_prob19?>" required> </td>
                                    </tr>
                                    <tr> 
                                        <td class="unit" style="text-align: right;"> 
                                            #5
                                        </td>
                                        <td>&nbsp;</td>
                                        <td> <input type="text" name="candidate_five" value="<?php echo $candidate5_name_prob19 ?>" required> </td>
                                        <td> <input type="number" name="votes_five" value="<?php echo $votes5_prob19 ?>" required> </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" style="text-align: center; padding-top: 10px;"> 
                                            <input type= "submit" value="compute" />
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </td>
                            
                        <td>
                            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                                <table style="padding: 40px; border: 5px solid; border-color: #03045E;">
                                    <tr> 
                                        <td>&nbsp;</td>
                                        <td colspan="2"class="unit" style="text-align: center; padding-bottom: 10px;"> 
                                            &nbsp; &nbsp; &nbsp; &nbsp;Candidates
                                        </td>
                                        <td class="unit" style="text-align: center; padding-bottom: 15px;"> 
                                            Votes
                                        </td>
                                        <td class="unit" style="text-align: center; padding-bottom: 15px;"> 
                                            Percentage of Votes
                                        </td>
                                    </tr>
                                    <tr> 
                                        <td class="unit" style="text-align: right;"> 
                                            #1
                                        </td>
                                        <td>&nbsp;</td>
                                        <td> <input type="text" name="candidate_one" value="<?php echo $candidate1_name_prob19 ?>" readonly> </td> 
                                        <td> <input type="number" name="votes_one" value="<?php echo $votes1_prob19 ?>" readonly> </td>
                                        <td class="unit" style="text-align: center;"><?php echo number_format($pVotes1_prob19, 2)."%" ?></td>
                                    </tr>
                                    <tr> 
                                        <td class="unit" style="text-align: right;"> 
                                            #2
                                        </td>
                                        <td>&nbsp;</td>
                                        <td> <input type="text" name="candidate_two" value="<?php echo $candidate2_name_prob19 ?>" readonly> </td>
                                        <td> <input type="number" name="votes_two" value="<?php echo $votes2_prob19 ?>" readonly> </td>
                                        <td class="unit" style="text-align: center;"><?php echo number_format($pVotes2_prob19, 2)."%" ?></td>
                                    </tr>
                                    <tr> 
                                        <td class="unit" style="text-align: right;"> 
                                            #3
                                        </td>
                                        <td>&nbsp;</td>
                                        <td> <input type="text" name="candidate_three" value="<?php echo $candidate3_name_prob19 ?>" readonly> </td>
                                        <td> <input type="number" name="votes_three" value="<?php echo $votes3_prob19 ?>" readonly> </td>
                                        <td class="unit" style="text-align: center;"><?php echo number_format($pVotes3_prob19, 2)."%" ?></td>
                                    </tr>
                                    <tr> 
                                        <td class="unit" style="text-align: right;"> 
                                            #4
                                        </td>
                                        <td>&nbsp;</td>
                                        <td> <input type="text" name="candidate_four" value="<?php echo $candidate4_name_prob19 ?>" readonly> </td>
                                        <td> <input type="number" name="votes_four" value="<?php echo $votes4_prob19 ?>" readonly> </td>
                                        <td class="unit" style="text-align: center;"><?php echo number_format($pVotes4_prob19, 2)."%" ?></td>
                                    </tr>
                                    <tr> 
                                        <td class="unit" style="text-align: right;"> 
                                            #5
                                        </td>
                                        <td>&nbsp;</td>
                                        <td> <input type="text" name="candidate_five" value="<?php echo $candidate5_name_prob19 ?>" readonly> </td>
                                        <td> <input type="number" name="votes_five" value="<?php echo $votes5_prob19 ?>" readonly> </td>
                                        <td class="unit" style="text-align: center;"><?php echo number_format($pVotes5_prob19, 2)."%" ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="unit" style="text-align: right; padding-top: 15px;">
                                            Total votes = &nbsp;
                                        </td>
                                        <td class="unit" style="padding-top: 15px;"><?php echo $total_votes ?></td>
                                    </tr>
                                </table>
                            </form>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="content problem-20" style="margin-top: 100px; border: none;">
                <table>
                    <tr>
                        <td style="padding-right: 30px;">
                            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                                <table style="padding: 40px; border: 5px solid; border-color: #03045E;">
                                    <tr> 
                                        <td colspan="2"class="unit" style="text-align: center; padding-bottom: 10px;"> 
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Pieces
                                        </td>
                                    </tr>
                                    <tr> 
                                        <td class="unit" style="text-align: right;"> 
                                            Oranges = &nbsp;
                                        </td>
                                        <td> <input type="number" name="oranges" value="<?php echo $numOranges_prob20 ?>" required> </td> 
                                    </tr>
                                    <tr> 
                                        <td class="unit" style="text-align: right;"> 
                                            Eggs = &nbsp;
                                        </td>
                                        <td> <input type="number" name="eggs" value="<?php echo $numEggs_prob20 ?>" required> </td> 
                                    </tr>
                                    <tr> 
                                        <td class="unit" style="text-align: right;"> 
                                            Apples = &nbsp;
                                        </td>
                                        <td> <input type="number" name="apples" value="<?php echo $numApples_prob20 ?>" required> </td> 
                                    </tr>
                                    <tr> 
                                        <td class="unit" style="text-align: right;"> 
                                            Watermelons = &nbsp;
                                        </td>
                                        <td> <input type="number" name="watermelons" value="<?php echo $numWatermelons_prob20 ?>" required> </td> 
                                    </tr>
                                    <tr> 
                                        <td class="unit" style="text-align: right;"> 
                                            Bagel = &nbsp;
                                        </td>
                                        <td> <input type="number" name="bagel" value="<?php echo $numBagels_prob20 ?>" required> </td> 
                                    </tr>
                                    <tr>
                                        <td colspan="3" style="text-align: center; padding-top: 10px;"> 
                                            <input type= "submit" value="compute" />
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </td>
                            
                        <td>
                            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                                <table style="padding: 40px; border: 5px solid; border-color: #03045E;">
                                    <tr> 
                                        <td colspan="2"class="unit" style="text-align: center; padding-bottom: 10px;"> 
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Pieces
                                        </td>
                                        <td class="unit" style="padding-right: 5px"></td>
                                        <td class="unit" style="text-align: center; padding-bottom: 15px;"> 
                                            Subtotal
                                        </td>
                                    </tr>
                                    <tr> 
                                        <td class="unit" style="text-align: right;"> 
                                            Oranges = &nbsp;
                                        </td>
                                        <td> <input type="number" name="oranges" value="<?php echo $numOranges_prob20 ?>" readonly> </td> 
                                        <td class="unit" style="padding-left: 10px">$</td>
                                        <td> <input type="number" name="orange_sub" value="<?php echo number_format($subtotal_orange_prob20, 2)?>" readonly> </td>
                                    </tr>
                                    <tr> 
                                        <td class="unit" style="text-align: right;"> 
                                            Eggs = &nbsp;
                                        </td>
                                        <td> <input type="number" name="eggs" value="<?php echo $numEggs_prob20 ?>" readonly> </td> 
                                        <td class="unit" style="padding-left: 10px">$</td>
                                        <td> <input type="number" name="egg_sub" value="<?php echo number_format($subtotal_eggs_prob20, 2) ?>" readonly> </td>
                                    </tr>
                                    <tr> 
                                        <td class="unit" style="text-align: right;"> 
                                            Apples = &nbsp;
                                        </td>
                                        <td> <input type="number" name="apples" value="<?php echo $numApples_prob20 ?>" readonly> </td> 
                                        <td class="unit" style="padding-left: 10px">$</td>
                                        <td> <input type="number" name="apple_sub" value="<?php echo number_format($subTotal_apples_prob20, 2)?>" readonly> </td>
                                    </tr>
                                    <tr> 
                                        <td class="unit" style="text-align: right;"> 
                                            Watermelons = &nbsp;
                                        </td>
                                        <td> <input type="number" name="watermelons" value="<?php echo $numWatermelons_prob20 ?>" readonly> </td> 
                                        <td class="unit" style="padding-left: 10px">$</td>
                                        <td> <input type="number" name="watermelon_sub" value="<?php echo number_format($subTotal_watermelons_prob20, 2) ?>" readonly> </td>
                                    </tr>
                                    <tr> 
                                        <td class="unit" style="text-align: right;"> 
                                            Bagel = &nbsp;
                                        </td>
                                        <td> <input type="number" name="bagel" value="<?php echo $numBagels_prob20 ?>" readonly> </td> 
                                        <td class="unit" style="padding-left: 10px">$</td>
                                        <td> <input type="number" name="bagel_sub" value="<?php echo number_format($subTotal_bagels_prob20, 2) ?>" readonly> </td>
                                    </tr>
                                    <tr><td colspan="4" style="padding-top: 15px;"><hr/></td></tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td class="unit" style="text-align: right;"> 
                                            Total = &nbsp;
                                        </td>
                                        <td class="unit" ><?php echo "$".number_format($total_prob20 ,2) ?></td> 
                                    </tr>
                                </table>
                            </form>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="content problem-21">
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <table>
                        <tr> 
                            <td class="unit" style="text-align: center;"> 
                                Total water consumed&nbsp;&nbsp;&nbsp;&nbsp; = &nbsp;
                            </td>
                            <td class="unit"> <input type="number" name="water_consume" value="<?php echo $water_consumed_prob21?>" step=".01" required> gal </td> 
                        </tr>
                        <tr>
                            <td colspan="3" style="text-align: center; padding-top: 10px;"> 
                                <input type= "submit" value="compute" />
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="padding-top:15px">
                                <hr style="background-color:#03045E; height: 10px;"/>
                            </td>
                        </tr>
                        <tr>
                            <td class="unit" style="text-align: right; padding-top: 20px"> 
                                Total water cost = &nbsp;
                            </td>
                            <td class="unit" style="padding-top: 20px"> $<?php echo number_format($water_cost_prob21, 2) ?> </td>
                        </tr>
                        <tr>
                            <td class="unit" style="text-align: right; padding-top: 20px"> 
                                Total sewer service charges = &nbsp;
                            </td>
                            <td class="unit" style="padding-top: 20px"> $<?php echo number_format($sewer_cost_prob21, 2) ?> </td>
                        </tr>
                        <tr>
                            <td class="unit" style="text-align: right; padding-top: 20px"> 
                                Total service charges = &nbsp;
                            </td>
                            <td class="unit" style="padding-top: 20px"> $<?php echo number_format($service_charge_prob21, 2) ?></td>
                        </tr>
                        <tr>
                            <td colspan="2"><hr/></td>
                        </tr>
                        <tr>
                            <td class="unit" style="text-align: right; padding-top: 10px"> 
                                Total bill = &nbsp;
                            </td>
                            <td class="unit" style="padding-top: 10px"> $<?php echo number_format($total_prob21, 2) ?></td>
                        </tr>
                    </table>
                </form>
            </div>
        </section>

        <script>
            $(document).ready(function(){
                if(localStorage.selected) {
                    $('#' + localStorage.selected ).attr('checked', true);
                }

                $('.tabs').click(function(){
                    localStorage.setItem("selected", this.id);
                });
            });
        </script>
    </body>
</html>