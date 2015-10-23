@extends('library::template')

@section('wrap')
    <div class="jumbotron" id="introjumbo">
        <div class="container">
            <h1>{{ trans('library::common.name') }}</h1>
        </div>
    </div>
    <div class="container">
        <div class="embed-responsive embed-responsive-4by3" style="padding-bottom: 350px;">
            <iframe class="embed-responsive-item" src="http://library.pyc.edu.hk/WebOPAC.exe" style="max-height: 500px;">OPAC</iframe>
        </div>


        <div class="row">
            <div class="col-sm-4">
                <a href="http://www.pyc.edu.hk/~chin/reader/index.html" target="_blank">
                    <img src='{{ url('/images/library/chin.jpg') }}' class="img-rounded link" alt="小讀者園地">
                </a>
            </div>

            <div class="col-sm-4">
                <a href="https://school.pyc.edu.hk" target="_blank">
                    <img src="{{ url('/images/pycnet.jpg') }}" class="img-rounded link" alt="PYCnet">
                </a>
            </div>

            <div class="col-sm-3">
                <a href="https://ststpyc.wisenews.net/" target="_blank">
                    <img src="{{ url('/images/library/wisenews.jpg') }}" class="img-rounded link" alt="WiseNews">
                </a>
            </div>
        </div>
    </div>

    <div class="container">
    </div>
@stop