

<script language="javascript">
    {literal}
    SUGAR.util.doWhen(function () {
        return $("#contentTable").length == 0;
    }, SUGAR.themes.actionMenu);
    {/literal}
</script>
<table cellpadding="0" cellspacing="0" border="0" width="100%" id="">
<tr>
<td class="buttons" align="left" NOWRAP width="80%">
<div class="actionsContainer">
<form action="index.php" method="post" name="DetailView" id="formDetailView">
<input type="hidden" name="module" value="{$module}">
<input type="hidden" name="record" value="{$fields.id.value}">
<input type="hidden" name="return_action">
<input type="hidden" name="return_module">
<input type="hidden" name="return_id">
<input type="hidden" name="module_tab">
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="offset" value="{$offset}">
<input type="hidden" name="action" value="EditView">
<input type="hidden" name="sugar_body_only">
{if !$config.enable_action_menu}
<div class="buttons">
{if $bean->aclAccess("edit")}<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='sgt_vangmat'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='EditView';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}">{/if} 
{if $bean->aclAccess("edit")}<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='sgt_vangmat'; _form.return_action.value='DetailView'; _form.isDuplicate.value=true; _form.action.value='EditView'; _form.return_id.value='{$id}';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Duplicate" value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}" id="duplicate_button">{/if} 
{if $bean->aclAccess("delete")}<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='sgt_vangmat'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('{$APP.NTC_DELETE_CONFIRMATION}')) SUGAR.ajaxUI.submitForm(_form); return false;" type="submit" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}" id="delete_button">{/if} 
{if $bean->aclAccess("edit") && $bean->aclAccess("delete")}<input title="{$APP.LBL_DUP_MERGE}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='sgt_vangmat'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='Step1'; _form.module.value='MergeRecords';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Merge" value="{$APP.LBL_DUP_MERGE}" id="merge_duplicate_button">{/if} 
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=sgt_vangmat", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
{/if}
</form>
</div>
</td>
<td align="right" width="20%" class="buttons">{$ADMIN_EDIT}
{$PAGINATION}
</td>
</tr>
</table>
{sugar_include include=$includes}
<div class="detail-view">
<div class="mobile-pagination">{$PAGINATION}</div>

<ul class="nav nav-tabs">

