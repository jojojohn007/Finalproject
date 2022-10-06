console.log(pageurl)

$(document).ready(function(){

    $(document).on('click' , '.prg' ,  function(event){
console.log(event)
var calltype = $(this).attr('call_type')



$.getJSON(pageurl + 'actions/ajax.php' , { calltype:calltype },
function(data,textstatus,xhr){
$(document).attr('title',data.title)

$(document).find('meta[name=description]').attr('content' ,data.description);
console.log(data.description)
$(document).find('.check').html(data.data)
let loc = JSON.stringify(data.location)
console.log(data.location)
 window.history.pushState('','',pageurl+data.url)
 window.location.replace(pageurl+data.url)
    }); 
  });
});