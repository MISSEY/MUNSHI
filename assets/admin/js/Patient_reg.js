/**
 * 
 */
$(document).ready(function(){
	//alert("jquery is working");
	$("#submit_comment").click(function(e){
		e.preventDefault();
		
		var uid1=$("#uid").val();
		var name1=$("#name").val();
		var surname1=$("#surname").val();
		var email1=$("#email").val();
		var dob1=$("#dob").val();
		var cno1=$("#cno").val();
		var gen1=$("#gen").val();
		var add1=$("#add").val();
		var state1=$("#state").val();
		var city1=$("#city").val();
		
		
		$.ajax({
			
			method: "POST",
			url: "http://localhost:8080/MUNSHI/Hospital/Patient_reg",
			async:false,
			data:{
				done:1,
				uid:uid1,
				name:name1,
				surname:surname1,
				email:email1,
				dob:dob1,
				cno:cno1,
				gen:gen1,
				add:add1,
				state:state1,
				city:city1
			},
			success:function(status){
				alert(status);
				
			}
			
			
		});
		
	});
});