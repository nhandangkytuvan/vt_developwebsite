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
        var ellabel = $("<label></label>");
        if(data.log.log_action=='edit'){
            var eli = $("<i></i>").addClass('glyphicon glyphicon-edit');
            ellabel.addClass('label label-success').append(data.user_name+' ',eli,' ');
        }
        if(data.log.log_action=='delete'){
            var eli = $("<i></i>").addClass('glyphicon glyphicon-trash');
            ellabel.addClass('label label-danger').append(data.user_name+' ',eli,' ');
        }
        var elp = $("<p></p>").append(ellabel,data.log.log_content);
        var elli = $("<li></li>").addClass('list-group-item');
        elli.append(elp).hide();
        elul.prepend(elli).find(elli).slideDown();
    });
});