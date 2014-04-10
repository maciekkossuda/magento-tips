<?php
// in controller action after:
// $this->loadLayout();
// $this->renderLayout();
print_r($this->getLayout()->getUpdate()->getHandles());