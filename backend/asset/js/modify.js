function sidemenu_click(ele) {
	if(ele.children[0].attributes[2] !== undefined) {
		var des_site = ele.children[0].attributes[2].value;
		$.ajax({
			url: site_url+'/'+des_site,
			beforeSend: function() {
				$('#contentHTML').replaceWith('<div id="contentHTML" class="spinner"></div>');
			},
			success: function(data) {
				var span = '<span id="contentHTML">'+data+'</span>';
				$('#contentHTML').replaceWith(span);
			},
			error: function(e) {
				bootoast.toast({
					message: 'Ada Masalah',
					type: 'warning'
				});
			}
		});
	}
	else {
		bootoast.toast({
			message: 'Attribut data-url belum terdefinisi',
			type: 'danger'
		});
	}
}