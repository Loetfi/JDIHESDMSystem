<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
#right-menus span:nth-child(2) {
	margin-left: 10px;
}
#right-menus span:nth-child(2) i {
	cursor: pointer;
}
#waiting {
	margin-left: 5px;
}
.focused {
	background: blue;
	color: #fff;
}
.arrow-right {
	float: right;
	line-height: 20px;
	position: absolute;
    right: 25px;
}
.fix-btn {
	padding: 5px 10px;
    position: fixed;
    bottom: 0;
    width: 100%;
}
</style>
<div class="padding">
	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-header light lt">
					<h3>Rancangan Undang-Undang</h3>
					<small>Membuat sebuah dokumen Undang-Undang</small>
				</div>
				<div class="padding">
					<fieldset> 
						<div class="form-group">
							<label for="">Nama Dokumen</label>
							<input type="text" class="form-control" name="nama_dokumen" placeholder="Masukan nama inisial dari dokumen yang akan dibuat" required="" data-toggle="tooltip" title="" data-original-title="Masukan nama inisial dari dokumen yang akan dibuat">
						</div> 
					</fieldset>
				</div>
			</div>
		</div>
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
						<i class="fa fa-pencil" title="Ubah" onclick="editAction()"></i>
						<i class="fa fa-plus-circle" title="Tambah" onclick="addAction()"></i>
						<i class="fa fa-minus-circle" title="Hapus" onclick="minAction(this)"></i>
					</span>
				</div>
				<div class="box-divider m-a-0"></div>
				<div class="box-body">
					<div id="rootTable"></div>
				</div>
			</div>
		</div>
		<div class="col-md-9" id="rightPage" style="display:none">
			<div class="box">
				<div id="right-menus" class="box-header">
					<span>
						<select id="opt-mform">
							<option value="">Pilih Model Form</option>
							<option value="mform1">Form Model 1</option>
							<option value="mform2">Form Model 2</option>
							<option value="mform3">Form Model 3</option>
						</select>
					</span>
					<span>
						<i class="fa fa-save" title="Simpan Lampiran" onclick="saveContentFormat()"></i>
					</span>
					<span id="waiting"></span>
				</div>
				<div class="box-divider m-a-0"></div>
				<div class="box-body">
					<div id="rootForm">Silahkan Pilih Model Form</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="fix-btn">
	<button type="submit" class="btn btn-primary btn-m" name="submit_btn">Submit</button>
	<button type="submit" class="btn btn-info btn-m" name="view_btn">Lihat Format</button>
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
        <input type="hidden" name="editflag" value="false" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn dark-white p-x-md" onclick="modalBtn(this, 'no')">No</button>
        <button type="button" class="btn danger p-x-md" onclick="modalBtn(this, 'yes')" id="btnYes">Yes</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
var filename = 'sideformat_undang2.json';
var contentname = 'contentformat_undang2.json';

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
							'<input type="hidden" class="pointer" value="root" />Judul'+
							'<input type="hidden" class="namePointer" value="Judul" />'+
							'<i class="fa fa-arrow-circle-right arrow-right" onclick="loadRightPage()"></i>'+
							'</div>';
			}
			else {
				for(var i = 0; i < datax.length; i++) {
					var typing = (datax[i].type === undefined) ? '' : datax[i].type;
					if(datax[i].pointer === 'root') {
						content += '<div class="element" onclick="onFocused(this)">'+
									'<input type="hidden" class="pointer" value="root" />'+datax[i].val+
									'<input type="hidden" class="namePointer" value="Judul" />'+
									'<i class="fa fa-arrow-circle-right arrow-right" onclick="loadRightPage(\''+typing+'\')"></i>'+
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
									'<i class="fa fa-arrow-circle-right arrow-right" onclick="loadRightPage(\''+typing+'\')"></i>'+
									'</div>'+
									'</div>';
					}
				}
			}
			$('#rootTable').html(content);
		}
	});
}

