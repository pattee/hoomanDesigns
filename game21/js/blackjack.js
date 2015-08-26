var playerPoints = 0; var dealerPoints = 0; //sets the beginning points to be zero;
var cards = {};

//card selection 
function randomCard() {
	var random = Math.floor((Math.random() * 11) + 2);
	console.log(random);
	return random;
}

function randomSuite() {
	var suite = Math.floor((Math.random() * 4) + 1);

	switch(suite) {
			case(1):
				suite = 'Clubs';
				break;
			case(2):
				suite = 'Diamonds';
				break;
			case(3):
				suite = 'Hearts';
				break;
			case(4):
				suite = 'Spades';
				break;
		}

	return suite;
}

function sumCards() {
	var pPoints = 0;
	for(var i = 1; i < 15; i++) {
		cardx = 'card' + i;
		if((cards[cardx] > 9) && (cards[cardx] !== 11)) {
			cards[cardx] = 10;
		}
	}

	pPoints = cards['card3'] + cards['card4'];
	if(typeof(cards['card5']) === 'number') {
		pPoints += cards['card5'];
	} 
	if(typeof(cards['card6']) === 'number') {
		pPoints += cards['card6'];
	}
	if(typeof(cards['card7']) === 'number') {
		pPoints += cards['card7'];
	}

	return pPoints;
}

function hitMe(count) {
	var deal = 'card' + count;
	cards[deal] = randomCard();

	//console.log('The card number ' + i + ' is ' + cards[card]);
	var suite = randomSuite();
	var image = 'images/' + suite + '/' + cards[deal] + '.svg';
	document.getElementById(deal).src=image;

	var pPoints = sumCards();
	
	count++;
	return count;	
	
}

function score() {
	//display players initial hand
	for (var i = 1; i < 3; i++) {
		var card = 'card' + i; //card is the card number displayed in html file
		//console.log('The card number ' + i + ' is ' + cards[card]);
		var suite = randomSuite();
		var image = 'images/' + suite + '/' + cards[card] + '.svg';
		document.getElementById(card).src=image;
	}

	for (var i = 1; i < 15; i++) {
		cardx = 'card' + i;
		if((cards[cardx] > 9) && (cards[cardx] !== 11)) {
			cards[cardx] = 10;
		}
	}

	var dPoints = cards['card1'] + cards['card2'];
	var pPoints = cards['card3'] + cards['card4'];
	if(typeof(cards['card5']) === 'number') {
		pPoints += cards['card5'];
	} 
	if(typeof(cards['card6']) === 'number') {
		pPoints += cards['card6'];
	}
	if(typeof(cards['card7']) === 'number') {
		pPoints += cards['card7'];
	}

	document.getElementById('hit').innerHTML = '<p>The dealers score is: ' + dPoints + '</p><p>And the players score is: ' + pPoints + '</p>';
	console.log(cards);
}

document.getElementById('dealCards').onclick=function(){
	var count = 1;
	document.getElementById('card1').src='images/Blue_Back.svg';
	document.getElementById('card2').src='images/Blue_Back.svg';
	document.getElementById('card5').src='images/Blue_Back.svg';
	document.getElementById('card6').src='images/Blue_Back.svg';
	document.getElementById('card7').src='images/Blue_Back.svg';

	//get the values for the cards
	for (var i = 1; i < 5; i++) {
		var deal = 'card' + i;
		cards[deal] = randomCard();
		//console.log('FIRST_LOOP: The card number ' + i + ' is ' + cards[deal]);
		count++;
	}

	//display players initial hand
	for (var i = 3; i < 5; i++) {
		var card = 'card' + i; //card is the card number displayed in html file
		//console.log('The card number ' + i + ' is ' + cards[card]);
		var suite = randomSuite();
		var image = 'images/' + suite + '/' + cards[card] + '.svg';
		document.getElementById(card).src=image;
	}

	//hit me?
	document.getElementById('hit').innerHTML="<p>Do you want another card</p><input type='button' value='yes' id='yes'></input><input type='button' value='no' id='no'></input>";

	document.getElementById('no').onclick=function() {
		score();
	};

	document.getElementById('yes').onclick=function() {
		count = hitMe(count);
		if(count === 8) {
			score();
		}
	};
}


