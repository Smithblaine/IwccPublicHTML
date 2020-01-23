/* javascript for assign3 */

        function calcAve(score)
            {
                console.log("Valid Test");
                //console.log("Valid Test");
                var score1 = parseInt(document.getElementById("score1").value);
                var score2 = parseInt(document.getElementById("score2").value);
                var score3 = parseInt(document.getElementById("score3").value);
                var aveScore = (score1 + score2 + score3) / 3;
                var sum = (score1 + score2 + score3);
                //console.log("Score 1 = " + score1);
                document.getElementById("answer").innerHTML = "Testing average = " + aveScore;
                document.getElementById("sum").innerHTML = "Testing Sum = " + sum;
            }  