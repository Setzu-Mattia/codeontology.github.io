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
<h2>CodeOntology</h2>

<blockquote>
    <p>CodeOntology reaches the gap between source code and semantic web.<br/>
    Developed at <a href="http://corsi.unica.it/informatica">Math/CS department</a> at <a href="https://unica.it">UniCA</a>,
    it parses and analyses Java source code, generating rdf-compliant datasets over source code.</p>
    <small>Abstract, <cite title="CodeOntology">CodeOntology</cite></small>
</blockquote>

<section class="workflow">
    <h3>Workflow</h3>
    <p>CodeOntology analyses Java repositories, provided they are syntatically and semantically correct.
    We support native Gradle and Maven build tools, and other build tools, provided valid classpaths are provided.</p>

    <figure>
    <img alt="CodeOntology workflow" src="{{ $config["url"] }}/images/workflow.svg" />
    <br/>
    <figcaption>CodeOntology workflow</figcaption>
    </figure>

    <p>The tool generates rdf-compliant datasets in a N-TRIPLE format.</p>
</section>

<section class="datasets">
    <h3>Datasets</h3>
    <p>We have analysed 700+ repositories on Github, for a total of 15+ million LLOC.
    Our dataset compromise more than 17 million triples.
    Find out more of our ontology, or dive in the query interface.</p>

    <a href="{{ $config["url"] }}/docs" class="btn btn-primary">Documentation</a>
    <a href="{{ $config["url"] }}/query" class="btn btn-primary">Query</a>
</section>
</div>
@stop

@section("footer")
    @include("footer")
@endsection
