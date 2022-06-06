const navs = document.querySelectorAll('.navbarText');

navs.forEach(el => el.addEventListener('mouseover', e => {
    e.target.classList.add('textHover');
}))

navs.forEach(el => el.addEventListener('mouseout', e => {
    e.target.classList.remove('textHover');
}))


var lastResFind=""; // последний удачный результат
var copy_page=""; // копия страницы в ихсодном виде

function TrimStr(s) {
    s = s.replace( /^\s+/g, '');
    return s.replace( /\s+$/g, '');
}

function FindOnPage() {//ищет текст на странице, в параметр передается ID поля для ввода
    
    var obj = document.querySelector('#searchField');
    var textToFind;

    if (obj) {
        textToFind = TrimStr(obj.value);//обрезаем пробелы
    } else {
        alert("Введенная фраза не найдена");
        return;
    }
    if (textToFind == "") {
        alert("Вы ничего не ввели");
        return;
    }

    var all = document.querySelectorAll("span, a, div, p");

    for (var i=0, max=all.length; i < max; i++) {
        if (~all[i].innerHTML.search(textToFind)) {
            all[i].classList.add('foundItemStyle');
        }
    }
}