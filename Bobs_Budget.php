<?php
  
$annualExpenses = [
    "vacations" => 1000,
    "carRepairs" => 1000,    
];

$monthlyExpenses = [
    "rent" => 1500,
    "utilities" => 200,
    "healthInsurance" => 200
];

$grossSalary = 48150;
$socialSecurity = $grossSalary * .062;

$incomeSegments = [[9700, .88], [29775, .78], [8675, .76]];

// Write your code below:

//NetIcome
$netIncome = ($incomeSegments[0][0] * $incomeSegments[0][1]) + ($incomeSegments[1][0] * $incomeSegments[1][1]) + ($incomeSegments[2][0] * $incomeSegments[2][1]);

//AnnualIncome
$annualIncome = $netIncome - $socialSecurity;

//Print out the result
echo "Bob's net income is: $".$netIncome;
echo "\n";
echo "Bob's annual income is: $".$annualIncome;

//Annual Expenses
$annualIncome -= $annualExpenses["vacations"];
$annualIncome -= $annualExpenses["carRepairs"];

echo "\n";
echo "Bob's annual income after annual expenses is: $".$annualIncome;

//Monthly income (before deduction)
$monthlyIncome = $annualIncome / 12;

echo "\n";
echo "Bob's monthly income before monthly expenses is: $".$monthlyIncome;

//Monthly income (expenses deducted)
$monthlyIncome -= $monthlyExpenses["rent"];
$monthlyIncome -= $monthlyExpenses["utilities"];
$monthlyIncome -= $monthlyExpenses["healthInsurance"];

echo "\n";
echo "Bob's monthly income after expenses is: $".$monthlyIncome;

//Weekly income
$weeklyIncome = $monthlyIncome / 4.33;

echo "\n";
echo "Bob's weekly income before expenses is: $".$weeklyIncome; 

//Weekly expenses array
$weeklyExpenses = [
                   "gas" => 25, 
                   "food" => 90, 
                   "entertainment" => 47
                   ];

//Weekly income expenses deducted
$weeklyIncome -= $weeklyExpenses["gas"];
$weeklyIncome -= $weeklyExpenses["food"];
$weeklyIncome -= $weeklyExpenses["entertainment"];

echo "\n";
echo "Bod's weekly income after expenses is: $".$weeklyIncome;

//Yearly save
$yearlySave = $weeklyIncome * 52;

echo "\n";
echo "Bob's yearly saving from his weekly income is: $".$yearlySave;
