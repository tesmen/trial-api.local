$(document).ready(function () {
    $('.dropdown-menu').on('click', '.unclickable-dropdown-item', function (e) {
        e.preventDefault();
        e.stopPropagation();

        console.log(menuId);


    });

    $('.dropdown-menu .unclickable-dropdown-item').hover(
        function () {
            var menuId = $(this).data('label-for');

            $(this).parent().find('#' + menuId).removeClass('display-none');
        },
        function () {
            var menuId = $(this).data('label-for');

            $(this).parent().find('#' + menuId).addClass('display-none');
        }
    );
});