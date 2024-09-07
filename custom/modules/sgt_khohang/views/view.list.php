<?php

require_once('include/MVC/View/views/view.list.php');
#[\AllowDynamicProperties]
class sgt_khohangViewList extends ViewList
{
    public function __construct()
    {
        parent::__construct();
    }
    public function preDisplay(){
        parent::preDisplay();
        global $current_user;
        //Prevent delete record from normal user
        if(!$current_user->is_admin){
           $this->lv = new ListViewSmarty();
           $this->lv->delete = false;
           $this->lv->actionsMenuExtraItems[] = $this->createMuonthietbi();
           $this->lv->actionsMenuExtraItems[] = $this->createMuahang();
           $this->lv->actionsMenuExtraItems[] = $this->createXuatkho();
           $this->lv->actionsMenuExtraItems[] = $this->createNhapkho();
           $this->lv->actionsMenuExtraItems[] = $this->createChuyenkho();
        }else{
           $this->lv = new ListViewSmarty();
           $this->lv->actionsMenuExtraItems[] = $this->createMuonthietbi();
           $this->lv->actionsMenuExtraItems[] = $this->createMuahang();
           $this->lv->actionsMenuExtraItems[] = $this->createXuatkho();
           $this->lv->actionsMenuExtraItems[] = $this->createNhapkho();
           $this->lv->actionsMenuExtraItems[] = $this->createChuyenkho();
        }
    }
    public function createMuonthietbi()
    {
        global $app_strings;

return <<<EOHTML
        <a class="menuItem" style="width: 150px;" href="#" onmouseover='hiliteItem(this,"yes");'
                onmouseout='unhiliteItem(this);'
                onclick="sugarListView.get_checks();
                document.MassUpdate.action.value='createMuonthietbi';
                document.MassUpdate.submit();">Mượn thiết bị</a>

EOHTML;
    }
    public function createMuahang()
    {
        global $app_strings;

return <<<EOHTML
        <a class="menuItem" style="width: 150px;" href="#" onmouseover='hiliteItem(this,"yes");'
                onmouseout='unhiliteItem(this);'
                onclick="sugarListView.get_checks();
                document.MassUpdate.action.value='createMuahang';
                document.MassUpdate.submit();">Đề nghị mua hàng</a>

EOHTML;
    }
    public function createXuatkho()
    {
        global $app_strings;

return <<<EOHTML
        <a class="menuItem" style="width: 150px;" href="#" onmouseover='hiliteItem(this,"yes");'
                onmouseout='unhiliteItem(this);'
                onclick="sugarListView.get_checks();
                document.MassUpdate.action.value='createXuatkho';
                document.MassUpdate.submit();">Xuất kho</a>

EOHTML;
    }
    public function createNhapkho()
    {
        global $app_strings;

return <<<EOHTML
        <a class="menuItem" style="width: 150px;" href="#" onmouseover='hiliteItem(this,"yes");'
                onmouseout='unhiliteItem(this);'
                onclick="sugarListView.get_checks();
                document.MassUpdate.action.value='createNhapkho';
                document.MassUpdate.submit();">Nhập kho</a>

EOHTML;
    }
    public function createChuyenkho()
    {
        global $app_strings;

return <<<EOHTML
        <a class="menuItem" style="width: 150px;" href="#" onmouseover='hiliteItem(this,"yes");'
                onmouseout='unhiliteItem(this);'
                onclick="sugarListView.get_checks();
                document.MassUpdate.action.value='createChuyenkho';
                document.MassUpdate.submit();">Chuyển kho</a>

EOHTML;
    }
    function listViewProcess() {
       //global $current_user,$db;
       $this->processSearchForm();
       $this->lv->searchColumns = $this->searchForm->searchColumns;

       if (!$this->headers)
          return;
       //custom check if request is default (no search filters). if so, use our custom defaults
       if (empty($_REQUEST['button']) && (empty($_REQUEST['clear_query']) || $_REQUEST['clear_query'] == 'true')) {
          $this->params['custom_where'] = " AND sgt_khohang.tinhtrang ='tot' AND sgt_khohang.tt_kho = 'trongkho'";
       }
       if ($_REQUEST['thietbi_hu']){
          $this->params['custom_where'] = " AND sgt_khohang.tinhtrang = 'bihu' OR sgt_khohang.tinhtrang = 'dangsua' OR sgt_khohang.tinhtrang = 'khongdung' OR sgt_khohang.tinhtrang = 'mat'";
       }

       if (empty($_REQUEST['search_form_only']) || $_REQUEST['search_form_only'] == false) {
          $this->lv->ss->assign("SEARCH", true);
          $this->lv->ss->assign('savedSearchData', $this->searchForm->getSavedSearchData());
          $this->lv->setup($this->seed, 'include/ListView/ListViewGeneric.tpl', $this->where, $this->params);
          $savedSearchName = empty($_REQUEST['saved_search_select_name']) ? '' : (' - ' . $_REQUEST['saved_search_select_name']);
          echo $this->lv->display();
       }
    }
}
