"use strict";
    var total = 0.00

    var updateTotal = function(total) {
        var final = total.toFixed(2);
        $("#total").text("Total: $" + final);
    }

    $(document).ready(function() {
        $("ul img").each(function () {
            var oldURL = $(this).attr("src");
            var newURL = $(this).attr("id");


            var rollImage = new Image();
            rollImage.src = newURL;

            $(this).mouseover(function () {
                $(this).attr("src", newURL);
            });

            $(this).mouseout(function () {
                $(this).attr("src", oldURL);
            });

            $(this).click(function(event) {
                event.preventDefault();
                var priceType = $(this).attr("alt");
                total += parseFloat(priceType.substring(1, 5));
                updateTotal(total);
                $("select").append($("<option>", {
                    value: priceType,
                    text: priceType
                }))
            })
        });

        $("#clear_order").click(function() {
            total = 0.00;
            updateTotal(total);
            $("select").empty();
        });

        $("#place_order").click(function() {
            location.href = "checkout.html";
        });
    });
