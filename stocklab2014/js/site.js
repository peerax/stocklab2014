function addBlog(){
				var data = $('#formblog').serialize();
				//alert(data);
				$.ajax({
					url: "index.php?r=site/addblog",
					type: "POST",
					data: data,
					cache: "false",
					success: function(rs){

						if(rs == "ok"){
						$('#blogname').val('');
						$('#blogdetail').val('');
						$('#blogname').focus();

						/*
						var d = new Date();
						var curr_date = d.getDate();
						var curr_month = d.getMonth();
						var curr_year = d.getFullYear();
						var finalf =  curr_year + "-" + m_names[curr_month] + "-" + curr_date;
						$('#blogdate').val(finalf.toString());
						*/
						showData();

						};

					}
				});// end ajax
				};

function showData(){
			$.ajax({
					url: "index.php?r=site/showblog",
					cache: "false",
					datatype: "json",
					success: function(rs){
						var obj = jQuery.parseJSON(rs);
						var html = '<tr><td>'+ obj[0]['id'] +'</td><td>'+ obj[0]['blog_name'] +'</td><td>'+ obj[0]['blog_detail'] +'</td><td>'+ obj[0]['blog_date'] +'</td></tr>';

						$("#tabAll tbody").prepend(html);
					}
				});// end ajax
};

function showLoading(){
			// add the overlay with loading image to the page
			var over = '<div id="overlay" class=".col-md-3 .col-md-offset-3">' +
					'<img  id="loading" src="http://stocklab2014.kaimintsoft.com/images/ajax-loader-bar.gif">' +
					'</div>';
			$(over).appendTo('body');
			
			setInterval(function(){endLoading()},3000);
};

function endLoading(){
		$('#overlay').remove();
};
