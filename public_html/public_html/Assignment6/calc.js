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
            document.getElementById("dateGrade").innerHTML = "Todays Date = ";
            for (var i = 1; i < 4; i++)
            {
                var score = document.getElementById("score" + i).value;
                document.getElementById("grade" + i).innerHTML = letterGrade(score);
            }
            getDate();
        }

        function resetForm()
        {
            for (i = 1; i < 4; i++)
            {
                document.getElementById("score" + i).value = "";
                document.getElementById("grade" + i).innerHTML = "*";
                document.getElementById("dateF" + i).innerHTML = "**";
                document.getElementById("date" + i).value = "";
            }
            document.getElementById("sum").innerHTML = "Sum ";
            document.getElementById("answer").innerHTML = "Average ";
            document.getElementById("avGrade").innerHTML = "Average Grade ";
            document.getElementById("dateGrade").innerHTML = "Date Entered ";
        }
            //build array for day and month.
            var daysOfWeek = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday"];
            var monthNames = ["January",
                              "Febuary",
                              "March",
                              "April",
                              "May",
                              "June",
                              "July",
                              "August",
                              "September",
                              "October",
                              "November",
                              "December"];
            //get date from form.
             function getDate()
            {
                var testDate;
                for (var d =1; d < 4; d++)
                {
                    testDate = document.getElementById("date" + d).value;
                    testDate = new Date(testDate);
                    document.getElementById("dateF" + d).innerHTML = dateFormat(testDate); 
                }
                document.getElementById("dateGrade").innerHTML = "Todays Date = " + dateFormat(currentDate);
            }

            function dateFormat(testDate)
            {
                return daysOfWeek[testDate.getDay()]
                + ", "
                + monthNames[testDate.getMonth()]
                + " "
                + testDate.getDate()
                + ", "
                + testDate.getFullYear();
            }
            var currentDate = new Date();