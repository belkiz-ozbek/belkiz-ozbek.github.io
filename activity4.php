<!DOCTYPE html>

<html lang="en">
<head>
    <title>Java Jam Coffee House</title>
    <meta name="description" content="CENG 311 Inclass Activity 1" />
</head>

<body>

    <form action="activity4.php" method="GET">
        <table>
            <tr>
                <td>
                    From:
                </td>
                <td>
                    <input type="text" name="from_value" />
                </td>
                <td>
                    Currency:
                </td>
                <td>
                    <select name="from_currency">
                        <option value="USD">USD</option>
                        <option value="CAD">CAD</option>
                        <option value="EUR">EUR</option>
                    </select>
                </td>   
            </tr>
            <tr>
                <td>
                    To:
                </td>
                <td>
                    <input type="text" name="to_value" value="<?php
                        if (isset($_GET['from_value']) && isset($_GET['from_currency']) && isset($_GET['to_currency']) && isset($_GET['to_value'])) 
						{
                            $amount = $_GET['from_value'];
                            $from = $_GET['from_currency'];
                            $to = $_GET['to_currency'];

                            $converted_amount = "";

                            if ($from == "USD" && $to == "USD") 
							{
                                $converted_amount = $amount;
                            }
							 elseif ($from == "USD" && $to == "CAD")
							{
                                $converted_amount = $amount * 1.35;
                            } elseif ($from == "USD" && $to == "EUR") 
							{
                                $converted_amount = $amount * 0.92;
                            } 
							elseif ($from == "CAD" && $to == "USD") 
							{
                                $converted_amount = $amount * 0.74;
                            } elseif ($from == "CAD" && $to == "CAD")
							{
                                $converted_amount = $amount;
                            } elseif ($from == "CAD" && $to == "EUR") 
							{
                                $converted_amount = $amount * 0.68;
                            } 
							elseif ($from == "EUR" && $to == "USD") 
							{
                                $converted_amount = $amount * 1.09;
                            } 
							elseif ($from == "EUR" && $to == "CAD") 
							{
                                $converted_amount = $amount * 1.47;
                            } 
							elseif ($from == "EUR" && $to == "EUR") 
							{
                                $converted_amount = $amount;
                            }

                            echo $converted_amount;
                        }
                    ?>" />
                </td>
                <td>
                    Currency:
                </td>
                <td>
                    <select name="to_currency">
                        <option value="USD">USD</option>
                        <option value="CAD">CAD</option>
                        <option value="EUR">EUR</option>
                    </select>
                </td>   
            </tr>
            <tr>
                <td colspan="4">
                    <input type="submit" value="convert" />
                </td>
            </tr>
        </table>
    </form>

</body>
</html>
