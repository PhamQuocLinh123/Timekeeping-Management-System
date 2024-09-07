
<script>
    {literal}
    $(function () {
        var $dialog = $('<div></div>')
                .html(SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TEXT'))
                .dialog({
                    autoOpen: false,
                    title: SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TITLE'),
                    width: 700
                });

        $('.help-search').click(function () {
            $dialog.dialog('open');
            // prevent the default action, e.g., following a link
        });

    });
    {/literal}
</script>
<div class="row">
              <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
        <div class="">
            
              

            {counter assign=index}
            {math equation="left % right"
            left=$index
            right=$templateMeta.maxColumns
            assign=modVal
            }

            <div class="col-xs-12">
                                <label for='name_advanced'>{sugar_translate label='LBL_NAME' module='sgt_nhanvien'}</label>
                            </div>
            <div class="form-item">
                                
{if strlen($fields.name_advanced.value) <= 0}
{assign var="value" value=$fields.name_advanced.default_value }
{else}
{assign var="value" value=$fields.name_advanced.value }
{/if}
<input type='text' name='{$fields.name_advanced.name}'
    id='{$fields.name_advanced.name}' size='30'
    maxlength='60'        value='{$value}' title=''  tabindex='-1'      accesskey='9'  >

                            </div>
        </div>
    </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
        <div class="">
            
              

            {counter assign=index}
            {math equation="left % right"
            left=$index
            right=$templateMeta.maxColumns
            assign=modVal
            }

            <div class="col-xs-12">
                                <label for='sodienthoai_advanced'>{sugar_translate label='LBL_SODIENTHOAI' module='sgt_nhanvien'}</label>
                            </div>
            <div class="form-item">
                                

{if strlen($fields.sodienthoai_advanced.value) <= 0}
{assign var="value" value=$fields.sodienthoai_advanced.default_value }
{else}
{assign var="value" value=$fields.sodienthoai_advanced.value }
{/if}  

<input type='text' name='{$fields.sodienthoai_advanced.name}' id='{$fields.sodienthoai_advanced.name}' size='30' maxlength='15' value='{$value}' title='' tabindex='-1'	  class="phone" >


                            </div>
        </div>
    </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
        <div class="">
            
              

            {counter assign=index}
            {math equation="left % right"
            left=$index
            right=$templateMeta.maxColumns
            assign=modVal
            }

            <div class="col-xs-12">
                                <label for='cccd_advanced'>{sugar_translate label='LBL_CCCD' module='sgt_nhanvien'}</label>
                            </div>
            <div class="form-item">
                                
{if strlen($fields.cccd_advanced.value) <= 0}
{assign var="value" value=$fields.cccd_advanced.default_value }
{else}
{assign var="value" value=$fields.cccd_advanced.value }
{/if}
<input type='text' name='{$fields.cccd_advanced.name}'
    id='{$fields.cccd_advanced.name}' size='30'
    maxlength='12'        value='{$value}' title=''  tabindex='-1'      >

                            </div>
        </div>
    </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
        <div class="">
            
              

            {counter assign=index}
            {math equation="left % right"
            left=$index
            right=$templateMeta.maxColumns
            assign=modVal
            }

            <div class="col-xs-12">
                                <label for='bophan_advanced'>{sugar_translate label='LBL_BOPHAN' module='sgt_nhanvien'}</label>
                            </div>
            <div class="form-item">
                                
{html_options id='bophan_advanced' name='bophan_advanced[]' options=$fields.bophan_advanced.options size="6" class="templateGroupChooser" multiple="1" selected=$fields.bophan_advanced.value}

                            </div>
        </div>
    </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
        <div class="">
            
              

            {counter assign=index}
            {math equation="left % right"
            left=$index
            right=$templateMeta.maxColumns
            assign=modVal
            }

            <div class="col-xs-12">
                                <label for='baohiem_advanced'>{sugar_translate label='LBL_BAOHIEM' module='sgt_nhanvien'}</label>
                            </div>
            <div class="form-item">
                                
{if strlen($fields.baohiem_advanced.value) <= 0}
{assign var="value" value=$fields.baohiem_advanced.default_value }
{else}
{assign var="value" value=$fields.baohiem_advanced.value }
{/if}
<input type='text' name='{$fields.baohiem_advanced.name}'
    id='{$fields.baohiem_advanced.name}' size='30'
    maxlength='20'        value='{$value}' title=''  tabindex='-1'      >

                            </div>
        </div>
    </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
        <div class="">
            
              

            {counter assign=index}
            {math equation="left % right"
            left=$index
            right=$templateMeta.maxColumns
            assign=modVal
            }

            <div class="col-xs-12">
                                <label for='phongban_advanced'>{sugar_translate label='LBL_PHONGBAN' module='sgt_nhanvien'}</label>
                            </div>
            <div class="form-item">
                                
{if strlen($fields.phongban_advanced.value) <= 0}
{assign var="value" value=$fields.phongban_advanced.default_value }
{else}
{assign var="value" value=$fields.phongban_advanced.value }
{/if}
<input type='text' name='{$fields.phongban_advanced.name}'
    id='{$fields.phongban_advanced.name}' size='30'
    maxlength='50'        value='{$value}' title=''  tabindex='-1'      >

                            </div>
        </div>
    </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
        <div class="">
            
              

            {counter assign=index}
            {math equation="left % right"
            left=$index
            right=$templateMeta.maxColumns
            assign=modVal
            }

            <div class="col-xs-12">
                                <label for='ma_nv_advanced'>{sugar_translate label='LBL_MA_NV' module='sgt_nhanvien'}</label>
                            </div>
            <div class="form-item">
                                
{if strlen($fields.ma_nv_advanced.value) <= 0}
{assign var="value" value=$fields.ma_nv_advanced.default_value }
{else}
{assign var="value" value=$fields.ma_nv_advanced.value }
{/if}
<input type='text' name='{$fields.ma_nv_advanced.name}'
    id='{$fields.ma_nv_advanced.name}' size='30'
    maxlength='5'        value='{$value}' title=''  tabindex='-1'      >

                            </div>
        </div>
    </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
        <div class="">
            
              

            {counter assign=index}
            {math equation="left % right"
            left=$index
            right=$templateMeta.maxColumns
            assign=modVal
            }

            <div class="col-xs-12">
                                <label for='gioitinh_advanced'>{sugar_translate label='LBL_GIOITINH' module='sgt_nhanvien'}</label>
                            </div>
            <div class="form-item">
                                
{html_options id='gioitinh_advanced' name='gioitinh_advanced[]' options=$fields.gioitinh_advanced.options size="6" class="templateGroupChooser" multiple="1" selected=$fields.gioitinh_advanced.value}

                            </div>
        </div>
    </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
        <div class="">
            
              

            {counter assign=index}
            {math equation="left % right"
            left=$index
            right=$templateMeta.maxColumns
            assign=modVal
            }

            <div class="col-xs-12">
                                <label for='cc_advanced'>{sugar_translate label='LBL_CC' module='sgt_nhanvien'}</label>
                            </div>
            <div class="form-item">
                                
{assign var="yes" value=""}
{assign var="no" value=""}
{assign var="default" value=""}

{if strval($fields.cc_advanced.value) == "1"}
	{assign var="yes" value="SELECTED"}
{elseif strval($fields.cc_advanced.value) == "0"}
	{assign var="no" value="SELECTED"}
{else}
	{assign var="default" value="SELECTED"}
{/if}

<select id="{$fields.cc_advanced.name}" name="{$fields.cc_advanced.name}"  tabindex="-1"   >
 <option value="" {$default}></option>
 <option value = "0" {$no}> {$APP.LBL_SEARCH_DROPDOWN_NO}</option>
 <option value = "1" {$yes}> {$APP.LBL_SEARCH_DROPDOWN_YES}</option>
</select>


                            </div>
        </div>
    </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
        <div class="">
            
              

            {counter assign=index}
            {math equation="left % right"
            left=$index
            right=$templateMeta.maxColumns
            assign=modVal
            }

            <div class="col-xs-12">
                                <label for='sgt_nhanvien_sgt_doi_name_advanced'>{sugar_translate label='LBL_SGT_NHANVIEN_SGT_DOI_FROM_SGT_DOI_TITLE' module='sgt_nhanvien'}</label>
                            </div>
            <div class="form-item">
                                
<input type="text" name="{$fields.sgt_nhanvien_sgt_doi_name_advanced.name}"  class="sqsEnabled"  tabindex="-1"   id="{$fields.sgt_nhanvien_sgt_doi_name_advanced.name}" size="" value="{$fields.sgt_nhanvien_sgt_doi_name_advanced.value}" title='' autocomplete="off"  >
<input type="hidden"  id="{$fields.sgt_nhanvien_sgt_doisgt_doi_ida_advanced.name}" value="{$fields.sgt_nhanvien_sgt_doisgt_doi_ida_advanced.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.sgt_nhanvien_sgt_doi_name_advanced.name}"  tabindex="-1"   title="{$APP.LBL_SELECT_BUTTON_TITLE}" class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}" onclick='open_popup("{$fields.sgt_nhanvien_sgt_doi_name_advanced.module}", 600, 400, "", true, false, {literal}{"call_back_function":"set_return","form_name":"popup_query_form","field_to_name_array":{"id":"sgt_nhanvien_sgt_doisgt_doi_ida_advanced","name":"sgt_nhanvien_sgt_doi_name_advanced"}}{/literal}, "single", true);'><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.sgt_nhanvien_sgt_doi_name_advanced.name}"  tabindex="-1"   title="{$APP.LBL_CLEAR_BUTTON_TITLE}" class="button lastChild" onclick="this.form.{$fields.sgt_nhanvien_sgt_doi_name_advanced.name}.value = ''; this.form.{$fields.sgt_nhanvien_sgt_doisgt_doi_ida_advanced.name}.value = '';" value="{$APP.LBL_CLEAR_BUTTON_LABEL}"><span class="suitepicon suitepicon-action-clear"></span></button>
</span>

                            </div>
        </div>
    </div>
    
    <div>
        <div>
            &nbsp;
        </div>
    </div>

    {if $DISPLAY_SAVED_SEARCH}
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
            {if !$searchFormInPopup}
                <div>
                    <a class='tabFormAdvLink' onhover href='javascript:toggleInlineSearch()'>
                        {capture assign="alt_show_hide"}{sugar_translate label='LBL_ALT_SHOW_OPTIONS'}{/capture}
                        {sugar_getimage alt=$alt_show_hide name="advanced_search" ext=".gif" other_attributes='border="0" id="up_down_img" '}
                        &nbsp;{$APP.LNK_SAVED_VIEWS}
                    </a><br>
                    <input type='hidden' id='showSSDIV' name='showSSDIV' value='{$SHOWSSDIV}'>
                    <p>
                </div>
            {/if}
            <div class="" scope='row' width='10%' nowrap="nowrap">
                <div class="col-xs-12">
                    <label>{sugar_translate label='LBL_SAVE_SEARCH_AS' module='SavedSearch'}:</label>
                </div>
                <div class="form-item" width='30%' nowrap>
                    <input type='text' name='saved_search_name'>
                    <input type='hidden' name='search_module' value=''>
                    <input type='hidden' name='saved_search_action' value=''>
                    <input title='{$APP.LBL_SAVE_BUTTON_LABEL}' value='{$APP.LBL_SAVE_BUTTON_LABEL}' class='button'
                           type='button' name='saved_search_submit'
                           onclick='SUGAR.savedViews.setChooser(); return SUGAR.savedViews.saved_search_action("save");'>
                </div>
            </div>
            <div class="hideUnusedSavedSearchElements" scope='row' width='10%'
                 nowrap="nowrap"{if !$savedSearchData.selected} style="display: none;"{/if}>
                <label>{sugar_translate label='LBL_MODIFY_CURRENT_FILTER' module='SavedSearch'}: <span
                            id='curr_search_name'>"{$savedSearchData.options[$savedSearchData.selected]}"</span></label>
            </div>
            <div class="hideUnusedSavedSearchElements" width='30%'
                 nowrap{if !$savedSearchData.selected} style="display: none;"{/if}>
                <input class='button'
                       onclick='SUGAR.savedViews.setChooser(); return SUGAR.savedViews.saved_search_action("update")'
                       value='{$APP.LBL_UPDATE}' title='{$APP.LBL_UPDATE}' name='ss_update' id='ss_update'
                       type='button'>
                <input class='button'
                       onclick='return SUGAR.savedViews.saved_search_action("delete", "{sugar_translate label='LBL_DELETE_CONFIRM' module='SavedSearch'}")'
                       value='{$APP.LBL_DELETE}' title='{$APP.LBL_DELETE}' name='ss_delete' id='ss_delete'
                       type='button'>
            </div>
        </div>
        <div>
            <div colspan='6'>
                <div{if !$searchFormInPopup} style='{$DISPLAYSS}'{/if} id='inlineSavedSearch'>
                    {$SAVED_SEARCH}
                </div>
            </div>
        </div>
    {/if}

    {if $displayType != 'popupView'}
        <div>
            <div class="submitButtonsAdvanced">
                <input tabindex='2' title='{$APP.LBL_SEARCH_BUTTON_TITLE}' onclick='SUGAR.savedViews.setChooser()'
                       class='button' type='submit' name='button' value='{$APP.LBL_SEARCH_BUTTON_LABEL}'
                       id='search_form_submit_advanced'/>&nbsp;
                <input tabindex='2' title='{$APP.LBL_CLEAR_BUTTON_TITLE}'
                       onclick='SUGAR.searchForm.clear_form(this.form); if(document.getElementById("saved_search_select")){ldelim}document.getElementById("saved_search_select").options[0].selected=true;{rdelim} return false;'
                       class='button' type='button' name='clear' id='search_form_clear_advanced'
                       value='{$APP.LBL_CLEAR_BUTTON_LABEL}'/>
                {if $DOCUMENTS_MODULE}
                    &nbsp;
                    <input title="{$APP.LBL_BROWSE_DOCUMENTS_BUTTON_TITLE}" type="button" class="button"
                           value="{$APP.LBL_BROWSE_DOCUMENTS_BUTTON_LABEL}"
                           onclick='open_popup("Documents", 600, 400, "&caller=Documents", true, false, "");'/>
                {/if}
                {if $searchFormInPopup}
                <div>
                    {/if}
                    <a id="basic_search_link" href="javascript:void(0)"
                       accesskey="{$APP.LBL_ADV_SEARCH_LNK_KEY}">{$APP.LNK_BASIC_FILTER}</a>
        <span class='white-space'>
            &nbsp;&nbsp;&nbsp;{if $SAVED_SEARCHES_OPTIONS}|&nbsp;&nbsp;&nbsp;<b>{$APP.LBL_SAVED_FILTER_SHORTCUT}</b>&nbsp;
            {$SAVED_SEARCHES_OPTIONS} {/if}
            <span id='go_btn_span' style='display:none'><input tabindex='2' title='go_select' id='go_select'
                                                               onclick='SUGAR.searchForm.clear_form(this.form);'
                                                               class='button' type='button' name='go_select'
                                                               value=' {$APP.LBL_GO_BUTTON_LABEL} '/></span>
        </span>
                    {if $searchFormInPopup}
                </div>
                {/if}
            </div>
            <div class="help">
                {if $DISPLAY_SEARCH_HELP}
                    <img border='0' src='{sugar_getimagepath file="help-dashlet.gif"}' class="help-search">
                {/if}
            </div>
        </div>
    {/if}
</div>

<script>
    {literal}
    if (typeof(loadSSL_Scripts) == 'function') {
        loadSSL_Scripts();
    }
    {/literal}
</script>
<script>
    {literal}
    $(document).ready(function () {
        $('#basic_search_link').one("click", function () {
            //alert( "This will be displayed only once." );
            SUGAR.searchForm.searchFormSelect('{/literal}{$module}{literal}|basic_search', '{/literal}{$module}{literal}|advanced_search');
        });
    });
    {/literal}
</script>
{literal}<script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['popup_query_form_modified_by_name_advanced']={"form":"popup_query_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["modified_by_name_advanced","modified_user_id_advanced"],"required_list":["modified_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Kh\u00f4ng tr\u00f9ng kh\u1edbp"};sqs_objects['popup_query_form_created_by_name_advanced']={"form":"popup_query_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["created_by_name_advanced","created_by_advanced"],"required_list":["created_by"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Kh\u00f4ng tr\u00f9ng kh\u1edbp"};sqs_objects['popup_query_form_assigned_user_name_advanced']={"form":"popup_query_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name_advanced","assigned_user_id_advanced"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Kh\u00f4ng tr\u00f9ng kh\u1edbp"};sqs_objects['popup_query_form_ncc_advanced']={"form":"popup_query_form","method":"query","modules":["Accounts"],"group":"or","field_list":["name","id"],"populate_list":["popup_query_form_ncc_advanced","ncc_id_c_advanced"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"required_list":["ncc_id_c"],"order":"name","limit":"30","no_match_text":"Kh\u00f4ng tr\u00f9ng kh\u1edbp"};sqs_objects['popup_query_form_sgt_nhanvien_sgt_doi_name_advanced']={"form":"popup_query_form","method":"query","modules":["sgt_doi"],"group":"or","field_list":["name","id"],"populate_list":["sgt_nhanvien_sgt_doi_name_advanced","sgt_nhanvien_sgt_doisgt_doi_ida_advanced"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Kh\u00f4ng tr\u00f9ng kh\u1edbp"};</script>{/literal}