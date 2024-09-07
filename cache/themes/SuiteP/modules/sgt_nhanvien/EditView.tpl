

<script>
    {literal}
    $(document).ready(function(){
	    $("ul.clickMenu").each(function(index, node){
	        $(node).sugarActionMenu();
	    });

        if($('.edit-view-pagination').children().length == 0) $('.saveAndContinue').remove();
    });
    {/literal}
</script>
<div class="clear"></div>
<form action="index.php" method="POST" name="{$form_name}" id="{$form_id}" {$enctype}>
<div class="edit-view-pagination-mobile-container">
<div class="edit-view-pagination edit-view-mobile-pagination">
{$PAGINATION}
</div>
</div>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="dcQuickEdit">
<tr>
<td class="buttons">
<input type="hidden" name="module" value="{$module}">
{if isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true"}
<input type="hidden" name="record" value="">
<input type="hidden" name="duplicateSave" value="true">
<input type="hidden" name="duplicateId" value="{$fields.id.value}">
{else}
<input type="hidden" name="record" value="{$fields.id.value}">
{/if}
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="action">
<input type="hidden" name="return_module" value="{$smarty.request.return_module}">
<input type="hidden" name="return_action" value="{$smarty.request.return_action}">
<input type="hidden" name="return_id" value="{$smarty.request.return_id}">
<input type="hidden" name="module_tab"> 
<input type="hidden" name="contact_role">
{if (!empty($smarty.request.return_module) || !empty($smarty.request.relate_to)) && !(isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true")}
<input type="hidden" name="relate_to" value="{if $smarty.request.return_relationship}{$smarty.request.return_relationship}{elseif $smarty.request.relate_to && empty($smarty.request.from_dcmenu)}{$smarty.request.relate_to}{elseif empty($isDCForm) && empty($smarty.request.from_dcmenu)}{$smarty.request.return_module}{/if}">
<input type="hidden" name="relate_id" value="{$smarty.request.return_id}">
{/if}
<input type="hidden" name="offset" value="{$offset}">
{assign var='place' value="_HEADER"} <!-- to be used for id for buttons with custom code in def files-->
<div class="buttons">
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('EditView'); {if $isDuplicate}_form.return_id.value=''; {/if}_form.action.value='Save'; if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);return false;" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}" id="SAVE">{/if} 
{if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module|escape:"url"}&record={$smarty.request.return_id|escape:"url"}'); return false;" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" type="button" id="CANCEL"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module|escape:"url"}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && empty($fields.id.value)) && empty($smarty.request.return_id)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=ListView&module={$smarty.request.return_module|escape:"url"}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif !empty($smarty.request.return_action) && !empty($smarty.request.return_module)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action={$smarty.request.return_action}&module={$smarty.request.return_module|escape:"url"}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif empty($smarty.request.return_action) || empty($smarty.request.return_id) && !empty($fields.id.value)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=sgt_nhanvien'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module={$smarty.request.return_module|escape:"url"}&record={$smarty.request.return_id|escape:"url"}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {/if}
{if $showVCRControl}
<button type="button" id="save_and_continue" class="button saveAndContinue" title="{$app_strings.LBL_SAVE_AND_CONTINUE}" onClick="SUGAR.saveAndContinue(this);">
{$APP.LBL_SAVE_AND_CONTINUE}
</button>
{/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=sgt_nhanvien", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
</td>
<td align='right' class="edit-view-pagination-desktop-container">
<div class="edit-view-pagination edit-view-pagination-desktop">
{$PAGINATION}
</div>
</td>
</tr>
</table>
{sugar_include include=$includes}
<div id="EditView_tabs">

<ul class="nav nav-tabs">
</ul>
<div class="clearfix"></div>
<div class="tab-content" style="padding: 0; border: 0;">

<div class="tab-pane panel-collapse">&nbsp;</div>
</div>

<div class="panel-content">
<div>&nbsp;</div>




<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse-edit" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
{sugar_translate label='DEFAULT' module='sgt_nhanvien'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_-1" data-id="DEFAULT">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="name">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_NAME">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_NAME' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:

<span class="required">*</span>
{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="name" field="name"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.name.value) <= 0}
{assign var="value" value=$fields.name.default_value }
{else}
{assign var="value" value=$fields.name.value }
{/if}
<input type='text' name='{$fields.name.name}'
id='{$fields.name.name}' size='30'
maxlength='60'        value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="ngaysinh">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_NGAYSINH">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_NGAYSINH' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:

<span class="required">*</span>
{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="ngaysinh"  >
{counter name="panelFieldCount" print=false}

<span class="dateTime">
{assign var=date_value value=$fields.ngaysinh.value }
<input class="date_input" autocomplete="off" type="text" name="{$fields.ngaysinh.name}" id="{$fields.ngaysinh.name}" value="{$date_value}" title=''  tabindex='0'    size="11" maxlength="10" style="width:50%;" >
<button type="button" id="{$fields.ngaysinh.name}_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar" alt="{$APP.LBL_ENTER_DATE}"></span></button>
</span>
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "{$fields.ngaysinh.name}",
form : "EditView",
ifFormat : "{$CALENDAR_FORMAT}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$fields.ngaysinh.name}_trigger",
singleClick : true,
dateStr : "{$date_value}",
startWeekday: {$CALENDAR_FDOW|default:'0'},
step : 1,
weekNumbers:false
{rdelim}
);
</script>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="sodienthoai">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_SODIENTHOAI">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_SODIENTHOAI' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:

<span class="required">*</span>
{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="phone" field="sodienthoai"  class="phone">
{counter name="panelFieldCount" print=false}

{if strlen($fields.sodienthoai.value) <= 0}
{assign var="value" value=$fields.sodienthoai.default_value }
{else}
{assign var="value" value=$fields.sodienthoai.value }
{/if}  
<input type='text' name='{$fields.sodienthoai.name}' id='{$fields.sodienthoai.name}' size='30' maxlength='15' value='{$value}' title='' tabindex='0'	  class="phone" >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="cccd">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_CCCD">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_CCCD' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:

<span class="required">*</span>
{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="cccd"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.cccd.value) <= 0}
{assign var="value" value=$fields.cccd.default_value }
{else}
{assign var="value" value=$fields.cccd.value }
{/if}
<input type='text' name='{$fields.cccd.name}'
id='{$fields.cccd.name}' size='30'
maxlength='12'        value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="ma_nv">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_MA_NV">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_MA_NV' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="ma_nv"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.ma_nv.value) <= 0}
{assign var="value" value=$fields.ma_nv.default_value }
{else}
{assign var="value" value=$fields.ma_nv.value }
{/if}
<input type='text' name='{$fields.ma_nv.name}'
id='{$fields.ma_nv.name}' size='30'
maxlength='5'        value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="gioitinh">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_GIOITINH">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_GIOITINH' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="gioitinh"  >
{counter name="panelFieldCount" print=false}

<select name="{$fields.gioitinh.name}"
id="{$fields.gioitinh.name}"
title=''              
>
{if isset($fields.gioitinh.value)}
{html_options options=$fields.gioitinh.options selected=$fields.gioitinh.value}
{else}
{html_options options=$fields.gioitinh.options selected=$fields.gioitinh.default}
{/if}
</select>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="diachi">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_DIACHI">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_DIACHI' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="diachi"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.diachi.value) <= 0}
{assign var="value" value=$fields.diachi.default_value }
{else}
{assign var="value" value=$fields.diachi.value }
{/if}
<input type='text' name='{$fields.diachi.name}'
id='{$fields.diachi.name}' size='30'
maxlength='150'        value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="chucvu">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_CHUCVU">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_CHUCVU' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="chucvu"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.chucvu.value) <= 0}
{assign var="value" value=$fields.chucvu.default_value }
{else}
{assign var="value" value=$fields.chucvu.value }
{/if}
<input type='text' name='{$fields.chucvu.name}'
id='{$fields.chucvu.name}' size='30'
maxlength='40'        value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="phongban">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_PHONGBAN">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_PHONGBAN' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="phongban"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.phongban.value) <= 0}
{assign var="value" value=$fields.phongban.default_value }
{else}
{assign var="value" value=$fields.phongban.value }
{/if}
<input type='text' name='{$fields.phongban.name}'
id='{$fields.phongban.name}' size='30'
maxlength='50'        value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="baohiem">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_BAOHIEM">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_BAOHIEM' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="baohiem"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.baohiem.value) <= 0}
{assign var="value" value=$fields.baohiem.default_value }
{else}
{assign var="value" value=$fields.baohiem.value }
{/if}
<input type='text' name='{$fields.baohiem.name}'
id='{$fields.baohiem.name}' size='30'
maxlength='20'        value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="luongthoathuan">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_LUONGTHOATHUAN">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_LUONGTHOATHUAN' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:

<span class="required">*</span>
{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="currency" field="luongthoathuan"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.luongthoathuan.value) <= 0}
{assign var="value" value=$fields.luongthoathuan.default_value }
{else}
{assign var="value" value=$fields.luongthoathuan.value }
{/if}  
<input type='text' name='{$fields.luongthoathuan.name}' 
id='{$fields.luongthoathuan.name}' size='30' maxlength='26' value='{sugar_number_format var=$value}' title='' tabindex='0'
>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="nganhang">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_NGANHANG">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_NGANHANG' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="nganhang"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.nganhang.value) <= 0}
{assign var="value" value=$fields.nganhang.default_value }
{else}
{assign var="value" value=$fields.nganhang.value }
{/if}
<input type='text' name='{$fields.nganhang.name}'
id='{$fields.nganhang.name}' size='30'
maxlength='50'        value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="phucap">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_PHUCAP">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_PHUCAP' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="currency" field="phucap"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.phucap.value) <= 0}
{assign var="value" value=$fields.phucap.default_value }
{else}
{assign var="value" value=$fields.phucap.value }
{/if}  
<input type='text' name='{$fields.phucap.name}' 
id='{$fields.phucap.name}' size='30' maxlength='26' value='{sugar_number_format var=$value}' title='' tabindex='0'
>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="">
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="sotaikhoan">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_SOTAIKHOAN">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_SOTAIKHOAN' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="sotaikhoan"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.sotaikhoan.value) <= 0}
{assign var="value" value=$fields.sotaikhoan.default_value }
{else}
{assign var="value" value=$fields.sotaikhoan.value }
{/if}
<input type='text' name='{$fields.sotaikhoan.name}'
id='{$fields.sotaikhoan.name}' size='30'
maxlength='50'        value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="dienthoaikhancap">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_DIENTHOAIKHANCAP">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_DIENTHOAIKHANCAP' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="phone" field="dienthoaikhancap"  class="phone">
{counter name="panelFieldCount" print=false}

{if strlen($fields.dienthoaikhancap.value) <= 0}
{assign var="value" value=$fields.dienthoaikhancap.default_value }
{else}
{assign var="value" value=$fields.dienthoaikhancap.value }
{/if}  
<input type='text' name='{$fields.dienthoaikhancap.name}' id='{$fields.dienthoaikhancap.name}' size='30' maxlength='20' value='{$value}' title='' tabindex='0'	  class="phone" >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="hinhanh">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_HINHANH">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_HINHANH' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="image" field="hinhanh"  >
{counter name="panelFieldCount" print=false}

<script type="text/javascript">
    {literal}
        $( document ).ready(function() {
        $( "form#EditView" )
        .attr( "enctype", "multipart/form-data" )
        .attr( "encoding", "multipart/form-data" );
    });
{/literal}
</script>
<script type="text/javascript" src='include/SugarFields/Fields/Image/SugarFieldFile.js?v=cXbQ9fU9TiVVihQ2vusLlw'></script>
{if !empty($fields.hinhanh.value) }
{assign var=showRemove value=true}
{else}
{assign var=showRemove value=false}
{/if}
{assign var=noChange value=false}
<input type="hidden" name="deleteAttachment" value="0">
<input type="hidden" name="{$fields.hinhanh.name}" id="{$fields.hinhanh.name}" value="{$fields.hinhanh.value}">
<input type="hidden" name="{$fields.hinhanh.name}_record_id" id="{$fields.hinhanh.name}_record_id" value="{$fields.id.value}">
<span id="{$fields.hinhanh.name}_old" style="display:{if !$showRemove}none;{/if}">
<a href="index.php?entryPoint=download&id={$fields.id.value}_{$fields.hinhanh.name}&type={$module}&time={$fields.date_modified.value}" class="tabDetailViewDFLink">{$fields.hinhanh.value}</a>
{if !$noChange}
<input type='button' class='button' id='remove_button' value='{$APP.LBL_REMOVE}' onclick='SUGAR.field.file.deleteAttachment("{$fields.hinhanh.name}","",this);'>
{/if}
</span>
{if !$noChange}
<span id="{$fields.hinhanh.name}_new" style="display:{if $showRemove}none;{/if}">
<input type="hidden" name="{$fields.hinhanh.name}_escaped">
<input id="{$fields.hinhanh.name}_file" name="{$fields.hinhanh.name}_file"
type="file" title='' size="30"
maxlength='255'
>
{else}

{/if}
<script type="text/javascript">
$( "#{$fields.hinhanh.name}_file{literal} " ).change(function() {
        $("#{/literal}{$fields.hinhanh.name}{literal}").val($("#{/literal}{$fields.hinhanh.name}_file{literal}").val());
});{/literal}
        </script>
</span>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="masothue">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_MASOTHUE">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_MASOTHUE' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="masothue"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.masothue.value) <= 0}
{assign var="value" value=$fields.masothue.default_value }
{else}
{assign var="value" value=$fields.masothue.value }
{/if}
<input type='text' name='{$fields.masothue.name}'
id='{$fields.masothue.name}' size='30'
maxlength='20'        value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="vitri">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_VITRI">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_VITRI' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="vitri"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.vitri.value) <= 0}
{assign var="value" value=$fields.vitri.default_value }
{else}
{assign var="value" value=$fields.vitri.value }
{/if}
<input type='text' name='{$fields.vitri.name}'
id='{$fields.vitri.name}' size='30'
maxlength='25'        value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="loaica">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_LOAICA">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_LOAICA' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:

<span class="required">*</span>
{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="loaica"  >
{counter name="panelFieldCount" print=false}

<select name="{$fields.loaica.name}"
id="{$fields.loaica.name}"
title=''              
>
{if isset($fields.loaica.value)}
{html_options options=$fields.loaica.options selected=$fields.loaica.value}
{else}
{html_options options=$fields.loaica.options selected=$fields.loaica.default}
{/if}
</select>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="sgt_nhanvien_sgt_doi_name">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_SGT_NHANVIEN_SGT_DOI_FROM_SGT_DOI_TITLE">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_SGT_NHANVIEN_SGT_DOI_FROM_SGT_DOI_TITLE' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="sgt_nhanvien_sgt_doi_name"  >
{counter name="panelFieldCount" print=false}

<input type="text" name="{$fields.sgt_nhanvien_sgt_doi_name.name}" class="sqsEnabled" tabindex="0" id="{$fields.sgt_nhanvien_sgt_doi_name.name}" size="" value="{$fields.sgt_nhanvien_sgt_doi_name.value}" title='' autocomplete="off"  	 >
<input type="hidden" name="{$fields.sgt_nhanvien_sgt_doi_name.id_name}" 
id="{$fields.sgt_nhanvien_sgt_doi_name.id_name}" 
value="{$fields.sgt_nhanvien_sgt_doisgt_doi_ida.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.sgt_nhanvien_sgt_doi_name.name}" id="btn_{$fields.sgt_nhanvien_sgt_doi_name.name}" tabindex="0" title="{sugar_translate label="LBL_SELECT_BUTTON_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_SELECT_BUTTON_LABEL"}"
onclick='open_popup(
"{$fields.sgt_nhanvien_sgt_doi_name.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"sgt_nhanvien_sgt_doisgt_doi_ida","name":"sgt_nhanvien_sgt_doi_name"}}{/literal}, 
"single", 
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.sgt_nhanvien_sgt_doi_name.name}" id="btn_clr_{$fields.sgt_nhanvien_sgt_doi_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '{$fields.sgt_nhanvien_sgt_doi_name.name}', '{$fields.sgt_nhanvien_sgt_doi_name.id_name}');"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_LABEL"}" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.sgt_nhanvien_sgt_doi_name.name}']) != 'undefined'",
		enableQS
);
</script>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="bophan">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_BOPHAN">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_BOPHAN' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="bophan"  >
{counter name="panelFieldCount" print=false}

