@extends('library::template')

@section('wrap')
    <div class="container" style="padding-top: 0;">
        <div class="jumbotron text-center" id="introjumbo">
            <h1>SPYC Library</h1>
            <hr />
            <p>2/F, New Wing,<br />Shatin Pui Ying College</p>
        </div>
    </div>
    <div class="dark-sections">
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <h2>OPAC</h2>
                    <iframe src="http://library.pyc.edu.hk/WebOPAC.exe" width="600px" height="400px">OPAC</iframe>
                </div>
                <div class="col-sm-3">
                    <a href="http://www.pyc.edu.hk/~chin/reader/index.html" target="_blank">
                        <img src='{{ url('/images/library/chin.jpg') }}' class="img-rounded link" alt="小讀者園地">
                    </a>
                    <br>
                    <a href="https://school.pyc.edu.hk" target="_blank">
                        <img src="{{ url('/images/pycnet.jpg') }}" class="img-rounded link" alt="PYCnet">
                    </a>
                    <br>
                    <a href="https://ststpyc.wisenews.net/" target="_blank">
                        <img src="{{ url('/images/library/wisenews.jpg') }}" class="img-rounded link" alt="WiseNews">
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop