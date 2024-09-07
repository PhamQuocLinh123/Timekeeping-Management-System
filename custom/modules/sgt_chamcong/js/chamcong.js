/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

/**
 *
 * @param element
 * @returns {boolean}
 */
function selectPageTop(element) {

  var table = $(element).parents("div:eq(0)").children(".list");

  table.find("input:checkbox").prop("checked", true);

  $(element).parents(".subnav").hide().removeClass("ddopen");

  Populate();

  return false; //Prevent page from jumping back to the top on click
}

/**
 *
 * @param element
 * @returns {boolean}
 */
function selectAllTop(element) {
  var table = $(element).parents("div:eq(0)").children(".list");

  table.find("input:checkbox").prop({
    checked: true,
    disabled: true
  });

  $("#select_entire_list").val(1);
  window.select_entire_list = 1;

  $(element).parents(".subnav").hide().removeClass("ddopen");

  Populate();

  return false;
}

/**
 *
 * @param element
 * @returns {boolean}
 */
function deselectTop(element) {
  var table = $(element).parents("div:eq(0)").children(".list");

  table.find("input:checkbox").prop({
    checked: false,
    disabled: false
  });

  $("#select_entire_list").val(0);
  window.select_entire_list = 0;

  $(element).parents(".subnav").hide().removeClass("ddopen");

  //clear id's on deselect
  var vals = '';
  
  $("#custom_hidden_1").val(vals);
  
  return false;
}

$(function () {
  //set variable to global window scope to compensate for lost value during subpanel pagination
  if (window.select_entire_list == 1) {
    $('#select_entire_list').val(1);
    var table = $('#list_subpanel_sgt_dschamcong_sgt_chamcong .list');
  
    table.find('input:checkbox').prop({
      checked: true,
      disabled: true
    });
  }
  
  //checks all and unchecks all checkboxes based on checkbox in first row of the subpanel table.
  $('th input:checkbox').click(function (e) {
  var table = $(e.target).parents('table:first');
  $('td input:checkbox', table).attr('checked', e.target.checked);
  
  });
  //Shows and hides the custom mass update button in subpanel
  $('.cust_select').unbind("click").click(function () { //unbined is used to prevent the click event from firing twice

    if ($(this).siblings('.cust_list').is(':hidden')) {

      $(this).siblings('.cust_list').show();
    }
    else {
      $(this).siblings('.cust_list').hide();
    }
  });

  $('.button_select_this_page_top').click(function (e) {
    selectPageTop(this);
  });

  $('.button_select_all_top').click(function (e) {
    selectAllTop(this);
  });

  $('.button_deselect_top').click(function (e) {
    return deselectTop(this);
  });

  $(".button_toggle_select_all").click(function (e) {
    if ($(this).is(":checked")) {
      deselectTop(this);
      return;
    }
    selectPageTop(this);
  });

  $('input[type="checkbox"]').on('change', function () {
    Populate();
  }).change();
});

function Populate() {
  vals = $('input[type="checkbox"]:checked').map(function () {

    if (this.value != 'on') {

      return this.value;
    }
  }).get().join(',');

  $('#custom_hidden_1').val(vals);
}
function create_tangca() {
  //console.log('Test running');
  //$('#details_popup_div').remove();
  //$('.modal-backdrop').remove();
  var ids = $("#custom_hidden_1").val();
  var list = $("#select_entire_list").val();
  var ccid = $("[name='record']").val();
  var data = 'id=' + ids;
  data += '&cc_id=' + ccid;
  data += '&entire_list=' + list;

  if (ids != '') {

    $.ajax({
      type: "POST",
      url: "index.php?module=sgt_chamcong&action=createtangca",
      data: data,
      success: function (data) {
      var tcid = data.substring(9,45);
      console.log(tcid);
      window.location.href = "index.php?module=sgt_tangca&action=DetailView&record=".concat(tcid);
      }
    });
  }
  else {
    showNoCheck();
  }
  $("body").removeClass('modal-open');
}

