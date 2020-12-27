@extends('layouts.app')

@section('pagetitle')
    About
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">What will the website be for?</div>

                <div class="card-body">
                    <p >This website when finished will be a gathering ground for Warhammer enthusiasts.*
                        <br/>
                        <br/> 
                        *Intended for learning & educational purpose only, will not be open to the public at any date.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div style="padding-top: 10%;">
        <p style="font-size: 20px; text-decoration: underline; font-weight: bold;">
            Used sources: learning
        </p>
        <ul style="list-style-type:circle">
            <li><a href="https://www.techomoro.com/install-and-setup-laravel-on-windows-using-xampp/">Install & setup by Syamlal CM</a></li>
            <li><a href="https://laracasts.com/series/laravel-6-from-scratch/">Laravel From Scratch by Jeffrey Way</a></li>
            <li><a href="https://www.erasmushogeschool.be/">Modules & slides by Kevin Felix, Erasmushogeschool Brussel</a></li>           
        </ul>
        <br/>
        <p style="font-size: 20px; text-decoration: underline; font-weight: bold;">
            Used sources: Third Party Material
        </p>
        <p style="font-weight: bold;">
            Icons & pictures
        </p>
        <ul style="list-style-type:circle">
            <li>
                <a href="https://www.flaticon.com/free-icon/mountain-formation_2151?term=cave&page=1&position=9&related_item_id=2151">Icon by </a>
                <a href="https://www.freepik.com/">Freepik</a>
            </li>         
        </ul>
    </div>
</div>
@endsection


