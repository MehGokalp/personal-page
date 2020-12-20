var isStopped = false,
    typedInstance;

function destructTyping() {
    if (isStopped === false) {
        typedInstance.destroy();
        $('#messages').addClass('stopAnimate').show(0);

        isStopped = true;
    }
}

function bindESCEvents() {
    $(document).on('keyup', function(e) {
        if (e.key === 27) { // escape key maps to keycode `27`
            destructTyping();
        }
    }).on('click', '.escBtn', function () {
        destructTyping();
    });
}

function constructTyping() {
    var anim = false;

    typedInstance = new Typed('#message', {
        stringsElement: '#messages',
        typeSpeed: 10,
        loop: false,
        contentType: 'html',
        loopCount: false
    });

    var $console = $('.console');
    setInterval(function(){
        if(!anim){
            anim = true;

            $console.animate({ scrollTop: $console.prop("scrollHeight")}, 100, function(){
                anim = false;
            });
        }
    }, 100);
}

$(document).on('ready', function(){
    constructTyping();
    bindESCEvents();
});