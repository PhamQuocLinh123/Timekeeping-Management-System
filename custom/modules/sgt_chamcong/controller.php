<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2019 SalesAgility Ltd.
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

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

#[\AllowDynamicProperties]
class sgt_chamcongController extends SugarController
{
   public function action_createtangca()
   {
      $db = DBManagerFactory::getInstance();
      $ids = $_POST['id'];
      //$entire_list = $_POST['entire_list'];
      $ccid = $db->quote($_POST['cc_id']);
      $nvs = explode(',', $ids);

      //if ($entire_list != '1') {
      $nvs = explode(',', $ids);
      if ($nvs){
         $chamcong = BeanFactory::getBean('sgt_chamcong',$ccid);
         $tangca = BeanFactory::newBean('sgt_tangca');
         $tangca->ngaytangca = date('d/m/Y');
         $tangca->name = date('d/m/Y').' '.$chamcong->sgt_chamcong_sgt_duan_name;
         $tangca->sgt_tangca_sgt_duansgt_duan_ida = $chamcong->sgt_chamcong_sgt_duansgt_duan_ida;
	 $tangca->heso = '1.5';
	 $tangca->loaingay = 'ngaythuong';
	 $tangca->save();
         foreach ($nvs as $nv) {
            $dstc = BeanFactory::getBean('sgt_dschamcong',$nv);
	    $nvtc = BeanFactory::newBean('sgt_dstangca');
	    $nvtc->sgt_nhanvien_id_c = $dstc->sgt_nhanvien_id_c;
	    $nvtc->name = $dstc->name;
	    $nvtc->ma_nv = $dstc->ma_nv; 
	    $nvtc->ngaytangca = $tangca->ngaytangca; 
	    //$GLOBALS['log']->fatal($nvtc->name);
	    $nvtc->sgt_duan_id_c = $chamcong->sgt_chamcong_sgt_duansgt_duan_ida;
	    $nvtc->sgt_dstangca_sgt_tangcasgt_tangca_ida = $tangca->id;
    	    $nvtc->save();
         }
      }
      $data = array(
         'tcid' => $tangca->id,
      );
      echo json_encode($data);
   }
}