{if $config.enable_action_menu and $config.enable_action_menu != false}
<li role="presentation" class="active">
<a id="tab0" data-toggle="tab" class="hidden-xs">
{sugar_translate label='DEFAULT' module='sgt_vangmat'}
</a>
<a id="xstab0" href="#" class="visible-xs first-tab dropdown-toggle" data-toggle="dropdown">
{sugar_translate label='DEFAULT' module='sgt_vangmat'}
</a>
</li>
{/if}
{if $config.enable_action_menu and $config.enable_action_menu != false}
<li id="tab-actions" class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">HÀNH ĐỘNG<span class="suitepicon suitepicon-action-caret"></span></a>
<ul class="dropdown-menu">
<li>{if $bean->aclAccess("edit")}<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='sgt_vangmat'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='EditView';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}">{/if} </li>
<li>{if $bean->aclAccess("edit")}<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='sgt_vangmat'; _form.return_action.value='DetailView'; _form.isDuplicate.value=true; _form.action.value='EditView'; _form.return_id.value='{$id}';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Duplicate" value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}" id="duplicate_button">{/if} </li>
<li>{if $bean->aclAccess("delete")}<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='sgt_vangmat'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('{$APP.NTC_DELETE_CONFIRMATION}')) SUGAR.ajaxUI.submitForm(_form); return false;" type="submit" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}" id="delete_button">{/if} </li>
<li>{if $bean->aclAccess("edit") && $bean->aclAccess("delete")}<input title="{$APP.LBL_DUP_MERGE}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='sgt_vangmat'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='Step1'; _form.module.value='MergeRecords';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Merge" value="{$APP.LBL_DUP_MERGE}" id="merge_duplicate_button">{/if} </li>
<li>{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=sgt_vangmat", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}</li>
</ul>
</li>
<li class="tab-inline-pagination">
{$PAGINATION}
</li>
{/if}
</ul>
<div class="clearfix"></div>

{if $config.enable_action_menu and $config.enable_action_menu != false}

<div class="tab-content">
{else}

<div class="tab-content" style="padding: 0; border: 0;">
{/if}


{if $config.enable_action_menu and $config.enable_action_menu != false}
<div class="tab-pane-NOBOOTSTRAPTOGGLER active fade in" id='tab-content-0'>





<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="name">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_NAME' module='sgt_vangmat'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="name" field="name" >

{if !$fields.name.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.name.value) <= 0}
{assign var="value" value=$fields.name.default_value }
{else}
{assign var="value" value=$fields.name.value }
{/if} 
<span class="sugar_field" id="{$fields.name.name}">{$fields.name.value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="ma_nv">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_MA_NV' module='sgt_vangmat'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="ma_nv" >

{if !$fields.ma_nv.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.ma_nv.value) <= 0}
{assign var="value" value=$fields.ma_nv.default_value }
{else}
{assign var="value" value=$fields.ma_nv.value }
{/if} 
<span class="sugar_field" id="{$fields.ma_nv.name}">{$fields.ma_nv.value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="tungay">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_TUNGAY' module='sgt_vangmat'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field" type="date" field="tungay" >

{if !$fields.tungay.hidden}
{counter name="panelFieldCount" print=false}


{if !empty($vardef.date_formatted_value) }
{assign var="value" value={$vardef.date_formatted_value} }
{else}
{if strlen($fields.tungay.value) <= 0}
{assign var="value" value=$fields.tungay.default_value }
{else}
{assign var="value" value=$fields.tungay.value }
{/if}
{/if}
<span class="sugar_field" id="{$fields.tungay.name}">{$value}</span>
{/if}

</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="denngay">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_DENNGAY' module='sgt_vangmat'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field" type="date" field="denngay" >

{if !$fields.denngay.hidden}
{counter name="panelFieldCount" print=false}


{if !empty($vardef.date_formatted_value) }
{assign var="value" value={$vardef.date_formatted_value} }
{else}
{if strlen($fields.denngay.value) <= 0}
{assign var="value" value=$fields.denngay.default_value }
{else}
{assign var="value" value=$fields.denngay.value }
{/if}
{/if}
<span class="sugar_field" id="{$fields.denngay.name}">{$value}</span>
{/if}

</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="lydo">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_LYDO' module='sgt_vangmat'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="enum" field="lydo" >

{if !$fields.lydo.hidden}
{counter name="panelFieldCount" print=false}


{if is_string($fields.lydo.options)}
<input type="hidden" class="sugar_field" id="{$fields.lydo.name}" value="{ $fields.lydo.options }">
{ $fields.lydo.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.lydo.name}" value="{ $fields.lydo.value }">
{ $fields.lydo.options[$fields.lydo.value]}
{/if}
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="pheduyet">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_PHEDUYET' module='sgt_vangmat'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="bool" field="pheduyet" >

{if !$fields.pheduyet.hidden}
{counter name="panelFieldCount" print=false}

{if strval($fields.pheduyet.value) == "1" || strval($fields.pheduyet.value) == "yes" || strval($fields.pheduyet.value) == "on"} 
{assign var="checked" value='checked="checked"'}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.pheduyet.name}" id="{$fields.pheduyet.name}" value="$fields.pheduyet.value" disabled="true" {$checked}>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="tongsongay">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_TONGSONGAY' module='sgt_vangmat'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field" type="int" field="tongsongay" >

{if !$fields.tongsongay.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.tongsongay.name}">
{sugar_number_format precision=0 var=$fields.tongsongay.value}
</span>
{/if}

</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="tg_ngaydanghi">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_TG_NGAYDANGHI' module='sgt_vangmat'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field" type="int" field="tg_ngaydanghi" >

{if !$fields.tg_ngaydanghi.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.tg_ngaydanghi.name}">
{sugar_number_format precision=0 var=$fields.tg_ngaydanghi.value}
</span>
{/if}

