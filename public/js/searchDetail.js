$(document).ready(function () {


    $('#submit').click(function () {

        $.post('/detail/search',
               {
                   'query':$('#query').val(),
                   '_token':$('#_token').val(),
                    'type':'json'
               },
               function(result){
                   //console.log(result);
                   var count=result.length;
                   var toShow="";
                   for(var i=0;i<count;i++)
                   {
                       //console.log(i);
                    toShow+='<tr>' ;
                      toShow+='<td>';
                       //toShow+='<a href="/detail/'+result[i].id+'">'+'عرض'+'</a>';
                       toShow+=' <a href="/detail/'+result[i].id+'/edit">'+'تعديل'+'</a>';
                       toShow+=' <a href="/detail/'+result[i].id+'/delete">'+'مسح'+'</a>';
                       toShow+='</td>';

                       toShow+='<td>'+result[i].price+'</td>';
                       toShow+='<td>'+result[i].name+'</td>';
                       toShow+='<td>'+result[i].id+'</td>';
                    toShow+='</tr>';
                   }
                   $('#result').html(toShow);
                   //$('#render').html(result.render);
                   ////console.log();

               });
    });

});