

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
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('form_QuickCreate_Accounts'); _form.action.value='Popup';return check_form('form_QuickCreate_Accounts')" type="submit" name="Accounts_popupcreate_save_button" id="Accounts_popupcreate_save_button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if} 
<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="toggleDisplay('addform');return false;" name="Accounts_popup_cancel_button" type="submit"id="Accounts_popup_cancel_button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> 
{if $showVCRControl}
<button type="button" id="save_and_continue" class="button saveAndContinue" title="{$app_strings.LBL_SAVE_AND_CONTINUE}" onClick="SUGAR.saveAndContinue(this);">
{$APP.LBL_SAVE_AND_CONTINUE}
</button>
{/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Accounts", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
</td>
<td align='right' class="edit-view-pagination-desktop-container">
<div class="edit-view-pagination edit-view-pagination-desktop">
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
{sugar_translate label='DEFAULT' module='Accounts'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_-1" data-id="DEFAULT">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-12 edit-view-row-item" data-field="name">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_NAME">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_NAME' module='Accounts'}{/capture}
{$label|strip_semicolon}:

<span class="required">*</span>
{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="name" field="name" colspan='3' >
{counter name="panelFieldCount" print=false}

{if strlen($fields.name.value) <= 0}
{assign var="value" value=$fields.name.default_value }
{else}
{assign var="value" value=$fields.name.value }
{/if}
<input type='text' name='{$fields.name.name}'
id='{$fields.name.name}' size='30'
maxlength='150'        value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="website">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_WEBSITE">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_WEBSITE' module='Accounts'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="url" field="website"  >
{counter name="panelFieldCount" print=false}

{if !empty($fields.website.value)}
<input type='text' name='{$fields.website.name}' id='{$fields.website.name}' size='30' 
maxlength='255' value='{$fields.website.value}' title='' tabindex='0'  >
{else}
<input type='text' name='{$fields.website.name}' id='{$fields.website.name}' size='30' 
maxlength='255'	   	   {if $displayView=='advanced_search'||$displayView=='basic_search'}value=''{else}value='http://'{/if} 
title='' tabindex='0'  >
{/if}
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="phone_office">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_PHONE_OFFICE">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_PHONE_OFFICE' module='Accounts'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="phone" field="phone_office"  class="phone">
{counter name="panelFieldCount" print=false}

{if strlen($fields.phone_office.value) <= 0}
{assign var="value" value=$fields.phone_office.default_value }
{else}
{assign var="value" value=$fields.phone_office.value }
{/if}  
<input type='text' name='{$fields.phone_office.name}' id='{$fields.phone_office.name}' size='30' maxlength='100' value='{$value}' title='' tabindex='0'	  class="phone" >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="email1">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_EMAIL">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_EMAIL' module='Accounts'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="email1"  >
{counter name="panelFieldCount" print=false}
<span id='email1_span'>
{$fields.email1.value}
</span>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="phone_fax">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_FAX">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_FAX' module='Accounts'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="phone" field="phone_fax"  class="phone">
{counter name="panelFieldCount" print=false}

{if strlen($fields.phone_fax.value) <= 0}
{assign var="value" value=$fields.phone_fax.default_value }
{else}
{assign var="value" value=$fields.phone_fax.value }
{/if}  
<input type='text' name='{$fields.phone_fax.name}' id='{$fields.phone_fax.name}' size='30' maxlength='100' value='{$value}' title='' tabindex='0'	  class="phone" >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="industry">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_INDUSTRY">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_INDUSTRY' module='Accounts'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="industry"  >
{counter name="panelFieldCount" print=false}

<select name="{$fields.industry.name}"
id="{$fields.industry.name}"
title=''              
>
{if isset($fields.industry.value)}
{html_options options=$fields.industry.options selected=$fields.industry.value}
{else}
{html_options options=$fields.industry.options selected=$fields.industry.default}
{/if}
</select>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="account_type">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_TYPE">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_TYPE' module='Accounts'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="account_type"  >
{counter name="panelFieldCount" print=false}

<select name="{$fields.account_type.name}"
id="{$fields.account_type.name}"
title=''              
>
{if isset($fields.account_type.value)}
{html_options options=$fields.account_type.options selected=$fields.account_type.value}
{else}
{html_options options=$fields.account_type.options selected=$fields.account_type.default}
{/if}
</select>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item" data-field="assigned_user_name">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_ASSIGNED_TO">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_ASSIGNED_TO' module='Accounts'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="assigned_user_name" colspan='3' >
{counter name="panelFieldCount" print=false}

<input type="text" name="{$fields.assigned_user_name.name}" class="sqsEnabled" tabindex="0" id="{$fields.assigned_user_name.name}" size="" value="{$fields.assigned_user_name.value}" title='' autocomplete="off"  	 >
<input type="hidden" name="{$fields.assigned_user_name.id_name}" 
id="{$fields.assigned_user_name.id_name}" 
value="{$fields.assigned_user_id.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.assigned_user_name.name}" id="btn_{$fields.assigned_user_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_SELECT_USERS_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_ACCESSKEY_SELECT_USERS_LABEL"}"
onclick='open_popup(
"{$fields.assigned_user_name.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"form_QuickCreate_Accounts","field_to_name_array":{"id":"assigned_user_id","user_name":"assigned_user_name"}}{/literal}, 
"single", 
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.assigned_user_name.name}" id="btn_clr_{$fields.assigned_user_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_USERS_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '{$fields.assigned_user_name.name}', '{$fields.assigned_user_name.id_name}');"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_USERS_LABEL"}" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.assigned_user_name.name}']) != 'undefined'",
		enableQS
);
</script>
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
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('form_QuickCreate_Accounts'); _form.action.value='Popup';return check_form('form_QuickCreate_Accounts')" type="submit" name="Accounts_popupcreate_save_button" id="Accounts_popupcreate_save_button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if} 
<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="toggleDisplay('addform');return false;" name="Accounts_popup_cancel_button" type="submit"id="Accounts_popup_cancel_button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> 
{if $showVCRControl}
<button type="button" id="save_and_continue" class="button saveAndContinue" title="{$app_strings.LBL_SAVE_AND_CONTINUE}" onClick="SUGAR.saveAndContinue(this);">
{$APP.LBL_SAVE_AND_CONTINUE}
</button>
{/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Accounts", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
</form>
{$set_focus_block}
<script>SUGAR.util.doWhen("document.getElementById('EditView') != null",
        function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script>
<script type="text/javascript">
YAHOO.util.Event.onContentReady("form_QuickCreate_Accounts",
    function () {ldelim} initEditView(document.forms.form_QuickCreate_Accounts) {rdelim});
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
addForm('form_QuickCreate_Accounts');addToValidate('form_QuickCreate_Accounts', 'name', 'name', true,'{/literal}{sugar_translate label='LBL_NAME' module='Accounts' for_js=true}{literal}' );
addToValidate('form_QuickCreate_Accounts', 'date_entered_date', 'date', false,'Ngày tạo' );
addToValidate('form_QuickCreate_Accounts', 'date_modified_date', 'date', false,'Ngày sửa' );
addToValidate('form_QuickCreate_Accounts', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED' module='Accounts' for_js=true}{literal}' );
addToValidate('form_QuickCreate_Accounts', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED_NAME' module='Accounts' for_js=true}{literal}' );
addToValidate('form_QuickCreate_Accounts', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED' module='Accounts' for_js=true}{literal}' );
addToValidate('form_QuickCreate_Accounts', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED' module='Accounts' for_js=true}{literal}' );
addToValidate('form_QuickCreate_Accounts', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='Accounts' for_js=true}{literal}' );
addToValidate('form_QuickCreate_Accounts', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='Accounts' for_js=true}{literal}' );
addToValidate('form_QuickCreate_Accounts', 'assigned_user_id', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_ID' module='Accounts' for_js=true}{literal}' );
addToValidate('form_QuickCreate_Accounts', 'assigned_user_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='Accounts' for_js=true}{literal}' );
addToValidate('form_QuickCreate_Accounts', 'account_type', 'enum', false,'{/literal}{sugar_translate label='LBL_TYPE' module='Accounts' for_js=true}{literal}' );
addToValidate('form_QuickCreate_Accounts', 'industry', 'enum', false,'{/literal}{sugar_translate label='LBL_INDUSTRY' module='Accounts' for_js=true}{literal}' );
addToValidate('form_QuickCreate_Accounts', 'annual_revenue', 'varchar', false,'{/literal}{sugar_translate label='LBL_ANNUAL_REVENUE' module='Accounts' for_js=true}{literal}' );
addToValidate('form_QuickCreate_Accounts', 'phone_fax', 'phone', false,'{/literal}{sugar_translate label='LBL_FAX' module='Accounts' for_js=true}{literal}' );
addToValidate('form_QuickCreate_Accounts', 'billing_address_street', 'varchar', false,'{/literal}{sugar_translate label='LBL_BILLING_ADDRESS_STREET' module='Accounts' for_js=true}{literal}' );
addToValidate('form_QuickCreate_Accounts', 'billing_address_street_2', 'varchar', false,'{/literal}{sugar_translate label='LBL_BILLING_ADDRESS_STREET_2' module='Accounts' for_js=true}{literal}' );
addToValidate('form_QuickCreate_Accounts', 'billing_address_street_3', 'varchar', false,'{/literal}{sugar_translate label='LBL_BILLING_ADDRESS_STREET_3' module='Accounts' for_js=true}{literal}' );
addToValidate('form_QuickCreate_Accounts', 'billing_address_street_4', 'varchar', false,'{/literal}{sugar_translate label='LBL_BILLING_ADDRESS_STREET_4' module='Accounts' for_js=true}{literal}' );
addToValidate('form_QuickCreate_Accounts', 'billing_address_city', 'varchar', false,'{/literal}{sugar_translate label='LBL_BILLING_ADDRESS_CITY' module='Accounts' for_js=true}{literal}' );
addToValidate('form_QuickCreate_Accounts', 'billing_address_state', 'varchar', false,'{/literal}{sugar_translate label='LBL_BILLING_ADDRESS_STATE' module='Accounts' for_js=true}{literal}' );
addToValidate('form_QuickCreate_Accounts', 'billing_address_postalcode', 'varchar', false,'{/literal}{sugar_translate label='LBL_BILLING_ADDRESS_POSTALCODE' module='Accounts' for_js=true}{literal}' );
addToValidate('form_QuickCreate_Accounts', 'billing_address_country', 'varchar', false,'{/literal}{sugar_translate label='LBL_BILLING_ADDRESS_COUNTRY' module='Accounts' for_js=true}{literal}' );
addToValidate('form_QuickCreate_Accounts', 'rating', 'varchar', false,'{/literal}{sugar_translate label='LBL_RATING' module='Accounts' for_js=true}{literal}' );
addToValidate('form_QuickCreate_Accounts', 'phone_office', 'phone', false,'{/literal}{sugar_translate label='LBL_PHONE_OFFICE' module='Accounts' for_js=true}{literal}' );
addToValidate('form_QuickCreate_Accounts', 'phone_alternate', 'phone', false,'{/literal}{sugar_translate label='LBL_PHONE_ALT' module='Accounts' for_js=true}{literal}' );
addToValidate('form_QuickCreate_Accounts', 'website', 'url', false,'{/literal}{sugar_translate label='LBL_WEBSITE' module='Accounts' for_js=true}{literal}' );
addToValidate('form_QuickCreate_Accounts', 'ownership', 'varchar', false,'{/literal}{sugar_translate label='LBL_OWNERSHIP' module='Accounts' for_js=true}{literal}' );
addToValidate('form_QuickCreate_Accounts', 'employees', 'varchar', false,'{/literal}{sugar_translate label='LBL_EMPLOYEES' module='Accounts' for_js=true}{literal}' );
addToValidate('form_QuickCreate_Accounts', 'ticker_symbol', 'varchar', false,'{/literal}{sugar_translate label='LBL_TICKER_SYMBOL' module='Accounts' for_js=true}{literal}' );
addToValidate('form_QuickCreate_Accounts', 'shipping_address_street', 'varchar', false,'{/literal}{sugar_translate label='LBL_SHIPPING_ADDRESS_STREET' module='Accounts' for_js=true}{literal}' );
addToValidate('form_QuickCreate_Accounts', 'shipping_address_street_2', 'varchar', false,'{/literal}{sugar_translate label='LBL_SHIPPING_ADDRESS_STREET_2' module='Accounts' for_js=true}{literal}' );
addToValidate('form_QuickCreate_Accounts', 'shipping_address_street_3', 'varchar', false,'{/literal}{sugar_translate label='LBL_SHIPPING_ADDRESS_STREET_3' module='Accounts' for_js=true}{literal}' );
addToValidate('form_QuickCreate_Accounts', 'shipping_address_street_4', 'varchar', false,'{/literal}{sugar_translate label='LBL_SHIPPING_ADDRESS_STREET_4' module='Accounts' for_js=true}{literal}' );
addToValidate('form_QuickCreate_Accounts', 'shipping_address_city', 'varchar', false,'{/literal}{sugar_translate label='LBL_SHIPPING_ADDRESS_CITY' module='Accounts' for_js=true}{literal}' );
addToValidate('form_QuickCreate_Accounts', 'shipping_address_state', 'varchar', false,'{/literal}{sugar_translate label='LBL_SHIPPING_ADDRESS_STATE' module='Accounts' for_js=true}{literal}' );
addToValidate('form_QuickCreate_Accounts', 'shipping_address_postalcode', 'varchar', false,'{/literal}{sugar_translate label='LBL_SHIPPING_ADDRESS_POSTALCODE' module='Accounts' for_js=true}{literal}' );
addToValidate('form_QuickCreate_Accounts', 'shipping_address_country', 'varchar', false,'{/literal}{sugar_translate label='LBL_SHIPPING_ADDRESS_COUNTRY' module='Accounts' for_js=true}{literal}' );
addToValidate('form_QuickCreate_Accounts', 'email1', 'varchar', false,'{/literal}{sugar_translate label='LBL_EMAIL' module='Accounts' for_js=true}{literal}' );
addToValidate('form_QuickCreate_Accounts', 'email_addresses_non_primary', 'email', false,'{/literal}{sugar_translate label='LBL_EMAIL_NON_PRIMARY' module='Accounts' for_js=true}{literal}' );
addToValidate('form_QuickCreate_Accounts', 'parent_id', 'id', false,'{/literal}{sugar_translate label='LBL_PARENT_ACCOUNT_ID' module='Accounts' for_js=true}{literal}' );
addToValidate('form_QuickCreate_Accounts', 'sic_code', 'varchar', false,'{/literal}{sugar_translate label='LBL_SIC_CODE' module='Accounts' for_js=true}{literal}' );
addToValidate('form_QuickCreate_Accounts', 'parent_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MEMBER_OF' module='Accounts' for_js=true}{literal}' );
addToValidate('form_QuickCreate_Accounts', 'email_opt_out', 'bool', false,'{/literal}{sugar_translate label='LBL_EMAIL_OPT_OUT' module='Accounts' for_js=true}{literal}' );
addToValidate('form_QuickCreate_Accounts', 'invalid_email', 'bool', false,'{/literal}{sugar_translate label='LBL_INVALID_EMAIL' module='Accounts' for_js=true}{literal}' );
addToValidate('form_QuickCreate_Accounts', 'email', 'email', false,'{/literal}{sugar_translate label='LBL_ANY_EMAIL' module='Accounts' for_js=true}{literal}' );
addToValidate('form_QuickCreate_Accounts', 'campaign_id', 'id', false,'{/literal}{sugar_translate label='LBL_CAMPAIGN_ID' module='Accounts' for_js=true}{literal}' );
addToValidate('form_QuickCreate_Accounts', 'campaign_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CAMPAIGN' module='Accounts' for_js=true}{literal}' );
addToValidate('form_QuickCreate_Accounts', 'jjwg_maps_lng_c', 'float', false,'{/literal}{sugar_translate label='LBL_JJWG_MAPS_LNG' module='Accounts' for_js=true}{literal}' );
addToValidate('form_QuickCreate_Accounts', 'jjwg_maps_lat_c', 'float', false,'{/literal}{sugar_translate label='LBL_JJWG_MAPS_LAT' module='Accounts' for_js=true}{literal}' );
addToValidate('form_QuickCreate_Accounts', 'jjwg_maps_address_c', 'varchar', false,'{/literal}{sugar_translate label='LBL_JJWG_MAPS_ADDRESS' module='Accounts' for_js=true}{literal}' );
addToValidate('form_QuickCreate_Accounts', 'jjwg_maps_geocode_status_c', 'varchar', false,'{/literal}{sugar_translate label='LBL_JJWG_MAPS_GEOCODE_STATUS' module='Accounts' for_js=true}{literal}' );
addToValidateBinaryDependency('form_QuickCreate_Accounts', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Accounts' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='Accounts' for_js=true}{literal}', 'assigned_user_id' );
</script><script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['form_QuickCreate_Accounts_assigned_user_name']={"form":"form_QuickCreate_Accounts","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Kh\u00f4ng tr\u00f9ng kh\u1edbp"};</script>{/literal}