</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="nghitrongnam">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_NGHITRONGNAM' module='sgt_vangmat'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field" type="int" field="nghitrongnam" >

{if !$fields.nghitrongnam.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.nghitrongnam.name}">
{sugar_number_format precision=0 var=$fields.nghitrongnam.value}
</span>
{/if}

</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="">
</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="date_entered">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_ENTERED' module='sgt_vangmat'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field" type="datetime" field="date_entered" >

{if !$fields.date_entered.hidden}
{counter name="panelFieldCount" print=false}
<span id="date_entered" class="sugar_field">{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}</span>
{/if}

</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="date_modified">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_MODIFIED' module='sgt_vangmat'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field" type="datetime" field="date_modified" >

{if !$fields.date_modified.hidden}
{counter name="panelFieldCount" print=false}
<span id="date_modified" class="sugar_field">{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}</span>
{/if}

</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item" data-field="description">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_DESCRIPTION' module='sgt_vangmat'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field inlineEdit" type="text" field="description" colspan='3'>

{if !$fields.description.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.description.name|escape:'html'|url2html|nl2br}">{$fields.description.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>

</div>
{else}

<div class="tab-pane-NOBOOTSTRAPTOGGLER panel-collapse"></div>
{/if}
</div>

<div class="panel-content">
<div>&nbsp;</div>





{if $config.enable_action_menu and $config.enable_action_menu != false}

{else}

<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse" href="#top-panel--1" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
{sugar_translate label='DEFAULT' module='sgt_vangmat'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="top-panel--1" data-id="DEFAULT">
<div class="tab-content">
<!-- TAB CONTENT -->





<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="name">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_NAME' module='sgt_vangmat'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="name" field="name" >

{if !$fields.name.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.name.value) <= 0}
{assign var="value" value=$fields.name.default_value }
{else}
{assign var="value" value=$fields.name.value }
{/if} 
<span class="sugar_field" id="{$fields.name.name}">{$fields.name.value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="ma_nv">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_MA_NV' module='sgt_vangmat'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="ma_nv" >

{if !$fields.ma_nv.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.ma_nv.value) <= 0}
{assign var="value" value=$fields.ma_nv.default_value }
{else}
{assign var="value" value=$fields.ma_nv.value }
{/if} 
<span class="sugar_field" id="{$fields.ma_nv.name}">{$fields.ma_nv.value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="tungay">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_TUNGAY' module='sgt_vangmat'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field" type="date" field="tungay" >

{if !$fields.tungay.hidden}
{counter name="panelFieldCount" print=false}


{if !empty($vardef.date_formatted_value) }
{assign var="value" value={$vardef.date_formatted_value} }
{else}
{if strlen($fields.tungay.value) <= 0}
{assign var="value" value=$fields.tungay.default_value }
{else}
{assign var="value" value=$fields.tungay.value }
{/if}
{/if}
<span class="sugar_field" id="{$fields.tungay.name}">{$value}</span>
{/if}

</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="denngay">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_DENNGAY' module='sgt_vangmat'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field" type="date" field="denngay" >

{if !$fields.denngay.hidden}
{counter name="panelFieldCount" print=false}


{if !empty($vardef.date_formatted_value) }
{assign var="value" value={$vardef.date_formatted_value} }
{else}
{if strlen($fields.denngay.value) <= 0}
{assign var="value" value=$fields.denngay.default_value }
{else}
{assign var="value" value=$fields.denngay.value }
{/if}
{/if}
<span class="sugar_field" id="{$fields.denngay.name}">{$value}</span>
{/if}

</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="lydo">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_LYDO' module='sgt_vangmat'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="enum" field="lydo" >

{if !$fields.lydo.hidden}
{counter name="panelFieldCount" print=false}


{if is_string($fields.lydo.options)}
<input type="hidden" class="sugar_field" id="{$fields.lydo.name}" value="{ $fields.lydo.options }">
{ $fields.lydo.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.lydo.name}" value="{ $fields.lydo.value }">
{ $fields.lydo.options[$fields.lydo.value]}
{/if}
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="pheduyet">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_PHEDUYET' module='sgt_vangmat'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="bool" field="pheduyet" >

{if !$fields.pheduyet.hidden}
{counter name="panelFieldCount" print=false}

{if strval($fields.pheduyet.value) == "1" || strval($fields.pheduyet.value) == "yes" || strval($fields.pheduyet.value) == "on"} 
{assign var="checked" value='checked="checked"'}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.pheduyet.name}" id="{$fields.pheduyet.name}" value="$fields.pheduyet.value" disabled="true" {$checked}>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="tongsongay">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_TONGSONGAY' module='sgt_vangmat'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field" type="int" field="tongsongay" >

