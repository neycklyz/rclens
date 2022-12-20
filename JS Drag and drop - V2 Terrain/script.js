function start(e){
    e.dataTransfer.effectAllowed="move";
    e.dataTransfer.setData("text", e.target.getAttribute("id"));
}
function over(e){
    e.currentTarget.className="active";
    return false;
}
function drop(e){
    ob=e.dataTransfer.getData("text");
    e.currentTarget.appendChild(document.getElementById(ob));
    e.stopPropagation();
    e.currentTarget.className="container2";
    return false;
}
function leave(e){
    e.currentTarget.className="container2"
}

function drop2(e){
    ob=e.dataTransfer.getData("text");
    e.currentTarget.appendChild(document.getElementById(ob));
    e.stopPropagation();
    e.currentTarget.className="container1";
    return false;
}
function leave2(e){
    e.currentTarget.className="container1"
}
function over2(e){
    e.currentTarget.className="active2";
    return false;
}


