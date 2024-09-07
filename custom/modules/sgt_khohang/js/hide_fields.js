$(document).ready(function(){
   hide_fields(); 
   $('#loai').change(function() {
	hide_fields();
   });
});
function hide_fields(){
   var loai = $('#loai').val();
   $('#ngaykiemdinh').parent().parent().parent().hide();
   $('#hankiemdinh').parent().parent().parent().hide();
   $('#ngayvanhanh').parent().parent().parent().hide();
   $('#ngaybaoduong').parent().parent().parent().hide();
   $('#giay_cn_file').parent().parent().parent().hide();
   $('#taitrong').parent().parent().hide();
   $('#nhanhieu').parent().parent().hide();
   if (loai == "maymoc"){
      $('#ngayvanhanh').parent().parent().parent().show();
      $('#ngaybaoduong').parent().parent().parent().show();
      $('#ngaykiemdinh').parent().parent().parent().show();
      $('#hankiemdinh').parent().parent().parent().show();
      $('#giay_cn_file').parent().parent().parent().show();
      $('#taitrong').parent().parent().show();
      $('#nhanhieu').parent().parent().show();
   } 
}
