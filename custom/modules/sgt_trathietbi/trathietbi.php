<?php
class traThietbi {
   function travaoKho (&$bean, $event, $arguments){
      if (($bean->fetched_row['tinhtrang'] != 'datra') && ($bean->tinhtrang == 'datra')){
         $tbts = $bean->get_linked_beans('sgt_thietbitra_sgt_trathietbi','sgt_thietbitra');
         foreach ($tbts as $tbt){
            $khBeans = BeanFactory::getBean('sgt_khohang')->get_full_list('',"sgt_khohang.name = '".$tbt->name."' AND sgt_khohang.sgt_tenkho_id_c = '".$tbt->sgt_tenkho_id_c."'");
            foreach ($khBeans as $kh){
               $kh->tt_kho = 'trongkho';
	       $kh->tinhtrang = $tbt->tinhtrang;
               $kh->save();
            }
         }
      }
   }//end func   
}//end class
?>
