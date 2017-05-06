var pusher = new Pusher("6f9b209ae778821b0ef1")
var channel = pusher.subscribe('active-channel');
$(document).ready(function() {
    channel.bind('online-event', function(data) {
        if($('ul#list-online li#online_'+data.user.id).length){
            var el = $('ul#list-online li#online_'+data.user.id);
            if(data.status=='online'){
                el.find('i').addClass('active');
            }else{
                el.find('i').removeClass('active');
            }
        }else{
            var elul = $('#list-online');
            if(data.status=='online'){
                var elh5 = $("<h5></h5>").html('<i class="fa fa-circle active"></i> '+data.user.user_name);
            }else{
                var elh5 = $("<h5></h5>").html('<i class="fa fa-circle"></i> '+data.user.user_name);
            }
            var elli = $("<li></li>").addClass('list-group-item').attr('id','online_'+data.user.id);
            elli.append(elh5).hide();
            elul.prepend(elli).find(elli).slideDown();
        }
    });
    channel.bind('log-event', function(data) {
        var elul = $('#list-log');
        var domHtml = '<li class="list-group-item" id="post_'+data.log.post_id+'">'+
            '<div class="clearfix">'+
                '<div class="pull-left">'+
                    '<label class="label label-success"><span class="glyphicon glyphicon-user"></span> '+data.log.user_name+' </label>'+
                '</div>'+
                '<div class="pull-right">'+
                    '<a href="#"><span class="badge"></span><span class="glyphicon glyphicon-'+data.log.log_action+'"></span></a>'+
                '</div>'+
            '</div>'+
            '<p>'+
                data.log.log_content+
            '</p>'+
        '</li>';
        var elli = $(domHtml);

        if($('#list-log li#post_'+data.log.post_id).length){
            var number_edit = $('#list-log li#post_'+data.log.post_id+' div.pull-right a span.badge').text();
            $('#list-log li#post_'+data.log.post_id+' div.pull-right a span.badge').text(Number(number_edit,10) + 1);
        }else{
            elli.hide();
            elul.prepend(elli).find(elli).slideDown();
        }
    });
});