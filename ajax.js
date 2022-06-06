$(document).ready(function() {
    $('form').on('submit', function() {
        let name = $("#name").val()
        let fname = $("#fname").val()
        let number = $("#number").val()
        let data = {
            'name': name,
            'fname': fname,
            'number': number
        };
        $.get("action.php", data, function(d) {
            $("#result").html(d);
        });
        alert('Форма отправлена: " +name +" "+fname+" "+number+"');
        return false;
    });
});
