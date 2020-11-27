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
		parent::__construct('pwaupdate');
		$this->properties = $properties;
	}

	public function __toString() {
		$this->init();
		return parent::__toString();
	}

	private function init() {
		$this->addJsLink(['url' => 'https://cdn.jsdelivr.net/npm/@pwabuilder/pwaupdate', 'crossdomain' => 'anonymous']);
		$this->setAttributes($this->properties);
	}

}