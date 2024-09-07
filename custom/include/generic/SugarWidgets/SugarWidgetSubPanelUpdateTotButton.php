<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

#[\AllowDynamicProperties]
class SugarWidgetSubPanelUpdateTotButton extends SugarWidgetField
{
    public function displayHeaderCell($layout_def)
    {
        return '&nbsp;';
    }

    public function displayList(&$layout_def)
    {
        global $app_strings;
        global $subpanel_item_count;
        $unique_id = $layout_def['subpanel_id']."_edit_".$subpanel_item_count;
        $href = 'index.php?module=' .'sgt_thietbitra'
            . '&action=' . 'UpdateTot'
            . '&record=' . $layout_def['fields']['ID']
            . '&return_module=' . $_REQUEST['module']
            . '&return_action=' . 'DetailView'
            . '&return_id=' . $_REQUEST['record']
            ;
        return '<a href="' . $href . '"' . "title ='". $app_strings['LNK_UPDATE_TOT']."'"
            . 'class="listViewTdToolsS1" id="' . $unique_id .'">' . '&nbsp;' . $app_strings['LNK_UPDATE_TOT'] .'</a>&nbsp;';
    }
}
