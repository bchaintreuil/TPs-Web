function toc() {
    var titles = document.getElementsByTagName("h1");
    var table = document.getElementById("table");
    for(var i = 0; i < titles.length; i++) {
        title = titles[i].innerHTML;
        li = document.createElement("li");
        li.innerHTML = "<a href='#" + titles[i].id + "'>" + titles[i].innerHTML + "</a>";
        table.appendChild(li);
    }
}
