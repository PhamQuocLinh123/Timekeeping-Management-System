<?php
if (!(ACLController::checkAccess('sgt_muahang', 'edit', true))) {
   ACLController::displayNoAccess();
   die;
}

$mh = BeanFactory::newBean('sgt_muahang');
$mh->retrieve($_REQUEST['record']);
if ($mh->pheduyet != 'daduyet'){
   echo "<script type='text/javascript'>
            $(document).ready(function() {
               alert('Đề nghị mua hàng này chưa được duyệt');
               window.location.href='index.php?module=sgt_muahang&action=ListView';
             });
        </script>";
   exit;
}

if ($mh->pheduyet == 'daduyet'){
//update xacnhan
   $mh->tinhtrang = 'danhanhang';
   $mh->save();

   //tao phieu nhap kho
   $nk = BeanFactory::newBean('sgt_nhapkho');
   $nk->name = date('dmYs').'_NK';
   $nk->ngaynhap = date('d/m/Y');
   $nk->assigned_user_id = $mh->assigned_user_id;
   $nk->sgt_tenkho_id_c = $mh->sgt_tenkho_id_c;
   $nk->save();
   //danh sach thiet bi nhap
   if ($mh->load_relationship('sgt_vattumua_sgt_muahang')){
      $vtmBeans = $mh->sgt_vattumua_sgt_muahang->getBeans();
      foreach ($vtmBeans as $vtm){
         $vtn = BeanFactory::newBean('sgt_vattunhap');
         $vtn->name = $vtm->name;
         $vtn->sgt_khohang_id_c = $vtm->sgt_khohang_id_c;
         $vtn->soluong = $vtm->soluong;
         $vtn->dvt = $vtm->dvt;
         $vtn->ma_vt = $vtm->ma_vt;
         $vtn->sgt_tenkho_id_c = $vtm->sgt_tenkho_id_c;
         $vtn->assigned_user_id = $vtm->assigned_user_id;
         $vtn->sgt_vattunhap_sgt_nhapkhosgt_nhapkho_ida = $nk->id;
         $vtn->save();
      }
   }
}
ob_clean();
header('Location: index.php?module=sgt_nhapkho&action=DetailView&record='.$nk->id);

