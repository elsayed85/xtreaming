<div class="modal-content">
    <div class="modal-body">
        <form method="post">
            <div class="form-group">
                <label class="custom-label">Report</label>
                <select name="report_id" class="custom-select" required="true">
                    <option value="">Report</option>
                    <option value="1"> The video is not opening </option>
                    <option value="2"> Subtitle has character issues </option>
                    <option value="3"> Other </option>
                </select>
            </div>
            <div class="form-group">
                <label class="custom-label">Description</label>
                <textarea name="body" class="form-control" placeholder="Could you please give some detail about the problem ?"></textarea>
            </div>
            <button type="submit" class="btn btn-theme btn-block">Submit</button>
        </form>
    </div>
</div>
<script type="text/javascript">
    $(".modal form").submit(function() {
        $.ajax({
            url: "{{ route('movie.report', $movie) }}",
            type: 'POST',
            dataType: 'json',
            data: $(this).serialize(),
            success: function(resp) {
                Snackbar.show({
                    text: resp.text,
                    customClass: 'bg-' + resp.status
                });
                $('.modal').modal('hide');
            }
        });
        return false;
    });
</script>
