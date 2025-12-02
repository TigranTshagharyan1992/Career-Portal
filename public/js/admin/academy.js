function filterSelection(c) {
    let x = document.getElementsByClassName("filterDiv");
    if (c === "all") c = "";

    for (let i = 0; i < x.length; i++) {
        w3RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
    }
}

function w3AddClass(element, name) {
    let arr1 = element.className.split(" ");
    let arr2 = name.split(" ");
    for (let i = 0; i < arr2.length; i++) {
        if (!arr1.includes(arr2[i])) element.className += " " + arr2[i];
    }
}

function w3RemoveClass(element, name) {
    let arr1 = element.className.split(" ");
    let arr2 = name.split(" ");
    for (let i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
    element.className = arr1.join(" ");
}

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("all").click();
});
