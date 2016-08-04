function get_items() {
    $.ajax({
            type: "GET",
            url: base_url+'get-items',
            dataType: "json"
    })
    .done(function(ret) {
            var total = 0;
            for(var a=0; a<ret.length; a++) {
                var item = "<tr class='item'><td>"+ret[a].product
                +"</td><td>"+ret[a].quantity
                +"</td><td>"+ret[a].price
                +"</td><td>"+ret[a].date
                +"</td><td>"+ret[a].total+"</td></tr>";
                total += ret[a].total;
                $( "#item-table" ).append(item);
            }
            $( "#item-table" ).append("<tr class='item'><td></td><td></td><td></td><td></td><td>"+total+"</td></tr>");
    })
    .fail(function(ret) {
            return false;
    })
    .always(function(ret) {
                    
    });
}

function clear_items() {
    $( "#item-table .item" ).remove();
}

function save_item() {
    var data = {
        product: $("input[name=product]").val().trim(),
        quantity: $("input[name=quantity]").val().trim(),
        price: $("input[name=price]").val().trim()
    }
    $.ajax({
            type: "POST",
            data: data,
            url: base_url+'save-item',
            dataType: "json"
    })
    .done(function(ret) {
        
    })
    .fail(function(ret) {
            
    })
    .always(function(ret) {
        clear_items();
            setTimeout(function() {
                 $( "input" ).val('');
                 get_items();
            }, 200 );
    });
}

$(function() {
    $( "input" ).val('');
   
   get_items();
   
   $(document).on('click', '#item-submit', function(e) {
        save_item();
    });	
});