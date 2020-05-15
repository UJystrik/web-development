const YES = 'Yes';
const NO = 'No';
const ERROR = 'errorType';
const NUMBER = 'number';
const ISPRIME = ' is prime number';
const ISNOTPRIME = ' is not prime number';

function CheckPrimeNumber(digit) {   //Функция возвращает 'No' - если это не простое число, 'Yes' - если это простое число, 'error' - если введенная переменная не числовая
  if (typeof digit === NUMBER) {  //Проверка на число, цифру
    if((digit === 0) || (digit === 1)) {
      return(NO);
    } else {
      for (let j = 2; j < digit + 1; j++) {
        if (digit == j ) {
          return(YES); 
        } else {
          if (digit % j === 0) {
            return(NO);
          }
        }
      }
    }                                                       
  } else {
    return(ERROR);
  }
}

function PrintResultOfChecking(digit){
  if (CheckPrimeNumber(digit) === YES) {
    console.log(digit + ISPRIME);
  } else {
    if (CheckPrimeNumber(digit) === NO) {
      console.log(digit + ISNOTPRIME);
    } else {
      if (CheckPrimeNumber(digit) === ERROR) {
        return(ERROR);
      }
    }
  }
}

function isPrimeNumber(arrORdigit) {
  if(Array.isArray(arrORdigit)) {      //Проверка на массив
    let numberofDigit = arrORdigit.length; //определяем количество элементов в массиве
    for(let i = 0; i < numberofDigit; i++) {
      PrintResultOfChecking(arrORdigit[i]);
    }                                      
  } else {
    PrintResultOfChecking(arrORdigit);
  }		
}