(function($){
    //***********************
    //  toastee plugin v1.0
    //  super light weight toast notification plugin ( requires jQuery )
    //  author: Eric Rogers
    //  options: {
    //  type: 'info', 'error', 'success',
    //  header: 'your header text',
    //  message: 'your message',
    //  color: 'text and close button color',
    //  background: 'background color',
    //  width: takes an integer (default is 150),
    //  height: takes an integer (default is 150)
    //  }
    //**********************

    $.fn.toastee = function(options) {
        var settings = $.extend ({
            type: 'info',
            header: '',
            message: '',
            color: '#fff',
            background: '#3498db',
            width: 100,
            height: 40,
            fadeout: 3000
        }, options);

        
        var self = this;
        var dataId = Math.floor(Math.random() * 100000);
        var backgrounds = {'info': '#3498db', 'error': '#e74c3c', 'success': '#2ecc71'};
        var headers = {'info': 'Info', 'error': 'Error!', 'success': 'Success!'};

        if (options == undefined) {
            options = {'empty': 'empty'};
        }

        switch (settings.type) {
            case 'info':
                settings.background = options.background || backgrounds.info;
                settings.header = options.header || headers.info;
                break;
            case 'error':
                settings.background = options.background || backgrounds.error;
                settings.header = options.header || headers.error;
                break;
            case 'success':
                settings.background = options.background || backgrounds.success;
                settings.header = options.header || headers.success;
        };
        
        var toast = '<div data-id="' + dataId +'" style="display: block; position: relative; border-radius: 10px; min-width:80px; max-width: '+ settings.width +'px; height: '+ settings.height +'px; background: '+ settings.background +'; box-shadow: 0 5px 5px 2px #ccc;zIndex:100;max-height:80px !important;">';
        toast += '<a class="closeToastee" style="color: '+ settings.color +'; text-align: center; line-height: .8; width: 10px; height: 10px; padding: 2px; border-radius: 100%;font-family: sans-serif; display: block; cursor: pointer; position: absolute; top: 10px; right: 10px; color: ' + settings.color + ';">X</a>';
        toast += '<h6 style="text-align: center; padding: 10px 10px 0; color: '+ settings.color +'">' + settings.header + '</h6>';
        toast += '</div>';

        var timer ={};

        var startTimer = function(){
            timer.dataId =  setTimeout(function() {
            
            $('div[data-id="'+ dataId +'"]').fadeOut(settings.fadeout, function(){
                $(this).remove();
            });
            }, 3000);
        };

        var stopTimer = function () {
            clearTimeout(timer.dataId);
        };

        $(this).append(toast);

        $('div[data-id="'+ dataId +'"]').hide(0).fadeIn(500);
        startTimer();
        
        $('.closeToastee').on('click', function () {
           $(this).parent().hide().remove(); 
        });

        $('div[data-id="' + dataId + '"]').mouseover(function(){
            stopTimer();
            $(this).stop().fadeIn(0);
        }).mouseout(function(){
            startTimer();
        });

            
        return this;
    };
})(jQuery);