<select name="{$fields.bophan.name}"
id="{$fields.bophan.name}"
title=''              
>
{if isset($fields.bophan.value)}
{html_options options=$fields.bophan.options selected=$fields.bophan.value}
{else}
{html_options options=$fields.bophan.options selected=$fields.bophan.default}
{/if}
</select>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="ncc">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_NCC">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_NCC' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="ncc"  >
{counter name="panelFieldCount" print=false}

<input type="text" name="{$fields.ncc.name}" class="sqsEnabled" tabindex="0" id="{$fields.ncc.name}" size="" value="{$fields.ncc.value}" title='' autocomplete="off"  	 >
<input type="hidden" name="{$fields.ncc.id_name}" 
id="{$fields.ncc.id_name}" 
value="{$fields.ncc_id_c.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.ncc.name}" id="btn_{$fields.ncc.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL"}"
onclick='open_popup(
"{$fields.ncc.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"ncc_id_c","name":"ncc"}}{/literal}, 
"single", 
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.ncc.name}" id="btn_clr_{$fields.ncc.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '{$fields.ncc.name}', '{$fields.ncc.id_name}');"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL"}" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.ncc.name}']) != 'undefined'",
		enableQS
);
</script>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="cc">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_CC">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_CC' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="bool" field="cc"  >
{counter name="panelFieldCount" print=false}

