$("#but").click(function(){
	val($("#text").val(),$("#num").val(),$("#cod").val());
});
function val(t,n,c){
	$.ajax({
		url:"../programs/seg1.php",
		data:{
			tex:t,
			num:n,
			cod:c
		},
		type:"GET",
		dataType:"text",
		success:function(data){
			$("#res").html(data);
		}	
	});
}