function get_rand_numbers() {
    $.ajax({
            type: "GET",
            url: base_url+'get-rand-number',
            dataType: "json"
    })
    .done(function(ret) {
        for(var a=0; a<3; a++) {
            $("input[name=digit"+(a+1)+"]").val(ret[a]);
        }
    })
    .fail(function(ret) {
            return false;
    })
    .always(function(ret) {
                    
    });
}

function save_number() {
    var the_digit = 0;
    var valid_number = true;
    
    for(var a=1; a<=3; a++) {
        var number = $("input[name=digit"+(a)+"]").val();
        if (number < 1 || number > 9) {
            valid_number = false;
        }
        the_digit += Math.pow(10,(3-a))*number;
    }
    console.log(the_digit);
    
    if (valid_number) {
        $.ajax({
                type: "POST",
                data: {
                    number: the_digit
                    },
                url: base_url+'save-number',
                dataType: "json"
        })
        .done(function(ret) {
            if (ret.last == false) {
                 $( "#results" ).html('<strong>Number: </strong>'+ret.number.number + '<strong> Date: </strong>'+ret.number.created_at);
            }
            else {
                $( "#results" ).html('<strong>Number: </strong>'+ret.number.number + '<strong> Last Selected: </strong>'+ret.last.date);
            }
        })
        .fail(function(ret) {
            console.log('fail');
            console.log(ret);
        })
        .always(function(ret) {
            console.log('always');
            console.log(ret);
        });
    }
    else {
        alert('Please enter numbers from 1 to 9.')
    }
    
}

$(function() {
    $( "input" ).val('');
    $(document).on('click', '#randomize', function(e) {
        get_rand_numbers();
    });
    
    $(document).on('click', '#number-submit', function(e) {
        save_number();
    });
   
});