{if strval($fields.cc.value) == "1" || strval($fields.cc.value) == "yes" || strval($fields.cc.value) == "on"} 
{assign var="checked" value='checked="checked"'}
{else}
{assign var="checked" value=""}
{/if}
<input type="hidden" name="{$fields.cc.name}" value="0"> 
<input type="checkbox" id="{$fields.cc.name}" 
name="{$fields.cc.name}" 
value="1" title='' tabindex="0" {$checked} >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item" data-field="description">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_DESCRIPTION">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_DESCRIPTION' module='sgt_nhanvien'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="description" colspan='3' >
{counter name="panelFieldCount" print=false}

{if empty($fields.description.value)}
{assign var="value" value=$fields.description.default_value }
{else}
{assign var="value" value=$fields.description.value }
{/if}
<textarea  id='{$fields.description.name}' name='{$fields.description.name}'
    rows="6"
    cols="80"
    title='' tabindex="0" 
     >{$value}</textarea>
{literal}{/literal}
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
</div>
</div>
</div>
</div>
</div>
</div>

<script language="javascript">
    var _form_id = '{$form_id}';
    {literal}
    SUGAR.util.doWhen(function(){
        _form_id = (_form_id == '') ? 'EditView' : _form_id;
        return document.getElementById(_form_id) != null;
    }, SUGAR.themes.actionMenu);
    {/literal}
