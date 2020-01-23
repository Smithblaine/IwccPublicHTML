$(document).ready(function() {
    var calculateFV = function(investment,rate,years) {
        var futureValue = investment;
        for (var i = 1; i <= years; i++ ) {
            futureValue += futureValue * rate / 100;
        }
        futureValue = futureValue.toFixed(2);
        return futureValue;
    };


    $("#calculate").click( function() {
        var investment = parseFloat( $("#investment").val());
        var rate = parseFloat( $("#rate").val());
        var years = parseInt( $("#years").val());
        if (isNaN(investment) || investment <= 0) {
            alert("Must be > 0");
        }
        else if (isNaN(rate) || rate <= 0) {
            alert("Must be > 0");
        }
        else if (isNaN(years) || years <= 0) {
            alert("Must be > 0");
            allValid = false;
        }
        else {
            $("#future_value").val(calculateFV(investment,rate,years));
        }
    });

    $("#investment").focus();
});
