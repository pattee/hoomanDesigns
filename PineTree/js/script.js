var listItems = document.querySelectorAll('.names li');
var listDesc = document.querySelectorAll('.type li');
for(var i = 0, l = listItems.length; i < l;i++){
    listItems[i].addEventListener('click', function(){
        //what happens every time there's a click
        //first remove any class show and selected
        removeShow();  
        removeSelected();
        //add selected to whatever is clicked
        this.classList.add('selected');
        //then add class show to specific list items
        var woodName = this.className;
        woodName = woodName.split(' ')[0];
        
        var selected = document.querySelector('.type .' + woodName);
        selected.classList.add('show');
    });
}

function removeShow() {
    for(var j = 0, k = listDesc.length; j < k; j++){
        listDesc[j].classList.remove('show');
    }
}

function removeSelected(){
    for(var a = 0, b = listItems.length; a < b; a++) {
        listItems[a].classList.remove('selected');
    }
}

var submitButtons = document.getElementsByTagName('input');
for(var i = 0; i < submitButtons.length; i++) {
    if(submitButtons[i].type==='button') {
        var submit = submitButtons[i];
    }
}

submit.addEventListener('click', function(){
    //grab outer div for adding text
    var thanks = document.getElementById('form');
    var para = document.createElement('P'); //grab paragraph
    para.style.padding = '1em'; //add style to paragrpah
    var fName = document.getElementById('fName').value;
    //message for thanks
    var text = document.createTextNode('Hi, ' + fName + ' Thanks for contacting us. We will be getting back to you soon!');
    
    para.appendChild(text);
    var formNode = document.getElementById('formName');
    
    thanks.removeChild(formNode);
    thanks.appendChild(para);
});
