const STRINGSIGN = '+-*/';
const STRINGNUMBER = '0123456789';
const ERROR = 'error';
const YES = 'yes';
const NO = 'no';
const STRING = 'string';
const ERRORSTR = 'Неверная запись, введите строку';
const ERRORBRACKET = 'Неверная запись, исправьте количество скобок';
const ERRORWRITE = 'Неверная запись';

function isString(val) {
    return typeof val === STRING || val instanceof String;
}

function calc(string){
    if (isString(string) === false){
        return ERRORSTR;
    }
    if (checkBracket(string) === ERROR){
        return ERRORBRACKET;
    }
    string = '(' + string + ')';
    let pastString = '';
    numberOFbracket = checkBracket(string);
    pastString = string.substring(firstBracket(string), lastBracket(string) + 1);
    for (let j = 1; j < numberOFbracket + 1; j++){
        if (pastCalc(pastString) === ERROR){
 	    return ERRORWRITE;
 	}
 	pastString = string.substring(firstBracket(string), lastBracket(string) + 1);
 	string = string.replace(pastString, ' ' + pastCalc(pastString) + ' ');
  }
 	return readNumber(string, 0);
}

function checkBracket(string){
    var numberOFsymbol = string.length;
    var numberOFfirstSymbol = 0;
    var numberOFsecondSymbol = 0;
    for (let i = 0; i != numberOFsymbol; i++){
        if (string[i] === '('){
            numberOFfirstSymbol++;
	}
        if (string[i] === ')'){
	    numberOFsecondSymbol++;
	}
    }
    if (numberOFfirstSymbol === numberOFsecondSymbol){
        return numberOFfirstSymbol;
    } else {
        return ERROR;
    }
}

function firstBracket(string){
    var backetPosition = undefined;
    var numberOFsymbol = string.length;
    for (i = 0; i < numberOFsymbol; i++){
        if (string[i] === '('){
	    backetPosition = i;
	}
    }
    return backetPosition;
}

function lastBracket(string){
    var backetPosition = undefined;
    var i = firstBracket(string);
    while (string[i] !== ')'){
        i++;
    }
    return i;
}

function passNumber(string, position){
    if (string[position] === '-'){
        position++;
    }
    position = passSpace(string, position);
    while (STRINGNUMBER.includes(string[position])){
        position++;
    }  
    return position;
}

function passSpace(string, position){
    while (string[position] === ' '){
        position++;
    }
    return position;
}

function subString(string, position){
    position = passSpace(string, position);
    let numberString = undefined;
    let plus = YES;
    if (string[position] === '-'){
        position++;
	position = passSpace(string, position);
	plus = NO;
    }
    if (STRINGNUMBER.includes(string[position])){
        numberString = '';
    }
    while (STRINGNUMBER.includes(string[position])){
        numberString = numberString + string[position];
	position++;
    }
    if (plus === NO){
        return '-' + numberString;
    }
    return numberString;
}

function readNumber(string, position){
    return parseInt(subString(string, position), 10);
}

function answer(sign, firstNumber, secondNumber){
    switch (sign){
        case '-':
            return firstNumber - secondNumber;
	break;
	case '+':
            return firstNumber + secondNumber;
	break;
	case '*':
	    return firstNumber * secondNumber;
	break;
	case '/':
	    return firstNumber / secondNumber;
	break;
    }
}

function pastCalc(string){
    let position = 1;
    position = passSpace(string, position);
    if (STRINGSIGN.includes(string[position])){  //найден знак
	var sign = string[position];            //sign-знак
	position++;
    } else {
  	return ERROR;
    }
    position = passSpace(string, position);
    if (isNaN(subString(string, position)) === false){
	var firstNumber = readNumber(string, position);
    } else {
	return ERROR;
    }
    position = passNumber(string, position);
    if (isNaN(subString(string, position)) === false){
	var secondNumber = readNumber(string, position);
    } else {
	return ERROR;
    }
    position = passSpace(string, position);
    position = passNumber(string, position);
    position = passSpace(string, position);
    var answerFull = answer(sign, firstNumber, secondNumber);
    if (string[position] === ')'){
	return answerFull;
    } else {
	return ERROR;
    }
}