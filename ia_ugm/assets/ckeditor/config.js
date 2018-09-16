/**
 * @license Copyright (c) 2003-2018, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
};

CKEDITOR.editorConfig = function(config) {
// ...
// kalau di hosting https://namadomain;
   config.filebrowserBrowseUrl = 'http://localhost/ia_ugm/assets/kcfinder/browse.php?type=files';
   config.filebrowserImageBrowseUrl = 'http://localhost/ia_ugm/assets/kcfinder/browse.php?type=images';
   config.filebrowserFlashBrowseUrl = 'http://localhost/ia_ugm/assets/kcfinder/browse.php?type=flash';
   config.filebrowserUploadUrl = 'http://localhost/ia_ugm/assets/kcfinder/upload.php?type=files';
   config.filebrowserImageUploadUrl = 'http://localhost/ia_ugm/assets/kcfinder/upload.php?type=images';
   config.filebrowserFlashUploadUrl = 'http://localhost/ia_ugm/assets/kcfinder/upload.php?type=flash';
// ...
};
