<!DOCTYPE html>
<html>
<head>
    <title>Activity 2 - SET C: Expansion Project</title>
    <style>
    body {
        width: 900px;
        margin: 40px auto;
        padding: 30px;
        background-color: #f4f7f6;
        font-family: 'Segoe UI', Arial, sans-serif;
        border: 1px solid #dcdde1;
        border-radius: 8px; 
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    }

    h2 {
        color: #2c3e50; 
        text-align: center;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    h3 {
        color: #7f8c8d; 
        text-align: center;
        margin-top: -10px;
    }

    table {
        width: 100%;
        margin-top: 30px;
        background-color: white;
        border-collapse: collapse;
    }

    th, td {
        padding: 12px;
        text-align: center;
        border: 1px solid #dfe6e9;
    }

    th {
        background-color: #27ae60; 
        color: white;
        font-weight: 600;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;   
    }

    tr:nth-child(odd) {
        background-color: #ffffff;
    }

    tr:hover td {
        background-color: #e8f4fd;
    }

    .total {
        background-color: #ffffff; 
        color: #2c3e50;
        font-weight: bold;
    }

    .creator {
        float: right;
        display: inline-block;
        margin-top: 30px;
        padding-top: 10px;
        color: #2c3e50;
        font-weight: bold;
        border-top: 2px solid #27ae60;
        text-align: right;
    }
</style>
</head>
<body>

<h2>Public Library Expansion Project</h2>
<h3>Cost Estimates</h3>

<?php
function calculateIncrease($amount, $percentage) {
    return $amount * (1 + ($percentage / 100));
}

function renderProjectTable($data) {
    $total = $total10 = $total15 = $total20 = 0;

    foreach ($data as $name => $cost) {
        $inc10 = calculateIncrease($cost, 10);
        $inc15 = calculateIncrease($cost, 15);
        $inc20 = calculateIncrease($cost, 20);

        print
     "<tr>
                <td>$name</td>
                <td>$ " . number_format($cost, 2) . "</td>
                <td>$ " . number_format($inc10, 2) . "</td>
                <td>$ " . number_format($inc15, 2) . "</td>
                <td>$ " . number_format($inc20, 2) . "</td>
              </tr>";

        $total   += $cost;
        $total10 += $inc10;
        $total15 += $inc15;
        $total20 += $inc20;
    }

    return [$total, $total10, $total15, $total20];
}

$items = [
    "Lumber" => 150000,
    "Concrete" => 78000,
    "Drywall" => 69000,
    "Paint" => 12000,
    "Miscellaneous" => 20000
];

print "<table>";
print "<tr>
        <th>Expenditures</th>
        <th>Estimated Cost</th>
        <th>10% Increase</th>
        <th>15% Increase</th>
        <th>20% Increase</th>
      </tr>";

$finalTotals = renderProjectTable($items);

print "<tr class='total'>
        <td>Total Expenditures</td>
        <td>$ " . number_format($finalTotals[0], 2) . "</td>
        <td>$ " . number_format($finalTotals[1], 2) . "</td>
        <td>$ " . number_format($finalTotals[2], 2) . "</td>
        <td>$ " . number_format($finalTotals[3], 2) . "</td>
      </tr>";

print "</table>";
?>

<div class="creator">
    Created by: Lebron Dan V. Marata
</div>

</body>
</html>