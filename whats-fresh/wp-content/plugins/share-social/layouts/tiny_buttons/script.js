function escape_html_special_chars(t){return t.replace(/&/g,"&amp;").replace(/</g,"&lt;").replace(/>/g,"&gt;").replace(/"/g,"&quot;").replace(/'/g,"&#039;")}jQuery(document).ready(function(){jQuery(document.body).on("click",".close-email",function(){jQuery(".tiny_btns .cunjo_socials a.email").poshytip("hide")}),jQuery(document.body).on("click",".bar_tiny_btns ul.tiny_btns li.close_tiny_btns",function(){jQuery(this).parent().parent(".bar_tiny_btns").slideUp(300),jQuery(this).parent().parent(".bar_tiny_btns").siblings(".show_tiny_btns").slideDown(300),jQuery.cookie("cunjo_share_tiny_btns","hidden",{expires:7,path:"/"})}),jQuery(document.body).on("click",".show_tiny_btns",function(){jQuery(this).slideUp(300),jQuery(this).siblings(".bar_tiny_btns").slideDown(300),jQuery.removeCookie("cunjo_share_tiny_btns",{expires:7,path:"/"})}),jQuery("#cunjo_to").poshytip({liveEvents:!0,className:"tip-darkgray",showOn:"focus",alignTo:"target",alignX:"right",alignY:"center",offsetX:5,showTimeout:100})});