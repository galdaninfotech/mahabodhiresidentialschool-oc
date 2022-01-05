+function ($) { "use strict";

    var SendMail = function() {

        this.clickRecord = function(recordId) {
            var newPopup = $('<a />')

            newPopup.popup({
                handler: 'onSendForm',
                extraData: {
                    'record_id': recordId,
                }
            })
        }

    }

    $.sendMail = new SendMail;

}(window.jQuery);