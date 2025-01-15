<?php
namespace klikar3\tinymce;

use yii\web\AssetBundle;

class TinyMCEAsset extends AssetBundle
{
	public $sourcePath = '@klikar3/tinymce/assets';
	
	public $css = [];
	
	public $js = [
		'tinymce.min.js',
	];
}
