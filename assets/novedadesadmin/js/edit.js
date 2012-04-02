$(document).ready(function() { 
  startFancyLinks();
  startTinyMCE();
});

function startFancyLinks()
{
  $("a.fancy_link").fancybox();
}

function startTinyMCE(){
  tinyMCE.init({

      // General options

      mode : "textareas",

      theme : "advanced",

      plugins : "pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist, spellchecker",

      // Theme options
      theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,formatselect,fontselect,fontsizeselect,|",
      theme_advanced_buttons2 : "bullist,numlist,|link,unlink,code,|,insertdate,inserttime,preview,|,forecolor,backcolor,|fullscreen,|,cut,copy,paste,pastetext,pasteword,|",
      theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid",

      theme_advanced_toolbar_location : "top",

      theme_advanced_toolbar_align : "left",

      theme_advanced_statusbar_location : "bottom",

      theme_advanced_resizing : true,

      forced_root_block : "",

      force_br_newlines : true,
      force_p_newlines : false

  });
}