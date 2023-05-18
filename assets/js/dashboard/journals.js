;(function($) {
    var ajaxURL = imenifest_ajax_objects.ajaxurl;
    $(document).ready(function($) {
        var page = 1;
        var loading = false;
        var finished = false;

        function loadJournalPosts() {
            if (!loading && !finished) {
                loading = true;
                $('.loading-container').show();
                $.ajax({
                    url: ajaxURL,
                    method: 'POST', // Use POST method to send data
                    data: {
                        action: 'imenifest_load_journals',
                        page: page,
                    },
                    success: function(response) {
                        if (response.success) {
                            if (response.data.data.length > 0) {
                                $('#alljournals').append(response.data.data);
                                page++;
                            } else {
                                finished = true;
                                $('#alljournals').append('<p>No journals found</p>');
                            }
                        } else {
                            finished = true;
                        }

                        loading = false;
                        $('.loading-container').hide();
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        finished = true;
                        console.log(errorThrown);
                        loading = false;
                        $('.loading-container').hide();
                    }
                });
            }
        }

        function loadMyJournals() {
            if (!loading && !finished) {
                loading = true;
                $('.loading-container').show();
                $.ajax({
                    url: ajaxURL,
                    method: 'POST', // Use POST method to send data
                    data: {
                        action: 'imenifest_load_my_journals',
                        page: page,
                    },
                    success: function(response) {
                        if (response.success) {
                            if (response.data.data.length > 0) {
                                $('#alljournals').append(response.data.data);
                                page++;
                            } else {
                                finished = true;
                                $('#alljournals').append('<p>No journals found</p>');
                            }
                        } else {
                            finished = true;
                        }
                        console.log(response.data)
                        loading = false;
                        $('.loading-container').hide();
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        finished = true;
                        console.log(errorThrown);
                        loading = false;
                        $('.loading-container').hide();
                    }
                });
            }
        }
        
        $(document).on('click', '#myjournals-btn', function(e) {
            e.preventDefault();
            page = 1;
            $('#alljournals').empty();
            loadMyJournals();
        });

        // initialize loadJournalPosts()
        loadJournalPosts();

        // Pagination
        $(document).on('click', '.alljournal-pagination .page-link', function(e) {
            e.preventDefault();
            var newPage = parseInt($(this).data('page'));
            page = newPage;
            $('#alljournals').empty();
            finished = false;
            loadJournalPosts();
        });
        // My Journal Pagination
        $(document).on('click', '.myjournal-pagination .page-link', function(e) {
            e.preventDefault();
            var newPage = parseInt($(this).data('page'));
            page = newPage;
            $('#alljournals').empty();
            finished = false;
            $('.journal-btn li:first-child').removeClass('active');
            $('.journal-btn li:last-child').addClass('active');
            loadMyJournals();
        });

        // All Journals link
        $(document).on('click', '#alljournals-btn', function(e) {
            e.preventDefault();
            page = 1;
            $('#alljournals').empty();
            loadJournalPosts();
            $('.journal-btn li:first-child').addClass('active');
            $('.journal-btn li:last-child').removeClass('active');
        });

        $(document).on('click', '.journal-write-btn', function(e) {
            e.preventDefault();
            $('.all-journals-wrapper').hide(200);
            $('.insert-journal-wrapper').show(200);
        });

    });
})(jQuery);
