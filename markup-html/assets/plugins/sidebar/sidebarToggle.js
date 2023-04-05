$(document).ready(function () {

	$(".sidebar-btn").click(function () {
		$(".dash-main-left").toggleClass('hideSidebar');
		$(".dash-main-left").toggleClass('showSidebar');
		$(".dash-main-right").toggleClass('full-width');
		$(".dash-main-left").toggleClass('dash-main-left-inner');
		$(".sidebar").toggleClass('sidebar-show');
		if ($(".dash-main-left-inner").hasClass('show-left-inner')) {
			$(".dash-main-left-inner").removeClass('show-left-inner');
			$(".dash-main-left-inner").addClass('hide-left-inner');
			$("#sidebar").removeClass('hide-left-inner');
			$(".dash-main-left").removeClass('hideSidebar');
		} else {
			$(".dash-main-left-inner").addClass('show-left-inner');
			$(".dash-main-left-inner").removeClass('hide-left-inner');
		}
	});

	$(".sidebar_show_btn").click(function () {
		$(".dash-main-left").toggleClass('hideSidebar');
		$(".dash-main-right ").toggleClass('full-width');
		if ($(".dash-main-left-inner").hasClass('hide-left-inner')) {
			// $(".dash-main-left-inner").removeClass('show-left-inner');
			// $(".dash-main-left-inner").removeClass('toggle-hide-left-inner');
			// $(".dash-main-left").removeClass('hideSidebar');
		} else {
			$(".dash-main-left-inner").removeClass('hide-left-inner');
			$(".dash-main-left-inner").addClass('toggle-left-inner');
			// .dash-main-left-inner.toggle-hide-left-inner
		}

	});

});