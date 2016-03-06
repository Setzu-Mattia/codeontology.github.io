@extends("body")

@section("title", "Codeontology Documentation")

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

    <!-- Documentation -->
    <script src="{{ $config["url"] }}/js/docs.js"></script>
@stop

@section("header")
    @include("header")
@endsection

@section("content")
<div id="content" class="container">
<h2>CodeOntology Docs</h2>

<section class="entities">
    <h3>Entities</h3>
    <p>CodeOntology maps the 1.8 specification of the Java language. Select one of the following items to find out its URI
    structure, data properties, and more.</p>

    <div class="btn-group btn-group-justified first">
    <a class="package btn btn-default">Package</a>
    </div>
    <div class="btn-group btn-group-justified middle">
    <a class="class btn btn-default">Class</a>
    <a class="interface btn btn-default">Interface</a>
    </div>
    <div class="btn-group btn-group-justified middle">
    <a class="method btn btn-default">Method</a>
    <a class="field btn btn-default">Field</a>
    </div>
    <div class="btn-group btn-group-justified middle">
    <a class="var btn btn-default">Local Variable</a>
    <a class="lambda btn btn-default">Lambda</a>
    </div>
    <div class="btn-group btn-group-justified last">
    <a class="parameter btn btn-default">Parameter</a>
    </div>

    <br/>

    <div class="docs">
        <div id="package" class="panel panel-primary">
        <div class="panel-heading">
        <h3 class="panel-title">Package documentation</h3>
        </div>
        <div class="panel-body">
        Panel content
        </div>
        </div>

        <div id="class" class="panel panel-primary">
        <div class="panel-heading">
        <h3 class="panel-title">Class documentation</h3>
        </div>
        <div class="panel-body">
        Panel content
        </div>
        </div>

        <div id="interface" class="panel panel-primary">
        <div class="panel-heading">
        <h3 class="panel-title">Package documentation</h3>
        </div>
        <div class="panel-body">
        Panel content
        </div>
        </div>

        <div id="method" class="panel panel-primary">
        <div class="panel-heading">
        <h3 class="panel-title">Class documentation</h3>
        </div>
        <div class="panel-body">
        Panel content
        </div>
        </div>

        <div id="field" class="panel panel-primary">
        <div class="panel-heading">
        <h3 class="panel-title">Class documentation</h3>
        </div>
        <div class="panel-body">
        Panel content
        </div>
        </div>

        <div id="var" class="panel panel-primary">
        <div class="panel-heading">
        <h3 class="panel-title">Package documentation</h3>
        </div>
        <div class="panel-body">
        Panel content
        </div>
        </div>

        <div id="lambda" class="panel panel-primary">
        <div class="panel-heading">
        <h3 class="panel-title">Class documentation</h3>
        </div>
        <div class="panel-body">
        Panel content
        </div>
        </div>

        <div id="parameter" class="panel panel-primary">
        <div class="panel-heading">
        <h3 class="panel-title">Package documentation</h3>
        </div>
        <div class="panel-body">
        Panel content
        </div>
        </div>
    </div>

</section>
@stop

@section("footer")
    @include("footer")
@endsection
