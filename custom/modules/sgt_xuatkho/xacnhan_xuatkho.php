<?php
if (!(ACLController::checkAccess('sgt_xuatkho', 'edit', true))) {
   ACLController::displayNoAccess();
   die;
}

$xk = BeanFactory::newBean('sgt_xuatkho');
$xk->retrieve($_REQUEST['record']);
//update tinh trang
if ($xk->tinhtrang == 'daxuat'){
   echo "<script type='text/javascript'>
            $(document).ready(function() {
               alert('Đã xuất phiếu này rồi');
               window.location.href='index.php?module=sgt_xuatkho&action=ListView';
             });
        </script>";
   exit;
}

if ($xk->tinhtrang != 'daxuat'){
   $xk->tinhtrang = 'daxuat';
   $xk->save();
   $vtxks = $xk->get_linked_beans('sgt_vattuxuat_sgt_xuatkho','sgt_vattuxuat');
   foreach ($vtxks as $vtxk){
      $khBeans = BeanFactory::getBean('sgt_khohang')->get_full_list('',"sgt_khohang.name = '".$vtxk->name."' AND sgt_khohang.sgt_tenkho_id_c = '".$vtxk->sgt_tenkho_id_c."'");
      $vtxk->ngayxuat = $xk->ngayxuat;
      $vtxk->tinhtrang = 'daxuat';
      $vtxk->sgt_nhanvien_id_c = $xk->sgt_nhanvien_id_c;
      foreach ($khBeans as $kh){
         $kh->soluong = $kh->fetched_row['soluong'] - $vtxk->soluong;
         $kh->save();
      }
   }
}
ob_clean();
header('Location: index.php?module=sgt_xuatkho&action=DetailView&record='.$xk->id);

