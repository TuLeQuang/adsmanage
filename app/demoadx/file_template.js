<script>
function clickLogging() {
    var img = new Image();
    img.src = admGetUrlCk();
}
(function() {
    var doc = document,
        ua = navigator.userAgent;
    if (parent.ADS_CHECKER.isMobile.any() != null || ua.indexOf('Firefox') != -1) {
        doc.write('<a onlick="clickLogging();" href="{click}" target="_blank"><img src="{image}" border=0></a>');
    } else {
        doc.write('<scr' + 'ipt src="{script}"></scr' + 'ipt>');
        var respondMessage = function(b) {
            try {
                var a = JSON.parse(b.data);
                "undefined" != typeof a.type && ("ebclickthrough" == a.type || "clickthru" == a.type) && ((new Image).src = admGetUrlCk())
            } catch (c) {}
        };
        window.addEventListener ? window.addEventListener("message", respondMessage, !1) : window.attachEvent("onmessage", respondMessage, !1);
    }
})();
</script>

