<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>@yield("title")</title>
<meta name="description" content="CodeOntology is an ontology and tool to generate datasets from Java repositories.">
<meta name="keywords" content="Java CodeOntology analyser semantic web">
<meta name="author" content="Mattia Setzu">

@yield("css")

@yield("js")
<link rel="icon" href="/favicon.ico" />
</head>
<body>
    @yield("header")

    @yield("content")

    @yield("footer")
</body>
</html>
