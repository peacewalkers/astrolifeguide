<script>
    $(function() {
        var cardTitle = $('#card_title');
        var usersTable = $('#horoscopes_table');
        var resultsContainer = $('#search_results');
        var usersCount = $('#user_count');
        var clearSearchTrigger = $('.clear-search');
        var searchform = $('#search_matchmakers');
        var searchformInput = $('#matchmaker_search_box');
        var userPagination = $('#user_pagination');
        var searchSubmit = $('#search_trigger');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        searchform.submit(function(e) {
            e.preventDefault();
            resultsContainer.html('');
            usersTable.hide();
            clearSearchTrigger.show();
            let noResulsHtml = '<tr>' +
                '<td><?php echo trans("usersmanagement.search.no-results"); ?></td>' +
                '<td></td>' +
                '<td class="hidden-xs"></td>' +
                '<td class="hidden-xs"></td>' +
                '<td class="hidden-xs"></td>' +
                '<td class="hidden-sm hidden-xs"></td>' +
                '<td class="hidden-sm hidden-xs hidden-md"></td>' +
                '<td class="hidden-sm hidden-xs hidden-md"></td>' +
                '<td></td>' +
                '<td></td>' +
                '<td></td>' +
                '</tr>';

            $.ajax({
                type:'POST',
                url: "<?php echo e(route('search-matchmakers')); ?>",
                data: searchform.serialize(),
                success: function (result) {
                    let jsonData = JSON.parse(result);
                    if (jsonData.length != 0) {
                        $.each(jsonData, function(index, val) {
                            let rolesHtml = '';
                            let roleClass = '';
                            let showCellHtml = '<a class="btn btn-sm btn-success btn-block" href="users/' + val.id + '" data-toggle="tooltip" title="<?php echo e(trans("usersmanagement.tooltips.show")); ?>"><?php echo trans("usersmanagement.buttons.show"); ?></a>';

                            resultsContainer.append('<tr>' +
                                '<td>' + val.id + '</td>' +
                                '<td>' + val.name + '</td>' +
                                '<td class="hidden-xs">' + val.email + '</td>' +
                                '<td class="hidden-xs">' + val.phone + '</td>' +
                                '<td>' + showCellHtml + '</td>' +
                                '</tr>');
                        });
                    } else {
                        resultsContainer.append(noResulsHtml);
                    };
                    usersCount.html(jsonData.length + " <?php echo trans('usersmanagement.search.found-footer'); ?>");
                    userPagination.hide();
                    cardTitle.html("<?php echo trans('usersmanagement.search.title'); ?>");
                },
                error: function (response, status, error) {
                    if (response.status === 422) {
                        resultsContainer.append(noResulsHtml);
                        usersCount.html(0 + " <?php echo trans('usersmanagement.search.found-footer'); ?>");
                        userPagination.hide();
                        cardTitle.html("<?php echo trans('usersmanagement.search.title'); ?>");
                    };
                },
            });
        });
        searchSubmit.click(function(event) {
            event.preventDefault();
            searchform.submit();
        });
        searchformInput.keyup(function(event) {
            if ($('#matchmaker_search_box').val() != '') {
                clearSearchTrigger.show();
            } else {
                clearSearchTrigger.hide();
                resultsContainer.html('');
                usersTable.show();
                cardTitle.html("<?php echo trans('usersmanagement.showing-all-users'); ?>");
                userPagination.show();
                usersCount.html(" ");
            };
        });
        clearSearchTrigger.click(function(e) {
            e.preventDefault();
            clearSearchTrigger.hide();
            usersTable.show();
            resultsContainer.html('');
            searchformInput.val('');
            cardTitle.html("<?php echo trans('usersmanagement.showing-all-users'); ?>");
            userPagination.show();
            usersCount.html(" ");
        });
    });
</script>
<?php /**PATH C:\laragon\www\astrolife\resources\views/scripts/search-matchmakers.blade.php ENDPATH**/ ?>