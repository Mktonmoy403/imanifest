;(function($) {
     var ajaxURL = imenifest_ajax_objects.ajaxurl;
     $(document).ready(function($) {
          var page = 1;
          var loading = false;
          var finished = false;

          function loadJournalPosts() {
               if (!loading && !finished) {
                   loading = true;
       
                   $.ajax({
                         url: ajaxURL,
                         data: {
                              action: 'imenifest_load_journals',
                              page: page,
                         },
                         success: function(response) {
                              if (response.success) {
                                   if (response.data.length > 0) {
                                        $('.journals-collection-wrapper').append(response.data);
                                        page++;
                                   } else {
                                        finished = true;
                                        $('.journals-collection-wrapper').append('<p>' + ajaxpagination.noposts + '</p>');
                                   }
                                   console.log(response);
                              } else {
                                   finished = true;
                                   console.log(response);
                              }
       
                              loading = false;
                         },
                         error: function(jqXHR, textStatus, errorThrown) {
                              finished = true;
                              console.log(errorThrown);
                              loading = false;
                         }
                   });
               }
          }

          // initialize loadJournalPosts()
          loadJournalPosts();

     });
})(jQuery);