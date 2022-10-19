jQuery(document).ready(
  ($) => {
    $('.cat-list_item').on(
      'click',
      function () {
        $('.cat-list_item').removeClass('active');
        $(this).addClass('active');

        $.ajax(
          {
            type: 'POST',
            url: '/wp-admin/admin-ajax.php',
            dataType: 'html',
            data: {
              action: 'filter_projects',
              category: $(this).data('slug'),
            },
            success(res) {
              $('.newsPreview').html(res);
            },
          },
        );
      },
    );
  },
);

jQuery(document).ready(
  ($) => {
    $('.search-button').on(
      'click',
      () => {
        $.ajax(
          {
            type: 'POST',
            url: '/wp-admin/admin-ajax.php',
            dataType: 'html',
            data: {
              action: 'filter_projects_keyword',
              keyword: $('#searchbar').val(),
            },
            success(res) {
              $('.newsPreview').html(res);
            },
          },
        );
      },
    );
  },
);