{if !$fields.tongsongay.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.tongsongay.name}">
{sugar_number_format precision=0 var=$fields.tongsongay.value}
</span>
{/if}

</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="tg_ngaydanghi">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_TG_NGAYDANGHI' module='sgt_vangmat'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field" type="int" field="tg_ngaydanghi" >

{if !$fields.tg_ngaydanghi.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.tg_ngaydanghi.name}">
{sugar_number_format precision=0 var=$fields.tg_ngaydanghi.value}
</span>
{/if}

</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="nghitrongnam">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_NGHITRONGNAM' module='sgt_vangmat'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field" type="int" field="nghitrongnam" >

{if !$fields.nghitrongnam.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.nghitrongnam.name}">
{sugar_number_format precision=0 var=$fields.nghitrongnam.value}
</span>
{/if}

</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="">
</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="date_entered">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_ENTERED' module='sgt_vangmat'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field" type="datetime" field="date_entered" >

{if !$fields.date_entered.hidden}
{counter name="panelFieldCount" print=false}
<span id="date_entered" class="sugar_field">{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}</span>
{/if}

</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="date_modified">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_MODIFIED' module='sgt_vangmat'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field" type="datetime" field="date_modified" >

{if !$fields.date_modified.hidden}
{counter name="panelFieldCount" print=false}
<span id="date_modified" class="sugar_field">{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}</span>
{/if}

</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item" data-field="description">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_DESCRIPTION' module='sgt_vangmat'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field inlineEdit" type="text" field="description" colspan='3'>

{if !$fields.description.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.description.name|escape:'html'|url2html|nl2br}">{$fields.description.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>

</div>
</div>
</div>
{/if}
</div>
</div>

</form>
<script>SUGAR.util.doWhen("document.getElementById('form') != null",
        function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script>            <script type="text/javascript" src="include/InlineEditing/inlineEditing.js"></script>
<script type="text/javascript" src="modules/Favorites/favorites.js"></script>
{literal}
<script type="text/javascript">

                    let selectTabDetailView = function(tab) {
                        $('#content div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').hide();
                        $('#content div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').eq(tab).show().addClass('active').addClass('in');
                        $('#content div.detail-view div.panel-content div.panel.panel').hide();
                        $('#content div.panel-content div.panel.tab-panel-' + tab).show();
                    };

                    var selectTabOnError = function(tab) {
                        selectTabDetailView(tab);
                        $('#content ul.nav.nav-tabs > li').removeClass('active');
                        $('#content ul.nav.nav-tabs > li a').css('color', '');

                        $('#content ul.nav.nav-tabs > li').eq(tab).find('a').first().css('color', 'red');
                        $('#content ul.nav.nav-tabs > li').eq(tab).addClass('active');

                    };

                    var selectTabOnErrorInputHandle = function(inputHandle) {
                        var tab = $(inputHandle).closest('.tab-pane-NOBOOTSTRAPTOGGLER').attr('id').match(/^detailpanel_(.*)$/)[1];
                        selectTabOnError(tab);
                    };


                    $(function(){
                        $('#content ul.nav.nav-tabs > li > a[data-toggle="tab"]').click(function(e){
                            if(typeof $(this).parent().find('a').first().attr('id') != 'undefined') {
                                var tab = parseInt($(this).parent().find('a').first().attr('id').match(/^tab(?<number>(.)*)$/)[1]);
                                selectTabDetailView(tab);
                            }
                        });
                    });

                </script>
{/literal}