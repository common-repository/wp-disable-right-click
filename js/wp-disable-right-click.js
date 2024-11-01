jQuery(document).ready(function ($) {
    $(document).on("contextmenu", function (e) {
        if (WpDisableRightClickOptions.enable_inputs) {
            if (e.target.nodeName != "INPUT" && e.target.nodeName != "TEXTAREA") {
                e.preventDefault();
            }
        } else {
            e.preventDefault();
        }
    });
    $(document).on("copy cut paste drop", function (e) {
        if (WpDisableRightClickOptions.enable_inputs) {
            if (e.target.nodeName != "INPUT" && e.target.nodeName != "TEXTAREA") {
                return false;
            }
        } else {
            return false;
        }
    });
});
