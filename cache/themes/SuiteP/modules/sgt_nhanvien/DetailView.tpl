

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
{if $bean->aclAccess("edit")}<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='sgt_nhanvien'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='EditView';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}">{/if} 
{if $bean->aclAccess("edit")}<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='sgt_nhanvien'; _form.return_action.value='DetailView'; _form.isDuplicate.value=true; _form.action.value='EditView'; _form.return_id.value='{$id}';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Duplicate" value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}" id="duplicate_button">{/if} 
{if $bean->aclAccess("delete")}<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='sgt_nhanvien'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('{$APP.NTC_DELETE_CONFIRMATION}')) SUGAR.ajaxUI.submitForm(_form); return false;" type="submit" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}" id="delete_button">{/if} 
{if $bean->aclAccess("edit") && $bean->aclAccess("delete")}<input title="{$APP.LBL_DUP_MERGE}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='sgt_nhanvien'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='Step1'; _form.module.value='MergeRecords';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Merge" value="{$APP.LBL_DUP_MERGE}" id="merge_duplicate_button">{/if} 
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=sgt_nhanvien", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
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
{sugar_translate label='DEFAULT' module='sgt_nhanvien'}
</a>
<a id="xstab0" href="#" class="visible-xs first-tab dropdown-toggle" data-toggle="dropdown">
{sugar_translate label='DEFAULT' module='sgt_nhanvien'}
</a>
</li>
{/if}
{if $config.enable_action_menu and $config.enable_action_menu != false}
<li id="tab-actions" class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">HÀNH ĐỘNG<span class="suitepicon suitepicon-action-caret"></span></a>
<ul class="dropdown-menu">
<li>{if $bean->aclAccess("edit")}<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='sgt_nhanvien'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='EditView';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}">{/if} </li>
<li>{if $bean->aclAccess("edit")}<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='sgt_nhanvien'; _form.return_action.value='DetailView'; _form.isDuplicate.value=true; _form.action.value='EditView'; _form.return_id.value='{$id}';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Duplicate" value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}" id="duplicate_button">{/if} </li>
<li>{if $bean->aclAccess("delete")}<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='sgt_nhanvien'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('{$APP.NTC_DELETE_CONFIRMATION}')) SUGAR.ajaxUI.submitForm(_form); return false;" type="submit" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}" id="delete_button">{/if} </li>
<li>{if $bean->aclAccess("edit") && $bean->aclAccess("delete")}<input title="{$APP.LBL_DUP_MERGE}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='sgt_nhanvien'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='Step1'; _form.module.value='MergeRecords';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Merge" value="{$APP.LBL_DUP_MERGE}" id="merge_duplicate_button">{/if} </li>
<li>{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=sgt_nhanvien", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}</li>
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


{capture name="label" assign="label"}{sugar_translate label='LBL_NAME' module='sgt_nhanvien'}{/capture}
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




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="ngaysinh">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_NGAYSINH' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="date" field="ngaysinh" >

{if !$fields.ngaysinh.hidden}
{counter name="panelFieldCount" print=false}


{if !empty($vardef.date_formatted_value) }
{assign var="value" value={$vardef.date_formatted_value} }
{else}
{if strlen($fields.ngaysinh.value) <= 0}
{assign var="value" value=$fields.ngaysinh.default_value }
{else}
{assign var="value" value=$fields.ngaysinh.value }
{/if}
{/if}
<span class="sugar_field" id="{$fields.ngaysinh.name}">{$value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="sodienthoai">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_SODIENTHOAI' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit phone" type="phone" field="sodienthoai" >

{if !$fields.sodienthoai.hidden}
{counter name="panelFieldCount" print=false}

{if !empty($fields.sodienthoai.value)}
{assign var="phone_value" value=$fields.sodienthoai.value }
{sugar_phone value=$phone_value usa_format="0"}
{/if}
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="cccd">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_CCCD' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="cccd" >

{if !$fields.cccd.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.cccd.value) <= 0}
{assign var="value" value=$fields.cccd.default_value }
{else}
{assign var="value" value=$fields.cccd.value }
{/if} 
<span class="sugar_field" id="{$fields.cccd.name}">{$fields.cccd.value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="ma_nv">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_MA_NV' module='sgt_nhanvien'}{/capture}
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




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="baohiem">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_BAOHIEM' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="baohiem" >

{if !$fields.baohiem.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.baohiem.value) <= 0}
{assign var="value" value=$fields.baohiem.default_value }
{else}
{assign var="value" value=$fields.baohiem.value }
{/if} 
<span class="sugar_field" id="{$fields.baohiem.name}">{$fields.baohiem.value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="diachi">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_DIACHI' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="diachi" >

{if !$fields.diachi.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.diachi.value) <= 0}
{assign var="value" value=$fields.diachi.default_value }
{else}
{assign var="value" value=$fields.diachi.value }
{/if} 
<span class="sugar_field" id="{$fields.diachi.name}">{$fields.diachi.value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="chucvu">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_CHUCVU' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="chucvu" >

{if !$fields.chucvu.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.chucvu.value) <= 0}
{assign var="value" value=$fields.chucvu.default_value }
{else}
{assign var="value" value=$fields.chucvu.value }
{/if} 
<span class="sugar_field" id="{$fields.chucvu.name}">{$fields.chucvu.value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="tenchamcong">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_TENCHAMCONG' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="tenchamcong" >

{if !$fields.tenchamcong.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.tenchamcong.value) <= 0}
{assign var="value" value=$fields.tenchamcong.default_value }
{else}
{assign var="value" value=$fields.tenchamcong.value }
{/if} 
<span class="sugar_field" id="{$fields.tenchamcong.name}">{$fields.tenchamcong.value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="gioitinh">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_GIOITINH' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="enum" field="gioitinh" >

{if !$fields.gioitinh.hidden}
{counter name="panelFieldCount" print=false}


{if is_string($fields.gioitinh.options)}
<input type="hidden" class="sugar_field" id="{$fields.gioitinh.name}" value="{ $fields.gioitinh.options }">
{ $fields.gioitinh.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.gioitinh.name}" value="{ $fields.gioitinh.value }">
{ $fields.gioitinh.options[$fields.gioitinh.value]}
{/if}
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="cc">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_CC' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="bool" field="cc" >

{if !$fields.cc.hidden}
{counter name="panelFieldCount" print=false}

{if strval($fields.cc.value) == "1" || strval($fields.cc.value) == "yes" || strval($fields.cc.value) == "on"} 
{assign var="checked" value='checked="checked"'}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.cc.name}" id="{$fields.cc.name}" value="$fields.cc.value" disabled="true" {$checked}>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="vitri">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_VITRI' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="vitri" >

{if !$fields.vitri.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.vitri.value) <= 0}
{assign var="value" value=$fields.vitri.default_value }
{else}
{assign var="value" value=$fields.vitri.value }
{/if} 
<span class="sugar_field" id="{$fields.vitri.name}">{$fields.vitri.value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="phongban">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_PHONGBAN' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="phongban" >

{if !$fields.phongban.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.phongban.value) <= 0}
{assign var="value" value=$fields.phongban.default_value }
{else}
{assign var="value" value=$fields.phongban.value }
{/if} 
<span class="sugar_field" id="{$fields.phongban.name}">{$fields.phongban.value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="bophan">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_BOPHAN' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="enum" field="bophan" >

{if !$fields.bophan.hidden}
{counter name="panelFieldCount" print=false}


{if is_string($fields.bophan.options)}
<input type="hidden" class="sugar_field" id="{$fields.bophan.name}" value="{ $fields.bophan.options }">
{ $fields.bophan.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.bophan.name}" value="{ $fields.bophan.value }">
{ $fields.bophan.options[$fields.bophan.value]}
{/if}
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="luongthoathuan">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_LUONGTHOATHUAN' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="currency" field="luongthoathuan" >

{if !$fields.luongthoathuan.hidden}
{counter name="panelFieldCount" print=false}

<span id='{$fields.luongthoathuan.name}'>
{sugar_number_format var=$fields.luongthoathuan.value }
</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="phucap">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_PHUCAP' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="currency" field="phucap" >

{if !$fields.phucap.hidden}
{counter name="panelFieldCount" print=false}

<span id='{$fields.phucap.name}'>
{sugar_number_format var=$fields.phucap.value }
</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="nganhang">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_NGANHANG' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="nganhang" >

{if !$fields.nganhang.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.nganhang.value) <= 0}
{assign var="value" value=$fields.nganhang.default_value }
{else}
{assign var="value" value=$fields.nganhang.value }
{/if} 
<span class="sugar_field" id="{$fields.nganhang.name}">{$fields.nganhang.value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="sotaikhoan">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_SOTAIKHOAN' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="sotaikhoan" >

{if !$fields.sotaikhoan.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.sotaikhoan.value) <= 0}
{assign var="value" value=$fields.sotaikhoan.default_value }
{else}
{assign var="value" value=$fields.sotaikhoan.value }
{/if} 
<span class="sugar_field" id="{$fields.sotaikhoan.name}">{$fields.sotaikhoan.value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="masothue">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_MASOTHUE' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="masothue" >

{if !$fields.masothue.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.masothue.value) <= 0}
{assign var="value" value=$fields.masothue.default_value }
{else}
{assign var="value" value=$fields.masothue.value }
{/if} 
<span class="sugar_field" id="{$fields.masothue.name}">{$fields.masothue.value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="dienthoaikhancap">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_DIENTHOAIKHANCAP' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit phone" type="phone" field="dienthoaikhancap" >

{if !$fields.dienthoaikhancap.hidden}
{counter name="panelFieldCount" print=false}

{if !empty($fields.dienthoaikhancap.value)}
{assign var="phone_value" value=$fields.dienthoaikhancap.value }
{sugar_phone value=$phone_value usa_format="0"}
{/if}
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="ncc">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_NCC' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="relate" field="ncc" >

{if !$fields.ncc.hidden}
{counter name="panelFieldCount" print=false}

{if !empty($fields.ncc_id_c.value)}
{capture assign="detail_url"}index.php?module=Accounts&action=DetailView&record={$fields.ncc_id_c.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="ncc_id_c" class="sugar_field" data-id-value="{$fields.ncc_id_c.value}">{$fields.ncc.value}</span>
{if !empty($fields.ncc_id_c.value)}</a>{/if}
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="hinhanh">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_HINHANH' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="image" field="hinhanh" >

{if !$fields.hinhanh.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.hinhanh.name}">
{if strlen($fields.hinhanh.value) <= 0}
<img src="" style="max-width: {if !$vardef.width}120{else}200{/if}px;" height="{if !$vardef.height}{else}50{/if}">
{else}
<img src="index.php?entryPoint=download&id={$fields.id.value}_{$fields.hinhanh.name}{$fields.width.value}&type={$module}" style="max-width: {if !$vardef.width}120{else}200{/if}px;" height="{if !$vardef.height}{else}50{/if}">
{/if}
</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="sgt_nhanvien_sgt_doi_name">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_SGT_NHANVIEN_SGT_DOI_FROM_SGT_DOI_TITLE' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="relate" field="sgt_nhanvien_sgt_doi_name" >

{if !$fields.sgt_nhanvien_sgt_doi_name.hidden}
{counter name="panelFieldCount" print=false}

{if !empty($fields.sgt_nhanvien_sgt_doisgt_doi_ida.value)}
{capture assign="detail_url"}index.php?module=sgt_doi&action=DetailView&record={$fields.sgt_nhanvien_sgt_doisgt_doi_ida.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="sgt_nhanvien_sgt_doisgt_doi_ida" class="sugar_field" data-id-value="{$fields.sgt_nhanvien_sgt_doisgt_doi_ida.value}">{$fields.sgt_nhanvien_sgt_doi_name.value}</span>
{if !empty($fields.sgt_nhanvien_sgt_doisgt_doi_ida.value)}</a>{/if}
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="loaica">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_LOAICA' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="enum" field="loaica" >

{if !$fields.loaica.hidden}
{counter name="panelFieldCount" print=false}


{if is_string($fields.loaica.options)}
<input type="hidden" class="sugar_field" id="{$fields.loaica.name}" value="{ $fields.loaica.options }">
{ $fields.loaica.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.loaica.name}" value="{ $fields.loaica.value }">
{ $fields.loaica.options[$fields.loaica.value]}
{/if}
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item" data-field="description">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_DESCRIPTION' module='sgt_nhanvien'}{/capture}
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
{sugar_translate label='DEFAULT' module='sgt_nhanvien'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="top-panel--1" data-id="DEFAULT">
<div class="tab-content">
<!-- TAB CONTENT -->





<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="name">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_NAME' module='sgt_nhanvien'}{/capture}
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




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="ngaysinh">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_NGAYSINH' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="date" field="ngaysinh" >

{if !$fields.ngaysinh.hidden}
{counter name="panelFieldCount" print=false}


{if !empty($vardef.date_formatted_value) }
{assign var="value" value={$vardef.date_formatted_value} }
{else}
{if strlen($fields.ngaysinh.value) <= 0}
{assign var="value" value=$fields.ngaysinh.default_value }
{else}
{assign var="value" value=$fields.ngaysinh.value }
{/if}
{/if}
<span class="sugar_field" id="{$fields.ngaysinh.name}">{$value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="sodienthoai">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_SODIENTHOAI' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit phone" type="phone" field="sodienthoai" >

{if !$fields.sodienthoai.hidden}
{counter name="panelFieldCount" print=false}

{if !empty($fields.sodienthoai.value)}
{assign var="phone_value" value=$fields.sodienthoai.value }
{sugar_phone value=$phone_value usa_format="0"}
{/if}
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="cccd">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_CCCD' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="cccd" >

{if !$fields.cccd.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.cccd.value) <= 0}
{assign var="value" value=$fields.cccd.default_value }
{else}
{assign var="value" value=$fields.cccd.value }
{/if} 
<span class="sugar_field" id="{$fields.cccd.name}">{$fields.cccd.value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="ma_nv">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_MA_NV' module='sgt_nhanvien'}{/capture}
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




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="baohiem">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_BAOHIEM' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="baohiem" >

{if !$fields.baohiem.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.baohiem.value) <= 0}
{assign var="value" value=$fields.baohiem.default_value }
{else}
{assign var="value" value=$fields.baohiem.value }
{/if} 
<span class="sugar_field" id="{$fields.baohiem.name}">{$fields.baohiem.value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="diachi">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_DIACHI' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="diachi" >

{if !$fields.diachi.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.diachi.value) <= 0}
{assign var="value" value=$fields.diachi.default_value }
{else}
{assign var="value" value=$fields.diachi.value }
{/if} 
<span class="sugar_field" id="{$fields.diachi.name}">{$fields.diachi.value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="chucvu">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_CHUCVU' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="chucvu" >

{if !$fields.chucvu.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.chucvu.value) <= 0}
{assign var="value" value=$fields.chucvu.default_value }
{else}
{assign var="value" value=$fields.chucvu.value }
{/if} 
<span class="sugar_field" id="{$fields.chucvu.name}">{$fields.chucvu.value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="tenchamcong">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_TENCHAMCONG' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="tenchamcong" >

{if !$fields.tenchamcong.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.tenchamcong.value) <= 0}
{assign var="value" value=$fields.tenchamcong.default_value }
{else}
{assign var="value" value=$fields.tenchamcong.value }
{/if} 
<span class="sugar_field" id="{$fields.tenchamcong.name}">{$fields.tenchamcong.value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="gioitinh">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_GIOITINH' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="enum" field="gioitinh" >

{if !$fields.gioitinh.hidden}
{counter name="panelFieldCount" print=false}


{if is_string($fields.gioitinh.options)}
<input type="hidden" class="sugar_field" id="{$fields.gioitinh.name}" value="{ $fields.gioitinh.options }">
{ $fields.gioitinh.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.gioitinh.name}" value="{ $fields.gioitinh.value }">
{ $fields.gioitinh.options[$fields.gioitinh.value]}
{/if}
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="cc">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_CC' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="bool" field="cc" >

{if !$fields.cc.hidden}
{counter name="panelFieldCount" print=false}

{if strval($fields.cc.value) == "1" || strval($fields.cc.value) == "yes" || strval($fields.cc.value) == "on"} 
{assign var="checked" value='checked="checked"'}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.cc.name}" id="{$fields.cc.name}" value="$fields.cc.value" disabled="true" {$checked}>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="vitri">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_VITRI' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="vitri" >

{if !$fields.vitri.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.vitri.value) <= 0}
{assign var="value" value=$fields.vitri.default_value }
{else}
{assign var="value" value=$fields.vitri.value }
{/if} 
<span class="sugar_field" id="{$fields.vitri.name}">{$fields.vitri.value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="phongban">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_PHONGBAN' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="phongban" >

{if !$fields.phongban.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.phongban.value) <= 0}
{assign var="value" value=$fields.phongban.default_value }
{else}
{assign var="value" value=$fields.phongban.value }
{/if} 
<span class="sugar_field" id="{$fields.phongban.name}">{$fields.phongban.value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="bophan">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_BOPHAN' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="enum" field="bophan" >

{if !$fields.bophan.hidden}
{counter name="panelFieldCount" print=false}


{if is_string($fields.bophan.options)}
<input type="hidden" class="sugar_field" id="{$fields.bophan.name}" value="{ $fields.bophan.options }">
{ $fields.bophan.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.bophan.name}" value="{ $fields.bophan.value }">
{ $fields.bophan.options[$fields.bophan.value]}
{/if}
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="luongthoathuan">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_LUONGTHOATHUAN' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="currency" field="luongthoathuan" >

{if !$fields.luongthoathuan.hidden}
{counter name="panelFieldCount" print=false}

<span id='{$fields.luongthoathuan.name}'>
{sugar_number_format var=$fields.luongthoathuan.value }
</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="phucap">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_PHUCAP' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="currency" field="phucap" >

{if !$fields.phucap.hidden}
{counter name="panelFieldCount" print=false}

<span id='{$fields.phucap.name}'>
{sugar_number_format var=$fields.phucap.value }
</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="nganhang">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_NGANHANG' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="nganhang" >

{if !$fields.nganhang.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.nganhang.value) <= 0}
{assign var="value" value=$fields.nganhang.default_value }
{else}
{assign var="value" value=$fields.nganhang.value }
{/if} 
<span class="sugar_field" id="{$fields.nganhang.name}">{$fields.nganhang.value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="sotaikhoan">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_SOTAIKHOAN' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="sotaikhoan" >

{if !$fields.sotaikhoan.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.sotaikhoan.value) <= 0}
{assign var="value" value=$fields.sotaikhoan.default_value }
{else}
{assign var="value" value=$fields.sotaikhoan.value }
{/if} 
<span class="sugar_field" id="{$fields.sotaikhoan.name}">{$fields.sotaikhoan.value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="masothue">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_MASOTHUE' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="masothue" >

{if !$fields.masothue.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.masothue.value) <= 0}
{assign var="value" value=$fields.masothue.default_value }
{else}
{assign var="value" value=$fields.masothue.value }
{/if} 
<span class="sugar_field" id="{$fields.masothue.name}">{$fields.masothue.value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="dienthoaikhancap">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_DIENTHOAIKHANCAP' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit phone" type="phone" field="dienthoaikhancap" >

{if !$fields.dienthoaikhancap.hidden}
{counter name="panelFieldCount" print=false}

{if !empty($fields.dienthoaikhancap.value)}
{assign var="phone_value" value=$fields.dienthoaikhancap.value }
{sugar_phone value=$phone_value usa_format="0"}
{/if}
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="ncc">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_NCC' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="relate" field="ncc" >

{if !$fields.ncc.hidden}
{counter name="panelFieldCount" print=false}

{if !empty($fields.ncc_id_c.value)}
{capture assign="detail_url"}index.php?module=Accounts&action=DetailView&record={$fields.ncc_id_c.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="ncc_id_c" class="sugar_field" data-id-value="{$fields.ncc_id_c.value}">{$fields.ncc.value}</span>
{if !empty($fields.ncc_id_c.value)}</a>{/if}
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="hinhanh">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_HINHANH' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="image" field="hinhanh" >

{if !$fields.hinhanh.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.hinhanh.name}">
{if strlen($fields.hinhanh.value) <= 0}
<img src="" style="max-width: {if !$vardef.width}120{else}200{/if}px;" height="{if !$vardef.height}{else}50{/if}">
{else}
<img src="index.php?entryPoint=download&id={$fields.id.value}_{$fields.hinhanh.name}{$fields.width.value}&type={$module}" style="max-width: {if !$vardef.width}120{else}200{/if}px;" height="{if !$vardef.height}{else}50{/if}">
{/if}
</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="sgt_nhanvien_sgt_doi_name">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_SGT_NHANVIEN_SGT_DOI_FROM_SGT_DOI_TITLE' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="relate" field="sgt_nhanvien_sgt_doi_name" >

{if !$fields.sgt_nhanvien_sgt_doi_name.hidden}
{counter name="panelFieldCount" print=false}

{if !empty($fields.sgt_nhanvien_sgt_doisgt_doi_ida.value)}
{capture assign="detail_url"}index.php?module=sgt_doi&action=DetailView&record={$fields.sgt_nhanvien_sgt_doisgt_doi_ida.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="sgt_nhanvien_sgt_doisgt_doi_ida" class="sugar_field" data-id-value="{$fields.sgt_nhanvien_sgt_doisgt_doi_ida.value}">{$fields.sgt_nhanvien_sgt_doi_name.value}</span>
{if !empty($fields.sgt_nhanvien_sgt_doisgt_doi_ida.value)}</a>{/if}
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="loaica">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_LOAICA' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="enum" field="loaica" >

{if !$fields.loaica.hidden}
{counter name="panelFieldCount" print=false}


{if is_string($fields.loaica.options)}
<input type="hidden" class="sugar_field" id="{$fields.loaica.name}" value="{ $fields.loaica.options }">
{ $fields.loaica.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.loaica.name}" value="{ $fields.loaica.value }">
{ $fields.loaica.options[$fields.loaica.value]}
{/if}
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item" data-field="description">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_DESCRIPTION' module='sgt_nhanvien'}{/capture}
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