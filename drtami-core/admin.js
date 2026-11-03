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
        const indices = list.find('input[name]').map(function () { const m = this.name.match(/\[([0-9]+)\]\[question\]$/); return m ? Number(m[1]) : -1; }).get();
        const index = Math.max(-1, ...indices) + 1;
        if (list.find('.dt-faq-row').length >= 30) return;
        const prefix = 'drtami_core[faq][' + lang + '][' + index + ']';
        const row = $('<div class="dt-faq-row" style="background:#fff;padding:12px;margin:10px 0;border:1px solid #ddd"></div>');
        $('<label>Question </label>').append($('<input class="large-text">').attr('name', prefix + '[question]')).appendTo(row);
        $('<label>Answer </label>').append($('<textarea class="large-text" rows="3"></textarea>').attr('name', prefix + '[answer]')).appendTo(row);
        $('<button type="button" class="button dt-faq-up">Move up</button> ').appendTo(row);
        $('<button type="button" class="button dt-faq-down">Move down</button> ').appendTo(row);
        $('<button type="button" class="button dt-faq-remove">Remove question</button>').appendTo(row);
        list.append(row);
    });
    $(document).on('click', '.dt-faq-remove', function () {
        $(this).closest('.dt-faq-row').remove();
    });
});

jQuery(function ($) {
    const form = $('#drtami-design-form');
    if (!form.length) return;
    const preview = $('#dt-design-preview');
    function refresh() {
        const get = key => form.find('[name="design[' + key + ']"]').val();
        preview.css({ backgroundColor: get('background'), color: get('ink'), fontFamily: get('sans') });
        preview.find('h2').css({ color: get('primary'), fontFamily: get('serif') });
        preview.find('.dt-design-button').css({ backgroundColor: get('accent'), color: get('ink') });
        form.find('input[type="color"]').each(function () {
            $(this).siblings('.dt-color-code').text($(this).val());
        });
    }
    form.on('input change', 'input, select', refresh);
    $('#dt-design-reset').on('click', function () {
        form.find('input[type="color"]').each(function () { $(this).val($(this).data('default')); });
        form.find('[name="design[sans]"]').val('DM Sans');
        form.find('[name="design[serif]"]').val('DM Serif Display');
        refresh();
    });
    refresh();
});

jQuery(function ($) {
    function renumber(list) {
        const lang = list.data('lang');
        list.find('.dt-faq-row').each(function (index) {
            $(this).find('[name]').each(function () {
                const field = this.name.endsWith('[question]') ? 'question' : 'answer';
                this.name = 'drtami_core[faq][' + lang + '][' + index + '][' + field + ']';
            });
        });
    }
    $(document).on('click', '.dt-faq-up, .dt-faq-down', function () {
        const row = $(this).closest('.dt-faq-row');
        if ($(this).hasClass('dt-faq-up')) {
            const previous = row.prev('.dt-faq-row');
            if (previous.length) row.insertBefore(previous);
        } else {
            const next = row.next('.dt-faq-row');
            if (next.length) row.insertAfter(next);
        }
        renumber(row.closest('.dt-faq-list'));
    });
    $(document).on('click', '.dt-faq-remove', function () {
        renumber($(this).closest('.dt-faq-list'));
    });
});
