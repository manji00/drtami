jQuery(function ($) {
    $('.dt-image-control').each(function () {
        const box = $(this);
        box.find('.dt-select').on('click', function (event) {
            event.preventDefault();
            const frame = wp.media({ title: 'Bild auswählen', button: { text: 'Dieses Bild verwenden' }, library: { type: 'image' }, multiple: false });
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
