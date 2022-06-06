const navs = document.querySelectorAll('.navbarText');

navs.forEach(el => el.addEventListener('mouseover', e => {
    e.target.classList.add('textHover');
}))

navs.forEach(el => el.addEventListener('mouseout', e => {
    e.target.classList.remove('textHover');
}))


var lastResFind="";
var copy_page="";
function TrimStr(s) {
    s = s.replace( /^\s+/g, '');
    return s.replace( /\s+$/g, '');
}
function FindOnPage(inputId) {
    var obj = window.document.getElementById(inputId);
    var textToFind;
    if (obj) {
        textToFind = TrimStr(obj.value);
    }
    if (textToFind == "") {
        alert("Nothing entered");
        return;
    }
    if(copy_page.length>0)
        document.body.innerHTML=copy_page;
    else copy_page=document.body.innerHTML;


    document.body.innerHTML = document.body.innerHTML.replace(eval("/name="+lastResFind+"/gi")," ");
    document.body.innerHTML = document.body.innerHTML.replace(eval("/"+textToFind+"/gi"),"<a name="+textToFind+" style='background:gold'>"+textToFind+"</a>");
    lastResFind=textToFind;
    window.location = '#'+textToFind;
}

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body>

<section class="avto" id="автопарк">
    <div class="wrapper-full" id="list">
        <form>
            <script type="text/javascript"></script>
            <input type="text" placeholder="Search..." id="text-to-find" value="">
            <input type="button" onclick="javascript: FindOnPage('text-to-find'); return false;" value="Search">
        </form>
        
    </div>
</section>
<script type="text/javascript" src="script.js"></script>
</body>
