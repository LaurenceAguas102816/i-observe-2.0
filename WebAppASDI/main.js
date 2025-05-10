
function solveAveragecat1() {
    const num1 = parseFloat(document.getElementById("cat1_num1").value) || 0;
    const num2 = parseFloat(document.getElementById("cat1_num2").value) || 0;
    const num3 = parseFloat(document.getElementById("cat1_num3").value) || 0;

    const average = (num1 + num2 + num3) / 3;
    document.getElementById("display1").value = average.toFixed(2);
}


function solveAveragecat2(){
    const num1 = parseFloat(document.getElementById("cat2_num1").value) || 0;
    const num2 = parseFloat(document.getElementById("cat2_num2").value) || 0;
    const num3 = parseFloat(document.getElementById("cat2_num3").value) || 0;
    const num4 = parseFloat(document.getElementById("cat2_num4").value) || 0;
    const num5 = parseFloat(document.getElementById("cat2_num5").value) || 0;
    const num6 = parseFloat(document.getElementById("cat2_num6").value) || 0;
    const num7 = parseFloat(document.getElementById("cat2_num7").value) || 0;

    const average = (num1 + num2 + num3 + num4 + num5 + num6 + num7) / 7;

    document.getElementById("display2").value = average.toFixed(2);
}

function solveAveragecat3(){
    const num1 = parseFloat(document.getElementById("cat3_num1").value) || 0;
    const num2 = parseFloat(document.getElementById("cat3_num2").value) || 0;


    const average = (num1 + num2 ) /2;

    document.getElementById("display3").value = average.toFixed(2);
}

function solveAveragecat4(){
    const num1 = parseFloat(document.getElementById("cat4_num1").value) || 0;
    const num2 = parseFloat(document.getElementById("cat4_num2").value) || 0;
    const num3 = parseFloat(document.getElementById("cat4_num3").value) || 0;
    const num4 = parseFloat(document.getElementById("cat4_num4").value) || 0;
    const num5 = parseFloat(document.getElementById("cat4_num5").value) || 0;


    const average = (num1 + num2 + num3 + num4 + num5) /5;

    document.getElementById("display4").value = average.toFixed(2);
}

function Total_rating(){
    const total1 = parseFloat(document.getElementById("display1").value) || 0;
    const total2 = parseFloat(document.getElementById("display2").value) || 0;
    const total3 = parseFloat(document.getElementById("display3").value) || 0;
    const total4 = parseFloat(document.getElementById("display4").value) || 0;

    const ratingSummary = (total1 + total2 + total3 + total4) / 4;

    document.getElementById("total_rating").value = ratingSummary.toFixed(2);
}

function submitRating() {
    alert("Your rating has been submitted!");
    console.log("Submitted!");
}

document.getElementById("submitButton").addEventListener("click", submitRating);

