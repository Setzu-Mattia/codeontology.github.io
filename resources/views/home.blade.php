@extends("body")

@section("title", "Codeontology")

@section("css")
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ $config["url"] }}/css/bootstrap.min.css">

    <!-- Container -->
    <link rel="stylesheet" href="{{ $config["url"] }}/css/codeontology.css">

@stop

@section("js")
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>

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
<h2>CodeOntology</h2>

<blockquote>
    <p>CodeOntology reaches the gap between source code and semantic web.<br/>
    Developed at <a href="http://corsi.unica.it/informatica">Math/CS department at <a href="https://unica.it"</a>UniCA,
    it parses and analyses Java source code, generating rdf-compliant datasets over source code.</p>
    <small>Abstract, <cite title="CodeOntology">CodeOntology</cite></small>
</blockquote>

<p></p>
</div>
@stop

@section("footer")
    @include("footer")
@endsection
