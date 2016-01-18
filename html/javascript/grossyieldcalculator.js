function displayGrossYield() {
    var weeklyrent = parseFloat(document.getElementById('weeklyrent').value);
    var purchaseprice = parseFloat(document.getElementById('purchaseprice').value);

    if (isNaN(weeklyrent)) weeklyrent = 0;
    if (isNaN(purchaseprice)) purchaseprice = 0;

    var result = calculateGrossYield(weeklyrent, purchaseprice).toFixed(2);

    document.getElementById("grossyieldresult").innerHTML = "<b>Result:</b> " + result + "%";
}

function calculateGrossYield(weeklyrent, purchaseprice) {
    return (weeklyrent * 52 * 100) / purchaseprice;
}
