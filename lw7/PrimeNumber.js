{
    function isPrimeNumber(digit) {
        if(Array.isArray(digit)) {
            let otvet = null
            let numberofDigit = digit.length //определяем количество элементов в массиве
            for(let i = 0; i < numberofDigit; i++) {
                if (typeof digit[i] == 'number') {
                    let j = 2
                    if((digit[i] == 1) || (digit[i] == 2)) {
                        console.log(digit[i] + ' is prime number')
                    } else {
                        for (; j < digit[i];) {
                            if (digit[i] % j == 0) {
                                console.log(digit[i] + ' is not prime number') 
                                break
                            } else {
                                j++
                                if (digit[i] == j) {
                                    console.log(digit[i] + ' is prime number')
                                }
                            }
                        }
                    }                                                       
                } else {
                    return('error')
                }
            }
        } else {
            if(typeof digit == 'number') {
                let j = 2 
                if((digit == 1) || (digit == 2)) {
                    console.log(digit + ' is prime number')
                } else {
                    for (; j < digit;) {
                        if (digit % j == 0) {
                            console.log(digit + ' is not prime number') 
                            break
                        } else {
                            j++
                            if (digit == j){
                                console.log(digit + ' is prime number')
                            }
                        }
                    }
                }  
            } else {
                return('error')
            }

        }
        return(0)		
    }
}