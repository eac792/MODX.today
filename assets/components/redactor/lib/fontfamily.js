(function($, RedactorPlugins) {
    RedactorPlugins.fontfamily = {
        init: function ()
        {
            var fonts = [ 'Arial', 'Helvetica', 'Georgia', 'Times New Roman', 'Monospace' ];
            var that = this;
            var dropdown = {};

            $.each(fonts, function(i, s)
            {
                dropdown['s' + i] = { title: s, callback: function() { that.setFontfamily(s); }};
            });

            dropdown['remove'] = { title: 'Remove font', callback: function() { that.resetFontfamily(); }};

            this.buttonAddAfter('bold', 'fontfamily', 'Change font family', false, dropdown);
        },
        setFontfamily: function (value)
        {
            this.inlineSetStyle('font-family', value);
        },
        resetFontfamily: function()
        {
            this.inlineRemoveStyle('font-family');
        }
    };
})(jQuery, window.RedactorPlugins || {});
