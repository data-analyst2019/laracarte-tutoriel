@extends('layouts.default', ['title' => 'About'])

@section('content')
<div class="container">
    <h2>What is {{config('app.name')}}?</h2>
    <p>{{config('app.name')}} is a clone app of
        &dash; <a href="https://laramap.com" target="_blank">Laramap.com</a>
    </p>
    <div class="row">
        <div class="col-md-6">
            <p class="alert alert-warning">
                <strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> This App has been built by <a href="https://twitter.com/etsmo">@etsmo</a> for learning purposes.</strong>
            </p>
        </div>
    </div>

    <p>Fell free to help to improve the <a href="https://github.com/data-analyst2019/laracarte-tutoriel">source code</a>.</p>
    <hr>

    <h2>What is Laramap?</h2>
    <p>Laramap is the website by which {{config('app.name')}} was inspired :)</p>
    <p>
        More info <a href="https://laramap.com.p.about">here</a>
    </p>

    <hr>

    <h2>Which tools and services are used in {{config('app.name')}}?</h2>
    <p>
       Basically it's built in Laravel &amp; Bootstrap. But there's a bunch of services and used for email and other sections.
    </p>

    <ul>
        <li>Larabel</li>
        <li>Bootstrap</li>
        <li>Amazon S3</li>
        <li>Mandrill</li>
        <li>Google Map</li>
        <li>Gravatar</li>
        <li>Antony Martin's Geolocation package</li>
        <li>Michael Fortin's Markdown Parser Package</li>
        <li>Heroku</li>
    </ul>
</div>
@endsection
