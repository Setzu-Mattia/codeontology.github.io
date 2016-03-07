@extends("body")

@section("title", "Codeontology Query")

@section("css")
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ $config["url"] }}/css/bootstrap.min.css">

    <!-- Container -->
    <link rel="stylesheet" href="{{ $config["url"] }}/css/codeontology.css">

@stop

@section("js")
    <!-- jQuery -->
    <script src="{{ $config["url"] }}/js/jquery-1.10.2.min.js"></script>

    <!-- Bootstrap -->
    <script src="{{ $config["url"] }}/js/bootstrap.min.js"></script>

    <!-- Custom -->
    <script src="{{ $config["url"] }}/js/custom.js"></script>
@stop

@section("header")
    @include("header")
@endsection

@section("content")
<div id="content" class="container">
<h2>CodeOntology query</h2>

<p>Run a query in this box. Check the <a href="{{ $config["url"] }}/docs">documentation</a> for more information.</p>

<div class="form-group">
<input class="form-control" id="focusedInput" type="text" value="SELECT * LIMIT 10">
</div>

<div class="results">
</div>

</div>
@stop

@section("footer")
    @include("footer")
@endsection
