{
    function checkPrimeNumber(digit) {   //Функция возвращает 'No' - если это не простое число, 'Yes' - если это простое число, 'error' - если введенная переменная не числовая
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
            return('error');
        }
    }
}

{
    function isPrimeNumber(arrORdigit) {
        if(Array.isArray(arrORdigit)) {      //Проверка на массив
            let numberofDigit = arrORdigit.length; //определяем количество элементов в массиве
            for(let i = 0; i < numberofDigit; i++) {
                if (checkPrimeNumber(arrORdigit[i]) == 'Yes') {
                    console.log(arrORdigit[i] + ' is prime number');
                } else {
                    if (checkPrimeNumber(arrORdigit[i]) == 'No') {
                        console.log(arrORdigit[i] + ' is not prime number');
                    } else {
                        if (checkPrimeNumber(arrORdigit[i]) == 'error') {
                            return('error');
                        }

                    }
                }
            }                                      
        } else {
            if (checkPrimeNumber(arrORdigit) == 'Yes') {
                console.log(arrORdigit + ' is prime number');
            } else {
                if (checkPrimeNumber(arrORdigit) == 'No') {
                    console.log(arrORdigit + ' is not prime number');
                } else {
                    if (checkPrimeNumber(arrORdigit) == 'error') {
                         return('error');
                    } 
                }
            } 
        }
        return(0);		
    }
}