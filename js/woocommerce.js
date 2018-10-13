jQuery('document').ready(function($){

    $('.post-type-product .panel-wrap ul li').each(function(i, e){

        if($(e).hasClass('general_tab') && $(e).hasClass('active')){
            $('.options_group.show_if_external').css("cssText", "visibility: visible !important"+"display: block !important");
            $('#general_product_data .pricing').css('cssText', 'visibility: visible !important' + 'display: block !important');
        }
        
        $(e).on('click', function(){
           if($(e).hasClass('inventory_options')){
               $('#inventory_product_data.hidden').css("cssText", "visibility: visible !important;"+"display: block !important");
           }else if($(e).hasClass('shipping_options')){
               $('#shipping_product_data').css("cssText", "visibility: visible !important;"+"display: block !important");
           }else if($(e).hasClass('linked_product_options')){
               $('#linked_product_data').css("cssText", "visibility: visible !important;"+"display: block !important");
           } else if($(e).hasClass('attribute_options')){
               $('#product_attributes').css("cssText", "visibility: visible !important;"+"display: block !important");
           }else if($(e).hasClass('variations_options')){
               $('#variable_product_options').css("cssText", "visibility: visible !important;"+"display: block !important");
           }else if($(e).hasClass('advanced_options')){
               $('#advanced_product_data').css("cssText", "visibility: visible !important;"+"display: block !important");
           }
        });
    });
});