function onFocused(ele) {
	$('#rootTable div').removeClass('focused');
	$(ele).addClass('focused');
}
function loadRightPage(setPage='') {
	setTimeout(function() {
		var chval = $('.focused').children('.namePointer').val();
		$('#rightPage').css('display', 'block');
		$('#opt-mform').val(setPage).trigger('change');
		if(localStorage.getItem('saveformatcontent') !== null) {
			var localContent = JSON.parse(localStorage.getItem('saveformatcontent'));
			for(var i = 0; i < localContent.length; i++) {
				if(localContent[i].val === chval) {
					displayContent(localContent[i].mform, localContent[i].content);
				}
			}
		}
		else {
			$.ajax({
				url: '<?php base_url(); ?>files/loadContent',
				type: 'POST',
				data: 'filename='+contentname,
				beforeSend: function() {
					$('#waiting').html('loading...');
				},
				success: function(data) {
					$('#waiting').html('');
					var datax = JSON.parse(data);
					for(var i = 0; i < datax.length; i++) {
						if(datax[i].val === chval) {
							displayContent(datax[i].mform, datax[i].content);
						}
					}
				}
			});
		}
	}, 100);
}
function addAction() {
	var element_value = $('#rootTable').find('.focused').children('input.pointer').val();
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
	var element_value = $('#rootTable').find('.focused').children('input.pointer').val();
	if(element_value === undefined) {
		alert('Harap sorot elemen yang ingin dihapus');
	}
	else if(element_value === 'root') {
		alert('Judul tidak dapat dihapus');
	}
	else {
		$('.focused').parent().remove();
	}
}
function editAction() {
	var ele_value = $('#rootTable').find('.focused').children('input.namePointer').val();
	var element_value = $('#rootTable').find('.focused').children('input.pointer').val();
	if(element_value === undefined) {
		alert('Harap sorot elemen yang ingin diubah');
	}
	else if(element_value === 'root') {
		alert('Judul tidak dapat diubah');
	}
	else {
		$('input[name="isi_text"]').val(ele_value);
		$('input[name="editflag"]').val('true');
		$('#modal-popup').click();
	}
}
function saveFormat() {
	var conf = confirm("Anda Yakin?");
	var arr = new Array, arrStr = '';
	if(conf === true) {
		if(localStorage.getItem("saveformat") === null) {
			$(".pointer").each(function(num) {
				arr[num] = {pointer:$(this).val(), val:$(this).next().val()};
			});
			arrStr = JSON.stringify(arr);
		}
		else if(localStorage.getItem("saveformat") !== null) {
			var getLocal = JSON.parse(localStorage.getItem("saveformat"));
			$(".pointer").each(function(num) {
				var theType = (getLocal[num] === undefined) ? '' : getLocal[num].type;
				arr[num] = {pointer:$(this).val(), val:$(this).next().val(), type:theType};
			});
			arrStr = JSON.stringify(arr);
		}
		else {
			arrStr = localStorage.getItem("saveformat");
		}

		$.ajax({
			url: '<?php base_url(); ?>files/saveformat',
			type: 'POST',
			data: 'namafile='+filename+'&konten='+arrStr,
			beforeSend: function() {
				console.log('loading...');
			},
			success: function(data) {
				alert(data);
				location.reload();
			}
		});
	}
}
function saveContentFormat() {
	var right_opt = $('#opt-mform').val();
	var chval = $('.focused').children('.namePointer').val();
	var arrFormat = new Array, arrContent = new Array;
	if(right_opt === '') {
		alert('Harap pilih model form');
	}
	else {
		if(localStorage.getItem("saveformat") === null) {
			$(".pointer").each(function(num) {
				if(chval === $(this).next().val()) {
					arrFormat[num] = {pointer:$(this).val(), val:$(this).next().val(), type:right_opt};
					arrContent[num] = {val:$(this).next().val(), pointer:$(this).val(), mform:right_opt, content:getContent(chval, right_opt)};
				}
				else {
					arrFormat[num] = {pointer:$(this).val(), val:$(this).next().val(), type:''};
					arrContent[num] = {val:$(this).next().val(), pointer:$(this).val(), mform:'', content:''};
				}
			});
			localStorage.setItem("saveformat", JSON.stringify(arrFormat));
			localStorage.setItem("saveformatcontent", JSON.stringify(arrContent));
		}
		else {
			var jsonStr = JSON.parse(localStorage.getItem("saveformat"));
			var jsonStrContent = JSON.parse(localStorage.getItem("saveformatcontent"));
			if(jsonStrContent === null) {
				alert('Mohon buat hirarki isi dokumen');
			}
			else {
				for(var i = 0; i < jsonStr.length; i++) {
					if(chval === jsonStr[i].val) {
						/*arrFormat[i] = {pointer:jsonStr[i].pointer, val:jsonStr[i].val, type:right_opt};
						arrContent[i] = {val:jsonStrContent[i].val, pointer:jsonStrContent[i].pointer, mform:right_opt, content:getContent(chval, right_opt)};*/
						arrFormat[i] = {pointer:$(".focused").children()[0].value, val:$(".focused").children()[1].value, type:right_opt};
						arrContent[i] = {val:$(".focused").children()[1].value, pointer:$(".focused").children()[0].value, mform:right_opt, content:getContent(chval, right_opt)};
					}
					else {
						arrFormat[i] = {pointer:jsonStr[i].pointer, val:jsonStr[i].val, type:jsonStr[i].type};
						arrContent[i] = {val:jsonStrContent[i].val, pointer:jsonStrContent[i].pointer, mform:jsonStrContent[i].mform, content:jsonStrContent[i].content};
					}
				}
				
				localStorage.setItem("saveformat", JSON.stringify(arrFormat));
				localStorage.setItem("saveformatcontent", JSON.stringify(arrContent));
			}
		}

		$.ajax({
			url: '<?php base_url(); ?>files/saveformat',
			type: 'POST',
			data: 'namafile='+filename+'&konten='+JSON.stringify(arrFormat),
			beforeSend: function() {
				console.log('loading...');
			},
			success: function(data) {
				$.ajax({
					url: '<?php base_url(); ?>files/savefile',
					type: 'POST',
					data: 'namafile='+contentname+'&konten='+JSON.stringify(arrContent),
					beforeSend: function() {
						console.log('loading...');
					},
					success: function(data) {
						console.log(data);
						location.reload();
					}
				});
			}
		});
	}
}
function modalBtn(ele, val) {
	var getFocus = $('.focused').children().val();
	var editflag = $('input[name="editflag"]').val();
	var editForm = $('input[name="isi_text"]').val();
	if(editflag === 'true') {
		$('#rootTable').find('.focused').contents().filter(function() {
			return this.nodeType == Node.TEXT_NODE;
		}).text(function() {
			return $(this)[0].nodeValue = editForm;
		});
		$('#rootTable').find('.focused').children('input.namePointer').val(editForm);
	}
	else {
		if(val === 'yes') {
			var element_value = $('#rootTable').find('.focused').children('input.pointer').val();
			var opt = $('#opt-child').val(), isi = $('input[name="isi_text"]').val();
			var getStyle = $('.focused').attr('style');
			var newEle;
			if(element_value === 'root') {
				newEle = '<div>'+
						 '<div onclick="onFocused(this)" style="margin-left:10px">'+
						 '<input type="hidden" class="pointer" value="subroot" />'+isi+
						 '<input type="hidden" class="namePointer" value="'+isi+'" />'+
						 '<i class="fa fa-arrow-circle-right arrow-right" onclick="loadRightPage()"></i>'+
						 '</div>'+
						 '</div>';
				$(newEle).last().insertAfter('.focused');
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
							 '<i class="fa fa-arrow-circle-right arrow-right" onclick="loadRightPage()"></i>'+
							 '</div>'+
							 '</div>';
					var focusParent = $('.focused').parent();
					$(newEle).insertAfter(focusParent);
				}
				else if(opt === 'child') {
					var newisi = (isi.length > 12) ? isi.substring(0, 12)+'...' : isi;
					if((parseInt(getNum)+10) >= 110) {
						alert('Tidak dapat membuat turunan lagi!');
						return false;
					}
					else {
						newEle = '<div>'+
								 '<div onclick="onFocused(this)" style="margin-left:'+(parseInt(getNum)+10)+'px">'+
								 '<input type="hidden" class="pointer" value="subroot'+subNum+'" />'+newisi+
								 '<input type="hidden" class="namePointer" value="'+isi+'" />'+
								 '<i class="fa fa-arrow-circle-right arrow-right" onclick="loadRightPage()"></i>'+
								 '</div>'+
								 '</div>';
						var focusParent = $('.focused').parent();
						$(newEle).last().insertAfter(focusParent);
					}
				}
			}
		}
	}
	$('input[name="isi_text"]').val('');
	$('input[name="editflag"]').val('false');
	$(ele).attr("data-dismiss", "modal");
}
function getContent(pointer, mform) {
	switch(mform) {
		case 'mform1': 
			var textarea = $('textarea[name="textarea-mfrom1"]').val();
			return {pointer:'', page:'', level:'', content:textarea};
			break;
		case 'mform2':
			var textPointer = $('input[name="text-pointer"]').val();
			var selectPage = $('select[name="select-page"]').val();
			var selectLevel = $('select[name="select-level"]').val();
			var textarea = $('textarea[name="textarea-mform2"]').val();
			return {pointer:textPointer, page:selectPage, level:selectLevel, content:textarea};
			break;
		case 'mform3':
			var fbaku = $('textarea[name="textarea_baku"]').val();
			var textarea = $('textarea[name="textarea_mform3"]').val();
			return {pointer:'', page:'', level:'', content:fbaku+'&#13;'+textarea};
			break;
	} 
}
function displayContent(mform, content) {
	switch(mform) {
		case 'mform1':
			$('textarea[name="textarea-mfrom1"]').val(content.content);
			break;
		case 'mform2':
			$('input[name="text-pointer"]').val(content.pointer);
			$('select[name="select-page"]').val(content.page);
			$('select[name="select-level"]').val(content.level);
			$('textarea[name="textarea-mform2"]').val(content.content);
			break;
		case 'mform3':
			var split = (content.content).split('&#13;');
			$('textarea[name="textarea_baku"]').val(split[0]);
			$('textarea[name="textarea_mform3"]').val(split[1]);
			break;
	}
}
function mform1() {
	return '<textarea data-toggle="tooltip"'+
			'title="title" type="text" name="textarea-mfrom1"'+
			'class="form-control" placeholder="Isi" rows="6" id="form1" required></textarea>';
}
function mform2() {
	return '<div id="form2" style="display:inline-block; width:100%;">'+
			'<div style="float:left; width:20%">'+
			'<input type="text" name="text-pointer" class="form-control" placeholder="Pointer" data-toggle="tooltip" title="" />'+
			'<select name="select-page" class="form-control" style="cursor:pointer; margin-top:10px;" data-toggle="tooltip" title="title">'+
			'<option value="continue">Continues Page</option>'+
			'<option value="newP">Next Page Portrait</option><option value="newL">Next Page Landscape</option>'+
			'</select>'+
			'<select name="select-level" class="form-control" style="cursor:pointer; margin-top:10px;">'+
			'<option value="0">SubLevel 0</option>'+
			'<option value="1">SubLevel 1</option>'+
			'<option value="2">SubLevel 2</option>'+
			'<option value="3">SubLevel 3</option>'+
			'<option value="4">SubLevel 4</option>'+
			'</select>'+
			'</div>'+
			'<div style="width:100%">'+
			'<textarea data-toggle="tooltip" title="title" type="text" name="textarea-mform2" class="form-control" placeholder="Isi" rows="6" style="float:left; margin-left:5px; width:75%;" required></textarea>'+
			'</div>'+
			'</div>';
}
function mform3() {
	return '<div id="form3" style="display:inline-block; width:100%;">'+
			'<div>'+
			'<textarea data-toggle="tooltip" title="title" type="text" name="textarea_baku" class="form-control" placeholder="Format Baku" rows="3" required></textarea>'+
			'</div>'+
			'<div>'+
			'<textarea data-toggle="tooltip" title="title" type="text" name="textarea_mform3" class="form-control" placeholder="Isi" rows="6" required></textarea>'+
			'</div>'+
			'</div>';
}

