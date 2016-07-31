var abc;
var value;

$(document).ready(function(){
	$.ajax({
		url:'search.php',
		data:'all=y',
		success:function(data){
			$('#result').html(data);
		}
	});
} );
	


$('#search').dropdown({
		inDuration: 300,
		outDuration: 225,
		constrain_width: false,
		hover: false, 
		gutter: 0, 
		belowOrigin: false,
		alignment: 'left'
    }
);

$('#search').keydown(function(e){
	value = $('#search').val();
	if(e.keyCode == 13){
	$.ajax({
		url:'search.php',
		data: 'search='+value,
		success:function(data){
			$('#result').html(data);
		}
	});
	$('.dropdown-button').dropdown('close');
	}else{
	
	$.ajax({
		url:'suggest.php',
		data:'key='+value,
		success:function(data){
			$('#dropdown1').html(data);
		}
	});
	$('.dropdown-button').dropdown('open');
}});

$("#dropdown1 li").click(function(){
	alert();
});
