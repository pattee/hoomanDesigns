var http = require('http');

var url1 = process.argv[2];

var url2 = process.argv[3];

var url3 = process.argv[4];

http.get(url1, function callback() {
    response.pipe(destinationStream);
})

/*var http = require('http');

var url = process.argv[2];

http.get(url, function callback (response) {
    response.setEncoding('utf8');
    var completeData = '';
    
    response.on("data", function(data) {
        completeData += data;
    })
    
    response.on("end", function() {
        console.log(completeData.length);
        
        console.log(completeData);
    })
})

*/