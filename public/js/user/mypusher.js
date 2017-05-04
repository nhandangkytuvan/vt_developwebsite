var pusher = new Pusher("6f9b209ae778821b0ef1")
var channel = pusher.subscribe('active-channel');
$(document).ready(function() {
    channel.bind('online-event', function(data) {
        if($('ul#list-online li#online_'+data.user_id).length){
            var el = $('ul#list-online li#online_'+data.user_id);
            el.find('i').addClass('active');
        }else{
            var elul = $('#list-online');
            var elh5 = $("<h5></h5>").html('<i class="fa fa-circle active"></i> '+data.user_name);
            var elli = $("<li></li>").addClass('list-group-item').attr('id','online_'+data.user_id);
            elli.append(elh5).hide();
            elul.prepend(elli).find(elli).slideDown();
        }
    });
    channel.bind('offline-event', function(data) {
        if($('ul#list-online li#online_'+data.user_id).length){
            var el = $('ul#list-online li#online_'+data.user_id);
            el.find('i').removeClass('active');
        }else{
            var elul = $('#list-online');
            var elh5 = $("<h5></h5>").html('<i class="fa fa-circle"></i> '+data.user_name);
            var elli = $("<li></li>").addClass('list-group-item').attr('id','online_'+data.user_id);
            elli.append(elh5).hide();
            elul.prepend(elli).find(elli).slideDown();
        }
    });
});