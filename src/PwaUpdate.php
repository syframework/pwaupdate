<?php
namespace Sy\Component\Web;

use Sy\Component\Html\Element;

class PwaUpdate extends Element {

	/**
	 * Web component properties
	 *
	 * @var array
	 */
	private $properties;

	public function __construct(array $properties = array()) {
		parent::__construct('pwa-update');
		$this->properties = $properties;
		$this->mount(function () {
			$this->init();
		});
	}

	private function init() {
		$this->addJsLink(['url' => 'https://cdn.jsdelivr.net/npm/@pwabuilder/pwaupdate', 'crossdomain' => 'anonymous'], ['type' => 'module']);
		$this->setAttributes($this->properties);
	}

}