// +------------------------------------------------------------------------+
// | @author Meta Platforms Inc
// | @author_url 1: http://www.facebook.com
// | @author_url 2: https://www.facebook.com/zuck
// | @author_email: dev@facebook.com   
// +------------------------------------------------------------------------+
// | The Facebook Source Code
// | Copyright (c) 2003 - 2023 Meta Platforms. All rights reserved.
// +------------------------------------------------------------------------+

$(document).ready(function(){

      $(document).on("click",".show-forums",function(){
          $("div[data-slide=" +  $(this).attr("id")+"]").slideToggle("slow");
      });


      

 });
