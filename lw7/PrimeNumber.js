const Yes = 'Yes';
const No = 'No';
const errorType = 'errorType';

function CheckPrimeNumber(digit) {   //Функция возвращает 'No' - если это не простое число, 'Yes' - если это простое число, 'error' - если введенная переменная не числовая
    if (typeof digit == 'number') {  //Проверка на число, цифру
        if((digit == 0) || (digit == 1)) {
            return('No');
        } else {
            for (let j = 2; j < digit + 1; j++) {
                if (digit == j ) {
                    return('Yes'); 
                } else {
                    if (digit % j == 0) {
                        return('No');
                    }
                }
            }
        }                                                       
    } else {
        return('errorType');
    }
}

function PrintResultOfChecking(digit){
    if (CheckPrimeNumber(digit) == Yes) {
        console.log(digit + ' is prime number');
    } else {
        if (CheckPrimeNumber(digit) == No) {
        console.log(digit + ' is not prime number');
        } else {
            if (CheckPrimeNumber(digit) == errorType) {
                return('error');
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