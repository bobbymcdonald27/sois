var celsiusInput, result 

    function setValue(){
        celsiusInput = document.getElementById("celsiusInput").value;
}

function calculateTemp(){
    setValue();
    result = ((9/5) * celsiusInput) +32;
    alert(celsiusInput + " degrees Celsius = " + result + " degrees Fahrenheit");
}

// use this formula 9/ 5 * C + 32