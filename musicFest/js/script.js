//Prevent form submission
$("form").submit(function( event ) {
  event.preventDefault();
});

$("input[type='submit']").click(function() {
    var location = $("input[name=location]").val();
    location = "http://api.songkick.com/api/3.0/search/locations.json?query=" + location + "&apikey=I8P4WAkVadRwPnI2";
    $.getJSON( location, function( data ) {
            var items = [];
            $.each( data, function( key, val ) {
                items.push(val);
            });
            var info = items[0];
            var placeID = info.results.location[0].metroArea.id;
            var placeURL = "http://api.songkick.com/api/3.0/metro_areas/" + placeID + "/calendar.json?apikey=I8P4WAkVadRwPnI2";
            findMusic(placeURL);
    });
    
    function findMusic(place) {
        $.getJSON(place, function(data) {
            var musicArray = [];
            $.each(data, function(key, val) {
                musicArray.push(val);
            });
            var concerts = musicArray[0];
            
            //console.dir(concerts.results.event[0].performance[0].displayName);
   
            var list = "";
            var date = "";
            $.each(concerts.results.event, function(key, val1) {
                var length = concerts.results.event[key].performance.length;

                list += '<ul class="results">';
                for (var i = 0; i < length; i++) {
                    if(i==0) {
                        var prevDate = date;
                        date = concerts.results.event[key].start.date;
                        if (prevDate !== date) {
                            var month = date.substring(5,7);
                            var day = date.substring(8,10);
                            var year = date.substring(0,4);
                            switch(month) {
                                case "01":
                                    month = "January";
                                    break;
                                case "02":
                                    month = "February";
                                    break;
                                case "03":
                                    month = "March";
                                    break;
                                case "04":
                                    month = "April";
                                    break;
                                case "05":
                                    month = "May";
                                    break;
                                case "06":
                                    month = "June";
                                    break;
                                case "07":
                                    month = "July";
                                    break;
                                case "08":
                                    month = "August";
                                    break;
                                case "09":
                                    month = "September";
                                    break;
                                case "10":
                                    month = "October";
                                    break;
                                case "11":
                                    month = "November";
                                    break;
                                case "12":
                                    month = "December";
                                    break;
                            }
                            console.log(month);

                            list += "<li class='date'>" + month + " " + day + ", " + year + "</li>";
                        }
                        
                        list += "<li><span class='bold'>Headliner: </span>"; 
                        list += concerts.results.event[key].performance[i].displayName + "</li>";
                    } else if(i==1) {
                        list += "<li class='tab'>with " + concerts.results.event[key].performance[i].displayName + "</li>";
                    } else {
                        list += "<li class='tab'>and " + concerts.results.event[key].performance[i].displayName + "</li>";
                    }
                }
                list += "<li><span class='bold'>Location: </span>"; 
                list += concerts.results.event[key].venue.displayName + "</li>";
                list += "<li class='tab'>" + concerts.results.event[key].venue.metroArea.displayName + ", " + concerts.results.event[key].venue.metroArea.state.displayName +"</li>";

                list += "</ul>";
            });
            
            $("#concertList").append(list);
        });
    };
});




