<style>
/*#rootTable tbody tr:nth-child(2) td {
	padding-left: 10px;
}*/
#rootTable div {
	cursor: pointer;
	padding: 0 5px;
}
#left-menus span:nth-child(3) {
	position: absolute;
	right: 10px;
}
#left-menus span:nth-child(3) i {
	cursor: pointer;
}
.focused {
	background: blue;
	color: #fff;
}
</style>
<script type="text/javascript">
var filename = 'sideformat_undang2.json';
function onFocused(ele) {
	$('#rootTable div').removeClass('focused');
	$(ele).addClass('focused');
}
function addAction() {
	var element_value = $('#rootTable').find('.focused').children('input').val();
	if(element_value === undefined) {
		alert('Harap sorot elemen yang ingin ditambah');
	}
	else if(element_value === 'root') {
		var opt = $('#opt-child').val();
		if(opt === 'none') {
			alert('Judul hanya dapat ditambah elemen turunan');
		}
		else if(opt === 'child') {
			$('#modal-popup').click();
		}
	}
	else {
		$('#modal-popup').click();
	}
}
function minAction(ele) {
	var element_value = $('#rootTable').find('.focused').children('input').val();
	if(element_value === undefined) {
		alert('Harap sorot elemen yang ingin dihapus');
	}
	else if(element_value === 'root') {
		alert('Judul tidak dapat di hapus');
	}
	else {
		$('.focused').parent().remove();
	}
}
function saveFormat() {
	var conf = confirm("Anda Yakin?");
	var arr = new Array;
	if(conf === true) {
		$(".pointer").each(function(num) {
			var val = $(this).val();
			arr[num] = {pointer:$(this).val(), val:$(this).next().val()};
		});
		$.ajax({
			url: '<?php base_url(); ?>files/saveformat',
			type: 'POST',
			data: 'namafile='+filename+'&konten='+JSON.stringify(arr),
			beforeSend: function() {
				console.log('loading...');
			},
			success: function(data) {
				console.log(data);
			}
		});
	}
}
function modalBtn(ele, val) {
	var getFocus = $('.focused').children().val();
	if(val === 'yes') {
		//console.log($('.focused').get()[0]);
		var element_value = $('#rootTable').find('.focused').children('input').val();
		var opt = $('#opt-child').val(), isi = $('input[name="isi_text"]').val();
		var getStyle = $('.focused').attr('style');
		var newEle;
		if(element_value === 'root') {
			newEle = '<div>'+
					 '<div onclick="onFocused(this)" style="margin-left:10px">'+
					 '<input type="hidden" class="pointer" value="subroot" />'+isi+
					 '<input type="hidden" class="namePointer" value="'+isi+'" />'+
					 '</div>'+
					 '</div>';
			$(newEle).insertAfter('.focused');
		}
		else {
			var splitStyle = getStyle.split(':');
			var getNum = splitStyle[1].match(/\d/g).join("");
			var subNum = (element_value.match(/\d/g) === null) ? 1 : parseInt(element_value.match(/\d/g))+1;
			if(opt === 'none') {
				newEle = '<div>'+
						 '<div onclick="onFocused(this)" style="'+getStyle+'">'+
						 '<input type="hidden" class="pointer" value="'+getFocus+'" />'+isi+
						 '<input type="hidden" class="namePointer" value="'+isi+'" />'+
						 '</div>'+
						 '</div>';
				var focusParent = $('.focused').parent();
				$(newEle).insertAfter(focusParent);
			}
			else if(opt === 'child') {
				newEle = '<div>'+
						 '<div onclick="onFocused(this)" style="margin-left:'+(parseInt(getNum)+10)+'px">'+
						 '<input type="hidden" class="pointer" value="subroot'+subNum+'" />'+isi+
						 '<input type="hidden" class="namePointer" value="'+isi+'" />'+
						 '</div>'+
						 '</div>';
				var focusParent = $('.focused').parent();
				$(newEle).insertAfter(focusParent);
			}
		}
	}
	$('input[name="isi_text"]').val('')
	$(ele).attr("data-dismiss", "modal");
}
</script>
<div class="padding">
	<div class="row">
		<div class="col-md-3">
			<div class="box">
				<div id="left-menus" class="box-header">
					<span>Aksi</span>
					<span>
						<select id="opt-child">
							<option value="none">None</option>
							<option value="child">Child</option>
						</select>
					</span>
					<span>
						<i class="fa fa-save" title="Simpan Format" onclick="saveFormat()"></i>
						<i class="fa fa-plus-circle" title="Tambah" onclick="addAction()"></i>
						<i class="fa fa-minus-circle" title="Hapus" onclick="minAction(this)"></i>
					</span>
				</div>
				<div class="box-divider m-a-0"></div>
				<div class="box-body">
					<div id="rootTable">
						<!--div class="element" onclick="onFocused(this)">
							// disini nanti ada 2 hidden (1 = posisi, 2 = isi)
							<input type="hidden" class="pointer" value="root" />Judul
						</div-->
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-9" style="display:none">
			<div class="box">TES</div>
		</div>
	</div>
