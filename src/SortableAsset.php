<?php


namespace coderovich\sortablejs;

use yii\web\AssetBundle;

/**
 * Asset bundle for coderovich\sortablejs
 * Create reorderable drag-and-drop lists for modern browsers and touch devices.
 *
 * @see https://github.com/coderovich/sortableJS
 * @author SPavlov <spavlov@li.ru>
 * @since 1.1.0
 */
class SortableAsset extends AssetBundle {
	/***
	 * @inheritdoc
	 */
	public $sourcePath = '@bower/sortablejs';

	/**
	 * Adds JS Files depending on [[YII_ENV_PROD]]
	 */
	public function init() {
		parent::init();

		$this->js = [
			(YII_ENV_DEV ? 'Sortable.min.js' : 'Sortable.js')
		];
	}

	/***
	 * @inheritdoc
	 */
	public $depends = [
		'yii\web\JqueryAsset',
	];
}
