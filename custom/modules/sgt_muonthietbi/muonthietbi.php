<?php
class muonThietbi {
   function capnhatTB (&$bean, $event, $arguments){
      if (($bean->fetched_row['xacnhan'] != 'damuon') && ($bean->xacnhan == 'damuon')){
         $tbms = $bean->get_linked_beans('sgt_thietbimuon_sgt_muonthietbi','sgt_thietbimuon');
         foreach ($tbms as $tbm){
            $khBeans = BeanFactory::getBean('sgt_khohang')->get_full_list('',"sgt_khohang.name = '".$tbm->name."' AND sgt_khohang.sgt_tenkho_id_c = '".$tbm->sgt_tenkho_id_c."'");
            foreach ($khBeans as $kh){
               $kh->tt_kho = 'chomuon';
               $kh->save();
            }
         }
      }
   }//end func   
}//end class
?>
