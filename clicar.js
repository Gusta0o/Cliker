let cont = 0;
let click = document.getElementById("button");
let display = document.getElementById("clicks");

click.addEventListener("click", function () {
    cont++;
    display.textContent = cont;

    if(cont >= 100 && cont <= 199){
        click.textContent = "Já deu né 😠";
    }
    else if(cont == 200)
    {
        click.textContent = "PAAAAARRAAAAAAA !🤬";
    }
});

