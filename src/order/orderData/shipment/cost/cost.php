<?php

/**
 * OneFlowCost class.
 *
 * @extends OneFlowBase
 */
class OneFlowCost extends OneFlowBase {

	/**
	 * init function.
	 *
	 * @access public
	 * @return void
	 */
	public function init()      {

		$this->__addProperty("value");
		$this->__addProperty("currency");
	}
}

?>
