const stringSign = '+-*/';
const stringNumber = '0123456789';
const error = 'error'

function isString(val) {
    return(typeof val === "string" || val instanceof String);
}

function s(){
	var string = '12345';
	var pastString = '12345';
	var pastString1 = '12345';
	string = string.replace(pastString, pastString1);
	console.log(string);
}

function calc(string){
	if(isString(string) === false){
 		return('Неверная запись, введите строку');
 	}
 	if(checkBracket(string) === error){
 		return('Неверная запись, исправьте количество скобок');
 	}
 	string = '(' + string + ')';
 	let pastString = '';
 	numberOFbracket = checkBracket(string);
 	pastString = string.substring(firstBracket(string), lastBracket(string) + 1);
 	for(let j = 1; j < numberOFbracket + 1; j++){
 		if(pastCalc(pastString) === error){
 			return('Неверная запись');
 		}
 		pastString = string.substring(firstBracket(string), lastBracket(string) + 1);
 		string = string.replace(pastString, ' ' + pastCalc(pastString) + ' ');
 	}
 	return(readNumber(string, 0));
}

function checkBracket(string){
	var numberOFsymbol = string.length;
	var numberOFfirstSymbol = 0;
	var numberOFsecondSymbol = 0;
	for(let i = 0; i != numberOFsymbol; i++){
		if(string[i] === '('){
			numberOFfirstSymbol++;
		}
		if(string[i] === ')'){
			numberOFsecondSymbol++;
		}
	}
	if(numberOFfirstSymbol === numberOFsecondSymbol){
		return(numberOFfirstSymbol);
	} else {
		return(error);
	}
}

function firstBracket(string){
	var backetPosition = undefined;
	var numberOFsymbol = string.length;
	for(i = 0; i < numberOFsymbol; i++){
		if(string[i] === '('){
			backetPosition = i;
		}
	}
	return(backetPosition);
}

function lastBracket(string){
	var backetPosition = undefined;
	var i = firstBracket(string);
	while(string[i] !== ')'){
		i++;
	}
	return(i);
}

function passNumber(string, position){
	if(string[position] === '-'){
		position++;
	}
	position = passSpace(string, position);
	while(stringNumber.includes(string[position])){
		position++;
	}
	return(position);
}

function passSpace(string, position){
	while(string[position] === ' '){
		position++;
	}
	return(position);
}

function subString(string, position){
	position = passSpace(string, position);
	let numberString = undefined;
	let plus = 'Y';
	if(string[position] === '-'){
		position++;
		position = passSpace(string, position);
		plus = 'N';
	}
	if(stringNumber.includes(string[position])){
		numberString = '';
	}
	while(stringNumber.includes(string[position])){
		numberString = numberString + string[position];
		position++;
	}
	if(plus === 'N'){
		return('-' + numberString);
	}
	return(numberString);
}

function readNumber(string, position){
	return(parseInt(subString(string, position), 10));
}

function answer(sign, firstNumber, secondNumber){
	switch (sign){
		case '-':
            return(firstNumber - secondNumber);
		break;
		case '+':
		    return(firstNumber + secondNumber);
		break;
		case '*':
		    return(firstNumber * secondNumber);
		break;
		case '/':
		    return(firstNumber / secondNumber);
		break;
	}
}

function pastCalc(string){
	let position = 1;
	position = passSpace(string, position);
	if(stringSign.includes(string[position])){  //найден знак
		var sign = string[position];            //sign-знак
		position++;
	} else {
		return(error);
	}
	position = passSpace(string, position);
	if(isNaN(subString(string, position)) === false){
		var firstNumber = readNumber(string, position);
	} else {
		return(error);
	}
	position = passNumber(string, position);
	if(isNaN(subString(string, position)) === false){
		var secondNumber = readNumber(string, position);
	} else {
		return(error);
	}
	position = passSpace(string, position);
	position = passNumber(string, position);
	position = passSpace(string, position);
	var answerFull = answer(sign, firstNumber, secondNumber);
	if(string[position] === ')'){
		return(answerFull);
	} else {
		return(error);
	}
}