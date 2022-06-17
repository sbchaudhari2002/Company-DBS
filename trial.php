<html>

<head>
    <title>Ariana Grande Concert</title>
</head>

<body>

    <br>
    <table>
        <tr>
            <td><img src="ariana2.jpg" height="300" width="260"></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <h2>ARIANA GRANDE THE HONEYMOON TOUR</h2><br>
                <font face="Lucida Sans Unicode"> March 11, 2017<br>
                    Grand Ballroom, Solaire Resort & Casino<br>
                    Due to peoples demand, Ariana Grande is back in the Philippines<br>
                    Ariana Grande Live in the Philippines on <b> March 11, 2017!</b></font>
                <br><br><br><br><br><br><br><br>
            </td>
        </tr>
    </table>

    <br><br>
    <hr>
    <br>
    <center>

        <table cellspacing="10" cellpadding="10" bgcolor="gray">
            <tr>
                <td>
                    <font face=""><b>TICKET PRICES:</b></font>
                </td>

                <td><b>VVIP:</b> <u>Php 25,000.00</u></td>
                <td><b>VIP:</b> <u>Php 20,000.00</u></td>
                <td><b>Upper Box A:</b> <u>Php 15,000.00</u></td>
                <td><b>Upper Box B:</b> <u>Php 15,000.00</u></td>
                <td><b>Lower Box A:</b> <u>Php 10,000.00</u></td>
                <td><b>Lower Box B:</b> <u>Php 10,000.00</u></td>
                <td><b>General Ad:</b> <u>Php 5,000.00</u></td>
            </tr>
        </table>
    </center>

    <br><br>

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font face="Lucida Sans Unicode" size="2"><b>Ticket Type:&nbsp;&nbsp;</b></font>
    <?php
    $TicketType = array('VIP' => 'VIP', 'VVIP' => 'VVIP', 'Upper Box A' => 'Upper Box A', 'Upper Box B' => 'Upper Box B', 'Lower Box A' => 'Lower Box A', 'Lower Box B' => 'Lower Box B', 'General Admission' => 'General Admission');

    echo ' <select name="Ticket_Type">';
    foreach ($TicketType  as $key => $value) {
        echo "<option value=\"$key\">$value</option>";
    }
    echo '</select>';

    if ($TicketType == 'VIP') {
        $action = "index.php";
    } else if ($TicketType == 'VVIP') {
        $action = "seats.php";
    }

    echo '<font face="Lucida Sans Unicode" size="2"><b>&nbsp;&nbsp;Quantity:&nbsp;&nbsp;</b></font>';

    $Quantity = range(1, 30);
    echo '<select name="Quantity">';
    foreach ($Quantity  as $value) {
        echo "<option value=\"$value\">$value</option>\n";
    }
    echo '</select>';

    // <select name="cars" id="cars">
    //     <option value="volvo">Volvo</option>
    //     <option value="saab">Saab</option>
    //     <option value="opel">Opel</option>
    //     <option value="audi">Audi</option>
    //   </select>

    ?>
    <!-- <div class="form-row">
            <div class="form-check mx-4">
                <form action="employee_search_lt.php">
                    <input class="form-check-input" type="radio" name="less_than" id="less_than" />
                    <label class="form-check-label" for="less_than">
                        Less than
                    </label>
                </form>
            </div>
            <div class="form-check mx-4">
                <form action="employee_search.php">
                    <input class="form-check-input" type="radio" name="equals_to" id="equals_to" checked />
                    <label class="form-check-label" for="equals_to">
                        Equals to
                    </label>
                </form>
            </div>
            <div class="form-check mx-4">
                <form action="employee_search_gt.php">
                    <input class="form-check-input" type="radio" name="greater_than" id="greater_than" />
                    <label class="form-check-label" for="greater_than">
                        Greater than
                    </label>
                </form>
            </div>
        </div> -->

    <?php
    $filter = array('less_than' => 'Less than', 'equals_to' => 'Equals to', 'greater_than' => 'Greater than');

    echo ' <select name="Salary Filter">';
    foreach ($filter  as $key => $value) {
        echo "<option value=\"$key\">$value</option>";
    }
    echo '</select>';

    if ($filter == 'less_than') {
        $action = "employee_search_lt.php";
    } else if ($filter == 'equals_to') {
        $action = "employee_search.php";
    } else if ($filter == 'greater_than') {
        $action = "employee_search_gt.php";
    }

    ?>

    <form action="<?php echo $action; ?>" method="post">
        <br><br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btnExample" type="submit" value="Submit" />Next</button>

        <style>
            .btnExample {
                color: #0000;
                background: white;
                font-weight: bold;
                border: 1px solid #0000;
                border-radius: 10px 10px 10px;
            }
        </style>
    </form>

</body>

</html>