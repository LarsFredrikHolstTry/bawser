tinymce.init({
	selector: '#tinyMCEEditor',
	skin: 'oxide-dark',
	icons: 'small',
	toolbar_location: 'top',
	plugins: 'lists code table codesample',
	menubar: false,
	statusbar: false,
	toolbar:
		'formatselect | bold italic underline strikethrough bullist',
	content_css: 'dark',
	theme_advanced_default_foreground_color: '#FFFFFF',
	body_class: 'mceBlackBody',
});
