/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


(function($){
    $.fn.iCombo = function(options){
        var settings = $.extend({data:null,isCompactData:false,selected:null}, options );
        if(settings.data !== null){
            $(this).empty();
            if(settings.isCompactData === true){
//                for compact data 
//                use id, text,...,... dinamic data 
                // for array data
                for(var ix in settings.data){ 
                    var item = settings.data[ix];
                    var keys = Object.keys(item);
                    var val = '<option value="'+item.id+'"';
                    if(settings.selected == item.id) {val += ' selected ';}
                    for(var key in keys){
                        if(keys[key] !== 'id' && keys[key] !== 'text'){
                            val += keys[key] + '="' + item[keys[key]] + '"';
                        }                        
                    }
                    val += '>'+ item.text+'</option>';
                    $(this).append(val);
                }
            }
            else{
                // for array data
                console.log(settings.data);
                for(var key in settings.data){                
                    $(this).append('<option value="'+key+'"'+ (settings.selected == key ? ' selected ' : '') +'>'+settings.data[key]+'</option>');
                }
            }
        }
        
    };
})(jQuery);