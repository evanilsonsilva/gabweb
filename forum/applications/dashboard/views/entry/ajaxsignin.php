<?php if (!defined('APPLICATION')) exit();
$Methods = $this->data('Methods', array());
$SelectedMethod = $this->data('SelectedMethod', array());
$CssClass = count($Methods) > 0 ? ' MultipleEntryMethods' : ' SingleEntryMethod';
echo "{\"userid\":\"".Gdn::session()->UserID."\",\"error\":\"".strlen($this->Form->errors())."\",\"key\":\"".Gdn::session()->ensureTransientKey()."\"}";