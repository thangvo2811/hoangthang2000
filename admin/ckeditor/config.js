/**
 * @license Copyright (c) 2003-2022, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	config.enterMode = CKEDITOR.ENTER_BR;
	config.toolbar = [
                                   ['Source','Preview','Templates'],
                                   ['Cut','Copy','Paste','PasteText','PasteFromWord','-','Print', 'SpellChecker', 'Scayt'],
                                   ['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
                                   '/',
                                   ['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],
                                   ['NumberedList','BulletedList','-','Outdent','Indent','Blockquote','CreateDiv'],
                                   ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
                                   ['BidiLtr', 'BidiRtl' ],
                                   ['Link','Unlink','Anchor'],
                                   ['Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak','Iframe'],
                                   '/',
                                   ['Styles','Format','Font','FontSize'],
                                   ['TextColor','BGColor'],
                                   ['Maximize','ShowBlocks','Syntaxhighlight']
                      ]
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
};
