class MainJs {
    /*
     * Search Functionality
    */
    static Search() {
        $(document).on('input', '#page-header-search-input', function() {
            let query = $(this).val();
            let url = $(this).data('action');

            if (query.length > 2) {
                $.ajax({
                    url: url,
                    method: 'GET',
                    data: { query: query },
                    success: function(data) {
                        let $suggestions = $('#suggestions');
                        $suggestions.empty(); // Clear previous results

                        // Populate suggestions
                        if (data.length > 0) {
                            data.forEach(function(item) {
                                $suggestions.append(`
                                    <li class="list-group-item">
                                        <a href="${item.link}">
                                            ${item.name}
                                        </a>
                                    </li>
                                `);
                            });
                        }

                        // Show dropdown if we have results
                        $('#search-results').show();
                    }
                });
            } else {
                $('#search-results').hide();
            }
        });
    }
    /*
     * Init functionality for confirmation dialogs
     */
    static init() {
        this.Search();
    }
}

// Initialize when the page loads
Dashmix.onLoad(() => MainJs.init());
