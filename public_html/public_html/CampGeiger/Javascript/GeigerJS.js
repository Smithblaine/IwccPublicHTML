$(document).ready(function()
{
    var id = 0;
    var targetDataLocator = 'locator';
    var activities = [];
    var dropDownActivities = [];
    const SPACES ="&emsp;&emsp;";
    const GITHUB = "<a href=\"https://github.com/Smithblaine\"><i class=\"fab fa-github\" style=\"font-size: 3em; color: black;\"></i></a>";
    const LINKEDIN = "<a href=\"https://www.linkedin.com/in/smith199330/\"><i class=\"fab fa-linkedin\" style=\"font-size: 3em; color: black;\"></i></a>";
    const CALLCAMP = "<a href=\"tel:816-364-1523\"><i class=\"fas fa-phone-square\" style=\"font-size: 3em; color: black;\"></i></a>";
    var gitHubText = "<p>Creators GitHub</p>";
    var linkedInText = "<p>Creators LinkedIn</p>";
    var callCampGeiger = "<p>Call Camp Geiger</p>";

    $.getJSON('Services/service.php', function(data) {
        $.each(data, function(key, val)
        {
            activities.push(
                "<div class=\"card\">\n" +
                "<span class=\"anchor\"><a id='"+ targetDataLocator+id +"'></a></span>\n" +
                    "<h2 class=\"mb-0\">\n" +
                        "<button class=\"btn btn-lg btn-block\" type=\"button\" data-toggle=\"collapse\" data-target='#"+ targetDataLocator+id +"'>"+ val['ActivityName'] +"</button>\n" +
                    "</h2>\n" +
                        "<div id='"+ targetDataLocator+id +"' class=\"collapse\">\n" +
                            "<div class=\"card-body\">\n" +
                            "<ul class=\"list-group\" style=\"list-style: none;\">\n" +
                            "<li class=\"list-group-item font-weight-bold\">Location: "+ val['Location'] +"</li>\n" +
                            "<li class=\"list-group-item font-weight-bold\">Time: "+ val['ActivityTime'] +"</li>\n" +
                            "<li class=\"list-group-item font-weight-bold\">Length: "+ val['ActivityLength'] +"</li>\n" +
                            "<li class=\"list-group-item font-weight-bold\">For Whom: "+ val['RecommendedFor'] +"</li>\n" +
                            "<li class=\"list-group-item font-weight-bold\">Materials: "+ val['Materials'] +"</li>\n" +
                            "<li class=\"list-group-item font-weight-bold\">Cost: "+ val['Costs'] +"</li>\n" +
                            "<li class=\"list-group-item font-weight-bold\">Pre-Requisites: "+ val['PreReq'] +"</li>\n" +
                            "</ul>\n" +
                            "</div>\n" +
                        "</div>\n" +
                "</div>\n" +
                "<br>");

            dropDownActivities.push("<a class=\"dropdown-item\" href='#"+targetDataLocator+id+"'>"+ val['ActivityName'] +"</a>");
            id++;
        });
    })
    .done(function() {
        $('.spinner-border').hide();
        $('.dropdown-menu').append(dropDownActivities);
        $('#dropDownActivities').append(activities);
        $('#icons').append(GITHUB,SPACES)
                   .append(LINKEDIN);
        $('#campGeiger').append(CALLCAMP);
    })
    .fail(function(jqXHR, textStatus, errorThrown) {
        alert('Database failed to respond: ' + textStatus + ', ' + errorThrown);
    });
});
