@extends('layouts.app')

@section('title')SPYC Library | Project WHJSLS @stop

@section('stylesheet')
    @parent
    <link href="{{ url('/css/library/style.css') }}" rel="stylesheet" type="text/css">
@stop

@section('navbar')
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('library.home') }}">Library</a>
            </div>

            <div class="collapse navbar-collapse">

                <ul class="nav navbar-nav">
                    <li><a href="http://library.pyc.edu.hk/WebOPAC.exe">OPAC</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            About Us <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="{{ route('library.about.aim') }}">Aim of Library</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('library.news.index') }}">News</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true">
                            {{ trans('navbar.lang') }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="?locale=en">{{ trans('navbar.en') }}</a></li>
                            <li><a href="?locale=zh">{{ trans('navbar.zh') }}</a></li>
                        </ul>
                    </li>
                    @if(Auth::check())
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('auth.logout') }}">
                                        <i class="fa fa-fw fa-sign-out"></i>
                                        {{ trans('navbar.logout') }}
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li>
                            <a href="{{ route('auth.login') }}">
                                <i class="fa fa-sign-in fa-fw"></i>
                                {{ trans('navbar.login') }}
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
@stop
