var contactButton = document.getElementById('contact');

contactButton.addEventListener("click", function(){
    var parent = document.getElementById("thankYou");
    var child = document.getElementById("contactForm");
    parent.removeChild(child);
    
    //create a p node
    var p = document.createElement("P");
    
    //create a text node
    var textnode = document.createTextNode("Thanks for getting in contact with us. We'll get back to you soon. Actually we'll get back to you never because this is only a demonstration website. But in the meantime enjoy looking at this fox.");
    
    //append the text node to the p element
    p.appendChild(textnode);
    
    
    //create a image node
    var image = document.createElement("IMG");
    image.classList.add("responsive");
    image.src="images/foxy.jpg";
    
    //get the thank you element
    var thankyou = document.getElementById('thankYou');
    
    //append the p and message to thank you node.
    thankyou.appendChild(p);
    thankyou.appendChild(image);
});

