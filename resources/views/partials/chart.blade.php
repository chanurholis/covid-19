<div id="colorlib-blog">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
                <h2>Sebaran Corona di Indonesia</h2>
                <p>Berikut adalah penyebaran COVID-19 di berbagai provinsi.</p>
            </div>
        </div>
        <div class="row">
            {!! $chart->container() !!}
    
            {!! $chart->script() !!}
        </div>
    </div>
</div>