$("#rootTable").sortable();
$("#rootTable").disableSelection();

$('#opt-mform').change(function() {
	if($(this).val() === '') {
		$('#rootForm').html('Silahkan Pilih Model Form');
	}
	if($(this).val() === 'mform1') {
		$('#rootForm').html(mform1());
	}
	else if($(this).val() === 'mform2') {
		$('#rootForm').html(mform2());
	}
	else if($(this).val() === 'mform3') {
		$('#rootForm').html(mform3());
	}
});

$('input[name="isi_text"]').keyup(function(e) {
    if(e.keyCode === 13) {
        $('#btnYes').click();
    }
});
	
$('button[name="submit_btn"]').click(function() {
	var doc_name = $('input[name="nama_dokumen"]').val();
	if(doc_name === '') {
		alert('Nama Dokumen Kosong!');
	}
	else {
		//window.open("<?php echo site_url('index.php/undang2/save_doc_new?doc_name='); ?>"+doc_name);
		$.ajax({
			url: '<?php echo site_url('index.php/undang2/save_doc_new'); ?>',
			data: 'doc_name='+doc_name,
			type: 'GET',
			beforeSend: function() {
				console.log('Loading...');
			},
			success: function(data) {
				data = JSON.parse(data);
				alert(data.status);
			},
			error: function(e) {
				console.log(e);
			}
		});
	}
});

$('button[name="view_btn"]').click(function() {
	window.open("<?php echo site_url('index.php/undang2/view_doc_new'); ?>");
});
</script>