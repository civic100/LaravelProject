

<html>
<head>

    <title>Drag & Drop File Uploading using Laravel 9 Dropzone JS - Tutsmake.com</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
</head>
<body>

<div class="container mt-2">
    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('dropzone.store') }}" method="post" enctype="multipart/form-data" id="image-upload" class="dropzone">
                @csrf
                <input type="hidden" name="id" value="{{$id}}">
                <div>
                    <h3>Upload Multiple Image By Click On Box</h3>
                </div>
            </form>

        </div>
    </div>
</div>

<script type="text/javascript">
    Dropzone.options.imageUpload = {
        maxFilesize         :       1,
        acceptedFiles: ".jpeg,.jpg,.png,.gif"
    };
</script>

</body>
</html>
