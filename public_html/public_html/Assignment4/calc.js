/* javascript for assign4 */

        function calcAve(score)
            {
                var score1 = parseInt(document.getElementById("score1").value);
                var score2 = parseInt(document.getElementById("score2").value);
                var score3 = parseInt(document.getElementById("score3").value);
                var aveScore = (score1 + score2 + score3) / 3;
                aveScore = aveScore.toFixed(2);
                var sum = (score1 + score2 + score3);

            var letterGrade = function (score)
             {
                if (score >= 90)
                {
                    return "A";
                }
                else if (score >= 80)
                {
                    return "B";
                }
                else if (score >= 70)
                {
                    return "C";  
                }
                else if (score >= 60)
                {
                    return "D";  
                }
                else
                {
                    return "F";
                }
            }
            
            document.getElementById("sum").innerHTML = "Sum = " + sum;
            document.getElementById("answer").innerHTML = "Average = " + aveScore;
            document.getElementById("avGrade").innerHTML = "Average Grade = " + letterGrade(aveScore);

            for (var i = 1; i < 4; i++)
            {
                var score = document.getElementById("score" + i).value;
                document.getElementById("grade" + i).innerHTML = letterGrade(score);
            }
            
            
        }

        function resetForm()
        {
            for (i = 1; i < 4; i++)
            {
                document.getElementById("score" + i).value = 0;
                document.getElementById("grade" + i).innerHTML = "*";
            }
            document.getElementById("sum").innerHTML = "Sum ";
            document.getElementById("answer").innerHTML = "Average ";
            document.getElementById("avGrade").innerHTML = "Average Grade ";
        }