</div>

<!-- button modal -->
<button id="modal-popup" 
		class="btn white" 
		data-toggle="modal" 
		data-target="#m-a-a" 
		data-ui-toggle-class="flip-y" 
		data-ui-target="#animate" style="display:none">Open</button>

<div id="m-a-a" class="modal fade animate" data-backdrop="true" aria-hidden="true" style="display:none">
  <div class="modal-dialog" id="animate" data-ui-class="flip-y" style="width:15%">
    <div class="modal-content" style="width:100%">
      <div class="modal-header">
      	<h5 class="modal-title">Nama Isi</h5>
      </div>
      <div class="modal-body text-center" style="padding:10px">
        <input type="text" name="isi_text" style="width:100%" autofocus />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn dark-white p-x-md" onclick="modalBtn(this, 'no')">No</button>
        <button type="button" class="btn danger p-x-md" onclick="modalBtn(this, 'yes')">Yes</button>
      </div>
    </div>
  </div>
</div>

<script>
loadSideFormat();
function loadSideFormat() {
	$.ajax({
		url: '<?php base_url(); ?>files/loadformat',
		type: 'POST',
		data: 'filename='+filename,
		beforeSend: function() {
			$('#rootTable').html('Load format...');
		},
		success: function(data) {
			var datax = JSON.parse(data), content = '';
			if(datax.length === 0) {
				content += '<div class="element" onclick="onFocused(this)">'+
							'<input type="hidden" class="pointer" value="root" />'+datax[i].val+
							'<input type="hidden" class="namePointer" value="'+datax[i].val+'" />'+
							'</div>';
			}
			else {
				for(var i = 0; i < datax.length; i++) {
					console.log(datax[i]);
					if(datax[i].pointer === 'root') {
						content += '<div class="element" onclick="onFocused(this)">'+
									'<input type="hidden" class="pointer" value="root" />'+datax[i].val+
									'<input type="hidden" class="namePointer" value="Judul" />'+
									'</div>';
					}
					else {
						var varcount = '', csscount = 0;
						var sub = datax[i].pointer.match(/\d/g);
						if(sub === null) {
							csscount = 1 * 10;
							varcount = '<input type="hidden" class="pointer" value="subroot" />'+datax[i].val;
						}
						else {
							csscount = (parseInt(sub) + 1) * 10;
							varcount = '<input type="hidden" class="pointer" value="subroot'+(parseInt(sub))+'" />'+datax[i].val;
						}
						content += '<div>'+
									'<div onclick="onFocused(this)" style="margin-left:'+csscount+'px">'+
									varcount+
									'<input type="hidden" class="namePointer" value="'+datax[i].val+'" />'+
									'</div>'+
									'</div>';
					}
				}
			}
			$('#rootTable').html(content);
		}
	});
}
</script>