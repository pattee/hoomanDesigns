var i = 0;

var text0 = '<h2>Creating Unique Design Experiences</h2><img src=\"images/sep.png\"><p>We take our time and craft photographs into memories that you can physically hold. We add a touch of elegance to every design that we make. Our team takes every customer seriously and only stop when the customer is satisfied.</p><div class=\"circles\"><div class=\"smallCircle\"></div><div class=\"smallInactiveCircle\"></div><div class=\"smallInactiveCircle\"></div><div class=\"smallInactiveCircle\"></div><div class=\"smallInactiveCircle\"></div></div>';
                  
var text1 = '<h2>Each photo frame is handcrafted</h2><img src=\"images/sep.png\"><p>We take our time and craft photographs into memories that you can physically hold. We add a touch of elegance to every design that we make. Our team takes every customer seriously and only stop when the customer is satisfied.</p><div class=\"circles\"><div class=\"smallInactiveCircle\"></div><div class=\"smallCircle\"></div><div class=\"smallInactiveCircle\"></div><div class=\"smallInactiveCircle\"></div><div class=\"smallInactiveCircle\"></div></div>';

var text2 = '<h2>Preserve your memories</h2><img src=\"images/sep.png\"><p>We take our time and craft photographs into memories that you can physically hold. We add a touch of elegance to every design that we make. Our team takes every customer seriously and only stop when the customer is satisfied.</p><div class=\"circles\"><div class=\"smallInactiveCircle\"></div><div class=\"smallInactiveCircle\"></div><div class=\"smallCircle\"></div><div class=\"smallInactiveCircle\"></div><div class=\"smallInactiveCircle\"></div></div>';
                  
var text3 = '<h2>An old fashioned idea with a modern twist</h2><img src=\"images/sep.png\"><p>We take our time and craft photographs into memories that you can physically hold. We add a touch of elegance to every design that we make. Our team takes every customer seriously and only stop when the customer is satisfied.</p><div class=\"circles\"><div class=\"smallInactiveCircle\"></div><div class=\"smallInactiveCircle\"></div><div class=\"smallInactiveCircle\"></div><div class=\"smallCircle\"></div><div class=\"smallInactiveCircle\"></div></div>';
                  
var text4 = '<h2>Customer Service that\'s unmatched</h2><img src=\"images/sep.png\"><p>We take our time and craft photographs into memories that you can physically hold. We add a touch of elegance to every design that we make. Our team takes every customer seriously and only stop when the customer is satisfied.</p><div class=\"circles\"><div class=\"smallInactiveCircle\"></div><div class=\"smallInactiveCircle\"></div><div class=\"smallInactiveCircle\"></div><div class=\"smallInactiveCircle\"></div><div class=\"smallCircle\"></div></div>';

var textArray = [text0,text1,text2,text3,text4];


function timedCount() {
    
    postMessage(textArray[i]);
    if(i < (textArray.length - 1)) {
        i++;
    } else {
        i = 0;
    }
    
    setTimeout("timedCount()",6000);
}

timedCount();