</script>
{assign var='place' value="_FOOTER"} <!-- to be used for id for buttons with custom code in def files-->
<div class="buttons">
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('EditView'); {if $isDuplicate}_form.return_id.value=''; {/if}_form.action.value='Save'; if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);return false;" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}" id="SAVE">{/if} 
{if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module|escape:"url"}&record={$smarty.request.return_id|escape:"url"}'); return false;" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" type="button" id="CANCEL"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module|escape:"url"}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && empty($fields.id.value)) && empty($smarty.request.return_id)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=ListView&module={$smarty.request.return_module|escape:"url"}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif !empty($smarty.request.return_action) && !empty($smarty.request.return_module)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action={$smarty.request.return_action}&module={$smarty.request.return_module|escape:"url"}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif empty($smarty.request.return_action) || empty($smarty.request.return_id) && !empty($fields.id.value)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=sgt_nhanvien'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module={$smarty.request.return_module|escape:"url"}&record={$smarty.request.return_id|escape:"url"}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {/if}
{if $showVCRControl}
<button type="button" id="save_and_continue" class="button saveAndContinue" title="{$app_strings.LBL_SAVE_AND_CONTINUE}" onClick="SUGAR.saveAndContinue(this);">
{$APP.LBL_SAVE_AND_CONTINUE}
</button>
{/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=sgt_nhanvien", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
</form>
{$set_focus_block}
<script>SUGAR.util.doWhen("document.getElementById('EditView') != null",
        function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script>
<script type="text/javascript">
YAHOO.util.Event.onContentReady("EditView",
    function () {ldelim} initEditView(document.forms.EditView) {rdelim});
//window.setTimeout(, 100);
window.onbeforeunload = function () {ldelim} return onUnloadEditView(); {rdelim};
// bug 55468 -- IE is too aggressive with onUnload event
if ($.browser.msie) {ldelim}
$(document).ready(function() {ldelim}
    $(".collapseLink,.expandLink").click(function (e) {ldelim} e.preventDefault(); {rdelim});
  {rdelim});
{rdelim}
</script>
{literal}
<script type="text/javascript">

    var selectTab = function(tab) {
        $('#EditView_tabs div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').hide();
        $('#EditView_tabs div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').eq(tab).show().addClass('active').addClass('in');
        $('#EditView_tabs div.panel-content div.panel').hide();
        $('#EditView_tabs div.panel-content div.panel.tab-panel-' + tab).show()
    };

    var selectTabOnError = function(tab) {
        selectTab(tab);
        $('#EditView_tabs ul.nav.nav-tabs li').removeClass('active');
        $('#EditView_tabs ul.nav.nav-tabs li a').css('color', '');

        $('#EditView_tabs ul.nav.nav-tabs li').eq(tab).find('a').first().css('color', 'red');
        $('#EditView_tabs ul.nav.nav-tabs li').eq(tab).addClass('active');

    };

    var selectTabOnErrorInputHandle = function(inputHandle) {
        var tab = $(inputHandle).closest('.tab-pane-NOBOOTSTRAPTOGGLER').attr('id').match(/^tab-content-(.*)$/)[1];
        selectTabOnError(tab);
    };


    $(function(){
        $('#EditView_tabs ul.nav.nav-tabs li > a[data-toggle="tab"]').click(function(e){
            if(typeof $(this).parent().find('a').first().attr('id') != 'undefined') {
                var tab = parseInt($(this).parent().find('a').first().attr('id').match(/^tab(?<number>(.)*)$/)[1]);
                selectTab(tab);
            }
        });

        $('a[data-toggle="collapse-edit"]').click(function(e){
            if($(this).hasClass('collapsed')) {
              // Expand panel
                // Change style of .panel-header
                $(this).removeClass('collapsed');
                // Expand .panel-body
                $(this).parents('.panel').find('.panel-body').removeClass('in').addClass('in');
            } else {
              // Collapse panel
                // Change style of .panel-header
                $(this).addClass('collapsed');
                // Collapse .panel-body
                $(this).parents('.panel').find('.panel-body').removeClass('in').removeClass('in');
            }
        });
    });

    </script>
{/literal}{literal}
<script type="text/javascript">
addForm('EditView');addToValidate('EditView', 'name', 'name', true,'{/literal}{sugar_translate label='LBL_NAME' module='sgt_nhanvien' for_js=true}{literal}' );
addToValidate('EditView', 'date_entered_date', 'date', false,'Ngày tạo' );
addToValidate('EditView', 'date_modified_date', 'date', false,'Ngày chỉnh sửa' );
addToValidate('EditView', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED' module='sgt_nhanvien' for_js=true}{literal}' );
addToValidate('EditView', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED_NAME' module='sgt_nhanvien' for_js=true}{literal}' );
addToValidate('EditView', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED' module='sgt_nhanvien' for_js=true}{literal}' );
addToValidate('EditView', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED' module='sgt_nhanvien' for_js=true}{literal}' );
addToValidate('EditView', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='sgt_nhanvien' for_js=true}{literal}' );
addToValidate('EditView', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='sgt_nhanvien' for_js=true}{literal}' );
addToValidate('EditView', 'assigned_user_id', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_ID' module='sgt_nhanvien' for_js=true}{literal}' );
addToValidate('EditView', 'assigned_user_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='sgt_nhanvien' for_js=true}{literal}' );
addToValidate('EditView', 'sodienthoai', 'phone', true,'{/literal}{sugar_translate label='LBL_SODIENTHOAI' module='sgt_nhanvien' for_js=true}{literal}' );
addToValidate('EditView', 'diachi', 'varchar', false,'{/literal}{sugar_translate label='LBL_DIACHI' module='sgt_nhanvien' for_js=true}{literal}' );
addToValidate('EditView', 'cccd', 'varchar', true,'{/literal}{sugar_translate label='LBL_CCCD' module='sgt_nhanvien' for_js=true}{literal}' );
addToValidate('EditView', 'nganhang', 'varchar', false,'{/literal}{sugar_translate label='LBL_NGANHANG' module='sgt_nhanvien' for_js=true}{literal}' );
addToValidate('EditView', 'sotaikhoan', 'varchar', false,'{/literal}{sugar_translate label='LBL_SOTAIKHOAN' module='sgt_nhanvien' for_js=true}{literal}' );
addToValidate('EditView', 'phongban', 'varchar', false,'{/literal}{sugar_translate label='LBL_PHONGBAN' module='sgt_nhanvien' for_js=true}{literal}' );
addToValidate('EditView', 'chucvu', 'varchar', false,'{/literal}{sugar_translate label='LBL_CHUCVU' module='sgt_nhanvien' for_js=true}{literal}' );
addToValidate('EditView', 'ngaysinh', 'date', true,'{/literal}{sugar_translate label='LBL_NGAYSINH' module='sgt_nhanvien' for_js=true}{literal}' );
addToValidate('EditView', 'masothue', 'varchar', false,'{/literal}{sugar_translate label='LBL_MASOTHUE' module='sgt_nhanvien' for_js=true}{literal}' );
addToValidate('EditView', 'baohiem', 'varchar', false,'{/literal}{sugar_translate label='LBL_BAOHIEM' module='sgt_nhanvien' for_js=true}{literal}' );
addToValidate('EditView', 'dienthoaikhancap', 'phone', false,'{/literal}{sugar_translate label='LBL_DIENTHOAIKHANCAP' module='sgt_nhanvien' for_js=true}{literal}' );
addToValidate('EditView', 'bophan', 'enum', false,'{/literal}{sugar_translate label='LBL_BOPHAN' module='sgt_nhanvien' for_js=true}{literal}' );
addToValidate('EditView', 'luongthoathuan', 'currency', true,'{/literal}{sugar_translate label='LBL_LUONGTHOATHUAN' module='sgt_nhanvien' for_js=true}{literal}' );
addToValidate('EditView', 'phucap', 'currency', false,'{/literal}{sugar_translate label='LBL_PHUCAP' module='sgt_nhanvien' for_js=true}{literal}' );
addToValidate('EditView', 'currency_id', 'currency_id', false,'{/literal}{sugar_translate label='LBL_CURRENCY' module='sgt_nhanvien' for_js=true}{literal}' );
addToValidate('EditView', 'hinhanh', 'image', false,'{/literal}{sugar_translate label='LBL_HINHANH' module='sgt_nhanvien' for_js=true}{literal}' );
addToValidate('EditView', 'ma_nv', 'varchar', false,'{/literal}{sugar_translate label='LBL_MA_NV' module='sgt_nhanvien' for_js=true}{literal}' );
addToValidate('EditView', 'vitri', 'varchar', false,'{/literal}{sugar_translate label='LBL_VITRI' module='sgt_nhanvien' for_js=true}{literal}' );
addToValidate('EditView', 'cc', 'bool', false,'{/literal}{sugar_translate label='LBL_CC' module='sgt_nhanvien' for_js=true}{literal}' );
addToValidate('EditView', 'gioitinh', 'enum', false,'{/literal}{sugar_translate label='LBL_GIOITINH' module='sgt_nhanvien' for_js=true}{literal}' );
addToValidate('EditView', 'tenchamcong', 'varchar', false,'{/literal}{sugar_translate label='LBL_TENCHAMCONG' module='sgt_nhanvien' for_js=true}{literal}' );
addToValidate('EditView', 'loaica', 'enum', true,'{/literal}{sugar_translate label='LBL_LOAICA' module='sgt_nhanvien' for_js=true}{literal}' );
addToValidate('EditView', 'ncc_id_c', 'id', false,'{/literal}{sugar_translate label='' module='sgt_nhanvien' for_js=true}{literal}' );
addToValidate('EditView', 'ncc', 'relate', false,'{/literal}{sugar_translate label='LBL_NCC' module='sgt_nhanvien' for_js=true}{literal}' );
addToValidate('EditView', 'sgt_nhanvien_sgt_doi_name', 'relate', false,'{/literal}{sugar_translate label='LBL_SGT_NHANVIEN_SGT_DOI_FROM_SGT_DOI_TITLE' module='sgt_nhanvien' for_js=true}{literal}' );
addToValidateBinaryDependency('EditView', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='sgt_nhanvien' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='sgt_nhanvien' for_js=true}{literal}', 'assigned_user_id' );
addToValidateBinaryDependency('EditView', 'ncc', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='sgt_nhanvien' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_NCC' module='sgt_nhanvien' for_js=true}{literal}', 'ncc_id_c' );
addToValidateBinaryDependency('EditView', 'sgt_nhanvien_sgt_doi_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='sgt_nhanvien' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_SGT_NHANVIEN_SGT_DOI_FROM_SGT_DOI_TITLE' module='sgt_nhanvien' for_js=true}{literal}', 'sgt_nhanvien_sgt_doisgt_doi_ida' );
</script><script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['EditView_sgt_nhanvien_sgt_doi_name']={"form":"EditView","method":"query","modules":["sgt_doi"],"group":"or","field_list":["name","id"],"populate_list":["sgt_nhanvien_sgt_doi_name","sgt_nhanvien_sgt_doisgt_doi_ida"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Kh\u00f4ng tr\u00f9ng kh\u1edbp"};sqs_objects['EditView_ncc']={"form":"EditView","method":"query","modules":["Accounts"],"group":"or","field_list":["name","id"],"populate_list":["ncc","ncc_id_c"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Kh\u00f4ng tr\u00f9ng kh\u1edbp"};</script>{/literal}
