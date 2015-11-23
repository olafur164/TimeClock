$(function() {
    var d = $(".stampIn ol li"),
        b, a = $(".number"),
        c,
        l = document.getElementById("login").value;
    d.click(function() {
        b = d.index(this);
        9 == b ? a.append("0") : 10 == b ? a.empty() : 11 == b ? (c = a.text(), c = c.slice(0, -1), a.empty().append(c)) : 12 == b ? test() : a.append(b + 1);
        9 == b ? $('#login').val($('#login').val() + '0') : 10 == b ? document.getElementById("login").value = "" : 11 == b ? (c = document.getElementById("login").value, c = c.slice(0, -1), document.getElementById("login").value = c) : 12 == b ? test() : $('#login').val($('#login').val() + (b + 1));
    });
    function test()
    {
        /*
        var el = document.querySelector(".number"); 
        var stampDigit = el.innerHTML;
        document.getElementById("login").value = stampDigit;
        a.empty();
        */
    }
});