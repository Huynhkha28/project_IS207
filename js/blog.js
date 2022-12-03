$(document).ready(function () {
  $("Post_item_info_title").click(function () {
    
    $(this).parent().toggleClass('active');
    $(this).parent().children('.Post_item_info_body').toggleClass();
  });
});
