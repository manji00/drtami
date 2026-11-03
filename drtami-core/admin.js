jQuery(function ($) {
    $('.dt-image-control').each(function () {
        const box = $(this);
        box.find('.dt-select').on('click', function (event) {
            event.preventDefault();
            const frame = wp.media({ title: 'Choose image', button: { text: 'Use this image' }, library: { type: 'image' }, multiple: false });
            frame.on('select', function () {
                const item = frame.state().get('selection').first().toJSON();
                box.find('input[type="hidden"]').val(item.id);
                const preview = item.sizes && item.sizes.thumbnail ? item.sizes.thumbnail.url : item.url;
                box.find('.dt-preview').attr('src', preview).show();
            });
            frame.open();
        });
        box.find('.dt-remove').on('click', function (event) {
            event.preventDefault();
            box.find('input[type="hidden"]').val('0');
            box.find('.dt-preview').attr('src', '').hide();
        });
    });
});

jQuery(function ($) {
    $('.dt-faq-add').on('click', function () {
        const lang = $(this).data('lang');
        const list = $('.dt-faq-list[data-lang="' + lang + '"]');
        const indices = list.find('input[name]').map(function () { const m = this.name.match(/\\[(\\d+)\\]\\[question\\]$/); return m ? Number(m[1]) : -1; }).get();
        const index = Math.max(-1, ...indices) + 1;
        if (list.find('.dt-faq-row').length >= 30) return;
        const prefix = 'drtami_core[faq][' + lang + '][' + index + ']';
        const row = $('<div class="dt-faq-row" style="background:#fff;padding:12px;margin:10px 0;border:1px solid #ddd"></div>');
        $('<label>Question </label>').append($('<input class="large-text">').attr('name', prefix + '[question]')).appendTo(row);
        $('<label>Answer </label>').append($('<textarea class="large-text" rows="3"></textarea>').attr('name', prefix + '[answer]')).appendTo(row);
        $('<button type="button" class="button dt-faq-remove">Remove question</button>').appendTo(row);
        list.append(row);
    });
    $(document).on('click', '.dt-faq-remove', function () {
        $(this).closest('.dt-faq-row').remove();
    });
});
