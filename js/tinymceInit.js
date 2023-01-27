tinymce.init({
	selector: '#tinyMCEEditor',
	skin: 'oxide-dark',
	icons: 'small',
	toolbar_location: 'top',
	plugins: 'lists code table codesample',
	menubar: false,
	statusbar: false,
	toolbar:
		'bold italic underline strikethrough bullist fontsizeselect alignleft aligncenter alignright forecolor',
	content_css: 'dark',
	content_style:
		'body {font-size: 12px; background-color: #363636;}',
});
