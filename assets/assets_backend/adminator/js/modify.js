// start -- event handler if specify element not exists
(function ($, window) {
	var intervals = {};
	var removeListener = function(selector) {

		if (intervals[selector]) {

			window.clearInterval(intervals[selector]);
			intervals[selector] = null;
		}
	};
	var found = 'waitUntilExists.found';

	/**
	 * @function
	 * @property {object} jQuery plugin which runs handler function once specified
	 *           element is inserted into the DOM
	 * @param {function|string} handler 
	 *            A function to execute at the time when the element is inserted or 
	 *            string "remove" to remove the listener from the given selector
	 * @param {bool} shouldRunHandlerOnce 
	 *            Optional: if true, handler is unbound after its first invocation
	 * @example jQuery(selector).waitUntilExists(function);
	 */

	$.fn.waitUntilExists = function(handler, shouldRunHandlerOnce, isChild) {
		var selector = this.selector;
		var $this = $(selector);
		var $elements = $this.not(function() { return $(this).data(found); });
		if(handler === 'remove') {
			// Hijack and remove interval immediately if the code requests
			removeListener(selector);
		}
		else {
			// Run the handler on all found elements and mark as found
			$elements.each(handler).data(found, true);
			if(shouldRunHandlerOnce && $this.length) {
				// Element was found, implying the handler already ran for all 
				// matched elements
				removeListener(selector);
			}
			else if(!isChild) {
				// If this is a recurring search or if the target has not yet been 
				// found, create an interval to continue searching for the target
				intervals[selector] = window.setInterval(function () {

					$this.waitUntilExists(handler, shouldRunHandlerOnce, true);
				}, 500);
			}
		}
		return $this;
	};
}(jQuery, window));
// end -- event handler if specify element not exists

$('a[data-name="link-apps"]').waitUntilExists(function() {
	$('a').click(function() {
		if($(this).attr('data-name') !== undefined) {
			var des_site = $(this).attr('data-url');
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
						message: 'Halaman Template Tidak Ada',
						type: 'warning'
					});
				}
			});
		}
	});
});

function sidemenu_click(ele) {
	if(ele.children[0].attributes[2] !== undefined) {
		var des_site = ele.children[0].attributes[2].value;
		$.ajax({
			url: site_url+'/'+des_site,
			beforeSend: function(xhr) {
				var is_collapsed = $('body').hasClass('is-collapsed');console.log(is_collapsed);
				var spinner_position = (is_collapsed === true) ? '58%' : '50%';
				$('#contentHTML').replaceWith('<div id="contentHTML" class="spinner" style="left:'+spinner_position+'"></div>');
			},
			success: function(data) {
				var span = '<span id="contentHTML">'+data+'</span>';
				$('#contentHTML').replaceWith(span);
			},
			error: function(e) {
				bootoast.toast({
					message: 'Halaman Template Tidak Ada',
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

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}