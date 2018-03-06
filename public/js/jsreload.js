/**
 * JSreload
 * (c) 2013, Christian Knuth
 */
var JSreload = {
    file: '',
    selector: '',
    rawContent: '',
    domContent: '',
    domElContent: '',
    init: function() {
        if (typeof jQuery === "undefined")
            alert("jQuery not loaded.");
        else {
            jQuery(document).ready(function () {
                JSreload.displayPanel();
                JSreload.load();
            });
        };
    },
    load: function() {
        $.ajax(window.location.href, {async: false}).done(function(data) {
            JSreload.rawContent = data;
            JSreload.domContent = $.parseHTML(data);
        });
    },
    run: function() {
        var date = new Date().getTime();
        JSreload.file = $('#JSreload-script').val();
        JSreload.selector = $('#JSreload-selector').val();
        if(JSreload.selector == 'body') {
            JSreload.selector = '#JSreload-body';
            var data = JSreload.rawContent.replace('<body', '<body><div id="JSreload-body"').replace('</body>','</div></body>');
            JSreload.domElContent = $($.parseHTML(data)).filter('#JSreload-body').html();
            $('body').html(JSreload.domElContent);
        } else {
            JSreload.domElContent = $(JSreload.domContent).filter(JSreload.selector).html();
            $(JSreload.selector).html(JSreload.domElContent);
        }
        $('head').append('<script class="JSreload" src="'+JSreload.file+'?'+date+'"></script>');
    },
    displayPanel: function() {
        var box = $('<div id="JSreload"/>');
        box.css({
            position: 'fixed',
            left: 50,
            top: 100,
            width: 220,
            minHeight:100,
            background: 'rgba(0,0,0,0.7)',
            borderRadius: 5,
            zIndex: 10000,
            padding: 10
        });
        var title = $('<p>JSreload</p>').css({
            color: '#ffffff',
            fontWeight: 'bold'
        });
        var btn = $('<a href="#" />').css({
            color: '#ffffff',
            display: 'inline-block',
            padding: '4px',
            borderColor: '#ccc',
            borderWidth: '1px',
            borderStyle: 'solid',
            margin: '3px'
        });
        var label = $('<p />').css({
            color: '#ffffff',
            fontSize: '11px',
            margin:'0'
        });
        var run = btn.clone().text('reload').click(function(e){
            e.preventDefault();
            JSreload.run();
            return false;
        });
        var scripts = $('<select id="JSreload-script" />').css({
            width: 200,
            border: 'none',
            background: 'rgba(0,0,0,0.7)',
            color: '#ffffff'
        });
        var selector = $('<input id="JSreload-selector" value="body" />').css({
            width: 180,
            border: 'none',
            background: 'rgba(0,0,0,0.7)',
            color: '#ffffff',
            padding: '3px 10px'
        });
        $('script').each(function(index,el){
            if(el.src != '')
                scripts.append($('<option />').text(el.src));
        });

        box.append(title);
        box.append(label.clone().text('file to reload'));
        box.append(scripts);
        box.append(label.clone().text('selector'));
        box.append(selector);
        box.append(run);

        $('body').prepend(box);
    }
};

function loadjQuery(url, callback) {
    var script_tag = document.createElement('script');
    script_tag.setAttribute("src", url);
    script_tag.onload = callback;
    script_tag.onreadystatechange = function () {
        if (this.readyState == 'complete' || this.readyState == 'loaded') callback();
    };
    document.getElementsByTagName("head")[0].appendChild(script_tag);
}

if (typeof jQuery === "undefined") {
    loadjQuery("//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js", JSreload.init);
} else
    JSreload.init();
