<script src="{{ URL::asset('assets/js/jquery-3.7.1.min.js') }}"></script>
{{-- <script src="{{ URL::asset('assets/bootstrap-5.3.2-dist/js/bootstrap.min.js') }}"></script> --}}


<div class="card">
    <div class="card-body">
        <form method="POST" action="{{ URL('save-form-transaction') }}">
            @csrf
            <input type="number" id="form_id" name="form_id" hidden />
            <div id="fb-reader"></div>
            <input type="submit" value="Save" class="btn btn-success" />
        </form>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
<script src="{{ URL::asset('assets/form-builder/form-render.min.js') }}"></script>
<script>
    $(function() {
        $.ajax({
            type: 'get',
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            },
            url: '{{ URL('get-form-builder') }}',
            data: {
                'id': {{ $id }}
            },
            success: function(data) {
                $("#form_id").val(data.id);
                $('#fb-reader').formRender({
                    formData: data.content
                });
            }
        });
    });
</script>
